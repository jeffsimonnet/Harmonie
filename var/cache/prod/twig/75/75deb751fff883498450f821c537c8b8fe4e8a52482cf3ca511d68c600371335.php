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

/* pages/formulaire/_funnel_subventions_email.html.twig */
class __TwigTemplate_5b75f2d7a59478759d53754b03bf50e9acf12d4391bd69f21a8bbf7af70bf497 extends Template
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
        echo "<p>Demande de devis par le site internet</p>

<p>Un visiteur a rempli les champs suivants :</p>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "nom", 1 => "prenom", 2 => "email", 3 => "telephone", 4 => "adresse", 5 => "code_postal", 6 => "ville", 7 => "type_bien", 8 => "lots", 9 => "description"]);
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 6
            echo "        ";
            $context["v"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["infos"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["k"]] ?? null) : null);
            // line 7
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " : ";
            echo strip_tags(($context["v"] ?? null));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "pages/formulaire/_funnel_subventions_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/formulaire/_funnel_subventions_email.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/formulaire/_funnel_subventions_email.html.twig");
    }
}
