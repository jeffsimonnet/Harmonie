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

/* admin/page_edit.html.twig */
class __TwigTemplate_781ed431284e835cd2bfaba3bbcf978169482af0232be0bb7b4c8121b5778eb5 extends Template
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/page_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edition Page";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"bloc | grid-span-12-col\">
        <div class=\"heading\">
            <h3>Edition Page</h3>
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 9)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_preview", ["page" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\" class=\"btn_admin icon add\" target=\"_blank\">Pr??visualiser <span>la page</span></a>";
        }
        // line 10
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_index");
        echo "\">Retour <span>?? la liste</span> &#8634;</a>
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
        return "admin/page_edit.html.twig";
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
        return new Source("", "admin/page_edit.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/admin/page_edit.html.twig");
    }
}
