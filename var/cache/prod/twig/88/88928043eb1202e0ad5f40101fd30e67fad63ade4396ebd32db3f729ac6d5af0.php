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

/* pages/home/_section_history.html.twig */
class __TwigTemplate_fe5eb92d3bb3b22012ef32f33948a172cc945ffa8619f103d003ad1b0ee6bd69 extends Template
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
        echo "<section class=\"history\">
    <h3 class=\"yellow\">Notre histoire</h3>
    <div>
        <ul class=\"nostyle nav\">
            <li>1977</li>
            <li>1984</li>
            <li>1992</li>
            <li>1999</li>
            <li>2001</li>
            <li>2009</li>
            <li>2012</li>
            <li>2013</li>
            <li>2014</li>
            <li>2015</li>
            <li>2017</li>
            <li>2019</li>
            <li>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</li>
        </ul>
        <ul class=\"nostyle text\">
            <li data-year=\"1977\">
                <div class=\"y\">1977</div>
                <div class=\"t\">Création de la société</div>
                <p>Lucien Hinderzé crée la société artisanale Harmonie Décoration, entreprise spécialisée en travaux de peinture. Chiffre d'affaire de 100 000 €.</p>
            </li>
            <li data-year=\"1984\">
                <div class=\"y\">1984</div>
                <div class=\"t\">Création du département de ravalement.</div>
                <p>Création au sein de la société du département de ravalement de façade.</p>
            </li>
            <li data-year=\"1992\">
                <div class=\"y\">1992</div>
                <div class=\"t\">Reprise de l'entreprise</div>
                <p>Reprise de l’entreprise par Frédéric Hinderzé et transfert de l’activité sur Bois-Colombes dans les Hauts-de-Seine.</p>
            </li>
            <li data-year=\"1999\">
                <div class=\"y\">1999</div>
                <div class=\"t\">Création du département couverture et étanchéité</div>
                <p>Création au sein de la société du département couverture et étanchéité.<br>Acquisition d’un ensemble immobilier: ateliers et bureaux sur Maisons-Laffitte dans les Yvelines.</p>
            </li>
            <li data-year=\"2001\">
                <div class=\"y\">2001</div>
                <div class=\"t\">Passage en S.A</div>
                <p>La société devient une S.A au capital de 100.000 euros et réalise son 1er chantier en rénovation énergétique.</p>
            </li>
            <li data-year=\"2009\">
                <div class=\"y\">2009</div>
                <div class=\"t\">Passage en S.A.S</div>
                <p>« Harmonie Décoration S.A » devient « Harmonie S.A.S ».</p>
            </li>
            <li data-year=\"2012\">
                <div class=\"y\">2012</div>
                <div class=\"t\">Passage en S.A.S</div>
                <p>1er chantier de plus de 3 Millions d’euros en rénovation énergétique.</p>
            </li>
            <li data-year=\"2013\">
                <div class=\"y\">2013</div>
                <div class=\"t\">Création du site Internet</div>
                <p>Création de www.harmonie.fr unique base de données en France et médiathèque dédiée à l’information des copropriétaires, des architectes et des syndics.<br>Augmentation de capital à 300.000 €</p>
            </li>
            <li data-year=\"2014\">
                <div class=\"y\">2014</div>
                <div class=\"t\">Augmentation de capital</div>
                <p>Augmentation de capital à 1.000.000 €</p>
            </li>
            <li data-year=\"2015\">
                <div class=\"y\">2015</div>
                <div class=\"t\">Finalisation de HEC</div>
                <p>Finalisation de HEC (Harmonie Etanchéité Couverture). Chiffre d'affaire consolidé du groupe : 20.000.000 €.</p>
            </li>
            <li data-year=\"2017\">
                <div class=\"y\">2017</div>
                <div class=\"t\">40 ans</div>
                <p>Harmonie fête ses 40 ans d'existance.</p>
            </li>
            <li data-year=\"2019\">
                <div class=\"y\">2019</div>
                <div class=\"t\">Nouvelle plateforme logistique</div>
                <p>Création de la plateforme logistique de 6 000 m2 dans la commune d’Achères.</p>
            </li>
            <li data-year=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "\">
                <div class=\"y\">";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div>
                <div class=\"t\">Aujourd'hui</div>
                <p>La rénovation énergétique représente 75 % de notre activité, aussi bien en étanchéité qu’en isolation thermique par l’extérieur.</p>
            </li>
        </ul>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "pages/home/_section_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 81,  121 => 80,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home/_section_history.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/home/_section_history.html.twig");
    }
}
