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

/* pages/_modules/hero.html.twig */
class __TwigTemplate_e5c4ca174b100f66a5a4ac1e7b0cfad67ea6e80e9a08a007c795e7dd749daac8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'empty' => [$this, 'block_empty'],
            'small' => [$this, 'block_small'],
            'wide' => [$this, 'block_wide'],
            'split' => [$this, 'block_split'],
            '_hero_content' => [$this, 'block__hero_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('empty', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('small', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('wide', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('split', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('_hero_content', $context, $blocks);
    }

    // line 1
    public function block_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_small($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <section class=\"hero bando-small\" style=\"--bg-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", false, false, false, 4), "build/images/illus-blog.jpg")) : ("build/images/illus-blog.jpg"))), "html", null, true);
        echo "');\"></section>
    ";
    }

    // line 7
    public function block_wide($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <section class=\"hero bando-wide\" style=\"--bg-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", false, false, false, 8), "build/images/illus-blog.jpg")) : ("build/images/illus-blog.jpg"))), "html", null, true);
        echo "');\">
        ";
        // line 9
        $this->displayBlock("_hero_content", $context, $blocks);
        echo "
    </section>
";
    }

    // line 13
    public function block_split($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <section class=\"hero bando-split\">
        <div class=\"text\">
            ";
        // line 16
        $this->displayBlock("_hero_content", $context, $blocks);
        echo "
        </div>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "video", [], "any", true, true, false, 18)) {
            // line 19
            echo "            <div class=\"video\">";
            echo twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "video", [], "any", false, false, false, 19);
            echo "</div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 20
($context["hero"] ?? null), "map", [], "any", true, true, false, 20)) {
            // line 21
            echo "            <div class=\"map\">";
            echo twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "map", [], "any", false, false, false, 21);
            echo "</div>
        ";
        } else {
            // line 23
            echo "            <div class=\"image\" style=\"--bg-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", false, false, false, 23), "build/images/illus-blog.jpg")) : ("build/images/illus-blog.jpg"))), "html", null, true);
            echo "')\"></div>
        ";
        }
        // line 25
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "icons", [], "any", true, true, false, 25)) {
            echo "<div class=\"icons\">";
            echo twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "icons", [], "any", false, false, false, 25);
            echo "</div>";
        }
        // line 26
        echo "    </section>
";
    }

    // line 29
    public function block__hero_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <div>
        ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "contenu", [], "any", false, false, false, 31);
        echo "

        ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "cta_link", [], "any", false, false, false, 33))) {
            // line 34
            echo "            <div class=\"center\">
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "cta_link", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"btn primary large grow pulsar\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "cta_label", [], "any", false, false, false, 35), "html", null, true);
            echo "</span></a>
            </div>
        ";
        }
        // line 38
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "pages/_modules/hero.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 38,  162 => 35,  159 => 34,  157 => 33,  152 => 31,  149 => 30,  145 => 29,  140 => 26,  133 => 25,  127 => 23,  121 => 21,  119 => 20,  114 => 19,  112 => 18,  107 => 16,  103 => 14,  99 => 13,  92 => 9,  87 => 8,  83 => 7,  76 => 4,  72 => 3,  66 => 1,  62 => 29,  59 => 28,  57 => 13,  54 => 12,  52 => 7,  49 => 6,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/hero.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/hero.html.twig");
    }
}
