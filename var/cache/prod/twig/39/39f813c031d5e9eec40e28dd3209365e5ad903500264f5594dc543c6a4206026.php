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

/* pages/_modules/paves.html.twig */
class __TwigTemplate_8de3aa0d8cbf56b69f93580020df7be4caaff0de13812ff4e108ec93a7cbca3b extends Template
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
        echo "<section class=\"paves\">
    <h4 class=\"yellow caps\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "titre", [], "any", false, false, false, 2), "html", null, true);
        echo "</h4>
    <div>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pave1", [], "any", false, false, false, 4), 1 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pave2", [], "any", false, false, false, 4), 2 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pave3", [], "any", false, false, false, 4), 3 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pave4", [], "any", false, false, false, 4)]);
        foreach ($context['_seq'] as $context["_key"] => $context["pave"]) {
            // line 5
            echo "        <div style=\"--bg-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, $context["pave"], "image", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["pave"], "image", [], "any", false, false, false, 5), "build/images/illus-realisation.jpg")) : ("build/images/illus-realisation.jpg"))), "html", null, true);
            echo "');\">
            <h3 class=\"yellow\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pave"], "titre", [], "any", false, false, false, 6), "html", null, true);
            echo "</h3>
            <div>
                <p>";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["pave"], "accroche", [], "any", false, false, false, 8);
            echo "</p>
            </div>
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pave"], "cta_link", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"btn primary yellow\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pave"], "cta_label", [], "any", false, false, false, 10), "html", null, true);
            echo "</a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "pages/_modules/paves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  64 => 10,  59 => 8,  54 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/paves.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/paves.html.twig");
    }
}
