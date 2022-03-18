import '../scss/dataTables-custom.scss';

import 'datatables.net'; // main source
import 'datatables.net-select'; // select plugin
import '../../vendor/omines/datatables-bundle/src/Resources/public/js/datatables.js'; // connector with Symfony

window.DataTable = function (el, config, noselect) {
    let promise = new Promise((resolve) => {
        let _initDataTables = function () {
            if (!noselect) {
                return $(el).initDataTables(config, {
                    searching: true,
                    columnDefs: [{
                        orderable: false,
                        className: 'select-checkbox',
                        targets: 0
                    }],
                    select: {
                        info: false, // do not show the number of selected rows
                        style: 'multi',
                        selector: 'td:first-child'
                    },
                });
            } else {
                return $(el).initDataTables(config, {
                    searching: true,
                });
            }
        }

        setTimeout(function () {
            window.location.hash = ''; // resets the previous parameters for the datatable
            _initDataTables().then(function (dt) {
                resolve(dt);
                let rateLimiter = false;
                $(".searchbox > input").on('input', function () {
                    let search = this.value;
                    clearTimeout(rateLimiter);
                    rateLimiter = setTimeout(function () {
                        dt.search(search).draw();
                    }, 200);
                });

                $('th.select-checkbox').on('click', function () {
                    var count = dt.rows({ selected: true }).count();
                    $(this).parent().toggleClass("selected", !count);
                    if (!count) dt.rows().select({ page: 'current' });
                    else dt.rows().deselect();
                })
            })
        }, 0); // Set higher value (1000) during dev so that the XHR is visible in SF toolbar
    })

    return {
        dt: function () {
            return promise;
        },
        action: function (action, url) {
            let data = dt.rows({ selected: true }).data();
            if (!data.length) {
                alert("Veuillez sélectionner des éléments avant d'appliquer une action !");
            } else if (confirm(`Etes-vous sûr de vouloir ${action} ces ${data.length} lignes ?`)) {
                let ids = Array.from(data.map(row => row._id).map(n => $(n).first().attr('data-id'))); // Bundle does not return an id when used with Mongo
                if (!ids || !ids.length) console.log("ids empty", ids);
                else $.ajax(url, {
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        ids: ids
                    },
                    success: function () {
                        dt.ajax.reload();
                    }
                })
            }
        }
    };
}