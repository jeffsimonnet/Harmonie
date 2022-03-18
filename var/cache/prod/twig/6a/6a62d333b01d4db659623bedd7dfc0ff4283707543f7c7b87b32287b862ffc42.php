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

/* _dataTables/_table.html.twig */
class __TwigTemplate_2fad40bf9482ea691b1204c2a045cad605d0c356ea861508c168a2a2436107fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'table_tips' => [$this, 'block_table_tips'],
            'table_action' => [$this, 'block_table_action'],
            'table_init_script' => [$this, 'block_table_init_script'],
            'table_init_script_noselect' => [$this, 'block_table_init_script_noselect'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('table_tips', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('table_action', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('table_init_script', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('table_init_script_noselect', $context, $blocks);
    }

    // line 1
    public function block_table_tips($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"tip\">
        <p>&#9432; Appuyez sur Maj en cliquant sur un titre de colonne pour trier sur plusieurs colonnes simultanément</p>
    </div>
";
    }

    // line 7
    public function block_table_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <a href=\"javascript:;\" onclick=\"return table.action('";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "' , '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), ["action" => ($context["action"] ?? null)]), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["action"] ?? null)), "html", null, true);
        echo "</a>
";
    }

    // line 11
    public function block_table_init_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <script>
        (function() {
            window.table = DataTable('.dataTable', ";
        // line 14
        echo call_user_func_array($this->env->getFunction('datatable_settings')->getCallable(), [($context["datatable"] ?? null)]);
        echo ");
        })();
    </script>
";
    }

    // line 19
    public function block_table_init_script_noselect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <script>
        (function() {
            window.table = DataTable('.dataTable', ";
        // line 22
        echo call_user_func_array($this->env->getFunction('datatable_settings')->getCallable(), [($context["datatable"] ?? null)]);
        echo ", true);
        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "_dataTables/_table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  106 => 20,  102 => 19,  94 => 14,  90 => 12,  86 => 11,  75 => 8,  71 => 7,  64 => 2,  60 => 1,  56 => 19,  53 => 18,  51 => 11,  48 => 10,  46 => 7,  43 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_dataTables/_table.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/_dataTables/_table.html.twig");
    }
}
