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

/* @DataTables/Filter/text.js.twig */
class __TwigTemplate_20c2517f4bbb0ea90586096caa6918954d8c1701163d0bb5c9536157fdf2dec9 extends Template
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
        echo "\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["datatable"] ?? null), "setting", [0 => "name"], "method", false, false, false, 1), "js", null, true);
        echo "').on('stateLoaded.dt', function (e, settings, data) {
    \$('#";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["datatable"] ?? null), "setting", [0 => "name"], "method", false, false, false, 2), "js", null, true);
        echo "-column-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 2), "js", null, true);
        echo "').val(data.columns[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 2), "js", null, true);
        echo "].search.search) ;
});
";
    }

    public function getTemplateName()
    {
        return "@DataTables/Filter/text.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DataTables/Filter/text.js.twig", "/var/www/dev.harmonie.aquaray.com/web/vendor/omines/datatables-bundle/src/Resources/views/Filter/text.js.twig");
    }
}
