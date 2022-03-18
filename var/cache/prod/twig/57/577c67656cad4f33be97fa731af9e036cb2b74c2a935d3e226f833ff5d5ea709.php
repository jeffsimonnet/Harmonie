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

/* pages/blog/article.html.twig */
class __TwigTemplate_e7f2683c15742279ebc47388e755cc4cd1c48f8b3062110f2bedc095db8996dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu_content' => [$this, 'block_menu_content'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/blog/article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <li><a href=\"/blog/categorie/";
        echo twig_escape_filter($this->env, ($context["categorie"] ?? null), "html", null, true);
        echo "/\" style-hover>Actualités</a>
    ";
        // line 5
        $this->displayParentBlock("menu_content", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <main class=\"blog-page\">
        <section class=\"progress\"></section>
        <section class=\"head\">
            <div class=\"flex-col-between\">
                <div>
                    <span>";
        // line 14
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["categorie"] ?? null)), "html", null, true);
        echo " | <b>";
        echo twig_escape_filter($this->env, ($context["temps"] ?? null), "html", null, true);
        echo " min. de lecture</b></span>
                    <h2>";
        // line 15
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "</h2>
                </div>
                <div>
                    <div class=\"author\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\">
                        <span>
                            Posté par Harmonie
                        </span>
                    </div>
                    <div class=\"social\">
                        <a href=\"";
        // line 25
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 25), "twitter", [], "any", false, false, false, 25));
        echo "\" target=\"_blank\" class=\"social hide-text\">Twitter</a>
                        <a href=\"";
        // line 26
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 26), "facebook", [], "any", false, false, false, 26));
        echo "\" target=\"_blank\" class=\"social hide-text\">Facebook</a>
                        <a href=\"";
        // line 27
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 27), "linkedin", [], "any", false, false, false, 27));
        echo "\" target=\"_blank\" class=\"social hide-text\">Linkedin</a>
                    </div>
                </div>
            </div>
            <div class=\"illus\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image"] ?? null)), "html", null, true);
        echo "\">
            </div>
        </section>
        <section class=\"content\">
            <div>";
        // line 36
        echo ($context["body"] ?? null);
        echo "</div>
            ";
        // line 37
        if ( !twig_test_empty(($context["date"] ?? null))) {
            echo "<i>Article publié le ";
            echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
            echo "</i>";
        }
        // line 38
        echo "        </section>
        <section class=\"divider\"></section>
        <section class=\"articles\">
            <h3>Articles similaires</h3>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 43
            echo "                ";
            $this->loadTemplate("pages/_modules/liens.html.twig", "pages/blog/article.html.twig", 43)->displayBlock("lien_article", $context);
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </section>
    </main>
";
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        scrollProgress(document.querySelector('section.progress'));
    </script>
";
    }

    public function getTemplateName()
    {
        return "pages/blog/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 50,  175 => 49,  169 => 45,  152 => 43,  135 => 42,  129 => 38,  123 => 37,  119 => 36,  112 => 32,  104 => 27,  100 => 26,  96 => 25,  87 => 19,  80 => 15,  74 => 14,  67 => 9,  63 => 8,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/blog/article.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/blog/article.html.twig");
    }
}
