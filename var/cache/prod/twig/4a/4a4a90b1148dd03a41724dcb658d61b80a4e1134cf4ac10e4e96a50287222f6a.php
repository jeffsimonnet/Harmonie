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

/* pages/_silos/ravalement.html.twig */
class __TwigTemplate_ba4c2e5950f3f1278794b59a5bc1a89490d9186ae6c8758e56407fba7b300ac6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'etapes' => [$this, 'block_etapes'],
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
        $this->parent = $this->loadTemplate("base_page.html.twig", "pages/_silos/ravalement.html.twig", 1);
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
        $this->loadTemplate("pages/_modules/hero.html.twig", "pages/_silos/ravalement.html.twig", 5)->displayBlock("split", $context);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        // line 6
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_map", ["page" => "ravalement"]));
        echo "</td>
        ";
        // line 7
        $this->loadTemplate("pages/_silos/ravalement.html.twig", "pages/_silos/ravalement.html.twig", 7, "272364191")->display(twig_array_merge($context, ["id" => "p1", "data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "produits_1", [], "any", false, false, false, 7)]));
        // line 8
        echo "        ";
        $this->loadTemplate("pages/_silos/ravalement.html.twig", "pages/_silos/ravalement.html.twig", 8, "809127203")->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "paves", [], "any", false, false, false, 8)]));
        // line 9
        echo "        ";
        $this->displayBlock("etapes", $context, $blocks);
        echo "
        ";
        // line 10
        $this->loadTemplate("pages/_silos/ravalement.html.twig", "pages/_silos/ravalement.html.twig", 10, "231188125")->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "texte", [], "any", false, false, false, 10)]));
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_module_articles", ["title" => "L'actualit?? du ravalement", "category" => "ravalement"]));
        echo "
        ";
        // line 12
        $this->loadTemplate("pages/_silos/ravalement.html.twig", "pages/_silos/ravalement.html.twig", 12, "1756225817")->display(twig_array_merge($context, ["id" => "p2", "data" => twig_get_attribute($this->env, $this->source, ($context["portlets"] ?? null), "produits_2", [], "any", false, false, false, 12)]));
        // line 13
        echo "        ";
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["title" => "Vous avez des questions ?", "lien" => "/faq/"];
        if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 13, $this->getSourceContext());
        }
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
        $this->loadTemplate("pages/_modules/faq.html.twig", "pages/_silos/ravalement.html.twig", 13)->display($context);
        $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
        // line 14
        echo "    </main>
";
    }

    // line 17
    public function block_etapes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<section class=\"etapes\">
    <h4 class=\"green caps\">Les 5 ??tapes d???un chantier de ravalement</h4>
    <div class=\"chrono\">
        <div class=\"etape-menu current\" id=\"menu-etape-1\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 195.3 66.5\">
            <path fill=\"#6c6c6c\" class=\"picto\" d=\"M66.5 41.4v.2l.1.4v22a2.5 2.5 0 01-2.1 2.5h-62A2.5 2.5 0 010 64.4V41.9c0-.2 0-.3.2-.5l9.2-20a2.5 2.5 0 011.9-1.5h8.8l-2.6 4.5-.3.5h-4l-6.8 15h53.8l-6.8-14.5 3-5 .5.6.2.3zM37.8.2l.4.1 17.3 10c1 .6 1.5 2 1 3.1l-.1.3L47 30h3.8a2.5 2.5 0 01.3 5H15.8a2.5 2.5 0 01-.3-5h6.3l-.5-.4a2.5 2.5 0 01-1-3v-.4l14.4-25c.7-1 2-1.5 3.1-1zm0 5.7L25.9 26.4l6 3.5h9.3l9.6-16.7-13-7.5z\"/>
            <g class=\"arrow\" transform=\"translate(-6.7 -6.8)\">
                <path stroke=\"#6c6c6c\" d=\"M108 40h88\"/>
                <path fill=\"#6c6c6c\" d=\"M202 40l-6 3.5v-7z\"/>
            </g>
            </svg>
            <h5 class=\"caps bold\">??TAPE 01</h5>
            Le vote des travaux
        </div>
        <div class=\"etape-menu\" id=\"menu-etape-2\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 202 72\">
            <g transform=\"translate(-230 -4)\">
                <path fill=\"#6c6c6c\" class=\"picto\" d=\"M260.3 63.6a1.5 1.5 0 00-2.8 0l-1 2.2a2.2 2.2 0 01-4.2-.3l-2.3-7.1-1.5 4.4a6 6 0 01-5.7 4.2h-1.7c-1.2 0-2.2-1-2.2-2.3 0-1.2 1-2.2 2.2-2.2h1.7c.7 0 1.3-.4 1.5-1l2.5-7.8a3.3 3.3 0 013.2-2.3c1.4 0 2.7 1 3.2 2.3l1.9 5.9a6.2 6.2 0 019.2 2c.2.5.7.8 1.3.9V50.9L283.3 33v-6.5h-18.9a3.4 3.4 0 01-3.3-3.4V4h-27.8a3.3 3.3 0 00-3.3 3.4v65.2c0 1.9 1.5 3.4 3.3 3.4H280c1.8 0 3.3-1.5 3.3-3.4V67h-17.7a6 6 0 01-5.3-3.4zm23-42.5a3 3 0 00-1-2.3L268.9 5c-.7-.6-1.5-1-2.4-1h-.8v18h17.7v-.9zM270 52.8v9.7h9.6L302 39.6l-9.4-9.5zm39-25.3l-4.5-4.5a3.5 3.5 0 00-5 0l-3.7 3.9 9.4 9.5 3.8-3.8a3.6 3.6 0 000-5z\"/>
            </g>
            <g class=\"arrow\" transform=\"translate(-230 -4)\">
                <path stroke=\"#6c6c6c\" d=\"M338 40h88\"/>
                <path fill=\"#6c6c6c\" d=\"M432 40l-6 3.5v-7z\"/>
            </g>
            </svg>
            <h5 class=\"caps bold\">??TAPE 02</h5>
            La signature des march??s
        </div>
        <div class=\"etape-menu\" id=\"menu-etape-3\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 199.4 73.9\">
            <g fill=\"#6c6c6c\" class=\"picto\">
                <path d=\"M66.4 7.4a29 29 0 00-43 38.4L21 48.2l-2-2-16 16c-1-.5-1.7-.8-2-.5l-.9 1C-1.3 64 10 75.1 11.3 73.7l1-.9c.2-.3 0-1-.7-2l16.1-16-2-2 2.4-2.4a29 29 0 0038.3-43zM63 45a24.1 24.1 0 11-34-34 24.1 24.1 0 0134 34z\"/>
                <path d=\"M66.5 26.3a20.9 20.9 0 01-40.2-5.5 20.8 20.8 0 1040.2 5.5z\"/>
            </g>
            <g class=\"arrow\" transform=\"translate(-462.6 -3.6)\">
                <path stroke=\"#6c6c6c\" d=\"M568 40h88\"/>
                <path fill=\"#6c6c6c\" d=\"M662 40l-6 3.5v-7z\"/>
            </g>
            </svg>
            <h5 class=\"caps bold\">??TAPE 03</h5>
            Avant les travaux
        </div>
        <div class=\"etape-menu\" id=\"menu-etape-4\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 193.6 59.7\">
            <path fill=\"#6c6c6c\" class=\"picto\" d=\"M61.6 51.2L45 34.7l-7 7 16.3 16.5c2 2 5 2 7 0s2-5.1 0-7zM50.4 24.5c6.5 0 11.7-5.2 11.7-11.6 0-2-.5-3.8-1.4-5.4l-9 9-5-5 9-9a11.5 11.5 0 00-17 10.4c0 1.3.3 2.6.8 3.8l-6.2 6.2-6-6a3.3 3.3 0 000-4.6L25 9.9l7-7a10 10 0 00-14 0l-9.5 9.4a3.3 3.3 0 000 4.7l2.4 2.3H2.4c-.6 0-1.2.3-1.6.7a2.3 2.3 0 000 3.4l8.4 8.4a2.3 2.3 0 003.4 0c.4-.4.7-1 .7-1.6v-8.5l2.3 2.3a3.3 3.3 0 004.7 0l6 6L5 51a5 5 0 000 7.2c2 2 5 2 7 0l34.5-34.4c1.3.5 2.6.7 4 .7z\"/>
            <g class=\"arrow\" transform=\"translate(-698.4 -8.8)\">
                <path stroke=\"#6c6c6c\" d=\"M798 40h88\"/>
                <path fill=\"#6c6c6c\" d=\"M892 40l-6 3.5v-7z\"/>
            </g>
            </svg>
            <h5 class=\"caps bold\">??TAPE 04</h5>
            D??but des travaux
        </div>
        <div class=\"etape-menu\" id=\"menu-etape-5\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 60 65\">
            <path fill=\"#6c6c6c\" class=\"picto\" d=\"M13.3 46.6a3.3 3.3 0 100-6.6 3.3 3.3 0 000 6.6zm3.4 6.7a3.4 3.4 0 11-6.7 0 3.4 3.4 0 016.7 0zm-3.4-16.7a3.3 3.3 0 100-6.6 3.3 3.3 0 000 6.6zm3.4-13.3a3.4 3.4 0 11-6.7 0 3.4 3.4 0 016.7 0zm-3.4-6.7a3.3 3.3 0 100-6.6 3.3 3.3 0 000 6.6z\"/>
            <path fill=\"#6c6c6c\" class=\"picto\" d=\"M36.7 7.5V10h15.8a7.5 7.5 0 017.5 7.5v45a2.5 2.5 0 01-2.5 2.5h-8.3a1.7 1.7 0 01-1.7-1.7v-7.5a1.7 1.7 0 00-1.7-1.7h-8.3a1.7 1.7 0 00-1.7 1.7v7.5a1.7 1.7 0 01-1.6 1.7H2.5A2.5 2.5 0 010 62.5v-55A7.5 7.5 0 017.5 0h21.7a7.5 7.5 0 017.5 7.5zM7.5 5A2.5 2.5 0 005 7.5V60h18.3V17.5a7.5 7.5 0 017.5-7.5h.9V7.5A2.5 2.5 0 0029.2 5zM50 43.3a3.4 3.4 0 10-6.7 0 3.4 3.4 0 006.7 0zm-13.3 3.3a3.3 3.3 0 100-6.6 3.3 3.3 0 000 6.6zM50 33.3a3.4 3.4 0 10-6.7 0 3.4 3.4 0 006.7 0zm-13.3 3.3a3.3 3.3 0 100-6.6 3.3 3.3 0 000 6.6zM50 23.3a3.4 3.4 0 10-6.7 0 3.4 3.4 0 006.7 0zm-13.3 3.3a3.3 3.3 0 100-6.6 3.3 3.3 0 000 6.6z\"/>
            </svg>
            <h5 class=\"caps bold\">??TAPE 05</h5>
            Fin des travaux
        </div>
    </div>
    <div class=\"content\">
        <div class=\"current\" id=\"etape-1\">
            <div class=\"info\">
                <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 82), "build/images/bando_1.jpg")) : ("build/images/bando_1.jpg"))), "html", null, true);
        echo "\">
                <p>Un ravalement ne peut ??tre entrepris qu????? certaines conditions : </p>
                <ul>
                    <li>Une d??cision vot??e par les copropri??taires,
                    <li>La majorit?? simple en cas de travaux qui ne concernent pas les parties privatives,
                    <li>La majorit?? absolue lors d???une injonction faite au syndicat des copropri??taires par le maire,
                    <li>La double majorit?? lorsque le ravalement n???est pas impos??,
                    <li>D??claration pr??alable en mairie : le permis de construire n???est plus obligatoire depuis 2007, mais il faut n??anmoins faire une d??claration ?? la mairie d??nomm??e auparavant d??claration de travaux et ?? pr??sent d??claration pr??alable.
                </ul>
            </div>
        </div>
        <div class=\"\" id=\"etape-2\">
            <div class=\"info\">
                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", true, true, false, 95)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 95), "build/images/bando_2.jpg")) : ("build/images/bando_2.jpg"))), "html", null, true);
        echo "\">
                <p>Nous vous conseillons de joindre ?? l???acte d???engagement tous les ??l??ments pr??alablement cit??s, en y ajoutant les ??l??ments suivants :</p>
                <ul>
                    <li>Attestation sur l???honneur de l???emploi de salari??s en r??gle avec la l??gislation du travail,
                    <li>Attestation ?? jour du paiement de l???imp??t,
                    <li>Attestation ?? jour du paiement de la caisse des cong??s pay??s,
                    <li>Attestation ?? jour du paiement de l???URSSAF,
                    <li>Attestation ?? jour des polices d???assurance,
                    <li>La pr??conisation du fabricant dont les mat??riaux sont mis en ??uvre.
                </ul>
                <p>Une fois le dossier constitu??, la copropri??t?? via son repr??sentant que constitue le syndic, signera l???int??gralit?? des pi??ces march??, de m??me que le ma??tre d?????uvre, s???il y en a un et bien s??r de l???entrepreneur retenu. Ce document march?? est essentiel pour le bon d??roulement des travaux, car il pr??cise le cadre dans lequel le ravalement s???inscrit et en cas de litige, sera le document juridique r??f??rent.</p>
            </div>
        </div>
        <div class=\"\" id=\"etape-3\">
            <div class=\"info\">
                <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", true, true, false, 110)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 110), "build/images/bando_3.jpg")) : ("build/images/bando_3.jpg"))), "html", null, true);
        echo "\">
                <p>Une fois les \"pi??ces march??\" accept??es par les parties, il y aura lieu d???organiser un rendez-vous pr??paratoire sur le site des travaux</p>
                <p>L???entreprise pr??sentera ?? ce moment-l?? le conducteur de travaux en charge du suivi. De m??me, nous conseillons la pr??sence du directeur des travaux, de sorte que si le conducteur se trouvait arr??t??, il y ait dans l???entreprise une autre personne parfaitement inform??e en plus du chef d?????quipe, qui lui sera en permanence sur site.</p>
                <p>Lors de ce rendez-vous, le conducteur s???assurera de l'emplacement de la base de vie, des locaux de stockage, ou encore de l???endroit o?? se trouvent les arriv??es d???eau et arriv??es ??lectriques, permettant ainsi de d??marrer le chantier sans perdre de temps. Une fois ce rendez-vous ??tabli, l???entreprise produira un compte-rendu. Il en sera de m??me lors de chaque rendez-vous de chantier hebdomadaire. On profitera de ce premier rendez-vous pour effectuer un ??tat des lieux contradictoire de l???ensemble des b??timents. ?? la fin du chantier, on proc??dera de m??me afin de s???assurer qu???il n???y ait pas de d??gradation particuli??re commise durant les travaux.</p>
            </div>
            <div class=\"astuce\">
                <h6>Astuce</h6>
                <p>Nous vous invitons lors de l?????tablissement de l?????tat des lieux ?? ne pas oublier de visiter les toitures terrasses qui pourraient ??tre perfor??es, particuli??rement lorsque les ??chafaudages ne sont pas tubulaires, mais avec des nacelles. De m??me, nous pr??conisons de v??rifier le bon fonctionnement des stores, car trop souvent, des copropri??taires peu scrupuleux profitent des travaux pour faire croire que l???entreprise est responsable du mauvais fonctionnement de l???une de leurs parties privatives, ce qui peut devenir source de conflit.</p>
            </div>
        </div>
        <div class=\"\" id=\"etape-4\">
            <div class=\"info\">
                <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 122), "build/images/bando_4.jpg")) : ("build/images/bando_4.jpg"))), "html", null, true);
        echo "\">
                <p>Un affichage pr??alable sera appos?? dans les parties communes par la soci??t??, afin de pr??venir les occupants du jour pr??cis de l???arriv??e des ??chafaudages et des cantonnements. Les 15 premiers jours seront d??di??s ?? la mise en place des dits ??chafaudages et personne ne devra y monter tant qu???un bureau de contr??le ext??rieur ne sera venu d??livrer un proc??s-verbal de conformit??. Ce document est fondamental, car c???est lui qui d??livre le droit de pouvoir mettre en ??uvre les travaux de ravalement.</p>
                <p>Un rendez-vous contradictoire se tiendra chaque semaine en pr??sence des parties prenantes qui pourront faire part de leurs remarques concernant l???hygi??ne, la s??curit?? ou encore la qualit??, la pr??paration et la mise en ??uvre des mat??riaux. On profitera de ce rendez-vous hebdomadaire pour actualiser le planning b??timent par b??timent, ??tage par ??tage, et une fois par mois, cet avancement permettra d?????tablir les situations comptables visant au r??glement des factures du prestataire.</p>
            </div>
            <div class=\"astuce\">
                <h6>Astuce</h6>
                <p>Pour ??viter la multiplication des informations circulant sur le chantier, nous vous invitons ?? cr??er un carnet de dol??ances pouvant ??tre laiss?? chez le gardien ou, le cas ??ch??ant, dans un local pr??vu ?? cet effet, o?? chaque occupant pourra librement consigner ses remarques. C???est lors du rendez-vous de chantier que nous en prendrons connaissance : c???est un outil pr??cieux pour un suivi de chantier de qualit??.</p>
            </div>
        </div>
        <div class=\"\" id=\"etape-5\">
            <div class=\"info\">
                <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 133), "build/images/bando_5.jpg")) : ("build/images/bando_5.jpg"))), "html", null, true);
        echo "\">
                <p>Votre chantier est maintenant termin??, mais avant de faire retirer les ??chafaudages des fa??ades, nous vous conseillons de proc??der ?? un proc??s-verbal de r??ception des travaux. Ce document, ??tabli par l???entreprise ou par le ma??tre d?????uvre, marquera le point final de l???intervention. On reprendra le devis ??tabli au d??part, on s???assurera que chaque point a ??t?? correctement trait??, et l???on proc??dera ??ventuellement ?? la liste de certaines r??serves qui seraient quelques points singuliers ?? faire reprendre par l???entrepreneur avant le paiement final de sa facture. L???entrepreneur, sous 15 jours, proc??dera ?? la lev??e des r??serves dont il devra vous avertir par courrier recommand??.</p>
            </div>
            <div class=\"astuce\">
                <h6>Astuce</h6>
                <p>Astuce : en termes de garantie, la date prise en compte par la compagnie d???assurance sera celle du jour de la r??ception d??finitive des travaux, qu???il y ait ou non des r??serves. Il est donc dans l???int??r??t de la copropri??t?? de faire lever les r??serves au plus vite, puisque les d??lais de garantie ont d???ores et d??j?? commenc?? ?? courir. Pour ??viter tout litige a posteriori avec certains r??sidents, nous vous conseillons de faire proc??der par l???entreprise ?? une pr??-r??ception des travaux individuels par appartement et de demander ?? celle-ci de produire un quitus sign?? de la main de l???occupant du logement, attestant que les travaux ont ??t?? faits correctement.</p>
                <p>On profitera ??galement de la r??ception des travaux pour proc??der ?? un constat d?????tat des lieux contradictoire, qui sera rapproch?? de celui fait au d??marrage des travaux et, ainsi, de s???assurer que si certaines d??gradations sont apparues, elles sont, ou non, le fruit de l???entreprise ayant ex??cut?? l???ouvrage.</p>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const etapesDiv = document.querySelector('.etapes');
            const etapesMenu = etapesDiv.querySelectorAll('.etape-menu')
            const etapesContent = etapesDiv.querySelectorAll('.content>div');
            etapesMenu.forEach(i => i.addEventListener('click', function(e) {
                etapesMenu.forEach(el => el.classList.remove('current'))
                i.classList.add('current');
                const etape = i.id.substr(5);
                etapesContent.forEach(el => el.classList.remove('current'))
                document.getElementById(etape).classList.add('current');
                i.parentElement.scrollLeft = i.offsetLeft - 16; // 16 = 1em
            }))
        })
    </script>
</section>
";
    }

    public function getTemplateName()
    {
        return "pages/_silos/ravalement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 133,  223 => 122,  208 => 110,  190 => 95,  174 => 82,  108 => 18,  104 => 17,  99 => 14,  88 => 13,  86 => 12,  81 => 11,  79 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/ravalement.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/ravalement.html.twig");
    }
}


/* pages/_silos/ravalement.html.twig */
class __TwigTemplate_ba4c2e5950f3f1278794b59a5bc1a89490d9186ae6c8758e56407fba7b300ac6___272364191 extends Template
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
        $this->parent = $this->loadTemplate("pages/_modules/produits.html.twig", "pages/_silos/ravalement.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/ravalement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 7,  237 => 133,  223 => 122,  208 => 110,  190 => 95,  174 => 82,  108 => 18,  104 => 17,  99 => 14,  88 => 13,  86 => 12,  81 => 11,  79 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/ravalement.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/ravalement.html.twig");
    }
}


/* pages/_silos/ravalement.html.twig */
class __TwigTemplate_ba4c2e5950f3f1278794b59a5bc1a89490d9186ae6c8758e56407fba7b300ac6___809127203 extends Template
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
        $this->parent = $this->loadTemplate("pages/_modules/paves.html.twig", "pages/_silos/ravalement.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/ravalement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 8,  308 => 7,  237 => 133,  223 => 122,  208 => 110,  190 => 95,  174 => 82,  108 => 18,  104 => 17,  99 => 14,  88 => 13,  86 => 12,  81 => 11,  79 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/ravalement.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/ravalement.html.twig");
    }
}


/* pages/_silos/ravalement.html.twig */
class __TwigTemplate_ba4c2e5950f3f1278794b59a5bc1a89490d9186ae6c8758e56407fba7b300ac6___231188125 extends Template
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
        // line 10
        return "pages/_modules/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/text.html.twig", "pages/_silos/ravalement.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/ravalement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 10,  359 => 8,  308 => 7,  237 => 133,  223 => 122,  208 => 110,  190 => 95,  174 => 82,  108 => 18,  104 => 17,  99 => 14,  88 => 13,  86 => 12,  81 => 11,  79 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/ravalement.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/ravalement.html.twig");
    }
}


/* pages/_silos/ravalement.html.twig */
class __TwigTemplate_ba4c2e5950f3f1278794b59a5bc1a89490d9186ae6c8758e56407fba7b300ac6___1756225817 extends Template
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
        // line 12
        return "pages/_modules/produits.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/_modules/produits.html.twig", "pages/_silos/ravalement.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "pages/_silos/ravalement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 12,  410 => 10,  359 => 8,  308 => 7,  237 => 133,  223 => 122,  208 => 110,  190 => 95,  174 => 82,  108 => 18,  104 => 17,  99 => 14,  88 => 13,  86 => 12,  81 => 11,  79 => 10,  74 => 9,  71 => 8,  69 => 7,  64 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_silos/ravalement.html.twig", "/var/www/dev.harmonie.aquaray.com/web/templates/pages/_silos/ravalement.html.twig");
    }
}
