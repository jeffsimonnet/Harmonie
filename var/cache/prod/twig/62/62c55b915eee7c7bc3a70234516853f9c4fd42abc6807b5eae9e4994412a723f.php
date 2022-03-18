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

/* _widgets.html.twig */
class __TwigTemplate_7ceabb98db08c6894192da64cff304e7dcb5fc286f46e62e8f44e263a87d0365 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'delete_button_widget' => [$this, 'block_delete_button_widget'],
            'slug_input_row' => [$this, 'block_slug_input_row'],
            'select2_select_widget' => [$this, 'block_select2_select_widget'],
            'with_shortcodes_row' => [$this, 'block_with_shortcodes_row'],
            'with_shortcodes_nosommaire_row' => [$this, 'block_with_shortcodes_nosommaire_row'],
            'shortcodes' => [$this, 'block_shortcodes'],
            'elfinder_widget' => [$this, 'block_elfinder_widget'],
            'elfinder_slideshow_widget' => [$this, 'block_elfinder_slideshow_widget'],
            'pave_row' => [$this, 'block_pave_row'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'recaptcha_button_widget' => [$this, 'block_recaptcha_button_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('delete_button_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('slug_input_row', $context, $blocks);
        // line 60
        $this->displayBlock('select2_select_widget', $context, $blocks);
        // line 70
        $this->displayBlock('with_shortcodes_row', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('with_shortcodes_nosommaire_row', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('shortcodes', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('elfinder_widget', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('elfinder_slideshow_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('pave_row', $context, $blocks);
        // line 129
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 140
        $this->displayBlock('recaptcha_button_widget', $context, $blocks);
    }

    // line 8
    public function block_delete_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <button class=\"btn delete\"
            ";
        // line 10
        if ((array_key_exists("active", $context) &&  !($context["active"] ?? null))) {
            // line 11
            echo "                disabled=\"disabled\"
                title=\"Action impossible !\"
            ";
        } else {
            // line 14
            echo "                onclick=\"return confirm(`";
            echo twig_escape_filter($this->env, ($context["confirm"] ?? null), "html", null, true);
            echo "`) && _submitDelete(this);\"
                data-action-route=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"
                data-csrf-token=\"";
            // line 16
            ((array_key_exists("csrf", $context)) ? (print (twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf"] ?? null)), "html", null, true))) : (print ("0")));
            echo "\"
            ";
        }
        // line 18
        echo "            >";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</button>
";
    }

    // line 21
    public function block_slug_input_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</div>
    <div class=\"slug-text\">
        <input type=\"hidden\" ";
        // line 24
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
        <span>";
        // line 25
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home"), 0,  -1), "html", null, true);
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "</span>
        <input type=\"text\" id=\"slug\" required pattern=\"^[^/][^' ']+[^/]\$\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "
        <a href=\"javascript:;\">&#x21BA;</a>
    </div>
    <p>Le Slug ne doit pas contenir d'espaces, ni de caractère spécial. <br/>Il ne doit pas avoir de'/' avant ou après</p>
    <script>
        (function () {
            let slug_hidden = document.getElementById('";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "');
            let slug_user = document.getElementById('slug'); // TODO not ready for many slugs on the same page => not necessary
            let slug_refresh = document.querySelector('#slug + a');
        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 35), "title", [], "any", true, true, false, 35)) {
            // line 36
            echo "                let title = document.getElementById('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "');
            ";
            // line 37
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), ""))) {
                echo "title.addEventListener('input', updateSlug);";
            }
            // line 38
            echo "        ";
        }
        // line 39
        echo "
                slug_refresh.addEventListener('click', updateSlug);
                slug_user.addEventListener('keyup', function () {
                    updateSlugHidden(slug_user.value);
                });

                function updateSlug() {
                    let s = generateSlug(title.value);
                    slug_user.value = s;
                    updateSlugHidden(s);
                }
                function updateSlugHidden(s) {
                    slug_hidden.value = '";
        // line 51
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "' + s + '";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "';
                    slug_hidden.dispatchEvent(new Event('change'));
                }

                slug_user.value = '";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "html", null, true);
        echo "'.substring('";
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "'.length, '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "html", null, true);
        echo "'.length - '";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "'.length);
            })()
    </script>
";
    }

    // line 60
    public function block_select2_select_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " autocomplete=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "route", [], "any", false, false, false, 61));
        echo "\">
        ";
        // line 62
        if (twig_test_iterable(($context["value"] ?? null))) {
            // line 63
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                // line 64
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
        }
        // line 67
        echo "    </select>";
    }

    // line 70
    public function block_with_shortcodes_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    ";
        // line 72
        $this->displayBlock("shortcodes", $context, $blocks);
        echo "
";
    }

    // line 75
    public function block_with_shortcodes_nosommaire_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    ";
        // line 77
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["nosommaire" => true];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 77, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("shortcodes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
    }

    // line 80
    public function block_shortcodes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "    <div>
        Liste des shortcodes :
        <select style=\"display: inline-block;width: 20em;\">
            <option>[formulaire type=\"devis\"]</option>
            <option>[formulaire type=\"contact\"]</option>
            <option>[formulaire type=\"subvention\"]</option>
            <option>[localiser]</option>
            ";
        // line 88
        if ( !array_key_exists("nosommaire", $context)) {
            echo "<option>[sommaire]</option>, ";
        }
        // line 89
        echo "        </select>&nbsp;
        <a href=\"javascript:;\" onclick=\"CKEDITOR.instances.";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
        echo ".insertText('\\n\\n' + this.previousElementSibling.value + '\\n\\n');
                        return false;\"> &rarr; Insérer</a>
    </div>
";
    }

    // line 95
    public function block_elfinder_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    <div class=\"elfinder-field\" data-elfinder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elfinder", ["instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null)]), "html", null, true);
        echo "\">
        <input type=\"hidden\" action=\"value\" ";
        // line 97
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
        <button action=\"choose\" type=\"button\" class=\"btn\">Choisir une image</button>
        <a action=\"edit\" href=\"javascript:;\">&#x270E;</a>
        <img action=\"preview\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter(($context["value"] ?? null), "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==")) : ("data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==")), "html", null, true);
        echo "\">
    </div>
";
    }

    // line 104
    public function block_elfinder_slideshow_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "    <div class=\"elfinder-slideshow-field\" data-elfinder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elfinder", ["instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null)]), "html", null, true);
        echo "\">
        <input type=\"hidden\" action=\"value\" ";
        // line 106
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
        <button action=\"choose\" type=\"button\" class=\"btn\">Ajouter une image</button>
        <div action=\"preview\"></div>
    </div>
";
    }

    // line 112
    public function block_pave_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "    <div class=\"form-grid\">
        <div class=\"full\">
            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
        </div>
        <div class=\"half\">
            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 118), 'row');
        echo "
            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 119), 'row');
        echo "
            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cta_link", [], "any", false, false, false, 120), 'row');
        echo "
            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cta_label", [], "any", false, false, false, 121), 'row');
        echo "
        </div>
        <div class=\"half\">
            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accroche", [], "any", false, false, false, 124), 'row');
        echo "
        </div>
    </div>
";
    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "<div class=\"expanded-group\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 132
            echo "            <div class=\"expanded-row\">";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            // line 135
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "</div>";
    }

    // line 140
    public function block_recaptcha_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 141), "")) : ("")) . " g-recaptcha"))]);
        // line 142
        $context["id"] = twig_random($this->env);
        // line 143
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    <button type=\"submit\" class=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 144), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</button>
    <script src=\"https://www.google.com/recaptcha/api.js?render=";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 145), "server", [], "any", false, false, false, 145), "get", [0 => "RECAPTCHA_PUBLIC_KEY"], "method", false, false, false, 145), "html", null, true);
        echo "\"></script>
    <script>
            function submitContact(form) {
                if (form.checkValidity()) {
                    grecaptcha.ready(function () {
                        grecaptcha.execute('";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 150), "server", [], "any", false, false, false, 150), "get", [0 => "RECAPTCHA_PUBLIC_KEY"], "method", false, false, false, 150), "html", null, true);
        echo "', {action: 'submit'}).then(function (token) {
                            document.getElementById(\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "html", null, true);
        echo "\").value = token;
                            form.submit();
                        });
                    });
                } else {
                    form.classList.add(\"show_validity\");
                }
            }
    </script>
";
    }

    public function getTemplateName()
    {
        return "_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  467 => 151,  463 => 150,  455 => 145,  449 => 144,  444 => 143,  442 => 142,  440 => 141,  436 => 140,  432 => 137,  425 => 135,  423 => 134,  421 => 133,  419 => 132,  415 => 131,  411 => 130,  407 => 129,  399 => 124,  393 => 121,  389 => 120,  385 => 119,  381 => 118,  375 => 115,  371 => 113,  367 => 112,  352 => 106,  347 => 105,  343 => 104,  336 => 100,  324 => 97,  319 => 96,  315 => 95,  307 => 90,  304 => 89,  300 => 88,  291 => 81,  287 => 80,  275 => 77,  270 => 76,  266 => 75,  260 => 72,  255 => 71,  251 => 70,  247 => 67,  244 => 66,  233 => 64,  228 => 63,  226 => 62,  219 => 61,  215 => 60,  201 => 55,  192 => 51,  178 => 39,  175 => 38,  171 => 37,  166 => 36,  164 => 35,  158 => 32,  149 => 26,  144 => 25,  138 => 24,  132 => 22,  128 => 21,  121 => 18,  116 => 16,  112 => 15,  107 => 14,  102 => 11,  100 => 10,  97 => 9,  93 => 8,  89 => 140,  87 => 129,  85 => 112,  82 => 111,  80 => 104,  77 => 103,  75 => 95,  72 => 94,  70 => 80,  67 => 79,  65 => 75,  62 => 74,  60 => 70,  58 => 60,  56 => 21,  53 => 20,  51 => 8,  48 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "_widgets.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/_widgets.html.twig");
    }
}
