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

/* pages/_silos/isolation.html.twig */
class __TwigTemplate_31bab2c16755920cf8400282a5cfed0f0681446363b48a96b79d33a9bcc2460f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'hooks' => [$this, 'block_hooks'],
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/_silos/isolation.html.twig", 1);
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
        $this->loadTemplate("pages/_modules/hero.html.twig", "pages/_silos/isolation.html.twig", 5)->displayBlock("split", $context);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        // line 6
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_map", ["page" => "isolation"]));
        echo "</td>
        ";
        // line 7
        $this->loadTemplate("pages/_silos/isolation.html.twig", "pages/_silos/isolation.html.twig", 7, "2078251475")->display(twig_array_merge($context, ["id" => "p1", "data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "produits_1", [], "any", false, false, false, 7)]));
        // line 8
        echo "        ";
        $this->loadTemplate("pages/_silos/isolation.html.twig", "pages/_silos/isolation.html.twig", 8, "1805631936")->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "paves", [], "any", false, false, false, 8)]));
        // line 9
        echo "        ";
        $this->loadTemplate("pages/_silos/isolation.html.twig", "pages/_silos/isolation.html.twig", 9, "1639114818")->display(twig_array_merge($context, ["id" => "p2", "data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "produits_2", [], "any", false, false, false, 9)]));
        // line 10
        echo "        ";
        $this->displayBlock("hooks", $context, $blocks);
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_articles", ["title" => "L'actualit?? de l'isolation", "category" => "isolation"]));
        echo "
        ";
        // line 12
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["title" => "Vous avez des questions ?", "lien" => "/faq/"];
        if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 12, $this->getSourceContext());
        }
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
        $this->loadTemplate("pages/_modules/faq.html.twig", "pages/_silos/isolation.html.twig", 12)->display($context);
        $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
        // line 13
        echo "    </main>
";
    }

    // line 16
    public function block_hooks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<section class=\"hooks\">
    <h4 class=\"green caps\">Aides & subventions isolation ext??rieure : un service Harmonie</h4>
    <p><i>Nous apportons un service gratuit concernant les subventions travaux, les avantages fiscaux, et les solutions de financement. Nos charg??s d???affaires sauront vous orienter vers les aides adapt??es ?? votre copropri??t??. Elles sont nombreuses et parfois cumulables.</i></p>
    <div class=\"hook\">
        <h5>Eco-pr??t ?? taux z??ro</h5>
        <p><a href=\"http://www.developpement-durable.gouv.fr/L-eco-pret-a-taux-zero-en-13,28949.html\" target=\"_blank\">L?????co-pr??t ?? taux z??ro</a> concerne les travaux de r??novation thermique. Il peut ??tre collectif ou individuel. Il rentre dans la cat??gorie des aides au financement au m??me type que le dispositif Copro 100. Il existe ??galement des pr??ts verts que votre banque ?? l'obligation de vous offir mais les taux sont moins atrractifs que ceux de l'ECO PTZ ou de Copro 100.</p>
    </div>
    <div class=\"hook\">
        <h5>MaPrimeR??nov???Copro</h5>
        <p>MaPrimeR??nov???Copropri??t??s mise en vigueur depuis le 1er janvier 2020 est un financement public, pour tous les niveaux de revenus, imm??diatement vers?? d??s la fin des travaux. Il s???agit d???une aide collective car elle concerne la r??novation globale du b??ti. Le gain ??nerg??tique final doit ??tre d???au moins 35%. Des bonus peuvent ??tre accord??s pour les ????sorties de passoires????, logements ??tiquet??s F ou G atteignant les performances ??nerg??tiques d???un logement BBC.</p>
    </div>
    <div class=\"hook\">
        <h5>Aide ANAH</h5>
        <p><a href=\"http://www.anah.fr/\" target=\"_blank\" rel=\"nofollow\" class=\"seoquake-nofollow\">L???ANAH</a> (Agence Nationale de l???Habitat) est un acteur majeur avec des aides soumises ?? des conditions de ressources et ?? des niveaux pr??cis d'augmentation des performances ??nerg??tiques.</p>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "pages/_silos/isolation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  101 => 16,  96 => 13,  86 => 12,  82 => 11,  77 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/isolation.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/isolation.html.twig");
    }
}


/* pages/_silos/isolation.html.twig */
class __TwigTemplate_31bab2c16755920cf8400282a5cfed0f0681446363b48a96b79d33a9bcc2460f___2078251475 extends Template
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
        // line 7
        return "pages/_modules/produits.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/produits.html.twig", "pages/_silos/isolation.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/isolation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 7,  105 => 17,  101 => 16,  96 => 13,  86 => 12,  82 => 11,  77 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/isolation.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/isolation.html.twig");
    }
}


/* pages/_silos/isolation.html.twig */
class __TwigTemplate_31bab2c16755920cf8400282a5cfed0f0681446363b48a96b79d33a9bcc2460f___1805631936 extends Template
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
        // line 8
        return "pages/_modules/paves.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/paves.html.twig", "pages/_silos/isolation.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/isolation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 8,  165 => 7,  105 => 17,  101 => 16,  96 => 13,  86 => 12,  82 => 11,  77 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/isolation.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/isolation.html.twig");
    }
}


/* pages/_silos/isolation.html.twig */
class __TwigTemplate_31bab2c16755920cf8400282a5cfed0f0681446363b48a96b79d33a9bcc2460f___1639114818 extends Template
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
        // line 9
        return "pages/_modules/produits.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/produits.html.twig", "pages/_silos/isolation.html.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/isolation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 9,  216 => 8,  165 => 7,  105 => 17,  101 => 16,  96 => 13,  86 => 12,  82 => 11,  77 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/isolation.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/isolation.html.twig");
    }
}
