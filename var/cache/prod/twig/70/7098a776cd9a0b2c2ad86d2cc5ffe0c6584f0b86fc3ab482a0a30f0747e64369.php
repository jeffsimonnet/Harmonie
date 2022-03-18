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

/* pages/_silos/subventions.html.twig */
class __TwigTemplate_1ac1295e6c2f5a7eb3c6111f2b24aceab87c76f844044f20e01b7a097e5e73a7 extends Template
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/_silos/subventions.html.twig", 1);
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
        $this->loadTemplate("pages/_modules/hero.html.twig", "pages/_silos/subventions.html.twig", 5)->displayBlock("split", $context);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        // line 6
        echo "        ";
        $this->loadTemplate("pages/_silos/subventions.html.twig", "pages/_silos/subventions.html.twig", 6, "1768382473")->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "texte", [], "any", false, false, false, 6)]));
        // line 7
        echo "        ";
        $this->loadTemplate("pages/_silos/subventions.html.twig", "pages/_silos/subventions.html.twig", 7, "1034219497")->display(twig_array_merge($context, ["id" => "p1", "data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "produits", [], "any", false, false, false, 7)]));
        // line 8
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/_silos/subventions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  66 => 7,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/subventions.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/subventions.html.twig");
    }
}


/* pages/_silos/subventions.html.twig */
class __TwigTemplate_1ac1295e6c2f5a7eb3c6111f2b24aceab87c76f844044f20e01b7a097e5e73a7___1768382473 extends Template
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
        // line 6
        return "pages/_modules/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/text.html.twig", "pages/_silos/subventions.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/subventions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 6,  69 => 8,  66 => 7,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/subventions.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/subventions.html.twig");
    }
}


/* pages/_silos/subventions.html.twig */
class __TwigTemplate_1ac1295e6c2f5a7eb3c6111f2b24aceab87c76f844044f20e01b7a097e5e73a7___1034219497 extends Template
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
        $this->parent = $this->loadTemplate("pages/_modules/produits.html.twig", "pages/_silos/subventions.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/subventions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 7,  114 => 6,  69 => 8,  66 => 7,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/subventions.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/subventions.html.twig");
    }
}
