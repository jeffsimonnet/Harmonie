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

/* pages/_footer.html.twig */
class __TwigTemplate_615c97d11f85ff88994266603382db4248a8eb679a642975d3b0cae720be51a4 extends Template
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
        echo "<footer class=\"vcard\">
    <section>
        <div class=\"links\">
            <h6>Nos coordonnées</h6>
            <div class=\"logo\"></div>
            <p><strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "sitename", [], "any", false, false, false, 6), "html", null, true);
        echo "</strong></p>
            <p>
                6 bis, rue du Maréchal Foch<br/>
                78600 MAISONS-LAFFITE<br/>
            </p>
            <ul class=\"nostyle\">
                <li><b>Téléphone :</b> <a class=\"social\" href=\"tel:";
        // line 12
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 12), "phone", [], "any", false, false, false, 12), [" " => ""]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 12), "phone", [], "any", false, false, false, 12), "html", null, true);
        echo "</a></li>
                <li><b>Fax :</b> <a class=\"social\" href=\"tel:";
        // line 13
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 13), "fax", [], "any", false, false, false, 13), [" " => ""]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 13), "fax", [], "any", false, false, false, 13), "html", null, true);
        echo "</a></li>
                <li><b>Email :</b> <a class=\"social\" href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"links hide-for-medium\">
            <h6>Sitemap</h6>
            <ul class=\"nostyle sitemap\">
                <li><a href=\"";
        // line 20
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/ite/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 20));
        echo "\">Isolation thermique</a></li>
                <li><a href=\"";
        // line 21
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/etancheite/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 21));
        echo "\">Etanchéité</a></li>
                <li><a href=\"";
        // line 22
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/ravalement/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 22));
        echo "\">Ravalement</a></li>
                <li><a href=\"";
        // line 23
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/copropriete/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 23));
        echo "\">Copropriété</a></li>
                <li><a href=\"";
        // line 24
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/faq/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 24));
        echo "\">FAQ</a></li>
                <li><a href=\"";
        // line 25
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/plan-du-site/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 25));
        echo "\">Plan du site</a></li>
                <li><a href=\"";
        // line 26
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/mentions-legales/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 26));
        echo "\">Mentions légales</a></li>
            </ul>
        </div>
        <div class=\"links\">
            <h6>Suivez-nous</h6>
            <div class=\"social\">
                <a href=\"";
        // line 32
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 32), "twitter", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 32));
        echo "\" target=\"_blank\" class=\"social before twitter\">Twitter</a>
                <a href=\"";
        // line 33
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 33), "facebook", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 33));
        echo "\" target=\"_blank\" class=\"social before facebook\">Facebook</a>
                <a href=\"";
        // line 34
        echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, false, false, 34), "linkedin", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 34));
        echo "\" target=\"_blank\" class=\"social before linkedin\">Linkedin</a>
            </div>
        </div>
        <div class=\"links\">
            <h6>Une demande ?</h6>
            <ul class=\"nostyle uppercase semibold\">
                <li><a href=\"";
        // line 40
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/contact/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 40));
        echo "\">Contact</a></li>
                <li><a href=\"";
        // line 41
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/formulaire/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 41));
        echo "\">Devis gratuit</a></li>
                <li><a href=\"";
        // line 42
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/contact/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 42));
        echo "\">Subventions</a></li>
            </ul>
        </div>
    </section>
</footer>
<script>
    (function () {
        let href = document.location.href;
        href = href.replace(\"http://\", \"\");
        href = href.replace(\"https://\", \"\");
        href = href.split(\"/\");
        if (href.length > 1) {
            if (href[1] === \"ite\" || href[1] === \"copropriete\" || href[1] === \"subventions\") {
                document.write('<div class=\"sticky-btn yellow\"><a href=\"/subventions/formulaire/\">Faire une demande de subvention</a></div>');
            } else {
                document.write('<div class=\"sticky-btn\"><a href=\"/formulaire/\">Demander un devis gratuit</a></div>');
            }
        }

        window.onscroll = function () {
            let btn = document.querySelector(\".sticky-btn\");
            if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
                btn.classList.add('show');
            } else {
                btn.classList.remove('show');
            }
        };
    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 42,  130 => 41,  126 => 40,  117 => 34,  113 => 33,  109 => 32,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  65 => 14,  59 => 13,  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_footer.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_footer.html.twig");
    }
}
