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

/* pages/_silos/etancheite.html.twig */
class __TwigTemplate_c10db0ff28294e4f115bf94bcfc8144c94ac78c2be1f154bfc3c0f14b61d23c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/_silos/etancheite.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main class=\"tete-silo\">
        ";
        // line 5
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["hero" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "hero_split_image", [], "any", false, false, false, 5)];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 5, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->loadTemplate("pages/_modules/hero.html.twig", "pages/_silos/etancheite.html.twig", 5)->displayBlock("split", $context);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        // line 6
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_map", ["page" => "etancheite"]));
        echo "</td>
        ";
        // line 7
        $this->loadTemplate("pages/_silos/etancheite.html.twig", "pages/_silos/etancheite.html.twig", 7, "700999329")->display(twig_array_merge($context, ["id" => "p1", "data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "produits_1", [], "any", false, false, false, 7)]));
        // line 8
        echo "        ";
        $this->loadTemplate("pages/_silos/etancheite.html.twig", "pages/_silos/etancheite.html.twig", 8, "416646290")->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "paves", [], "any", false, false, false, 8)]));
        // line 9
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_articles", ["title" => "L'actualité de l'étanchéité", "category" => "etancheite"]));
        echo "
        ";
        // line 10
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["title" => "Vous avez des questions ?", "lien" => "/faq/"];
        if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 10, $this->getSourceContext());
        }
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
        $this->loadTemplate("pages/_modules/faq.html.twig", "pages/_silos/etancheite.html.twig", 10)->display($context);
        $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
        // line 11
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/_silos/etancheite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  78 => 10,  73 => 9,  70 => 8,  68 => 7,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/etancheite.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/etancheite.html.twig");
    }
}


/* pages/_silos/etancheite.html.twig */
class __TwigTemplate_c10db0ff28294e4f115bf94bcfc8144c94ac78c2be1f154bfc3c0f14b61d23c0___700999329 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "pages/_modules/produits.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/produits.html.twig", "pages/_silos/etancheite.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/etancheite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 7,  88 => 11,  78 => 10,  73 => 9,  70 => 8,  68 => 7,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/etancheite.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/etancheite.html.twig");
    }
}


/* pages/_silos/etancheite.html.twig */
class __TwigTemplate_c10db0ff28294e4f115bf94bcfc8144c94ac78c2be1f154bfc3c0f14b61d23c0___416646290 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "pages/_modules/paves.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/paves.html.twig", "pages/_silos/etancheite.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/etancheite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 8,  133 => 7,  88 => 11,  78 => 10,  73 => 9,  70 => 8,  68 => 7,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/etancheite.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/etancheite.html.twig");
    }
}
