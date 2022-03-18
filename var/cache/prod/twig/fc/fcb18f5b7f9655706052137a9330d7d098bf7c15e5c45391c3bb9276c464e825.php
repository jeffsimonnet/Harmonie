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

/* @DataTables/Filter/select.html.twig */
class __TwigTemplate_7087830a538550e0f76a427c1fa78f29fc8d5d574e75fad314e44fb01896c764 extends Template
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
        echo "<label>
    <select
            id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["datatable"] ?? null), "setting", [0 => "name"], "method", false, false, false, 3), "html", null, true);
        echo "-column-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
            data-search-column-index=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
    >
        ";
        // line 6
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 6), "placeholder", [], "any", false, false, false, 6), null))) {
            // line 7
            echo "            <option class=\"placeholder\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 7), "placeholder", [], "any", false, false, false, 7)), "html", null, true);
            echo "</option>
        ";
        }
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 9), "choices", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 10
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </select>
</label>
";
    }

    public function getTemplateName()
    {
        return "@DataTables/Filter/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  65 => 10,  60 => 9,  54 => 7,  52 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DataTables/Filter/select.html.twig", "/var/www/dev.harmonie.aquaray.com/web/vendor/omines/datatables-bundle/src/Resources/views/Filter/select.html.twig");
    }
}
