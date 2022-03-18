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

/* pages/_modules/liens.html.twig */
class __TwigTemplate_572e5dd1ada0ddb71beb6d6788834c473962a1f4632244883cdf8b6df5d4b182 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lien_article' => [$this, 'block_lien_article'],
            'lien_temoignage' => [$this, 'block_lien_temoignage'],
            'lien_video' => [$this, 'block_lien_video'],
            'lien_faq' => [$this, 'block_lien_faq'],
            'lien_devis' => [$this, 'block_lien_devis'],
            'lien_localiser' => [$this, 'block_lien_localiser'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('lien_article', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('lien_temoignage', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('lien_video', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('lien_faq', $context, $blocks);
        // line 43
        echo "
";
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('lien_devis', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('lien_localiser', $context, $blocks);
    }

    // line 1
    public function block_lien_article($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (array_key_exists("article", $context)) {
            // line 3
            echo "        <a href=\"";
            echo $this->extensions['App\Twig\AppExtension']->offuscate(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 3));
            echo "\" class=\"lien-article-blog article-";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "simple")) : ("simple")), "html", null, true);
            echo " block-link\">
            <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, true, false, 4), "image", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, true, false, 4), "image", [], "any", false, false, false, 4), "build/images/illus-blog.jpg")) : ("build/images/illus-blog.jpg"))), "html", null, true);
            echo "\">
            <div class=\"title\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
            ";
            // line 6
            if ((((0 === twig_compare(((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "simple")) : ("simple")), "double")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, true, false, 6), "accroche", [], "any", true, true, false, 6)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 6), "accroche", [], "any", false, false, false, 6)))) {
                echo "<div class=\"accroche\">";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 6), "accroche", [], "any", false, false, false, 6), "html", null, true));
                echo "</div>";
            }
            // line 7
            echo "            <span>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 7), "categorie", [], "any", false, false, false, 7)), "html", null, true);
            echo " | <b>";
            echo twig_escape_filter($this->env, twig_round((twig_length_filter($this->env, twig_split_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 7), "body", [], "any", false, false, false, 7)), " ")) / 300), 0, "ceil"), "html", null, true);
            echo " min. de lecture</b></span>
            <div class=\"arrow-right-before\">Lire l'article</div>
        </a>
    ";
        }
    }

    // line 13
    public function block_lien_temoignage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        if (array_key_exists("temoignage", $context)) {
            // line 15
            echo "        <a class=\"article block-link\" href=\"/temoignage/\">
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "content", [], "any", false, true, false, 16), "image", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "content", [], "any", false, true, false, 16), "image", [], "any", false, false, false, 16), "build/images/bando-videos.jpg")) : ("build/images/bando-videos.jpg"))), "html", null, true);
            echo "\"/>
            <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\DateLocaleFilterRuntime')->dateLocale(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "content", [], "any", false, false, false, 17), "date", [], "any", false, false, false, 17), "month"), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "content", [], "any", false, false, false, 17), "date", [], "any", false, false, false, 17), "Y"), "html", null, true);
            echo "</b></h3>
            <p class=\"date\">";
            // line 18
            echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "content", [], "any", false, false, false, 18), "temoignage", [], "any", false, false, false, 18)), 260))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "content", [], "any", false, false, false, 18), "temoignage", [], "any", false, false, false, 18), 0, 260) . "...")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "content", [], "any", false, false, false, 18), "temoignage", [], "any", false, false, false, 18)));
            echo "</p>
            <div class=\"a\">
                ";
            // line 20
            $context["parts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["temoignage"] ?? null), "title", [], "any", false, false, false, 20), "/");
            // line 21
            echo "                <span>";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["parts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
            echo "</span><br/>
                ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["parts"] ?? null), 1, [], "array", true, true, false, 22)) {
                echo "<span>";
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["parts"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
                echo "</span>";
            }
            // line 23
            echo "            </div>
        </a>
    ";
        }
    }

    // line 28
    public function block_lien_video($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (array_key_exists("video", $context)) {
            // line 30
            echo "    <a class=\"article block-link\" href=\"http://www.youtube.com/watch?v=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "snippet", [], "any", false, false, false, 30), "resourceId", [], "any", false, false, false, 30), "videoId", [], "any", false, false, false, 30), "html", null, true);
            echo "\" data-lity>
        <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "snippet", [], "any", false, true, false, 31), "thumbnails", [], "any", false, true, false, 31), "medium", [], "any", false, true, false, 31), "url", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "snippet", [], "any", false, true, false, 31), "thumbnails", [], "any", false, true, false, 31), "medium", [], "any", false, true, false, 31), "url", [], "any", false, false, false, 31), "build/images/illus-blog.jpg")) : ("build/images/illus-blog.jpg")), "html", null, true);
            echo "\"/>
        <h3>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "snippet", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</h3>
        <div class=\"d\">Mise en ligne : ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\DateLocaleFilterRuntime')->dateLocale(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "snippet", [], "any", false, false, false, 33), "publishedAt", [], "any", false, false, false, 33), "full"), "html", null, true);
            echo "</div>
    </a>
    ";
        } else {
            // line 36
            echo "        <!-- Video undefined -->
    ";
        }
    }

    // line 40
    public function block_lien_faq($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "slug", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "slug", [], "any", false, false, false, 41), "#")) : ("#")), "html", null, true);
        echo "\" class=\"faq_link\" data-count=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, ("00" . ((twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 41), 1)) : (1))),  -2), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "title", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "title", [], "any", false, false, false, 41), "Lien exemple")) : ("Lien exemple")), "html", null, true);
        echo "</a>
";
    }

    // line 46
    public function block_lien_devis($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    <div class=\"encart lien-devis\">
        <h5>#Devis gratuit</h5>
        <p>Choix des travaux pour votre copropriété :</p>
        <div class=\"flex-1 flex-gap\">
            <div class=\"input\">
                <select oninput=\"this.parentElement.nextElementSibling.classList.toggle('disabled', !this.value)\">
                    <option>Choix 1</option>
                    <option>Choix 2</option>
                    <option>Choix 3</option>
                </select>
            </div>
            <a href=\"";
        // line 58
        echo $this->extensions['App\Twig\AppExtension']->offuscate("/formulaire/", twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "offuscateBypass", [], "any", false, false, false, 58));
        echo "\" class=\"btn primary shadow disabled\">Demander un devis</a>
        </div>
    </div>
";
    }

    // line 63
    public function block_lien_localiser($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    <div class=\"encart lien-localiser\">
        <h5>#Retrouvez nos réalisations près de chez vous</h5>
        <p>Votre localisation :</p>
        <div class=\"flex-1 flex-gap\">
            <div class=\"input\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select", [], "any", false, false, false, 69), 'widget', ["attr" => ["onchange" => "this.parentElement.nextElementSibling.classList.toggle('disabled', !this.value)"]]);
        echo "
            </div>
            <a href=\"javascript:;\" onclick=\"goLocaliser(this)\" class=\"btn primary shadow disabled\">Voir les réalisations</a>
        </div>
    </div>
    <script>
        function goLocaliser(link) {
            const select = link.closest('.lien-localiser').querySelector('select').value;
            if (select.length == 2) window.location.href = \"/realisations/?departement[]=\" + select;
            if (select.length == 5) window.location.href = \"/realisations/?ville[]=\" + select;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "pages/_modules/liens.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 69,  236 => 64,  232 => 63,  224 => 58,  211 => 47,  207 => 46,  196 => 41,  192 => 40,  186 => 36,  180 => 33,  176 => 32,  172 => 31,  167 => 30,  164 => 29,  160 => 28,  153 => 23,  147 => 22,  142 => 21,  140 => 20,  135 => 18,  129 => 17,  125 => 16,  122 => 15,  119 => 14,  115 => 13,  103 => 7,  97 => 6,  93 => 5,  89 => 4,  82 => 3,  79 => 2,  75 => 1,  71 => 63,  68 => 62,  66 => 46,  63 => 45,  60 => 43,  58 => 40,  55 => 39,  53 => 28,  50 => 27,  48 => 13,  45 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/liens.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/liens.html.twig");
    }
}
