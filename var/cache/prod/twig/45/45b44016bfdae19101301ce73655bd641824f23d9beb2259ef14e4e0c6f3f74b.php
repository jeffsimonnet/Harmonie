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

/* pages/_modules/promise.html.twig */
class __TwigTemplate_e68082163ff8f4eb5f991943a4b393fe25d9c6a3496fb3a960859b7f1f8f093c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'text' => [$this, 'block_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"promise\">
    <div class=\"promise-title\">
        ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "    </div>
    <div class=\"promise-text\">
        ";
        // line 6
        $this->displayBlock('text', $context, $blocks);
        // line 7
        echo "    </div>
</section>
";
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<h2 class=\"max\">";
        echo ((array_key_exists("data", $context)) ? (nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "titre", [], "any", false, false, false, 3), "html", null, true))) : (""));
        echo "</h2>";
    }

    // line 6
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ((array_key_exists("data", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "texte", [], "any", false, false, false, 6)) : (""));
    }

    public function getTemplateName()
    {
        return "pages/_modules/promise.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 6,  57 => 3,  51 => 7,  49 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/promise.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/promise.html.twig");
    }
}
