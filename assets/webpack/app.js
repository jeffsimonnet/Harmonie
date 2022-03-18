/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './app.scss';

import '../js/cookie-consent';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';
import 'lity'

(function ($) {
    function configureSelectMultiple(select) {
        let actif;

        select = $(select);
        select.find('p').on('click', function () {
            let ul = select.find("ul");
            if (ul.css("display") === "none") {
                ul.slideDown(300);
            } else {
                ul.slideUp(300);
            }
        });
        select.on('mouseenter', function () {
            actif = $(this).attr("id");
        });
        select.on('mouseleave', function () {
            actif = "";
        });
        $("body").on('click', function () {
            select.each(function () {
                if (actif !== $(this).attr("id") && $(this).find("ul").css("display") !== "none") {
                    $(this).find("ul").slideUp(300);
                }
            });
        });
        select.find('input[type=checkbox]').click(function (e) {
            var nb = select.find("input[type=checkbox]:checked", e);
            select.find("p", e).attr('data-nb', (nb.length === 0) ? '' : nb.length);

            if (select.hasClass('select_multiple_departements')) {
                updateCity(nb);
            }
        });

        function updateCity(checked) {
            let selectedDepartements = checked.map(function () {
                return $(this).val();
            }).toArray();
            select.parents('form').find('.select_multiple_ville input[type=checkbox]').each(function (_, i) {
                i = $(i);
                i.parents('li').toggle(!selectedDepartements.length || selectedDepartements.indexOf(i.attr('data-dept')) >= 0);
            });
        }
    }
    document.querySelectorAll(".select_multiple").forEach(configureSelectMultiple);

    function configureMap(map) {
        map = $(map);
        let path = map.find(".map svg path");
        let fill = map.find('.fill');
        let form = map.find("form");
        path.on('mouseenter', function () {
            var e = $(this);
            activate(e);
        }).on('click', function () {
            document.location.href = form.attr('action') + "?departement[]=" + $(this).data('id');
        });

        form.on('submit', function (e) {
            e.preventDefault();
            const queryString = '?' + new URLSearchParams(new FormData(e.target)).toString()
            document.location.href = form.attr('action') + decodeURI(queryString); // We show [] not encoded. Other values are only numbers
            return false;
        })

        function activate(e) {
            path.removeClass('active');
            fill.removeClass('active');
            map.find('.infos').removeClass('active');

            e.addClass("active");
            var id = e.data('id');
            map.find('#real-' + id).addClass("active");
            fill.find('.p').css({
                left: e.data('x') + "%",
                top: 'calc(' + e.data('y') + "% + 7px)"
            });
            fill.find('.t1').css({
                left: e.data('x') + "%",
                width: (100 - parseInt(e.data('x')) - 35) + "%"
            });
            fill.find('.t2').css({
                left: e.data('x') + "%",
                height: e.data('y') + "%"
            });
            fill.addClass('active');
        }

        const active = map.data("default");
        if (!!active) {
            activate(map.find('[data-id='+active+']'));
        }
    }

    document.querySelectorAll(".map-realisations").forEach(configureMap);

    //history (home)
    var autoPlayHistory = true;
    $(".history .nav li").click(function () {
        autoPlayHistory = false;
        showHistory($(this));
        return false;
    });
    function showHistory(e) {
        $(".history .nav li").removeClass('active');

        $(".history .text li").stop().slideUp(300, function () {
            e.addClass('active');
        });
        $(".history .text li[data-year='" + e.text() + "']").stop().slideDown(300);
    }
    function playAutoHistory(p) {
        if (autoPlayHistory) {
            showHistory($(".history .nav li").eq(p));

            setTimeout(function () {
                if ($(".history .nav li").eq(p + 1).length > 0) {
                    p++;
                } else {
                    p = 0;
                }
                playAutoHistory(p);
            }, 4000);
        }
    }
    playAutoHistory(0);
})(jQuery);

// For Sliders/swipers with bullet points
let configureSwiper = function (container) {
    let swiper = document.createElement('div');
    swiper.classList.add('swiper');
    container.parentNode.insertBefore(swiper, container.nextSibling);
    let current;
    let maxOffset = container.scrollWidth - container.clientWidth;
    window.addEventListener('resize', function () {
        maxOffset = container.scrollWidth - container.clientWidth;
    });
    container.children.forEach((c, i) => {
        let bullet = document.createElement('div');
        swiper.appendChild(bullet);
        bullet.addEventListener('click', function (e) {
            if (current) current.classList.remove('active');
            bullet.classList.add('active');
            current = bullet;
            container.style.setProperty('--translate-left', "calc((-" + maxOffset + "px)*" + i / (container.children.length - 1) + ")"); // 2em for the padding of the container
        })
    })
    swiper.children[0].click();
}

document.querySelectorAll(".sliding").forEach(configureSwiper);

//menu mobile
(function () {
    let menuMobile = document.querySelector('nav .menu-mobile');
    let submenuMobile = document.querySelectorAll('nav>section>.menu>li>a');
    let backMobile = document.querySelectorAll('nav>section>.menu>li .back');

    if (menuMobile) {
        menuMobile.addEventListener('click', function (e) {
            if (menuMobile.parentNode.classList.contains('active')) {
                menuMobile.parentNode.classList.remove("active");

                submenuMobile.forEach(function (a) {
                    a.parentNode.classList.remove("active");
                });
            } else {
                menuMobile.parentNode.classList.add("active");
            }
            return false;
        });
        submenuMobile.forEach(function (a) {
            a.addEventListener('click', function (e) {
                if (a.parentNode.classList.contains('active')) {
                    a.parentNode.classList.remove("active");
                } else {
                    a.parentNode.classList.add("active");
                }
                return false;
            });
        });
        backMobile.forEach(function (a) {
            a.addEventListener('click', function (e) {
                a.parentNode.parentNode.parentNode.classList.remove("active");
                return false;
            });
        });
    }
})();

// For produits panels
window.scrollPanels = function (root, prefix) {
    let section = document.querySelector(root);
    let div = section.querySelector('.panels');
    let panels = div.querySelectorAll('.panel');
    let links = section.querySelectorAll('.scroller a');
    var index = 0;
    var limiter; // rate limiting calls to function
    links.forEach(l => {
        l.addEventListener('click', function (e) {
            e.preventDefault();
            index = e.target.hash.substr(prefix.length + 1) - 1; // note that the hash starts with #
            switchPanel(index);
            if (isMobileMenu) {
                isMobileMenu = false;
                scroller.style.display = '';
            }
            return false;
        })
    })
    div.addEventListener('wheel', function (e) {
        if (limiter) {
            e.preventDefault();
            return;
        }

        let scrollZone = e.target.closest('.scroll');

        if (e.deltaY < 0) {
            if (scrollZone.scrollTop > 0) return true; // Do not capture if the inner div is not at the top
            if (index > 0) {
                index--;
                switchPanel(index);
                e.preventDefault();
                limiter = setTimeout(function () { limiter = null; }, 300);
            }
        }
        if (e.deltaY > 0) {
            if (scrollZone.scrollHeight - scrollZone.scrollTop > scrollZone.clientHeight) return true;  // Do not capture if the inner div is not at the bottom

            if (index < links.length - 1) {
                index++;
                switchPanel(index);
                e.preventDefault();
                limiter = setTimeout(function () { limiter = null; }, 300);
            }
        }
    });

    function switchPanel(index) {
        let id = (index + 1);
        panels.forEach(p => p.classList.remove('active'));
        section.querySelector('#' + prefix + id).classList.add('active')
        links.forEach((a) => a.parentElement.classList.remove('active'));
        section.querySelector('.scroller a[href="#' + prefix + id + '"]').parentElement.classList.add('active');
    }

    let isMobileMenu = false;
    let scroller = section.querySelector('.scroller');
    window.showMenuProduitsMobile = function (link) {
        scroller.style.display = 'block';
        isMobileMenu = true;
    }
}

window.scrollProgress = function (progressBar) {
    var winHeight = window.innerHeight,
        docHeight = document.documentElement.scrollHeight,
        max, value;

    /* Set the max scrollable area */
    max = docHeight - winHeight;

    document.addEventListener('scroll', function () {
        value = window.scrollY;
        progressBar.style.setProperty('--progress', Math.round(value * 100 / max) + "%")
    });
}

// Menu
document.querySelectorAll('a[style-hover]').forEach(function (a) {
    a.setAttribute('style-hover', a.innerHTML); // Used for the CSS trick that avoid weird effect on bolding onhover
})

// Offuscation de lien par Remi Morin
document.addEventListener("DOMContentLoaded", function (event) {
    document.querySelectorAll("[data-qcd]").forEach(link => {
        link.addEventListener('click', leftClickHandler, false);
        link.addEventListener('contextmenu', rightClickHandler, false);
    })

    //fonction du click gauche
    function leftClickHandler(event) {
        const link = window.atob(this.getAttribute("data-qcd"));
        if (event.ctrlKey) {
            var newWindow = window.open(link, '_blank');
            newWindow.focus();
        } else {
            document.location.href = link;
        }
    };

    //fonction du click droit
    function rightClickHandler(event) {
        const link = window.atob(this.getAttribute("data-qcd"));
        this.setAttribute('href', link);
    }
});