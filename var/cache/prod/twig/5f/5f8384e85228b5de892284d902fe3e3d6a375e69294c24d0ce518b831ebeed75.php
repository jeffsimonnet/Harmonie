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

/* admin/index.html.twig */
class __TwigTemplate_59e8dbd53cbcc7da173530bffec6b29d0d2e4e19333d260e8c1553c5919f69d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu_admin' => [$this, 'block_menu_admin'],
            'haut' => [$this, 'block_haut'],
            'content' => [$this, 'block_content'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Espace admin";
    }

    // line 5
    public function block_menu_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"profil\">
        Administration<br>
    </div>
    <ul class=\"nostyle\">
        <li><div class=\"group\">CMS</div>
            <ul class=\"admin_cms nostyle\">
                ";
        // line 12
        echo twig_call_macro($macros["_self"], "macro_menu", ["admin_page_index", "Pages", "picto-article"], 12, $context, $this->getSourceContext());
        echo "
                ";
        // line 13
        echo twig_call_macro($macros["_self"], "macro_menu", ["admin_blog_index", "Blog", "picto-article"], 13, $context, $this->getSourceContext());
        echo "
                ";
        // line 14
        echo twig_call_macro($macros["_self"], "macro_menu", ["admin_faq_index", "Faq", "picto-article"], 14, $context, $this->getSourceContext());
        echo "
                ";
        // line 15
        echo twig_call_macro($macros["_self"], "macro_menu", ["admin_realisation_index", "Réalisations", "picto-article"], 15, $context, $this->getSourceContext());
        echo "
                ";
        // line 16
        echo twig_call_macro($macros["_self"], "macro_menu", ["admin_temoignage_index", "Témoignages", "picto-article"], 16, $context, $this->getSourceContext());
        echo "
                ";
        // line 17
        echo twig_call_macro($macros["_self"], "macro_menu", ["admin_redirect_index", "Redirections", "picto-article"], 17, $context, $this->getSourceContext());
        echo "
            </ul>
        </li>
        <li><div class=\"group\">Administration</div>
            <ul class=\"admin_cms nostyle\">
                ";
        // line 22
        echo twig_call_macro($macros["_self"], "macro_menu", ["admin_zone_index", "Zones géographiques", "picto-article"], 22, $context, $this->getSourceContext());
        echo "
            </ul>
        </li>
        ";
        // line 34
        echo "    </ul>
";
    }

    // line 37
    public function block_haut($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    Vous êtes connecté sur <span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "sitename", [], "any", false, false, false, 38), "html", null, true);
        echo "</span>.
    <a href=\"javascript:;\" onclick=\"showMenu()\" class=\"btn_private | btn_menu\">Menu</a>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        echo "\" class=\"btn_private | btn_deconnexion\">Déconnexion</a>
";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Aucun contenu à afficher";
    }

    // line 45
    public function macro_menu($__route__ = null, $__title__ = null, $__class__ = null, $__length__ = 2, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "route" => $__route__,
            "title" => $__title__,
            "class" => $__class__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 46
            echo "    ";
            $context["routePrefix"] = twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, ($context["route"] ?? null), "_"), 0, ($context["length"] ?? null)), "_");
            // line 47
            echo "    ";
            $context["currentPrefix"] = twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", [0 => "_route"], "method", false, false, false, 47), "_"), 0, ($context["length"] ?? null)), "_");
            // line 48
            echo "    ";
            $context["active"] = (0 === twig_compare(($context["routePrefix"] ?? null), ($context["currentPrefix"] ?? null)));
            // line 49
            echo "    <li class=\"menu_";
            echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null));
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo ((($context["active"] ?? null)) ? ("active") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</a></li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  153 => 48,  150 => 47,  147 => 46,  131 => 45,  124 => 43,  118 => 40,  112 => 38,  108 => 37,  103 => 34,  97 => 22,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/admin/index.html.twig");
    }
}
