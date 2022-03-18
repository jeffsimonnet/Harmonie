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

/* pages/contenu/_contact_email.html.twig */
class __TwigTemplate_d6086ebd3391201ae284caf059c7cea9660edcff89f5014ac6e2348406f8bcc1 extends Template
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
        echo "<p>Demande de contact par le site internet</p>

<p>Un visiteur a rempli les champs suivants :</p>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "civilite", 1 => "nom", 2 => "prenom", 3 => "adresse", 4 => "code_postal", 5 => "ville", 6 => "telephone", 7 => "email", 8 => "nb_logements", 9 => "commentaire"]);
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 6
            echo "        ";
            $context["v"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["infos"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["k"]] ?? null) : null);
            // line 7
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " : ";
            if (twig_test_iterable(($context["v"] ?? null))) {
                echo twig_escape_filter($this->env, twig_join_filter(($context["v"] ?? null), "|"), "html", null, true);
            } else {
                echo strip_tags(($context["v"] ?? null));
            }
            echo "<br/>
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
        return "pages/contenu/_contact_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contenu/_contact_email.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/contenu/_contact_email.html.twig");
    }
}
