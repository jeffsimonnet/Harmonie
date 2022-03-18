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

/* admin/import/blog_index.html.twig */
class __TwigTemplate_464fbc0459f84c7c31724e1177155d9639528175a0248b8dd821e512d98ae109 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $_trait_0 = $this->loadTemplate("_dataTables/_table.html.twig", "admin/import/blog_index.html.twig", 3);
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/import/blog_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Import des anciennes pages";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"bloc | grid-span-12-col | page_index\">
        <div class=\"heading\">
            <h3>Importer une ancienne page du blog</h3>
        </div>
        <div class=\"content dataTable\">
            Chargement...
        </div>
        ";
        // line 15
        $this->displayBlock("table_tips", $context, $blocks);
        echo "
    </div>
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 21
        $this->displayBlock("table_init_script_noselect", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/import/blog_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  91 => 20,  87 => 19,  80 => 15,  71 => 8,  67 => 7,  60 => 5,  49 => 1,  28 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/import/blog_index.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/admin/import/blog_index.html.twig");
    }
}
