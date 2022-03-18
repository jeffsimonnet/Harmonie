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

/* pages/_modules/tabs.html.twig */
class __TwigTemplate_5ae851cafef599fafe9a829ca1441fd5d301bc39acd9d95ddd015ff450a5e7e8 extends Template
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
        echo "<section class=\"tabs\">
    <div class=\"tabbar\">
        <ul class=\"menu reset\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "                ";
            $context["b"] = ("title_" . $context["i"]);
            // line 6
            echo "                <li";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 6), 1))) {
                echo " class=\"active\"";
            }
            echo "><a href=\"#tab_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" style-hover>";
            $this->displayBlock(($context["b"] ?? null), $context, $blocks);
            echo "</a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
    </div>
    <div class=\"panels\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "            ";
            $context["b"] = ("panel_" . $context["i"]);
            // line 13
            echo "            <div class=\"panel";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), 1))) {
                echo " active";
            }
            echo "\" id=\"tab_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                ";
            // line 14
            $this->displayBlock(($context["b"] ?? null), $context, $blocks);
            echo "
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
</section>
<script>
// TODO handle mutiple modules in the same page
document.querySelectorAll('.tabbar a').forEach((el) => {
    el.addEventListener('click', function() {
        let target = el.getAttribute('href').substr(1);
        document.querySelectorAll('.panels div').forEach((div) => {
            div.classList.toggle('active', div.id == target);
        })
        document.querySelector('.tabbar li.active').classList.remove('active');
        el.parentElement.classList.add('active');
    })
});
</script>";
    }

    public function getTemplateName()
    {
        return "pages/_modules/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 17,  119 => 14,  110 => 13,  107 => 12,  90 => 11,  85 => 8,  62 => 6,  59 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_modules/tabs.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_modules/tabs.html.twig");
    }
}
