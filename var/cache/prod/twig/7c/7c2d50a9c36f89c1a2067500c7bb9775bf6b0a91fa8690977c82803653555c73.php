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

/* pages/_nav.html.twig */
class __TwigTemplate_210f03264e89882a92131eb297e0e4cd6f05ef42d9acd5528d922359717d930c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav>
    <section>
        <div class=\"menu-mobile\"></div>
        <a href=\"/\" class=\"logo\"></a>
        <ul class=\"menu reset nostyle\">
            ";
        // line 6
        echo ((array_key_exists("menu_content", $context)) ? (_twig_default_filter(($context["menu_content"] ?? null), "")) : (""));
        echo "
            <li class=\"contact\"><a href=\"/contact/\" style-hover>Contact</a></li>
            <li><a href=\"/blog/\" style-hover>Blog</a></li>
        </ul>
        <div class=\"toolbar\">
            <a href=\"";
        // line 11
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 11), "twitter", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 11));
        echo "\" target=\"_blank\" class=\"social hide-text twitter\">Twitter</a>
            <a href=\"";
        // line 12
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 12), "facebook", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 12));
        echo "\" target=\"_blank\" class=\"social hide-text facebook\">Facebook</a>
            <a href=\"";
        // line 13
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 13), "linkedin", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 13));
        echo "\" target=\"_blank\" class=\"social hide-text linkedin\">Linkedin</a>
        </div>
    </section>
</nav>";
    }

    public function getTemplateName()
    {
        return "pages/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  52 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_nav.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_nav.html.twig");
    }
}
