<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/formulaire/_funnel.html.twig */
class __TwigTemplate_bd8f01dae02549b9fefec3e3b6ab236b09dbdc59e724a9cb4da8a52c60aa2413 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"funnel\">
    <div>
        <div class=\"timeline\">
            <ul class=\"nostyle\">
                <li>Type de bien</li>
                <li>Localisation</li>
                <li>Commentaires</li>
                <li>Coordonnées</li>
            </ul>
        </div>
        <div class=\"step\" id=\"step-1\">
            <h2>Pour quel <em>type de bien</em> souhaitez-vous effectuer des travaux ?</h2>
            <div class=\"content\">
                <form>
                    <div class=\"radio-group\">
                        <div>
                            <input type=\"radio\" name=\"type_bien\" value=\"Immeuble\" id=\"type_bien_immeuble\" required>
                            <label for=\"type_bien_immeuble\" class=\"btn-radio picto-immeuble\">Immeuble</label>
                        </div>
                        <div>
                            <input type=\"radio\" name=\"type_bien\" value=\"Pavillon\" id=\"type_bien_pavillon\" required onclick=\"alert('Harmonie n‘intervient pas sur des pavillons mais uniquement sur des immeubles !');
                                    return false;\">
                            <label for=\"type_bien_pavillon\" class=\"btn-radio picto-pavillon\">Pavillon</label>
                        </div>
                    </div>
                </form>
            </div>
            <a href=\"javascript:;\" class=\"nav next\">Valider</a>
        </div>
        <div class=\"step\" id=\"step-2\">
            <h2><em>Saisissez l’adresse</em> de l’immeuble ?</h2>
            <div class=\"content\">
                <form>
                    <div>
                        <div class=\"input input-geo\"><input type=\"text\" placeholder=\"Votre localisation\"></div>
                        &gt; Si vous n’êtes pas localisé, <a href=\"javascript:;\" onclick=\"this.nextElementSibling.style.display = 'contents';\">accédez au détail de votre adresse.</a>
                        <div style=\"display:none;\">
                            <div>
                                <label class=\"required\">Votre adresse</label>
                                <textarea name=\"adresse\" rows=\"3\"></textarea>
                            </div>
                            <div style=\"display:grid;grid-template-columns:1fr 1fr; grid-gap:2em;\">
                                <div>
                                    <label class=\"required\">Code postal</label>
                                    <input type=\"text\" name=\"code_postal\" required>
                                </div>
                                <div>
                                    <label class=\"required\">Ville</label>
                                    <input type=\"text\" name=\"ville\" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <a href=\"javascript:;\" class=\"nav prev\">Retour</a>
            <a href=\"javascript:;\" class=\"nav next\">Valider</a>
        </div>
        <div class=\"step\" id=\"step-3\">
            <h2><em>Décrivez votre projet</em> succinctement :</h2>
            <div class=\"content\">
                <form>
                    <textarea name=\"description\" required style=\"width:20em;height:8em;\" placeholder=\"Votre description ici...\"></textarea>
                </form>
            </div>
            <a href=\"javascript:;\" class=\"nav prev\">Retour</a>
            <a href=\"javascript:;\" class=\"nav next\">Valider</a>
        </div>
        <div class=\"step\" id=\"step-4\">
            <div class=\"content\">
                <form>
                    <div>
                        <label class=\"required\">Votre nom</label>
                        <input name=\"nom\" type=\"text\" required>
                    </div>
                    <div>
                        <label class=\"required\">Votre prénom</label>
                        <input name=\"prenom\" type=\"text\" required>
                    </div>
                    <div>
                        <label class=\"required\">Votre mail</label>
                        <input name=\"email\" type=\"email\" required>
                    </div>
                    <div>
                        <label class=\"required\">Votre téléphone</label>
                        <input name=\"telephone\" type=\"text\" required pattern=\"^\\+?\\d([-| ]?\\d){9,}.*\">
                    </div>
                </form>
                <p>* Champs obligatoires</p>
            </div>
            <p class=\"footer\" style=\"font-size:0.6rem\">En cliquant sur terminer, j'accepte que les informations que je saisis soient utilisées dans le cadre du traitement de ma demande et de la relation commerciale qui peut en découler. Si ma demande ne peut être traitée, j'autorise Harmonie à transmettre mes coordonnées à une société à même de l'instruire. Pour connaître et exercer vos droits, <a href=\"/mentions-legales/\">veuillez consulter notre politique de confidentialité</a>.</p>
            <a href=\"javascript:;\" class=\"nav prev\">Retour</a>
            <a href=\"javascript:;\" class=\"nav finish\">Terminer</a>
        </div>
        <div class=\"step\" id=\"step-6\">
            <div class=\"content\">
                <p>Nous sommes heureux de pouvoir vous accompagner dans votre projet.<br/>
                    <span class=\"green\">Un expert Harmonie</span> prendra rapidement contact avec vous.</p>
            </div>
        </div>
    </div>
</section>
<script>
    let steps = Array.from(document.querySelectorAll('.step'));
    let menu = Array.from(document.querySelectorAll('.timeline li'));
    function getCurrentStep(el) {
        return steps.indexOf(el);
    }
    function setCurrentStep(step, oldStep = - 1) {
        if (oldStep > -1) {
            steps[oldStep].classList.remove(\"active\");
            if (step < oldStep)
                menu[oldStep].classList.remove(\"active\"); // in case of prev only
            menu[oldStep].classList.remove(\"current\");
        }
        steps[step].classList.add(\"active\");
        menu[step].classList.add(\"active\");
        menu[step].classList.add(\"current\");
    }
    document.querySelectorAll(\".next, .finish\").forEach(i => i.addEventListener(\"click\", function (e) {
            let stepDiv = e.target.closest('.step');
            let current = getCurrentStep(stepDiv);
            let form = stepDiv.querySelector('form');
            if (!form.checkValidity()) {
                form.classList.add(\"show_validity\");
                alert(\"Vous devez fournir les informations demandées !\");
            } else {
                if (current == steps.length - 2) {
                    // Collect all data
                    const data = {}
                    document.querySelectorAll('form').forEach(function (f) {
                        const fd = new FormData(f);
                        for (const [k, v] of fd) {
                            data[k] = v;
                        }
                    })
                    let submitted;
                    if (!submitted) {
                        submitted = true;
                        submitAjax(JSON.stringify(data), \"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("funnel_ajax_submit");
        echo "\").then(function (data) {
                            submitted = false;
                            typeof ga != 'undefined' && ga('send', 'pageview', '/devis.html');
                            window.location.hash = \"#valide\";
                            setCurrentStep(steps.length - 1, current);
                        }, (data) => {
                            submitted = false;
                            alert(data.error)
                        })
                    } else {
                        alert(\"Votre demande est déjà en cours d'envoi, merci de patienter jusqu'à ce qu'elle soit enregistrée sur notre serveur !\");
                    }
                } else {
                    let next = (current + 1) % steps.length;
                    setCurrentStep(next, current);
                    if (next == 1) { // position user
                        getLocation(function (position) {
                            geocodeLatLng(geocoder, position, steps[next].querySelector(\"input\"));
                        });
                    }
                }
            }
        }));
    document.querySelectorAll(\".prev\").forEach(i => i.addEventListener(\"click\", function (e) {
            let current = getCurrentStep(e.target.closest('.step'));
            let prev = (current + steps.length - 1) % steps.length;
            setCurrentStep(prev, current);
        }));

    document.querySelectorAll(\"form\").forEach(i => i.addEventListener(\"submit\", function (e) {
            e.preventDefault();
        }));

    function initMap() { // callback for Google Places API
        setCurrentStep(0);
        window.geocoder = new google.maps.Geocoder();
        const options = {
            componentRestrictions: {country: \"fr\"},
            fields: [\"address_components\"],
            types: ['address'],
            strictBounds: false,
        };
        const autocomplete = new google.maps.places.Autocomplete(document.querySelector(\"#step-2 input\"), options);
        autocomplete.addListener('place_changed', () => {
            const places_data = consolidatePlace(autocomplete.getPlace());
            let adresse = (!!places_data.street_number) ? places_data.street_number.long_name + ' ' : '';
            if (!!places_data.route)
                adresse += places_data.route.long_name;
            document.querySelector(\"[name=adresse]\").value = adresse;
            document.querySelector(\"[name=code_postal]\").value = places_data.postal_code.long_name;
            document.querySelector(\"[name=ville]\").value = places_data.locality.long_name;
        });
    }

    function consolidatePlace(place) {
        var components_by_type = {};
        for (var i = 0; i < place.address_components.length; i++) {
            var c = place.address_components[i];
            components_by_type[c.types[0]] = c;
        }
        return components_by_type;
    }

    function getLocation(handler) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                    handler//,
                    // () => {
                    //     alert(\"Impossible de trouver votre position !\");
                    // }
                    );
        } else {
            alert(\"Votre navigateur ne supporte pas le service !\");
        }
    }

    function geocodeLatLng(geocoder, position, input) {
        const latlng = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
        }
        geocoder.geocode({location: latlng}, (results, status) => {
            if (status === \"OK\") {
                if (results[0]) {
                    input.value = \"Done\"; // TODO
                } else {
                    window.alert(\"Aucun résultat trouvé !\");
                }
            } else {
                window.alert(\"Impossible de retrouver votre adresse à partir de votre position ! Cause : \" + status);
            }
        });
    }

    function submitAjax(data, action) {
        var p = new Promise(function (resolve, reject) {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function () {
                if (request.readyState !== 4)
                    return;
                let data = JSON.parse(request.response);
                if (request.status >= 200 && request.status < 300) {
                    resolve(data);
                } else {
                    reject(data.error);
                }
            }
            request.open('POST', action, true);
            request.setRequestHeader('Content-Type', 'application/json');
            request.send(data);
        });
        return p;
    }
</script>
<script
    src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 255), "server", [], "any", false, false, false, 255), "get", [0 => "PLACES_API_KEY"], "method", false, false, false, 255), "html", null, true);
        echo "&callback=initMap&libraries=places&v=weekly\"
    async
></script>";
    }

    public function getTemplateName()
    {
        return "pages/formulaire/_funnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 255,  178 => 140,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/formulaire/_funnel.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/formulaire/_funnel.html.twig");
    }
}
