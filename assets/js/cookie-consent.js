(function () {
    const template = document.getElementById('cookie-consent-template');
    if (!template || !template.content) return;

    const cname = 'cookie-consent';
    const groups = ['base', 'analytics'];
    const sep = '|';
    let cookieValue = readCookie(cname);

    if (!!cookieValue) {
        loadScripts(cookieValue.split(sep));
    } else {
        document.body.appendChild(document.importNode(template.content, true));
        let consent = document.querySelector('.cookie-consent');
        let consent_config = document.querySelector('.cookie-consent-configure');
        consent.classList.add("active");
        consent.addEventListener('click', function (e) {
            let action = e.target.getAttribute('action');
            handleAction(action);
        })
        consent_config.addEventListener('click', function (e) {
            let action = e.target.getAttribute('action');
            handleAction(action);
        })

        function handleAction(action) {
            switch (action) {
                case "reject":
                    createCookie(cname, 'base', 30);
                    consent.classList.remove('active');
                    consent_config.classList.remove('active');
                    break;
                case "accept":
                    createCookie(cname, groups.join(sep), 30);
                    loadScripts(groups);
                    consent.classList.remove('active');
                    consent_config.classList.remove('active');
                    break;
                case "configure":
                    consent.classList.remove('active');
                    consent_config.classList.add('active');
                    break;
                case "save":
                    let values = Array.from(consent_config.querySelectorAll('input[type=checkbox]:checked')).map(i => i.value);
                    values.push('base')
                    createCookie(cname, values.join(sep), 30);
                    loadScripts(values);
                    consent_config.classList.remove('active');
                    break;
            }
        }
    }

    function loadScripts(preferences) {
        preferences.forEach(p => document.querySelectorAll("script[type*=plain][consent=" + p + "]").forEach(executeScript));
    }

    function executeScript(el) {
        let src = el.getAttribute('src');
        if (!src) {
            eval(el.innerText);
        } else {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = src;
            document.body.appendChild(script);
            // TODO if local script depends on a remote one, this code may have to be tested to ensure synchronicity
        }
    }

    function createCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        }
        else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // function eraseCookie(name) {
    //     createCookie(name,"",-1);
    // }
})()