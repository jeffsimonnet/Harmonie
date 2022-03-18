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

/* admin/zone_index.html.twig */
class __TwigTemplate_8f2990d85dc83f90c2575d1a5a2eb3df2d0eb9513add1892db87efdb4c0264b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $_trait_0 = $this->loadTemplate("_dataTables/_table.html.twig", "admin/zone_index.html.twig", 3);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."_dataTables/_table.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'content' => [$this, 'block_content'],
                'javascripts' => [$this, 'block_javascripts'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/zone_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des Zones géographiques";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"bloc | grid-span-12-col | page_index\">
        <div class=\"heading\">
            <h3>Les Zones géographiques</h3>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_zone_new");
        echo "\" class=\"btn_admin icon add\">Ajouter <span>une zone</span></a>
        </div>
        <div class=\"content dataTable\">
            Chargement...
        </div>
        ";
        // line 16
        $this->displayBlock("table_tips", $context, $blocks);
        echo "
    </div>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 22
        $this->displayBlock("table_init_script_noselect", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/zone_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  95 => 21,  91 => 20,  84 => 16,  76 => 11,  71 => 8,  67 => 7,  60 => 5,  49 => 1,  28 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/zone_index.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/admin/zone_index.html.twig");
    }
}
