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

/* pages/_modules/text.html.twig */
class __TwigTemplate_b5d839289ee23d50760f8a3593c89f4f5c961aba3cf9ba2bdb91e5fca2b26c10 extends Template
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
        $context["id"] = ("text-toggle" . twig_random($this->env));
        // line 2
        $context["class"] = ((array_key_exists("type", $context)) ? (($context["type"] ?? null)) : (((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type", [], "any", false, false, false, 2)) : (""))));
        // line 3
        echo "<section class=\"text ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    <h4 class=\"yellow caps\">";
        // line 4
        echo ((        $this->hasBlock("title", $context, $blocks)) ? (        $this->renderBlock("title", $context, $blocks)) : (((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "titre", [], "any", false, false, false, 4)) : (""))));
        echo "</h4>
    <div>";
        // line 5
        echo ((        $this->hasBlock("accroche", $context, $blocks)) ? (        $this->renderBlock("accroche", $context, $blocks)) : (((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "accroche", [], "any", false, false, false, 5)) : (""))));
        echo "</div>
    ";
        // line 6
        $context["more"] = ((        $this->hasBlock("more", $context, $blocks)) ? (        $this->renderBlock("more", $context, $blocks)) : (((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "texte", [], "any", false, false, false, 6)) : (""))));
        // line 7
        echo "    ";
        if ( !twig_test_empty(($context["more"] ?? null))) {
            // line 8
            echo "        <input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" style=\"display:none;\">
        <div>";
            // line 9
            echo ($context["more"] ?? null);
            echo "</div>
        <label for=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"><a class=\"yellow show-more\">&nbsp;</a></label>
    ";
        }
        // line 12
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "pages/_modules/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  68 => 10,  64 => 9,  59 => 8,  56 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/text.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/text.html.twig");
    }
}
