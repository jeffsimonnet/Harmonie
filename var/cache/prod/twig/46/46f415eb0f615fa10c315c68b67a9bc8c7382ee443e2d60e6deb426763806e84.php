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

/* pages/realisations/detail.html.twig */
class __TwigTemplate_c86254feae4b887a4210132b531dea357bf1665ecc9046c566b51bb6b987534e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu_content' => [$this, 'block_menu_content'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/realisations/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((array_key_exists("titre", $context)) ? (_twig_default_filter(($context["titre"] ?? null), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 3), "titre", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 3), "titre", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 3))))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 3), "titre", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, true, false, 3), "titre", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 3))))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "sitename", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<li><a href=\"/realisations/\">Réalisations</a></li>
    <li class=\"current\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 7), "html", null, true);
        echo "\" style-hover>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</a>";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <main class=\"realisations details\">
        <section class=\"slideshow\">
            <div class=\"sliding\">
                ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "slideshow", [], "any", true, true, false, 14)) {
            // line 15
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "slideshow", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 16
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["img"]), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                ";
        } else {
            // line 19
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 19)), "html", null, true);
            echo "\">
                ";
        }
        // line 21
        echo "            </div>
        </section>
        <section class=\"content\">
            <div class=\"infos\">
                ";
        // line 26
        echo "                <a href=\"javascript:;\" class=\"prev\"></a>
                <a href=\"javascript:;\" class=\"next\"></a>
                <h3 class=\"caps green\">INFORMATIONS</h3>
                <ul>
                    <li>Type de réalisation : <b>";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["categorie"] ?? null)), "html", null, true);
        echo "</b></li>
                    <li>Département : <b>";
        // line 31
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["zone"] ?? null), "parent", [], "any", false, true, false, 31), "nom", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["zone"] ?? null), "parent", [], "any", false, true, false, 31), "nom", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "departement", [], "any", false, false, false, 31))) : (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "departement", [], "any", false, false, false, 31))), "html", null, true);
        echo "</b></li>
                </ul>
                <br/>
                <center><a href=\"";
        // line 34
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/formulaire/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 34));
        echo "\" class=\"btn primary\">Demande de devis gratuit</a></center>
            </div>
            <div class=\"text\">
                <h1>";
        // line 37
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "</h1>
                <b>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "ville", [], "any", false, false, false, 38), "html", null, true);
        echo "</b>
                <div class=\"divider\"></div>
                ";
        // line 40
        echo ($context["body"] ?? null);
        echo "
                <center><a href=\"";
        // line 41
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/formulaire/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 41));
        echo "\" class=\"btn primary\">Demande de devis gratuit</a></center>
            </div>
        </section>
    </main>
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        let bullets = Array.from(document.querySelectorAll(\".swiper>*\"));
        function getCurrentBullet() {
            let active = document.querySelector(\".swiper>*.active\")
            return bullets.indexOf(active);
        }
        document.querySelector(\".prev\").addEventListener(\"click\", function() {
            let prev = (getCurrentBullet() + bullets.length - 1) % bullets.length;
            bullets[prev].click();
        })
        document.querySelector(\".next\").addEventListener(\"click\", function() {
            let next = (getCurrentBullet()+1) % bullets.length;
            bullets[next].click();
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "pages/realisations/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 48,  156 => 47,  147 => 41,  143 => 40,  138 => 38,  134 => 37,  128 => 34,  122 => 31,  118 => 30,  112 => 26,  106 => 21,  100 => 19,  97 => 18,  88 => 16,  83 => 15,  81 => 14,  76 => 11,  72 => 10,  65 => 7,  62 => 6,  58 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/realisations/detail.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/realisations/detail.html.twig");
    }
}
