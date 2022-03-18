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

/* pages/home/home.html.twig */
class __TwigTemplate_013421e53a5d0e4c9eda1d6b44386fcc0bdf6e4035abe47566f84b5e2fea7a70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((array_key_exists("titre", $context)) ? (_twig_default_filter(($context["titre"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, false, false, 3), "titre", [], "any", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, false, false, 3), "titre", [], "any", false, false, false, 3))), "html", null, true);
    }

    // line 5
    public function block_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "pages/home/_menu.html.twig");
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <main class=\"home\">
        ";
        // line 9
        $this->loadTemplate("pages/home/_section_hero.html.twig", "pages/home/home.html.twig", 9)->display($context);
        // line 10
        echo "        ";
        $this->loadTemplate("pages/home/_section_hooks.html.twig", "pages/home/home.html.twig", 10)->display($context);
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_map", ["page" => "home"]));
        echo "</td>
        ";
        // line 12
        $this->loadTemplate("pages/home/_section_history.html.twig", "pages/home/home.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        $this->loadTemplate("pages/home/_section_testimonial.html.twig", "pages/home/home.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        $this->loadTemplate("pages/home/_section_labels.html.twig", "pages/home/home.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate("pages/home/_section_videos.html.twig", "pages/home/home.html.twig", 15)->display($context);
        // line 16
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  87 => 15,  84 => 14,  81 => 13,  79 => 12,  74 => 11,  71 => 10,  69 => 9,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home/home.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/home/home.html.twig");
    }
}
