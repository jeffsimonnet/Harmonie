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

/* cookie-consent.html.twig */
class __TwigTemplate_aad52373092050a6a3e66f728f27c57a875a42a3d3508060870965a314b2c9d3 extends Template
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
        echo "<template id=\"cookie-consent-template\">
    <div class=\"cookie-consent\">
        <p>Nous utilisons des cookies ou traceurs afin de faciliter votre navigation sur le site, vous proposer des publicités personnalisées en fonction de votre profil de navigation et de votre localisation, partager des contenus sur les réseaux sociaux et autres plateformes en ligne, et établir des statistiques ayant pour objectif d’améliorer votre expérience sur notre site. Les cookies techniques ne sont pas paramétrables mais les autres nécessitent votre accord pour être déposés. </p>
        <div>
            <a href=\"javascript:;\" class=\"btn\" action=\"configure\">Personnaliser votre choix</a>
            <a href=\"javascript:;\" class=\"btn\" action=\"reject\">Tout refuser</a>
            <a href=\"javascript:;\" class=\"btn\" action=\"accept\">Tout accepter</a>
        </div>
    </div>
    <div class=\"cookie-consent-configure\">
        <div>
            <h2>Paramétrage des préférences</h2>
            <table>
                <tr>
                    <td><h6>Cookies techniques (nécessaires)</h6></td>
                    <td><p>Ces cookies sont nécessaires au bon fonctionnement du site et rendent votre navigation plus confortable. Ils vous permettent de vous authentifier plus facilement sur notre plateforme et gardent en mémoire le contenu de votre panier d’achat. Ils permettent également de personnaliser votre interface utilisateur notamment concernant le choix de la langue.</p></td>
                    <td></td>
                </tr>
                ";
        // line 34
        echo "                <tr>
                    <td><h6>Cookies de mesure d’audience</h6></td>
                    <td><p>Les services de mesures d’audience permettent de générer des statistiques de fréquentation et de navigation sur notre site. Les cookies utilisés permettent également d’identifier les problèmes de navigation et à terme, de les régler.</p></td>
                    <td><div class=\"custom_toggle_switch\"><label><input type=\"checkbox\" value=\"analytics\"><span></span> Accepter</label></div></td>
                </tr>
            </table>
            <br/>
            <a href=\"javascript:;\" class=\"btn\" action=\"save\">Enregistrer vos préférences</a>
            <a href=\"javascript:;\" class=\"btn\" action=\"reject\">Tout refuser</a>
            <a href=\"javascript:;\" class=\"btn\" action=\"accept\">Tout accepter</a>
        </div>
    </div>
</template>



";
        // line 51
        echo "
";
        // line 53
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->
<script type=\"text/javascript\" async src=\"https://www.googletagmanager.com/gtag/js?id=UA-45632429-1\"></script>
<script type=\"text/javascript\">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('consent', 'default', {
        'ad_storage': 'denied',
        'analytics_storage': 'denied'
    });
    gtag('config', 'UA-45632429-1');
</script>

<script type=\"text/plain\" consent=\"analytics\">
    gtag('consent', 'update', {
        'analytics_storage': 'granted'
    });
</script>

";
        // line 74
        echo "<script type=\"text/plain\" consent=\"analytics\">
    <!--/*--><![CDATA[//> < !--
    /**/
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-45632429-1', 'harmonie.fr');
    ga('send', 'pageview');
    //--><!]]>
</script>

<!-- Hotjar Tracking Code for https://www.harmonie.fr -->
<script type=\"text/plain\" consent=\"analytics\">
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2442415,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
";
    }

    public function getTemplateName()
    {
        return "cookie-consent.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 74,  78 => 53,  75 => 51,  57 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cookie-consent.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/cookie-consent.html.twig");
    }
}
