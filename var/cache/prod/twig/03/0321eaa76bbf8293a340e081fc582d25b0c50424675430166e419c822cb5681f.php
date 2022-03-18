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

/* pages/home/_menu.html.twig */
class __TwigTemplate_ed358f42a4a947fd9c2da544b6c00779ae21608e41e29186a6bb87df15a30d69 extends Template
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
        echo "<li><a href=\"/ite/\" style-hover>ITE</a></li>
<li><a href=\"/etancheite/\" style-hover>Etanchéité</a></li>
<li><a href=\"/ravalement/\" style-hover>Ravalement</a></li>
<li><a href=\"/copropriete/\" style-hover>Copropriété</a></li>
<li><a href=\"/subventions/\" style-hover>Subventions</a></li>";
    }

    public function getTemplateName()
    {
        return "pages/home/_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home/_menu.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/home/_menu.html.twig");
    }
}
