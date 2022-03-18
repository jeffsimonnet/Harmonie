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

/* base_page.html.twig */
class __TwigTemplate_805d5367911dcce0bca0524548ac79f3d1d8c99d12188e68d0c9aea1a4ea92c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu_content' => [$this, 'block_menu_content'],
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "base_page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 4)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 4), "parent", [], "any", false, false, false, 4)))) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 4), "slug", [], "any", false, false, false, 4), "html", null, true);
            echo "\" style-hover>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
            echo "</a>";
        }
        // line 5
        echo "    <li class=\"current\"><h1><a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 5), "html", null, true);
        echo "\"style-hover>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</a></h1>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((array_key_exists("titre", $context)) ? (_twig_default_filter(($context["titre"] ?? null), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 8), "titre", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 8), "titre", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8))) : (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8))))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 8), "titre", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 8), "titre", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8))) : (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8))))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "sitename", [], "any", false, false, false, 8), "html", null, true);
    }

    // line 10
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, true, false, 11), "meta", [], "any", true, true, false, 11)) {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 12), "meta", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
        <meta name=\"robots\" content=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 13), "meta", [], "any", false, false, false, 13), "robots", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
        <meta property=\"og:title\" content=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 14), "meta", [], "any", false, false, false, 14), "titre", [], "any", false, false, false, 14), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 15), "meta", [], "any", false, false, false, 15), "description", [], "any", false, false, false, 15), "html", null, true);
            echo "\" />
        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, true, false, 16), "hero_split_image", [], "any", false, true, false, 16), "image", [], "any", true, true, false, 16)) {
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 16), "hero_split_image", [], "any", false, false, false, 16), "image", [], "any", false, false, false, 16);
            }
            // line 17
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", true, true, false, 17)) {
                $context["image"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", false, false, false, 17);
            }
            // line 18
            echo "        ";
            if (array_key_exists("image", $context)) {
                echo "<meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image"] ?? null))), "html", null, true);
                echo "\" />";
            }
            // line 19
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "base_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 19,  112 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  86 => 12,  83 => 11,  79 => 10,  70 => 8,  61 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base_page.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/base_page.html.twig");
    }
}
