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

/* _document/page/_bloc_meta.html.twig */
class __TwigTemplate_a61b12f39631aa7ea31ad7da4d78ee1a5d4c6ab504314ba4751cf58715ad9c70 extends Template
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
        echo "<div class=\"full\">
    <H5>Balises meta</H5>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta", [], "any", false, false, false, 3), 'row');
        echo "
    <div class=\"seo-preview full\"></div>
</div>

<script>
    (function(){
        let titre = document.getElementById(\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta", [], "any", false, false, false, 9), "titre", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\");
        let description = document.getElementById(\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta", [], "any", false, false, false, 10), "description", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\");
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slug", [], "any", true, true, false, 11)) {
            echo "let slug = document.getElementById(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slug", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\");";
        } else {
            echo "let slug = false;";
        }
        // line 12
        echo "
        let form = document.forms['page'];
        let seoPreview = document.querySelector('.seo-preview')

        function configureInput(el, optimal) {
            let wrapper = document.createElement('div');
            let counter = document.createElement('div');
            let progress = document.createElement('div');
            el.parentNode.insertBefore(wrapper, el);
            wrapper.appendChild(counter);
            wrapper.appendChild(el);
            wrapper.appendChild(progress);
            wrapper.classList.add(\"seo-preview-input\");
            counter.classList.add(\"seo-preview-counter\");
            progress.classList.add(\"seo-preview-progress\");

            function update() {
                updateSeoPreview();
                counter.innerHTML = el.value.length + '/' + optimal;

                let progressValue = el.value.length * 100 / optimal;
                progress.style.setProperty(\"--progress\", ((progressValue>100) ? 100 : progressValue) + \"%\");
                progress.classList.toggle(\"optimal\", (progressValue > 90 && progressValue < 110));
                progress.classList.toggle(\"missing\", progressValue==0);
            }

            el.addEventListener(\"keyup\", update);
            update();
        }

        function updateSeoPreview() {
            let slugValue = (!!slug) ? slug.value : '/';
            seoPreview.innerHTML = 
                `<div class=\"seo-preview-wrapper\">
                    <div class=\"seo-preview-title\">\${titre.value}</div>
                    <cite>";
        // line 47
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home"), 7,  -1), "html", null, true);
        echo "\${slugValue}</cite>
                    <div class=\"seo-preview-description\">\${description.value}</div>
                </div>`;
        }

        if (!!slug) slug.addEventListener('change', updateSeoPreview);
        configureInput(titre, 65);
        configureInput(description, 165);
        updateSeoPreview();
    })()
</script>
";
    }

    public function getTemplateName()
    {
        return "_document/page/_bloc_meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 47,  66 => 12,  58 => 11,  54 => 10,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_document/page/_bloc_meta.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/_document/page/_bloc_meta.html.twig");
    }
}
