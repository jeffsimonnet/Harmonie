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

/* pages/realisations/index.html.twig */
class __TwigTemplate_ef20109216efcf3a66955ca7dfa1ed46fdb46e97a2b2c4afe4a017a215bbdf19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'filtres' => [$this, 'block_filtres'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/realisations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main class=\"realisations\">
        <section class=\"hero bando-small\" style=\"--bg-image:url(";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/illus-ravalement.jpg"), "html", null, true);
        echo "); margin:0;\"><h3>Nos réalisations</h3></section>
        <section class=\"liste-realisations\">
            ";
        // line 7
        $this->displayBlock("filtres", $context, $blocks);
        echo "
            <div class=\"data\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "                <a class=\"realisation block-link hidden\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "slug", [], "any", false, false, false, 10), "html", null, true);
            echo "\"
                    data-type=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, false, 11), "categorie", [], "any", false, false, false, 11), "html", null, true);
            echo "\"
                    data-ville=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "zone", [], "any", false, false, false, 12), "code", [], "any", false, false, false, 12), "html", null, true);
            echo "\"
                    data-dept=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "zone", [], "any", false, false, false, 13), "parent", [], "any", false, false, false, 13), "code", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
                    >
                    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, true, false, 15), "image", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, true, false, 15), "image", [], "any", false, false, false, 15), "build/images/illus-realisation.jpg")) : ("build/images/illus-realisation.jpg"))), "html", null, true);
            echo "\" loading=\"lazy\">
                    <p><b><em>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</em></b></p>
                    <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, false, 17), "ville", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                    <ul>
                        <li>Type de réalisation : <b>";
            // line 19
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, false, 19), "categorie", [], "any", false, false, false, 19)), "html", null, true);
            echo "</b></li>
                        <li>Département : <b>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "zone", [], "any", false, false, false, 20), "parent", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
            echo "</b></li>
                    </ul>
                    <span class=\"arrow-right-before green\">Voir la réalisation</span>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
            <div class=\"full\"><a href=\"javascript:;\" class=\"btn primary green grow center\" id=\"link-more\">Voir encore plus de réalisations</a></div>
        </section>
    </main>
";
    }

    // line 31
    public function block_filtres($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    <div class=\"menu-mobile\">
        <ul class=\"reset\">
            <li><a href=\"javascript:;\" onclick=\"toggleMenu()\">Filtrer les réalisations</a>
        </ul>
    </div>
    <div class=\"menu\">
        <div>
            <a href=\"javascript:;\" onclick=\"toggleMenu()\">&times</a>
            <span class=\"caps\">Filtres</span>
            <a href=\"javascript:;\" action=\"reset\" class=\"picto-reload-after\">Réinitialiser les filtres</a>
        </div>
        <ul class=\"reset\">
            <li><a href=\"javascript:;\">Type de chantier</a>
                <div class=\"search-list\" id=\"realisation-type\">
                    <ul class=\"nostyle\">
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 48
            echo "                        <li>
                            <label>
                                <input type=\"checkbox\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"/>
                                ";
            // line 51
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
                            </label>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </ul>
                </div>
            <li><a href=\"javascript:;\">Département</a>
                <div class=\"search-text\" id=\"realisation-dept\">
                    <div class=\"input-search search-icon-after\"><input type=\"text\"></div>
                    <ul class=\"nostyle\">
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dept"]) {
            // line 62
            echo "                        <li>
                            <label>
                                <input type=\"checkbox\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "code", [], "any", false, false, false, 64), "html", null, true);
            echo "\"/>
                                ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "code", [], "any", false, false, false, 65), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "
                            </label>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dept'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </ul>
                </div>
            <li><a href=\"javascript:;\">Ville</a>
                <div class=\"search-text\" id=\"realisation-ville\">
                    <div class=\"input-search search-icon-after\"><input type=\"text\"></div>
                    <ul class=\"nostyle\">
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 76
            echo "                        <li>
                            <label>
                                <input type=\"checkbox\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "code", [], "any", false, false, false, 78), "html", null, true);
            echo "\"/>
                                ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 79), "html", null, true);
            echo "
                            </label>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </ul>
                </div>
        </ul>
        <div>
            <a href=\"javascript:;\" onclick=\"toggleMenu()\" class=\"btn primary\">Appliquer les filtres</a>
        </div>
    </div>
";
    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        (function() {
            let maxView = 26;
            let selectedCount;

            let filterType = [];
            let filterVille = [];
            let filterDept = [];

            let filterVille_init = [";
        // line 103
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 103), "query", [], "any", false, false, false, 103), "get", [0 => "ville"], "method", false, false, false, 103), ","), "html", null, true);
        echo "].map(i => '' + i); // Indexes are made of strings and if we have int here, it won't work
            let filterDept_init = [";
        // line 104
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 104), "query", [], "any", false, false, false, 104), "get", [0 => "departement"], "method", false, false, false, 104), ","), "html", null, true);
        echo "].map(i => '' + i); // Indexes are made of strings and if we have int here, it won't work

            let typesIndex = [];
            let villeIndex = [];
            let deptIndex = [];

            let countGlobalEl = document.querySelector('.liste-realisations .menu-mobile a');

            // opening menu mobile
            window.toggleMenu = function() {
                document.querySelector('.liste-realisations .menu').classList.toggle(\"view\");
                return false;
            }

            // opening menu
            document.querySelectorAll('.liste-realisations .menu ul a').forEach(a => {
                a.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    let menu = e.target.closest('li');
                    document.querySelectorAll('.liste-realisations .menu li.open').forEach(li => li!=menu && li.classList.remove('open'));
                    menu.classList.toggle('open');
                    return false;
                })
            })
            // closing menu (clicking outside)
            document.addEventListener('click', function(e) {
                let parent = e.target.closest('.menu')
                if(!parent) document.querySelectorAll('.liste-realisations .menu li.open').forEach(li => li.classList.remove('open'));
            })

            document.getElementById('link-more').addEventListener('click', function() {
                Array.from(document.querySelectorAll(\".data .realisation.selected.hidden\")).slice(0,maxView+1).forEach(tr => tr.classList.remove('hidden'));
            })

            setupCheckboxFilter(document.querySelector(\"#realisation-type\"), filterType);
            setupCheckboxFilter(document.querySelector(\"#realisation-ville\"), filterVille);
            setupCheckboxFilter(document.querySelector(\"#realisation-dept\"), filterDept);

            function setupCheckboxFilter(element, filter) {
                element.addEventListener('change', function(e) {
                    let checked = element.querySelectorAll(\"input:checked\");
                    updateCount(!!checked, e.target.closest('.menu>ul>li').firstElementChild, checked.length);
                    let res = Array.from(checked).map(i => i.value);
                    filter.length = 0
                    if (res) filter.splice(0, res.length, ...res); // We replace only the content, otherwise the filter passed as argument wouldn't be modified
                    sortTable();
                })
            }

            document.querySelectorAll(\".input-search input\").forEach(i => i.addEventListener('input', function(e) {
                let input = e.target;
                let ul = input.parentElement.nextElementSibling;
                ul.children.forEach(li => {
                    console.log(li.textContent);
                    li.classList.toggle('hidden', !li.textContent.toLowerCase().includes(input.value.toLowerCase()))
                })
            }))

            document.querySelectorAll('.data .realisation').forEach(tr => {
                addToIndex(typesIndex, (tr.getAttribute('data-type')), tr);
                addToIndex(villeIndex, (tr.getAttribute('data-ville')), tr);
                addToIndex(deptIndex, (tr.getAttribute('data-dept')), tr);
            })

            function initMenu() {
                Array.from(document.querySelectorAll(\"#realisation-type input[type=checkbox]\")).filter(i => filterType.includes(i.value)).forEach(i => {i.click()});
                Array.from(document.querySelectorAll(\"#realisation-ville input[type=checkbox]\")).filter(i => filterVille.includes(i.value)).forEach(i => {i.click()});
                Array.from(document.querySelectorAll(\"#realisation-dept input[type=checkbox]\")).filter(i => filterDept.includes(i.value)).forEach(i => {i.click()});
            }

            function updateCount(flag, menu, count = 1) {
                if (flag && count) menu.setAttribute('data-count', count);
                else menu.removeAttribute('data-count');

                let countGlobal = Array.from(document.querySelectorAll('.menu [data-count]')).reduce((a,c) => a + 1 *c.getAttribute(\"data-count\"), 0);
                if (countGlobal) countGlobalEl.setAttribute('data-count', countGlobal);
                else countGlobalEl.removeAttribute('data-count');
            }

            function sortTable() {
                selectedCount = 0;
                let table = document.querySelector('.data'); // 
                let all = Array.from(table.querySelectorAll('.realisation'));
                let allFromIndex = filter();
                all.forEach(tr => {
                    let hide = typeof allFromIndex !== 'undefined' && !allFromIndex.includes(tr);
                    tr.classList.toggle('hidden', hide || selectedCount++ > maxView);
                    tr.classList.toggle('selected', !hide);

                    document.getElementById('link-more').classList.toggle('hidden', selectedCount <= maxView);
                });

                function filter() {
                    let result = [];
                    let filtered = false;
                    if (filterType.length) {
                        result.push(...filterType.filter(k => !!typesIndex[k]).map(k => typesIndex[k]));
                        filtered = true;
                    }
                    if (filterVille.length) {
                        result.push(...filterVille.filter(k => !!villeIndex[k]).map(k => villeIndex[k]));
                        filtered = true;
                    }
                    if (filterDept.length) {
                        result.push(...filterDept.filter(k => !!deptIndex[k]).map(k => deptIndex[k]));
                        filtered = true;
                    }
                    if (filtered) return result.flat();
                }
            }

            function addToIndex(index, key, value) {
                key = '' + key; // Make sure this is a string !
                if (!index[key]) index[key] = [];
                index[key].push(value);
            }

            function resetFilters() {
                // We don't reassign an array to these vars because it is used by reference by setupCheckboxFilter
                filterType.length = 0;
                filterVille.length = 0; filterVille.splice(0, filterVille_init.length, ...filterVille_init);
                filterDept.length = 0; filterDept.splice(0, filterDept_init.length, ...filterDept_init);
                document.querySelectorAll('.menu [data-count]').forEach(d => d.removeAttribute('data-count'));
                initMenu();
                sortTable();
            }

            document.querySelectorAll('.liste-realisations [action]').forEach(a => a.addEventListener('click', function(e) {
                let action = e.target.getAttribute('action')
                if (action == \"reset\") {
                    resetFilters();
                }
                return false;                
            }));

            resetFilters();
        })();
    </script>
";
    }

    // line 245
    public function macro_format($__value__ = null, $__suffix__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "suffix" => $__suffix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 246
            echo "    ";
            if (twig_test_empty(($context["value"] ?? null))) {
                echo "NC";
            } else {
                echo twig_escape_filter($this->env, (($context["value"] ?? null) . ($context["suffix"] ?? null)), "html", null, true);
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "pages/realisations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 246,  405 => 245,  261 => 104,  257 => 103,  243 => 93,  239 => 92,  228 => 83,  218 => 79,  214 => 78,  210 => 76,  206 => 75,  198 => 69,  186 => 65,  182 => 64,  178 => 62,  174 => 61,  166 => 55,  156 => 51,  152 => 50,  148 => 48,  144 => 47,  127 => 32,  123 => 31,  115 => 25,  104 => 20,  100 => 19,  95 => 17,  91 => 16,  87 => 15,  82 => 13,  78 => 12,  74 => 11,  69 => 10,  65 => 9,  60 => 7,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/realisations/index.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/realisations/index.html.twig");
    }
}
