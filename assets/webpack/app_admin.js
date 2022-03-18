/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './app_admin.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';
import slugify from 'slugify';

window.generateSlug = function (str) {
    return slugify(str, {
        lower: true,
        strict: true,
        locale: 'fr',
    });
}

window._submitDelete = function (input) {
    return _submitAction(input, { "_method": "DELETE" });
}

window._submitAction = function (input, parameters) {
    var f = document.createElement("form");
    f.setAttribute('method', "post");
    f.setAttribute('action', input.getAttribute('data-action-route'));

    for (const key in parameters) {
        var m = document.createElement("input");
        m.setAttribute('type', "hidden");
        m.setAttribute('name', key);
        m.setAttribute('value', parameters[key]);
        f.appendChild(m);
    }

    var t = document.createElement("input");
    t.setAttribute('type', "hidden");
    t.setAttribute('name', "_token");
    t.setAttribute('value', input.getAttribute('data-csrf-token'));

    f.appendChild(t);

    document.body.appendChild(f);

    f.submit();

    return false;
}
