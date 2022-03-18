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

/* base.html.twig */
class __TwigTemplate_f629154f378dd3ffd2836f0121e7c37fa444a004af7b0e8ae271f233fc8eae3d extends Template
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
            'meta' => [$this, 'block_meta'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('meta', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/favicon.png"), "html", null, true);
        echo "\" />
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KZPX4SL');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body class=\"page\">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KZPX4SL\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        ";
        // line 24
        echo twig_include($this->env, $context, "_flash.html.twig");
        echo "
        ";
        // line 25
        echo twig_include($this->env, $context, "cookie-consent.html.twig");
        echo "
        ";
        // line 26
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("tools_admin");
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "sitename", [], "any", false, false, false, 8), "html", null, true);
    }

    // line 9
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->loadTemplate("pages/_nav.html.twig", "base.html.twig", 26)->display(twig_array_merge($context, ["menu_content" => ((        $this->hasBlock("menu_content", $context, $blocks)) ? (        $this->renderBlock("menu_content", $context, $blocks)) : (""))]));
    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<main>Aucun body défini !</main>";
    }

    // line 28
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "pages/_footer.html.twig");
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("tools_admin");
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 29,  139 => 28,  132 => 27,  125 => 26,  119 => 9,  112 => 8,  104 => 7,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  87 => 26,  83 => 25,  79 => 24,  61 => 10,  59 => 9,  54 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/base.html.twig");
    }
}
