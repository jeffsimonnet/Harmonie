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

/* pages/home/_section_hero.html.twig */
class __TwigTemplate_f0fa607c6619797720104c6d9bf287fe961dcf800ff7aca63b844da91e04b309 extends Template
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
        echo "<section class=\"hero\">
    <div class=\"cta\">
        <div>
            <h3><span>HARMONIE</span></h3>
            <h1>Confiez-nous<br>vos travaux de ravalement <br>en copropriété.</h1>
            <div class=\"center\">
                <a href=\"/formulaire/\" class=\"btn primary large pulsar\"><span>Devis gratuit</span></a>
            </div>
        </div>
    </div>
    <div class=\"bg\"></div>
</section>";
    }

    public function getTemplateName()
    {
        return "pages/home/_section_hero.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home/_section_hero.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/home/_section_hero.html.twig");
    }
}
