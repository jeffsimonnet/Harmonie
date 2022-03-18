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

/* admin/blog_index.html.twig */
class __TwigTemplate_aaa929474d32ee826551b38a13af7141c92481f21353f22426d1d2416fc64d63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $_trait_0 = $this->loadTemplate("_dataTables/_table.html.twig", "admin/blog_index.html.twig", 3);
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/blog_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des articles de blog";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"bloc | grid-span-12-col | page_index\">
        <div class=\"heading\">
            <h3>Les Articles</h3>
            <div class=\"searchbox | hide-for-small-only\"><input type=\"text\" placeholder=\"Rechercher un article\"></div>
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_blog_new");
        echo "\" class=\"btn_admin icon add\">Ajouter <span>un article</span></a>
        </div>
        <div class=\"content dataTable\">
            Chargement...
        </div>
        <div class=\"content\">
            <p><b>&#8627; Actions groupées</b></p>
            <ul>
                <li>";
        // line 20
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["action" => "brouillon", "route" => "_admin_page_ajax_action"];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 20, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("table_action", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo "</li>
                <li>";
        // line 21
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["action" => "relecture", "route" => "_admin_page_ajax_action"];
        if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 21, $this->getSourceContext());
        }
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
        $this->displayBlock("table_action", $context, $blocks);
        $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
        echo "</li>
                <li>";
        // line 22
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context;
        $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ["action" => "publie", "route" => "_admin_page_ajax_action"];
        if (!twig_test_iterable($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 22, $this->getSourceContext());
        }
        $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_to_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666));
        $this->displayBlock("table_action", $context, $blocks);
        $context = $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4;
        echo "</li>
                <li>";
        // line 23
        $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context;
        $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ["action" => "archive", "route" => "_admin_page_ajax_action"];
        if (!twig_test_iterable($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 23, $this->getSourceContext());
        }
        $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_to_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52));
        $this->displayBlock("table_action", $context, $blocks);
        $context = $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e;
        echo "</li>
            </ul>
        </div>
        ";
        // line 26
        $this->displayBlock("table_tips", $context, $blocks);
        echo "
    </div>
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 32
        $this->displayBlock("table_init_script", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/blog_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 32,  149 => 31,  145 => 30,  138 => 26,  124 => 23,  112 => 22,  100 => 21,  88 => 20,  77 => 12,  71 => 8,  67 => 7,  60 => 5,  49 => 1,  28 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/blog_index.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/admin/blog_index.html.twig");
    }
}
