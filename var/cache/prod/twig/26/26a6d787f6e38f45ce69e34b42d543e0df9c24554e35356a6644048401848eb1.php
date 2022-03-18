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

/* admin/realisation_edit.html.twig */
class __TwigTemplate_88df2214b54e58b1eedf13e51f3ec837412a0e5fe3b66d2ba3ad169ff4395e44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/realisation_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edition Realisation";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"bloc | grid-span-12-col\">
        <div class=\"heading\">
            <h3>Edition Realisation</h3>
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 9)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_preview", ["page" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\" class=\"btn_admin icon add\" target=\"_blank\">Prévisualiser <span>la réalisation</span></a>";
        }
        // line 10
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_realisation_index");
        echo "\">Retour <span>à la liste</span> &#8634;</a>
        </div>
        <div class=\"content\">
            ";
        // line 13
        echo twig_include($this->env, $context, "_document/page/_form.html.twig");
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/realisation_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  69 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/realisation_edit.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/admin/realisation_edit.html.twig");
    }
}
