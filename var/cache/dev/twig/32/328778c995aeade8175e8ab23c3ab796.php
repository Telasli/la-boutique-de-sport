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

/* cgu/index.html.twig */
class __TwigTemplate_159bddfe40d42d8c90be4676639fbd85 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cgu/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container my-5\">
    <h1 class=\"\">Politique de confidentialité</h1>

    <div class=\"row\">
        <h5 class=\"mt-4\">Introduction</h5>
        <p>Devant le développement des nouveaux outils de communication, il est nécessaire de porter une attention particulière à la protection de la vie privée. C’est pourquoi, nous nous engageons à respecter la confidentialité des renseignements personnels que nous collectons.</p>

        <h5>Collecte des renseignements personnels</h5>
        <p>- Prénom
            - Adresse postale
            - Code postal
            - Adresse électronique
            - Numéro de téléphone / télécopieur

            Les renseignements personnels que nous collectons sont recueillis au travers de formulaires et grâce à l’interactivité établie entre vous et notre site Web. Nous utilisons également, comme indiqué dans la section suivante, des fichiers témoins et/ou journaux pour réunir des informations vous concernant.</p>

        <h5>Formulaires et interactivité:</h5>
        <p> Vos renseignements personnels sont collectés par le biais de formulaire, à savoir :

            - Formulaire d'inscription au site Web
            - Formulaire de commande

            Nous utilisons les renseignements ainsi collectés pour les finalités suivantes :

            - Suivi de la commande
            - Informations / Offres promotionnelles
            - Statistiques
            - Contact

            Vos renseignements sont également collectés par le biais de l’interactivité pouvant s’établir entre vous et notre site Web et ce, de la façon suivante:

            Nous utilisons les renseignements ainsi collectés pour les finalités suivantes :

            - Informations ou pour des offres promotionnelles
            - Statistiques
            - Contact</p>


        <h5>Droit d’opposition et de retrait</h5>
        <p>Nous nous engageons à vous offrir un droit d’opposition et de retrait quant à vos renseignements personnels.

            Le droit d’opposition s’entend comme étant la possibilité offerte aux internautes de refuser que leurs renseignements personnels soient utilisées à certaines fins mentionnées lors de la collecte.

            Le droit de retrait s’entend comme étant la possibilité offerte aux internautes de demander à ce que leurs renseignements personnels ne figurent plus, par exemple, dans une liste de diffusion.

            **Pour pouvoir exercer ces droits, vous pouvez :**

            Code postal :  78200

            Courriel :  ugursaymaz@hotmail.fr

            Téléphone :  0651205852</p>

        <h5>Droit d’accès</h5>
        <p>Nous nous engageons à reconnaître un droit d’accès et de rectification aux personnes concernées désireuses de consulter, modifier, voire radier les informations les concernant.

            L’exercice de ce droit se fera :

            Code postal :  78200

            Courriel :  ugursaymaz@hotmail.fr

            Téléphone :  0651205852</p>

        <h5>Sécurité</h5>
        <p>Les renseignements personnels que nous collectons sont conservés dans un environnement sécurisé. Les personnes travaillant pour nous sont tenues de respecter la confidentialité de vos informations.

            Pour assurer la sécurité de vos renseignements personnels, nous avons recours aux mesures suivantes :

            - Protocole SSL
            - Protocole SET
            - Gestion des accès - personne autorisée
            - Gestion des accès - personne concernée
            - Logiciel de surveillance du réseau
            - Sauvegarde informatique
            - Identifiant / mot de passe
            - Pare-feu

            Nous nous engageons à maintenir un haut degré de confidentialité en intégrant les dernières innovations technologiques permettant d’assurer la confidentialité de vos transactions. Toutefois, comme aucun mécanisme n’offre une sécurité maximale, une part de risque est toujours présente lorsque l’on utilise Internet pour transmettre des renseignements personnels.</p>


        <h5>Législation</h5>
        <p>Nous nous engageons à respecter les dispositions législatives énoncées dans :

            Législation: Politique de confidentialité</p>
    </div>


</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cgu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container my-5\">
    <h1 class=\"\">Politique de confidentialité</h1>

    <div class=\"row\">
        <h5 class=\"mt-4\">Introduction</h5>
        <p>Devant le développement des nouveaux outils de communication, il est nécessaire de porter une attention particulière à la protection de la vie privée. C’est pourquoi, nous nous engageons à respecter la confidentialité des renseignements personnels que nous collectons.</p>

        <h5>Collecte des renseignements personnels</h5>
        <p>- Prénom
            - Adresse postale
            - Code postal
            - Adresse électronique
            - Numéro de téléphone / télécopieur

            Les renseignements personnels que nous collectons sont recueillis au travers de formulaires et grâce à l’interactivité établie entre vous et notre site Web. Nous utilisons également, comme indiqué dans la section suivante, des fichiers témoins et/ou journaux pour réunir des informations vous concernant.</p>

        <h5>Formulaires et interactivité:</h5>
        <p> Vos renseignements personnels sont collectés par le biais de formulaire, à savoir :

            - Formulaire d'inscription au site Web
            - Formulaire de commande

            Nous utilisons les renseignements ainsi collectés pour les finalités suivantes :

            - Suivi de la commande
            - Informations / Offres promotionnelles
            - Statistiques
            - Contact

            Vos renseignements sont également collectés par le biais de l’interactivité pouvant s’établir entre vous et notre site Web et ce, de la façon suivante:

            Nous utilisons les renseignements ainsi collectés pour les finalités suivantes :

            - Informations ou pour des offres promotionnelles
            - Statistiques
            - Contact</p>


        <h5>Droit d’opposition et de retrait</h5>
        <p>Nous nous engageons à vous offrir un droit d’opposition et de retrait quant à vos renseignements personnels.

            Le droit d’opposition s’entend comme étant la possibilité offerte aux internautes de refuser que leurs renseignements personnels soient utilisées à certaines fins mentionnées lors de la collecte.

            Le droit de retrait s’entend comme étant la possibilité offerte aux internautes de demander à ce que leurs renseignements personnels ne figurent plus, par exemple, dans une liste de diffusion.

            **Pour pouvoir exercer ces droits, vous pouvez :**

            Code postal :  78200

            Courriel :  ugursaymaz@hotmail.fr

            Téléphone :  0651205852</p>

        <h5>Droit d’accès</h5>
        <p>Nous nous engageons à reconnaître un droit d’accès et de rectification aux personnes concernées désireuses de consulter, modifier, voire radier les informations les concernant.

            L’exercice de ce droit se fera :

            Code postal :  78200

            Courriel :  ugursaymaz@hotmail.fr

            Téléphone :  0651205852</p>

        <h5>Sécurité</h5>
        <p>Les renseignements personnels que nous collectons sont conservés dans un environnement sécurisé. Les personnes travaillant pour nous sont tenues de respecter la confidentialité de vos informations.

            Pour assurer la sécurité de vos renseignements personnels, nous avons recours aux mesures suivantes :

            - Protocole SSL
            - Protocole SET
            - Gestion des accès - personne autorisée
            - Gestion des accès - personne concernée
            - Logiciel de surveillance du réseau
            - Sauvegarde informatique
            - Identifiant / mot de passe
            - Pare-feu

            Nous nous engageons à maintenir un haut degré de confidentialité en intégrant les dernières innovations technologiques permettant d’assurer la confidentialité de vos transactions. Toutefois, comme aucun mécanisme n’offre une sécurité maximale, une part de risque est toujours présente lorsque l’on utilise Internet pour transmettre des renseignements personnels.</p>


        <h5>Législation</h5>
        <p>Nous nous engageons à respecter les dispositions législatives énoncées dans :

            Législation: Politique de confidentialité</p>
    </div>


</div>
{% endblock %}
", "cgu/index.html.twig", "C:\\wamp64\\www\\la-boutique-de-sport\\templates\\cgu\\index.html.twig");
    }
}
