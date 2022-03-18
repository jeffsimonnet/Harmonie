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

/* pages/home/_section_labels.html.twig */
class __TwigTemplate_9eec5fea96c6214d8b2e86d84eb10c9c91ef3d158cee7490501f4954b3aa1c7c extends Template
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
        echo "<section class=\"labels\">
    <h3>Nos labels et distinctions</h3>
    <div>
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/label-1.jpg"), "html", null, true);
        echo "\"/>
    </div>
    <div>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/label-2.jpg"), "html", null, true);
        echo "\"/>
    </div>
    <div>
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/label-3.jpg"), "html", null, true);
        echo "\"/>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "pages/home/_section_labels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home/_section_labels.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/home/_section_labels.html.twig");
    }
}
