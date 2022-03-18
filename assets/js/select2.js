import 'select2/dist/css/select2.min.css';
import 'select2'; // select2
import 'select2/dist/js/i18n/fr'; // select2


window.setupAutocomplete = function (el, type, route) {
    return $(el).select2({
        placeholder: 'Chercher',
        ajax: {
            url: route,
            dataType: 'json',
            delay: 250,
        },
        minimumInputLength: 2,
        language: 'fr',
    })
}
