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

/* base_admin.html.twig */
class __TwigTemplate_e8cda4f0818fc62c1097c02313eae883eeb5627ae211efcac623aa0e61588804 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'haut' => [$this, 'block_haut'],
            'menu_admin' => [$this, 'block_menu_admin'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">
    <head>
        <meta charset=\"utf-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/favicon.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"admin\">
        ";
        // line 14
        echo twig_include($this->env, $context, "_flash.html.twig");
        echo "
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
            ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        echo "
            ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("tools_admin");
        echo "
        ";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "sitename", [], "any", false, false, false, 10), "html", null, true);
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <main>
            <section class=\"header\">";
        // line 17
        $this->displayBlock('haut', $context, $blocks);
        echo "</section>
            <section class=\"menu\">";
        // line 18
        $this->displayBlock('menu_admin', $context, $blocks);
        echo "</section>
            <section class=\"main\">";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        echo "</section>
            <footer>Un service proposé par <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-kiwilab.png"), "html", null, true);
        echo "\" style=\"vertical-align:bottom;\"></footer>
        </main>
        ";
    }

    // line 17
    public function block_haut($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_menu_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
            ";
        // line 25
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("admin");
        echo "
            ";
        // line 26
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("tools_admin");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 26,  156 => 25,  151 => 24,  147 => 23,  141 => 19,  135 => 18,  129 => 17,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  107 => 16,  103 => 15,  96 => 10,  90 => 8,  86 => 7,  81 => 6,  77 => 5,  72 => 28,  69 => 23,  67 => 15,  63 => 14,  57 => 11,  52 => 10,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base_admin.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/base_admin.html.twig");
    }
}
