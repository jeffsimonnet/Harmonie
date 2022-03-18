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

/* pages/home/_section_hooks.html.twig */
class __TwigTemplate_8356c9bfc25c25d303448d5528a60c727ef170589c554fee9be12c463dbc3ee2 extends Template
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
        echo "<section class=\"col-hooks\">
    <div class=\"hook main-grid noCover\">
        <div class=\"col1\" style=\"--bg-image: url(";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/illu-subventions.png"), "html", null, true);
        echo ")\"></div>
        <div class=\"col2\">
            <h3>Bénéficier de subventions  <br>pour vos travaux.</h3>
            <p>Que vous soyez copropriétaire, occupant ou bailleur, vous êtes éligibles aux nouvelles subventions relatives à la rénovation énergétique.<br>
                MaPrimeRénov’, les CEE, sans conditions de ressources ou encore les aides locales (communauté agglomération, région, ville), chaque copropriétaire est concerné.</p>
            <p><a href=\"/subventions/\" class=\"btn primary secondary green shadow grow\">Nous calculons vos subventions</a></p>
        </div>
    </div>

    <div class=\"hook main-grid\">
        <div class=\"col1\" style=\"--bg-image: url(";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/hook1.jpg"), "html", null, true);
        echo ")\"></div>
        <div class=\"col2\">
            <div class=\"picto\"></div>
            <h3>Isolation thermique par <br>l'extérieur</h3>
            <p>Depuis plus de 30 ans notre entreprise se positionne en leader de l'isolation thermique par l'extérieur des immeubles en copropriété.</p>
            <p>Nous avons réalisé plus de 70 000 m² d'isolation sur le dernier exercice où chaque projet a bénéficié d'importantes <a href=\"/subventions/\">subventions</a> dont nous avons accompagné l'instruction des dossiers. À l'heure du changement climatique irréversible, <a href=\"/ite/\">l’isolation thermique</a> est devenue la priorité de tous.</p>
            <p><a href=\"/ite/\" class=\"btn primary secondary yellow shadow grow\">Découvrir l'ITE</a></p>
        </div>
    </div>

    <div class=\"hook main-grid\">
        <div class=\"col1\" style=\"--bg-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/hook2.jpg"), "html", null, true);
        echo ")\"></div>
        <div class=\"col2\">
            <div class=\"picto picto2\"></div>
            <h3>Étanchéité</h3>
            <p>Harmonie réalise tous travaux d'<a href=\"/etancheite/\">étanchéité</a> d'immeubles en copropriété et d'institutionnels en préconisant l'isolation thermique apportant un gain énergétique considérable, tout en réduisant vos factures.</p>
            <p>Nous constituons également les dossiers de subventions pour diminuer drastiquement le coût des projets et participons avec vous a la préservation de notre environnement.</p>
            <p><a href=\"/etancheite/\" class=\"btn primary secondary yellow shadow grow\">Découvrir l'étanchéité</a></p>
        </div>
    </div>

    <div class=\"hook main-grid\">
        <div class=\"col1\" style=\"--bg-image: url(";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/hook3.jpg"), "html", null, true);
        echo ")\"></div>
        <div class=\"col2\">
            <div class=\"picto picto3\"></div>
            <h3>Ravalement de façade</h3>
            <p>C'est en 1978 que notre entreprise a réalisé son premier <a href=\"/ravalement/\">ravalement</a>. Depuis lors nos compagnons réalisent aussi bien des ouvrages en <a href=\"/ravalement/pierre-de-taille/\">pierre de taille</a>, <a href=\"/ravalement/impermeabilisation/\">imperméabilisation</a>, <a href=\"/enduit-chaux/\">enduits à la chaux</a> ou encore <a href=\"/ravalement/\">pâtes de verre</a> à la façon d'autrefois.</p>
            <p>Nous réalisons également des ouvrages plus contemporains comme le <a href=\"les-differents-types-de-revetement-de-facade\">bardage</a> ou la vêture lorsque nos clients le désirent.</p>
            <p><a href=\"/ravalement/\" class=\"btn primary secondary yellow shadow grow\">Découvrir le ravalement de façade</a></p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "pages/home/_section_hooks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 35,  68 => 24,  54 => 13,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home/_section_hooks.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/home/_section_hooks.html.twig");
    }
}
