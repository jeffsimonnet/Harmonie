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

/* pages/_modules/produits.html.twig */
class __TwigTemplate_1875c78c2ce5e1e75cac575212e672afebce1dafe8fbb162a937c1b4d6b704ba extends Template
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
        $context["iter"] = ((array_key_exists("num", $context)) ? (range(1, ($context["num"] ?? null))) : (((array_key_exists("data", $context)) ? (twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "texte", [], "any", false, false, false, 1))) : (""))));
        // line 2
        if ( !twig_test_empty(($context["iter"] ?? null))) {
            // line 3
            $context["id"] = ((array_key_exists("id", $context)) ? ((($context["id"] ?? null) . "_")) : (""));
            // line 4
            echo "<section class=\"produits\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "produits\">
    ";
            // line 5
            echo ((            $this->hasBlock("title", $context, $blocks)) ? (            $this->renderBlock("title", $context, $blocks)) : (((array_key_exists("data", $context)) ? ((("<h3>" . nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "titre", [], "any", false, false, false, 5), "html", null, true))) . "</h3>")) : (""))));
            echo "
    <div class=\"scroller\">
        <ul class=\"nostyle\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["iter"] ?? null));
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
            foreach ($context['_seq'] as $context["k"] => $context["i"]) {
                // line 9
                echo "                <li";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), 1))) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "panel_";
                echo twig_escape_filter($this->env, ($context["k"] + 1), "html", null, true);
                echo "\">";
                echo ((                $this->hasBlock(("title_" . $context["i"]), $context, $blocks)) ? (                $this->renderBlock(("title_" . $context["i"]), $context, $blocks)) : (((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "texte", [], "any", false, false, false, 9)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "title", [], "any", false, false, false, 9)) : (""))));
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
    </div>
    <div class=\"panels\">
        <div>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["iter"] ?? null));
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
            foreach ($context['_seq'] as $context["k"] => $context["i"]) {
                // line 16
                echo "            <div class=\"panel";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16), 1))) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "panel_";
                echo twig_escape_filter($this->env, ($context["k"] + 1), "html", null, true);
                echo "\">
                <a href=\"javascript:;\" onclick=\"showMenuProduitsMobile(this)\">";
                // line 17
                echo ((                $this->hasBlock(("title_" . $context["i"]), $context, $blocks)) ? (                $this->renderBlock(("title_" . $context["i"]), $context, $blocks)) : (((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "texte", [], "any", false, false, false, 17)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "title", [], "any", false, false, false, 17)) : (""))));
                echo "</a>
                <div class=\"scroll\">";
                // line 18
                echo ((                $this->hasBlock(("panel_" . $context["i"]), $context, $blocks)) ? (                $this->renderBlock(("panel_" . $context["i"]), $context, $blocks)) : (((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "texte", [], "any", false, false, false, 18)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "content", [], "any", false, false, false, 18)) : (""))));
                echo "</div>
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.scrollPanels('#";
            // line 26
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "produits', '";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "panel_');
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/_modules/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 26,  151 => 21,  134 => 18,  130 => 17,  119 => 16,  102 => 15,  96 => 11,  71 => 9,  54 => 8,  48 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/produits.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/produits.html.twig");
    }
}
