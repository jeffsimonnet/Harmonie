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

/* @DataTables/Filter/text.html.twig */
class __TwigTemplate_27b37308186a87c243a83937f12afc0e59fa2f9571786f96b162d306a97972c8 extends Template
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
    <input id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["datatable"] ?? null), "setting", [0 => "name"], "method", false, false, false, 2), "html", null, true);
        echo "-column-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 2), "html", null, true);
        echo "\"
           data-search-column-index=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
            ";
        // line 4
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 4), "placeholder", [], "any", false, false, false, 4), null))) {
            // line 5
            echo "                placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 5), "placeholder", [], "any", false, false, false, 5)), "html", null, true);
            echo "\"
            ";
        }
        // line 7
        echo "           value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "searchValue", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <script>
        document.getElementById('domains').addEventListener('restore', function (e, data) {
            console.log(data);
        });
    </script>
</label>
";
    }

    public function getTemplateName()
    {
        return "@DataTables/Filter/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  52 => 5,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DataTables/Filter/text.html.twig", "/var/www/dev.harmonie.aquaray.com/web/vendor/omines/datatables-bundle/src/Resources/views/Filter/text.html.twig");
    }
}
