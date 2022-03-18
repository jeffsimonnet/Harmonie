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

/* pages/_silos/copropriete.html.twig */
class __TwigTemplate_585631f7e18fa8457b8b9e5689155a88b2b88f2a6a67d1d1221dbb19f8563f4e extends Template
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/_silos/copropriete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main class=\"tete-silo\">
        ";
        // line 5
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["hero" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "hero_split_image", [], "any", false, false, false, 5)];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 5, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->loadTemplate("pages/_modules/hero.html.twig", "pages/_silos/copropriete.html.twig", 5)->displayBlock("split", $context);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        // line 6
        echo "        <section class=\"col-hooks\">
            <h2>Les travaux en copropriété</h2>
            <div class=\"hook main-grid\">
                <div class=\"col1\" style=\"--bg-image: url(";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/hook1.jpg"), "html", null, true);
        echo ")\"></div>
                <div class=\"col2\">
                    <p>Quand on est copropriétaire ou à fortiori membre du conseil syndical, il est difficile de ne pas se sentir impliqué lorsqu’un ravalement est à l’ordre du jour. <b>Bien que l'enjeu soit souvent la valorisation de votre patrimoine, entreprendre des travaux n'est jamais chose aisée</b> surtout lorsque l'on aborde les \"gros travaux\" que sont le ravalement ou la réfection de la toiture.</p>
                    <p>Depuis 20 ans, les tenants et aboutissants des travaux d'intérêt collectifs ont tendance à devenir de plus en plus nombreux et complexes à appréhender.</p>
                    <p>De leur côté, les entreprises de ravalement ont vu aussi leurs métiers évoluer. Il est aujourd’hui <b>impensable d’offrir à une copropriété une simple prestation technique de travaux. Certains types de travaux, comme ceux de performance énergétique</b> soulèvent plus de questions que d'autres.</p>
                    <p><b>Harmonie ne travaille qu’en copropriété</b>, que ce soit directement pour les copropriétaires, des institutionnels ou des bailleurs privés. Les attentes des copropriétaires évoluent, les besoins en conseil et en expertise se multiplient sur des sujets variés : <b>la rénovation énergétique</b>, bien sûr, mais aussi le rôle d'un architecte, le rôle de l'ingénieur financier, l'importance de l'audit énergétique et du diagnostic amiante avant travaux.</p>
                    <p>Il y a également le sujet fondamental sur lequel Harmonie va au-devant des copropriétés : <em>le timing des travaux</em>.</p>
                </div>
            </div>
        </section>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_map", ["page" => "copropriete"]));
        echo "</td>
        ";
        // line 20
        $this->loadTemplate("pages/_silos/copropriete.html.twig", "pages/_silos/copropriete.html.twig", 20, "1111984527")->display(twig_array_merge($context, ["id" => "p1", "data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "produits", [], "any", false, false, false, 20)]));
        // line 21
        echo "        ";
        $this->loadTemplate("pages/_silos/copropriete.html.twig", "pages/_silos/copropriete.html.twig", 21, "1437051321")->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "paves", [], "any", false, false, false, 21)]));
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_articles", ["title" => "L'actualité des copropriétés", "category" => "copropriete"]));
        echo "
        ";
        // line 23
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["title" => "Vous avez des questions ?", "lien" => "/faq/"];
        if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 23, $this->getSourceContext());
        }
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
        $this->loadTemplate("pages/_modules/faq.html.twig", "pages/_silos/copropriete.html.twig", 23)->display($context);
        $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
        // line 24
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "pages/_silos/copropriete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  95 => 23,  90 => 22,  87 => 21,  85 => 20,  81 => 19,  68 => 9,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/copropriete.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/copropriete.html.twig");
    }
}


/* pages/_silos/copropriete.html.twig */
class __TwigTemplate_585631f7e18fa8457b8b9e5689155a88b2b88f2a6a67d1d1221dbb19f8563f4e___1111984527 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "pages/_modules/produits.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/produits.html.twig", "pages/_silos/copropriete.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/copropriete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 20,  105 => 24,  95 => 23,  90 => 22,  87 => 21,  85 => 20,  81 => 19,  68 => 9,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/copropriete.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/copropriete.html.twig");
    }
}


/* pages/_silos/copropriete.html.twig */
class __TwigTemplate_585631f7e18fa8457b8b9e5689155a88b2b88f2a6a67d1d1221dbb19f8563f4e___1437051321 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "pages/_modules/paves.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/paves.html.twig", "pages/_silos/copropriete.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/copropriete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 21,  150 => 20,  105 => 24,  95 => 23,  90 => 22,  87 => 21,  85 => 20,  81 => 19,  68 => 9,  63 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/copropriete.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/copropriete.html.twig");
    }
}
