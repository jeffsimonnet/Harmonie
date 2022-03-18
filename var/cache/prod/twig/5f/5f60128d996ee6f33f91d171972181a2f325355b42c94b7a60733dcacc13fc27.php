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

/* @DataTables/datatable_html.html.twig */
class __TwigTemplate_eeba64e2268a87f5dec41a6e9b44fb2fb575094e4b5724638bd9b1b43fa9aba1 extends Template
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
        $context["__internal_32fcba87f076ed35adaaa3f0f5232896e277d36609eb377092026cc61cc76baa"] = twig_get_attribute($this->env, $this->source, ($context["datatable"] ?? null), "translationDomain", [], "any", false, false, false, 1);
        // line 2
        echo "
<table id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["datatable"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"";
        if ((array_key_exists("className", $context) &&  !twig_test_empty(($context["className"] ?? null)))) {
            echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
        }
        echo "\">
    <thead>
    <tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["datatable"] ?? null), "columns", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7), [],             // line 1
($context["__internal_32fcba87f076ed35adaaa3f0f5232896e277d36609eb377092026cc61cc76baa"] ?? null)), "html", null, true);
            // line 7
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </tr>
    ";
        // line 17
        echo "    </thead>
    ";
        // line 27
        echo "    <tbody>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@DataTables/datatable_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  70 => 17,  67 => 9,  60 => 7,  58 => 1,  56 => 7,  52 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DataTables/datatable_html.html.twig", "/var/www/dev.harmonie.aquaray.com/web/vendor/omines/datatables-bundle/src/Resources/views/datatable_html.html.twig");
    }
}
