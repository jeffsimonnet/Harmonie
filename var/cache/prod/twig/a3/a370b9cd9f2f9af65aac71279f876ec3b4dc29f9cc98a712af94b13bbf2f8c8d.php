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

/* _document/page/_form.html.twig */
class __TwigTemplate_7cb7491314fe6693b42299062893744ecbf10c681e2a5cfdd5419f8b24fcb971 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"errors | full\">";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</div>

    <div class=\"status-bloc\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5), 'row');
        echo "
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", true, true, false, 6)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 6), 'row');
        }
        // line 7
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", true, true, false, 7)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 7), 'row');
        }
        // line 8
        echo "
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zone", [], "any", true, true, false, 9)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zone", [], "any", false, false, false, 9), 'row');
        }
        // line 10
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featured", [], "any", true, true, false, 10)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featured", [], "any", false, false, false, 10), 'row');
        }
        // line 11
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featured_home", [], "any", true, true, false, 11)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featured_home", [], "any", false, false, false, 11), 'row');
        }
        // line 12
        echo "    </div>

    <div class=\"double\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", true, true, false, 15)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 15), 'row');
        }
        // line 16
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slug", [], "any", true, true, false, 16)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slug", [], "any", false, false, false, 16), 'row');
        }
        // line 17
        echo "    </div>

    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "target", [], "any", true, true, false, 19)) {
            // line 20
            echo "        <div class=\"double\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "target", [], "any", false, false, false, 20), 'row');
            echo "</div>
        <div class=\"full\">
            <ul>
                <li>La cible de redirection doit commencer par '/' et finir par '/' et ne doit pas contenir d'espace
                <li>Ne pas utiliser de nom de domaine !
                <li>Pour rediriger vers la home, simplement inscrire '/'
            </ul>
        </div>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methode", [], "any", true, true, false, 30)) {
            // line 31
            echo "        <div class=\"full\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methode", [], "any", false, false, false, 31), 'row');
            echo "</div>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portlets", [], "any", true, true, false, 34)) {
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "portlets", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 36
                echo "        <div class=\"full\">
            ";
                // line 37
                echo twig_call_macro($macros["_self"], "macro_checktitle", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), (("<H5>" . twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "vars", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37))) . "</H5>")], 37, $context, $this->getSourceContext());
                echo "
            <fieldset>
                ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["p"], 'row', ["label" => false]);
                echo "
            </fieldset>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", true, true, false, 45)) {
            // line 46
            echo "        <div class=\"full\">
            ";
            // line 47
            echo twig_call_macro($macros["_self"], "macro_checktitle", ["template", "<H5>Configuration (ne pas modifier)</H5>"], 47, $context, $this->getSourceContext());
            echo "
            <fieldset>
                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, false, 49), 'row');
            echo "
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "configuration", [], "any", false, false, false, 50), 'row');
            echo "
            </fieldset>
        </div>
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", true, true, false, 55)) {
            // line 56
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 56), 'row');
            echo "
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slideshow", [], "any", true, true, false, 59)) {
            // line 60
            echo "        <div class=\"double\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slideshow", [], "any", false, false, false, 60), 'row');
            echo "</div>
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accroche", [], "any", true, true, false, 63)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accroche", [], "any", false, false, false, 63), 'row');
        }
        // line 64
        echo "
    ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contenu", [], "any", true, true, false, 65)) {
            // line 66
            echo "        <div class=\"full\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contenu", [], "any", false, false, false, 66), 'row');
            echo "</div>
    ";
        }
        // line 68
        echo "
    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", true, true, false, 69)) {
            // line 70
            echo "    <div class=\"full\" id=\"hero_edit\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 70), "type", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "data", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
        ";
            // line 71
            echo twig_call_macro($macros["_self"], "macro_checktitle", ["hero", "<H5>Hero</H5>",  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 71), "type", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "data", [], "any", false, false, false, 71))], 71, $context, $this->getSourceContext());
            echo "
        <fieldset>
            <div style=\"display:flex; justify-content:space-evenly; padding:1em\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 74), "type", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 75
                echo "                    <div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["type"], 'widget');
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["type"], 'label');
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </div>
            <div style=\"display:flex; justify-content:space-evenly; padding:1em\" id=\"hero_edit_image\">
                ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 79), "image", [], "any", false, false, false, 79), 'row');
            echo "
            </div>
            <div id=\"hero_edit_text\" style=\"display:contents;\">
                ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 82), "contenu", [], "any", false, false, false, 82), 'row');
            echo "
                <div style=\"display:flex;gap:1em;\">
                    <div style=\"flex:1\">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 84), "cta_link", [], "any", false, false, false, 84), 'row');
            echo "</div>
                    <div style=\"flex:1\">";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 85), "cta_label", [], "any", false, false, false, 85), 'row');
            echo "</div>
                </div>
            </div>
        </fieldset>
    </div>
    <script>
        (function() {
            document.querySelectorAll(\"input[name='";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hero", [], "any", false, false, false, 92), "type", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "full_name", [], "any", false, false, false, 92), "html", null, true);
            echo "']\").forEach(i => i.addEventListener('change', function() {
                document.getElementById('hero_edit').setAttribute(\"data-type\", i.value);
            }));
        })()
    </script>
    <style>
        #hero_edit[data-type=''] #hero_edit_image, #hero_edit[data-type=''] #hero_edit_text,
        #hero_edit[data-type='small'] #hero_edit_text { display : none !important;}
    </style>
    ";
        }
        // line 102
        echo "
    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "faq", [], "any", true, true, false, 103)) {
            // line 104
            echo "        <div class=\"full\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "faq", [], "any", false, false, false, 104), 'row');
            echo "</div>
    ";
        }
        // line 106
        echo "
    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "temoignage", [], "any", true, true, false, 107)) {
            // line 108
            echo "        <div class=\"full\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "temoignage", [], "any", false, false, false, 108), 'row');
            echo "</div>
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta", [], "any", true, true, false, 111)) {
            // line 112
            echo "        ";
            $this->loadTemplate("_document/page/_bloc_meta.html.twig", "_document/page/_form.html.twig", 112)->display($context);
            // line 113
            echo "    ";
        }
        // line 114
        echo "
    <div class=\"full\">
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 116), 'widget');
        echo "
        ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_button", [], "any", true, true, false, 117)) {
            echo " | ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_button", [], "any", false, false, false, 117), 'widget');
        }
        // line 118
        echo "    </div>
";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 121
    public function macro_checktitle($__id__ = null, $__title__ = null, $__open__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "title" => $__title__,
            "open" => $__open__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 122
            echo "<input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"toggle-checkbox\" ";
            if (($context["open"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "><label for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo ($context["title"] ?? null);
            echo "<span></span></label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_document/page/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 122,  345 => 121,  338 => 119,  335 => 118,  330 => 117,  326 => 116,  322 => 114,  319 => 113,  316 => 112,  314 => 111,  311 => 110,  305 => 108,  303 => 107,  300 => 106,  294 => 104,  292 => 103,  289 => 102,  276 => 92,  266 => 85,  262 => 84,  257 => 82,  251 => 79,  247 => 77,  237 => 75,  233 => 74,  227 => 71,  222 => 70,  220 => 69,  217 => 68,  211 => 66,  209 => 65,  206 => 64,  202 => 63,  199 => 62,  193 => 60,  191 => 59,  188 => 58,  182 => 56,  180 => 55,  177 => 54,  170 => 50,  166 => 49,  161 => 47,  158 => 46,  156 => 45,  153 => 44,  150 => 43,  140 => 39,  135 => 37,  132 => 36,  127 => 35,  125 => 34,  122 => 33,  116 => 31,  114 => 30,  111 => 29,  98 => 20,  96 => 19,  92 => 17,  87 => 16,  83 => 15,  78 => 12,  73 => 11,  68 => 10,  64 => 9,  61 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_document/page/_form.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/_document/page/_form.html.twig");
    }
}
