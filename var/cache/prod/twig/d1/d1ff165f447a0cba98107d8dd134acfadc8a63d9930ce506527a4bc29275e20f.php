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

/* pages/_modules/map.html.twig */
class __TwigTemplate_6eafbda019b9fee83ad59a1e54bb4ed5dfc29b57a7159aa0a15ea0c2c0964b57 extends Template
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
        echo "<section class=\"map-realisations\" data-default=\"95\">
    <div class=\"team-head\">
        <h3>Nos réalisations</h3>
    </div>
    <div>
        <form method=\"get\" action=\"/realisations/\">
            <div class=\"col\">
                Choisissez un département
                <div class=\"select_multiple select_multiple_departements\">
                    <p>Un ou plusieurs choix possibles</p>
                    <ul>
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dept"]) {
            // line 13
            echo "                            <li>
                                <label>
                                    <input type=\"checkbox\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "code", [], "any", false, false, false, 15), "html", null, true);
            echo "\" name=\"departement[]\"/>
                                    ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "code", [], "any", false, false, false, 16), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "
                                </label>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dept'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </ul>
                </div>
            </div>
            <div class=\"col\">
                Choisissez une ville
                <div class=\"select_multiple select_multiple_ville\">
                    <p>Un ou plusieurs choix possibles</p>
                    <ul>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 29
            echo "                            <li>
                                <label>
                                    <input type=\"checkbox\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "code", [], "any", false, false, false, 31), "html", null, true);
            echo "\" name=\"ville[]\" data-dept=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "code", [], "any", false, false, false, 31), 0, 2), "html", null, true);
            echo "\"/>
                                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "
                                </label>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>
            </div>
            <div class=\"bt\">
                <br/>
                <button class=\"btn secondary green grow shadow\">Rechercher</button>
            </div>
        </form>
    </div>
    <div class=\"map\">
        <svg width=\"660\" height=\"518\" viewBox=\"0 0 660 518\" fill=\"#DBDBDB\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M272.082 183.302L307.094 188.65L310.073 179.798L294.43 180.72L286.422 155.456L268.544 153.059L251.597 167.627L272.082 183.302Z\" data-id=\"75\" data-x=\"27\" data-y=\"30\"/>
            <path d=\"M353.837 196.764L321.62 179.061L320.316 179.245L313.798 199.53L274.131 193.445L269.289 224.425L290.892 228.851L326.275 219.262L347.319 247.108L356.631 210.779L353.837 196.764Z\" data-id=\"94\" data-x=\"32\" data-y=\"37\"/>
            <path d=\"M360.542 124.291L355.7 155.456L366.687 211.148L337.077 328.247L341.919 386.152L304.859 430.594L308.77 455.674L339.87 480.016L321.62 517.451L431.123 510.443L495 458.993L498.166 408.281L615.677 381.91L660 288.415L639.142 261.86L637.652 234.937L615.491 216.311L647.895 175.004L538.764 95.5236L528.335 55.507L515.485 53.2941L498.538 70.0753L385.31 57.7199L350.485 67.3091L346.574 93.4951L360.542 124.291Z\" data-id=\"77\" data-x=\"48\" data-y=\"48\"/>
            <path d=\"M273.2 125.214L272.082 143.654L294.058 146.605L301.507 170.578L324.041 169.103L351.416 184.593L345.643 155.825L350.299 125.582L339.311 101.425L302.624 125.214H273.2Z\" data-id=\"93\" data-x=\"31.5\" data-y=\"25\"/>
            <path d=\"M344.34 259.094L322.365 230.511L289.588 239.362L268.917 234.937L233.719 215.574L182.878 264.257L190.327 280.485L170.587 310.728L151.405 314.417L157.365 327.325L147.867 368.08L149.171 383.939L156.806 391.499L162.952 436.68L181.575 445.162L235.768 417.501L259.978 428.75L297.037 424.509L331.676 383.017L327.207 327.325L344.34 259.094Z\" data-id=\"91\" data-x=\"25\" data-y=\"60\"/>
            <path d=\"M221.614 186.99L236.14 205.616L260.164 218.709L264.633 190.125L235.768 168.181L262.212 145.683L263.143 125.951L240.237 136.647L212.302 163.017L221.614 186.99Z\" data-id=\"92\" data-x=\"22.5\" data-y=\"30\"/>
            <path d=\"M112.483 67.6779L162.393 89.2538H203.922L238.747 126.689L262.771 115.44H299.645L336.891 91.2822L340.988 64.7274L329.255 49.2371L220.124 20.4694L188.465 3.31935L161.462 25.4484L84.3624 18.8097L80.2653 0L72.2574 4.05699L48.6062 59.1952L82.8726 72.2882L112.483 67.6779Z\" data-id=\"95\" data-x=\"23\" data-y=\"12\" />
            <path d=\"M137.252 307.225L164.628 301.877L179.154 279.748L170.959 262.045L226.27 208.935L212.861 191.969L200.57 160.436L230.553 132.405L199.639 99.0274H160.344L111.179 77.8205L81.7551 82.4307L41.7156 67.1248L0 77.636L37.0598 207.275L52.1445 227.191L44.509 246.923L99.8194 312.204L98.3296 334.333L139.486 359.966L146.936 328.247L137.252 307.225Z\" data-id=\"78\" data-x=\"12\" data-y=\"35\"/>
        </svg>
        <div class=\"fill\">
            <div class=\"p\"></div>
            <div class=\"t1\"></div>
            <div class=\"t2\"></div>
        </div>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 62
            echo "            <div class=\"infos\" id=\"real-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "_id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                <div class=\"dept\">
                    <div class=\"t\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "selected", [], "any", false, false, false, 64), "zone", [], "any", false, false, false, 64), "parent", [], "any", false, false, false, 64), "code", [], "any", false, false, false, 64), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "selected", [], "any", false, false, false, 64), "zone", [], "any", false, false, false, 64), "parent", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
            echo "</div>
                    <div class=\"n\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "count", [], "any", false, false, false, 65), "html", null, true);
            echo " réalisation";
            echo (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["r"], "count", [], "any", false, false, false, 65), 1))) ? ("s") : (""));
            echo "</div>
                </div>
                <div class=\"ex\">
                    <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "selected", [], "any", false, true, false, 68), "content", [], "any", false, true, false, 68), "image", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "selected", [], "any", false, true, false, 68), "content", [], "any", false, true, false, 68), "image", [], "any", false, false, false, 68), "build/images/illus-realisation.jpg")) : ("build/images/illus-realisation.jpg"))), "html", null, true);
            echo "\">
                        <div class=\"n\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "selected", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
            echo "</div>
                        <div class=\"c\">&bull; &nbsp; Ville : <strong>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "selected", [], "any", false, false, false, 70), "zone", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
            echo "</strong></div>
                        <div class=\"t\">&bull; &nbsp; Type de réalisation : <strong>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "selected", [], "any", false, false, false, 71), "type", [], "any", false, false, false, 71), "html", null, true);
            echo "</strong></div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "pages/_modules/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 75,  171 => 71,  167 => 70,  163 => 69,  159 => 68,  151 => 65,  145 => 64,  139 => 62,  135 => 61,  108 => 36,  98 => 32,  92 => 31,  88 => 29,  84 => 28,  74 => 20,  62 => 16,  58 => 15,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/map.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/map.html.twig");
    }
}
