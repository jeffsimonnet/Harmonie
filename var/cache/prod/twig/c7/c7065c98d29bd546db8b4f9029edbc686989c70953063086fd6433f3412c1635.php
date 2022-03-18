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

/* pages/contenu/page.html.twig */
class __TwigTemplate_001f94e09c9d1b3cc31e8a747dab60fd7b7f9b4f8786a9f3d9eaff29c8314b49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu_content' => [$this, 'block_menu_content'],
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/contenu/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li><a href=\"#\">";
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "</a>";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main class=\"content\">
        ";
        // line 7
        $this->loadTemplate("pages/_modules/hero.html.twig", "pages/contenu/page.html.twig", 7)->displayBlock(((twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "type", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "type", [], "any", false, false, false, 7), "empty")) : ("empty")), $context);
        echo "
        <section class=\"content\">
            <div>
                ";
        // line 10
        echo ($context["body"] ?? null);
        echo "
            </div>
        </section>
        ";
        // line 13
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 13), "/contact/"))) {
            // line 14
            echo "            <section class=\"contact\">
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_contact"));
            echo "
            </section>
        ";
        }
        // line 18
        echo "        ";
        // line 25
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/contenu/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  86 => 18,  80 => 15,  77 => 14,  75 => 13,  69 => 10,  63 => 7,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contenu/page.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/contenu/page.html.twig");
    }
}
