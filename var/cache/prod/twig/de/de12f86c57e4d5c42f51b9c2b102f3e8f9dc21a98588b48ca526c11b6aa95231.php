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

/* _flash.html.twig */
class __TwigTemplate_a59bcf0d9d29d69aadc032e6f76617539ac7914f98a435757b8e15138889bb73 extends Template
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
        echo "    ";
        $context["mode"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "server", [], "any", false, false, false, 1), "get", [0 => "APP_ENV"], "method", false, false, false, 1);
        // line 2
        echo "    ";
        if ((0 !== twig_compare(($context["mode"] ?? null), "prod"))) {
            echo "<a class=\"dev-ribbon left-top mode-";
            echo twig_escape_filter($this->env, ($context["mode"] ?? null), "html", null, true);
            echo " server-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "host", [], "any", false, false, false, 2), "html", null, true);
            echo "\" title=\"Serveur ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "host", [], "any", false, false, false, 2)), "html", null, true);
            echo "\">#</a>";
        }
        // line 3
        echo "    <div id=\"flash-messages\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
            <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
            <div>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
        </div>  
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        if ((array_key_exists("form", $context) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 12), "valid", [], "any", false, false, false, 12))) {
            // line 13
            echo "        <div class=\"alert alert-error\">
            <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
            <div>Une erreur est survenue dans le formulaire ! Merci de vérifier !</div>
        </div>  
        ";
        }
        // line 18
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "_flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  87 => 13,  84 => 12,  78 => 11,  69 => 8,  63 => 6,  58 => 5,  54 => 4,  51 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_flash.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/_flash.html.twig");
    }
}
