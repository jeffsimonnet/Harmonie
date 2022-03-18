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

/* pages/temoignage/index.html.twig */
class __TwigTemplate_72ec74810fd4bc3d8c2d10b62659ae2dc8d4c2b7ffc4b0feababca52deb58630 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/temoignage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main class=\"temoignage\">
        <section class=\"hero bando-small\" style=\"--bg-image:url('";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bando-temoignage.jpg"), "html", null, true);
        echo "');\">
            <h2>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
        </section>
        <section class=\"temoignage_timeline\">
            <div class=\"data\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["temoignages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
            // line 11
            echo "                <div class=\"temoignage-card\">
                    <div class=\"spot\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\DateLocaleFilterRuntime')->dateLocale(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temoignage"], "content", [], "any", false, false, false, 12), "date", [], "any", false, false, false, 12), "month"), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temoignage"], "content", [], "any", false, false, false, 12), "date", [], "any", false, false, false, 12), "Y"), "html", null, true);
            echo "</b></div>
                    <div class=\"content\">
                        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temoignage"], "content", [], "any", false, true, false, 14), "image", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temoignage"], "content", [], "any", false, true, false, 14), "image", [], "any", false, false, false, 14), "build/images/bando-videos.jpg")) : ("build/images/bando-videos.jpg"))), "html", null, true);
            echo "\">
                        <p>";
            // line 15
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temoignage"], "content", [], "any", false, false, false, 15), "temoignage", [], "any", false, false, false, 15);
            echo "</p>
                        <p>
                            ";
            // line 17
            $context["parts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temoignage"], "title", [], "any", false, false, false, 17), "/");
            // line 18
            echo "                            <span>";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["parts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
            echo "</span><br/>
                            ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["parts"] ?? null), 1, [], "array", true, true, false, 19)) {
                echo "<span>";
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["parts"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
                echo "</span>";
            }
            // line 20
            echo "                        </p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temoignage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/temoignage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  100 => 20,  94 => 19,  89 => 18,  87 => 17,  82 => 15,  78 => 14,  71 => 12,  68 => 11,  64 => 10,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/temoignage/index.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/temoignage/index.html.twig");
    }
}
