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

/* pages/blog/index.html.twig */
class __TwigTemplate_6b8b693ec2652fc77d4c3e2188aae84f70fdb46d95b88d971a1398605f8dc0f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu_content' => [$this, 'block_menu_content'],
            'body' => [$this, 'block_body'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["category"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "get", [0 => "categorie"], "method", false, false, false, 3);
        // line 4
        if ((array_key_exists("category", $context) &&  !twig_test_empty(($context["category"] ?? null)))) {
            // line 5
            $context["baseUrl"] = (("/blog/categorie/" . ($context["category"] ?? null)) . "/");
        } else {
            // line 7
            $context["baseUrl"] = "/blog/";
        }
        // line 1
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li><a href=\"/blog/\" style-hover>Actualités</a>";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <main class=\"blog\">
        <section class=\"hero bando-small\" style=\"--bg-image:url('";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bando-actu.jpg"), "html", null, true);
        echo "');\">
            <h2>Toutes nos actualités</h2>
        </section>
        <section class=\"menu\">
            <div>
                <ul class=\"reset\">
                    <li ";
        // line 20
        if (twig_test_empty(($context["categorie"] ?? null))) {
            echo "class=\"current\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content_page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slugTrimmed", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">Tous</a>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["cat"] => $context["label"]) {
            // line 22
            echo "                    <li ";
            echo twig_call_macro($macros["_self"], "macro_configure", [($context["categorie"] ?? null), $context["cat"]], 22, $context, $this->getSourceContext());
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_category", ["category" => $context["cat"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>
            </div>
        </section>
        <section>
            ";
        // line 28
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["articles"] ?? null)), 0))) {
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, [0 => "double", 1 => "reduit", 2 => "reduit", 3 => "reduit", 4 => "simple", 5 => "simple", 6 => "simple", 7 => "simple", 8 => "double", 9 => "double", 10 => "simple"], 0, twig_length_filter($this->env, ($context["articles"] ?? null))));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["type"]) {
                // line 30
                echo "                    ";
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["article" => (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["articles"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null)];
                if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 30, $this->getSourceContext());
                }
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
                $this->loadTemplate("pages/_modules/liens.html.twig", "pages/blog/index.html.twig", 30)->displayBlock("lien_article", $context);
                $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
                // line 31
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        } else {
            // line 33
            echo "                <div class=\"nothing-blog\"><p>Aucun article à afficher.</p></div>
            ";
        }
        // line 35
        echo "        </section>
        ";
        // line 36
        $this->loadTemplate("pages/blog/_menu_pagination.html.twig", "pages/blog/index.html.twig", 36)->display($context);
        // line 37
        echo "    </main>
";
    }

    // line 40
    public function macro_configure($__category__ = null, $__current__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "category" => $__category__,
            "current" => $__current__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 41
            echo "    ";
            if ((0 === twig_compare(($context["category"] ?? null), ($context["current"] ?? null)))) {
                echo "class=\"current\"";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "pages/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 41,  175 => 40,  170 => 37,  168 => 36,  165 => 35,  161 => 33,  158 => 32,  144 => 31,  133 => 30,  115 => 29,  113 => 28,  107 => 24,  94 => 22,  90 => 21,  82 => 20,  73 => 14,  70 => 13,  66 => 12,  59 => 10,  54 => 1,  51 => 7,  48 => 5,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/blog/index.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/blog/index.html.twig");
    }
}
