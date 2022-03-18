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

/* pages/_modules/faq.html.twig */
class __TwigTemplate_893face7244c3d0a7a3fd2d6ab01e03136469bc6f96c222a2dbda59a97a399cb extends Template
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
        echo "<section>
    <div class=\"encart lien-faq full center\">
        <p>";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter(($context["title"] ?? null), "Vous avez des questions ?")) : ("Vous avez des questions ?")), "html", null, true);
        echo "</p>
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("lien", $context)) ? (_twig_default_filter(($context["lien"] ?? null), "#")) : ("#")), "html", null, true);
        echo "\" class=\"arrow-right-before\">Visiter la FAQ</a>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "pages/_modules/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/faq.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/faq.html.twig");
    }
}
