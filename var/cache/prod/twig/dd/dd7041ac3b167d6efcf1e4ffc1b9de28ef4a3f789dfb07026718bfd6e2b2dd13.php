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

/* pages/blog/_menu_pagination.html.twig */
class __TwigTemplate_61d807c6f98efd4245aaa1a7eac8d97be52670f1de974f64dcb6fed0e60e9d1a extends Template
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
        echo "<section class=\"navigation\">
    <div>
        <a ";
        // line 3
        if ((1 === twig_compare(($context["current"] ?? null), 1))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["current"] ?? null) - 1), "html", null, true);
            echo "/\"";
        }
        echo " class=\"prev\">&lt;Précédent</a>
        <span></span>
        ";
        // line 5
        $context["min"] = (((1 === twig_compare(($context["current"] ?? null), 2))) ? ((($context["current"] ?? null) - 2)) : (1));
        // line 6
        echo "        ";
        $context["max"] = (($context["min"] ?? null) + 5);
        // line 7
        echo "        ";
        if ((1 === twig_compare(($context["max"] ?? null), twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "pages", [], "any", false, false, false, 7)))) {
            // line 8
            echo "            ";
            $context["max"] = twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "pages", [], "any", false, false, false, 8);
            // line 9
            echo "            ";
            if ((0 === twig_compare(($context["max"] ?? null), 0))) {
                $context["max"] = 1;
            }
            // line 10
            echo "            ";
            if ((1 === twig_compare(($context["max"] ?? null), 5))) {
                $context["min"] = (($context["max"] ?? null) - 5);
            }
            // line 11
            echo "        ";
        }
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["min"] ?? null), ($context["max"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/\" ";
            if ((0 === twig_compare(($context["current"] ?? null), $context["i"]))) {
                echo "class=\"current\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <span></span>
        <a ";
        // line 16
        if ((-1 === twig_compare(($context["current"] ?? null), twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "pages", [], "any", false, false, false, 16)))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["current"] ?? null) + 1), "html", null, true);
            echo "/\" ";
        }
        echo " class=\"next\">Suivant&gt;</a>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "pages/blog/_menu_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  96 => 15,  80 => 13,  75 => 12,  72 => 11,  67 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  51 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/blog/_menu_pagination.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/blog/_menu_pagination.html.twig");
    }
}
