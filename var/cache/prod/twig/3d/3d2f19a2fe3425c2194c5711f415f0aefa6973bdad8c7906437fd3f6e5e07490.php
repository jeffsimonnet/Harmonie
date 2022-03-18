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

/* pages/faq/page.html.twig */
class __TwigTemplate_21288c3a7cd70864561cf13629906cb8d3588a7cf566f70d76dbe114ee4a2424 extends Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/faq/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <li><a href=\"/faq/\" style-hover>FAQ</a>
    ";
        // line 5
        $this->displayParentBlock("menu_content", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <main class=\"faq\">
        <section class=\"hero bando-small\" style=\"--bg-image:url('";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bando-faq.jpg"), "html", null, true);
        echo "');\">
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "</h2>
        </section>
        <section class=\"content\">
            <div>";
        // line 14
        echo ($context["faq"] ?? null);
        echo "</div>
            <div class=\"divider\"></div>
            <section class=\"articles\">
                <h3>Questions similaires</h3>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 19
            echo "                    ";
            $this->loadTemplate("pages/_modules/liens.html.twig", "pages/faq/page.html.twig", 19)->displayBlock("lien_faq", $context);
            echo "
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </section>
        </section>
    </main>
    <script>
        function setCurrent(el, preserveDefault) {
            if (!preserveDefault) {
                let initial = document.querySelector('.default-target');
                if(initial) initial.classList.remove('default-target');
            }

            let current = document.querySelector('.current');
            if (current) current.classList.remove('current');

            el = el.parentElement;
            el.classList.add('current');
        }

        let hash = document.location.hash;
        if(!hash) setCurrent(document.querySelector('.sommaire li:first-child a'), true);
        else {
            setCurrent(document.querySelector('.sommaire li a[href=\"' + hash + '\"]'));
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "pages/faq/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 21,  101 => 19,  84 => 18,  77 => 14,  71 => 11,  67 => 10,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/faq/page.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/faq/page.html.twig");
    }
}
