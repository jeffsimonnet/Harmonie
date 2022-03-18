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

/* _css_modal.html.twig */
class __TwigTemplate_8c772c5fe411a4c0d652b88c7c4035535716964cd3dd7e04260345ddc9af4d2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css_modal' => [$this, 'block_css_modal'],
            'css_modal_raw' => [$this, 'block_css_modal_raw'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('css_modal', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('css_modal_raw', $context, $blocks);
    }

    // line 1
    public function block_css_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["content" => nl2br(twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true))];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 2, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("css_modal_raw", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
    }

    // line 5
    public function block_css_modal_raw($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (array_key_exists("title", $context)) {
            echo "<label for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_check\" class=\"link ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">";
            echo ($context["title"] ?? null);
            echo "</label>";
        }
        // line 7
        echo "    <input type=\"checkbox\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_check\" class=\"css_modal\">
    <div id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_modal\">
        <label for=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_check\"></label>
        <div>
            <label for=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_check\">&times;</label>
            ";
        // line 12
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "_css_modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 12,  94 => 11,  89 => 9,  85 => 8,  80 => 7,  69 => 6,  65 => 5,  52 => 2,  48 => 1,  44 => 5,  41 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_css_modal.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/_css_modal.html.twig");
    }
}
