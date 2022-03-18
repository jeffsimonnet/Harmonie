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

/* pages/contenu/_contact.html.twig */
class __TwigTemplate_b10b0418e02b239f5d990ba22c9818d249d5816c1b5b4a0aa9585b0c9fd9ce20 extends Template
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
        if (array_key_exists("form", $context)) {
            // line 2
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["onsubmit" => "submitContact(this);return false;"]]);
            echo "
    <div class=\"errors | full\">";
            // line 3
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "</div>

    <div class=\"full\"></div>
    ";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "civilite", [], "any", false, false, false, 6), 'row');
            echo "
    ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 7), 'row');
            echo "
    ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 8), 'row');
            echo "
    <div class=\"full\"></div>
    <div class=\"full input-geo\"><label>Adresse du bien* : <input style=\"opacity: 0; position: absolute\" /><input id=\"input-geo-address\" type=\"text\" autocomplete=\"new-password\" placeholder=\"Votre localisation\" required=\"required\"></label></div>
    <div class=\"full input-map\"></div>
    <div class=\"full input-geo2\">&gt; Si vous n’êtes pas localisé, <a href=\"javascript:;\">accédez au détail de votre adresse.</a>
        <div style=\"display:none;\">
            ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 14), 'row');
            echo "
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code_postal", [], "any", false, false, false, 15), 'row');
            echo "
            ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 16), 'row');
            echo "
        </div>
    </div>
    <div class=\"full\"></div>
    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 20), 'row', ["row_attr" => ["class" => "half"]]);
            echo "
    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 21), 'row', ["row_attr" => ["class" => "half"]]);
            echo "
    <div class=\"full\"></div>
    ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_logements", [], "any", false, false, false, 23), 'row', ["row_attr" => ["class" => "half"]]);
            echo "
    ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaire", [], "any", false, false, false, 24), 'row', ["row_attr" => ["class" => "full"]]);
            echo "

    <div class=\"full small\">*Champs obligatoires</div>

    <div class=\"full\">
        <p style=\"font-size:86%;\">";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accept_conditions", [], "any", false, false, false, 29), 'widget');
            echo " En soumettant ce formulaire, j'accepte que les informations que je saisis soient utilisées dans le cadre du traitement de ma demande et de la relation commerciale qui peut en découler.<br>Si ma demande ne peut être traitée, j'autorise Harmonie à transmettre mes coordonnées à une société à même de l'instruire.<br>Pour connaître et exercer vos droits, veuillez <a href=\"/mentions-legales/\">consulter notre politique de confidentialité.</a></p>
    </div>

    <div class=\"full center\">
        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recaptcha", [], "any", false, false, false, 33), 'widget', ["label" => "ENVOYER LA DEMANDE", "attr" => ["class" => "btn primary send_contact"]]);
            echo "
    </div>
    <div class=\"full center\"><br><br>
        NOTE : Nous ne répondons pas aux demandes concernant les maisons individuelles.
    </div>
    ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
    <script>
        let map;
        let marker = null;

        function initMap() { // callback for Google Places API
            window.geocoder = new google.maps.Geocoder();
            const options = {
                componentRestrictions: {country: \"fr\"},
                fields: [\"address_components\", \"geometry\"],
                types: ['address'],
                strictBounds: false
            };
            const autocomplete = new google.maps.places.Autocomplete(document.querySelector(\"#input-geo-address\"), options);
            autocomplete.addListener('place_changed', () => {
                const place = autocomplete.getPlace();
                const places_data = consolidatePlace(place);
                let adresse = (!!places_data.street_number) ? places_data.street_number.long_name + ' ' : '';
                if (!!places_data.route)
                    adresse += places_data.route.long_name;
                document.querySelector(\"#contact_adresse\").value = adresse;
                document.querySelector(\"#contact_code_postal\").value = places_data.postal_code.long_name;
                document.querySelector(\"#contact_ville\").value = places_data.locality.long_name;

                if (!marker) {
                    marker = new google.maps.Marker({
                        position: place.geometry.location,
                        map
                    });
                } else {
                    marker.setPosition(place.geometry.location);
                }

                map.setCenter(place.geometry.location);
                map.setZoom(16);
            });

            map = new google.maps.Map(document.querySelector(\".input-map\"), {
                center: {lat: 46.52863469527167, lng: 2.43896484375},
                zoom: 5,
                streetViewControl: false,
                mapTypeControl: false,
                fullscreenControl: false
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
                lng: position.coords.longitude
            };
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

        let linkShow = document.querySelector(\".input-geo2 a\");
        linkShow.addEventListener(\"click\", function () {
            let next = this.nextElementSibling;
            if (next.style.display === \"none\") {
                next.style.display = 'block';
                this.innerHTML = \"fermer le détail de votre adresse\";
            } else {
                next.style.display = 'none';
                this.innerHTML = \"accédez au détail de votre adresse\";
            }
        });
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 136), "server", [], "any", false, false, false, 136), "get", [0 => "PLACES_API_KEY"], "method", false, false, false, 136), "html", null, true);
            echo "&callback=initMap&libraries=places&v=weekly\" async></script>
";
        } else {
            // line 138
            echo "    <form>
        <div class=\"full\">";
            // line 139
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
        <div class=\"full\"><a href=\"javascript:window.history.go(-1);\">Retour au formulaire</a></div>
        <script>
        window.addEventListener(\"load\", (event) => {
            typeof ga != 'undefined' && ga('send', 'pageview', '/contact.html');
        });
        </script>
    </form>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/contenu/_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 139,  224 => 138,  219 => 136,  118 => 38,  110 => 33,  103 => 29,  95 => 24,  91 => 23,  86 => 21,  82 => 20,  75 => 16,  71 => 15,  67 => 14,  58 => 8,  54 => 7,  50 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contenu/_contact.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/contenu/_contact.html.twig");
    }
}
