import '../js/dataTables.js';

import 'select2/dist/css/select2.min.css';
import 'select2'; // select2
import 'select2/dist/js/i18n/fr'; // select2
import '../scss/select2-foundation.scss';

import '../scss/elfinder-custom.scss';

document.querySelectorAll(".elfinder-field[data-elfinder]").forEach(el => {
    const path = el.getAttribute('data-elfinder')
    const input = el.querySelector('[action=value]');
    const button = el.querySelector('[action=choose]');
    const edit = el.querySelector('[action=edit]');
    const img = el.querySelector('[action=preview]');
    button.addEventListener('click', function () {
        var childWin = window.open(path, "elFinderPopupWindow", "height=450, width=900");
        childWin.onload = function () { // NOTE this may erase or be erased by other onload handlers !
            childWin._elfinderCb = setImg;
        };
    });
    edit.addEventListener('click', function () {
        input.type = 'text';
    });

    if (!!input.value) {
        setImg(input.value)
    }

    function setImg(url) {
        img.src = url;
        input.value = url;
    }
});

document.querySelectorAll(".elfinder-slideshow-field[data-elfinder]").forEach(el => {
    const slideShowImgs = [];

    const path = el.getAttribute('data-elfinder')
    const input = el.querySelector('[action=value]');
    const button = el.querySelector('[action=choose]');
    const preview = el.querySelector('[action=preview]');
    button.addEventListener('click', function () {
        var childWin = window.open(path, "elFinderPopupWindow", "height=450, width=900");
        childWin.onload = function () { // NOTE this may erase or be erased by other onload handlers !
            childWin._elfinderCb = addImg;
        };
    });

    if (!!input.value) {
        input.value.split('|').forEach(addImg)
    }

    function addImg(url) {
        let img = document.createElement('img');
        img.src = url;
        preview.appendChild(img);
        slideShowImgs.push(img);
        img.addEventListener('click', function () {
            removeImg(img);
        });
        updateValue();
    }

    function removeImg(img) {
        let index = slideShowImgs.indexOf(img);
        if (index > -1) {
            slideShowImgs.splice(index, 1);
            img.remove();
            updateValue();
        }
    }

    function updateValue() {
        input.value = slideShowImgs.map(i=>'/'+i.src.replace(/^(?:\/\/|[^/]+)*\//, '')).join('|'); // We keep only the relative part of the url !
    }
});

let select2Inputs = {};
window.getSelect2Input = function (id) {
    return select2Inputs[id];
}
function configureAutocomplete(el, route) {
    return $(el).select2({
        theme: "foundation",
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

document.querySelectorAll('[autocomplete]').forEach(function (el) {
    let s = configureAutocomplete(el, el.getAttribute('autocomplete'));
    if (!!el.id) select2Inputs[el.id] = s;
});
