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

/* cgv/index.html.twig */
class __TwigTemplate_b792c97a86a6c4cc6dee9e5c8ba8d47c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cgv/index.html.twig", 1);
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
        <h1 class=\"\">Mention légales</h1>

        <div class=\"row\">
            <h5 class=\"mt-4\">1 - Édition du site</h5>
            <p>En vertu de [l'article 6 de la loi n° 2004-575 du 21 juin 2004](https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000000801164#LEGIARTI000042038977) pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet https://ugursaymaz.fr/ l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:**

                Propriétaire du site : SAYMAZ UGUR - Contact : ugursaymaz@hotmail.fr 0651205852 - Adresse : 12 Rue Blaise Pascal.**

                Identification de l'entreprise : SARL SAYMAZ UGUR au capital social de 1000€ - SIREN : - RCS ou RM : - Adresse postale : 12 Rue Blaise Pascal - [Consignes : ajoutez ici le lien hypertexte vers la page de vos conditions générales de vente si vous en avez une]**

                Directeur de la publication : - Contact : 651205852.**

                Hébergeur : O2Switch - 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand - Téléphone : 04.44.44.60.40**

                Délégué à la protection des données : UGUR SAYMAZ - ugursaymaz@hotmail.fr**

                Autres contributeurs :**</p>

            <h5>2 - Propriété intellectuelle et contrefaçons.</h5>
            <p>SAYMAZ UGUR est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.**

                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de SAYMAZ UGUR .**

                Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles [L.335-2 et suivants du Code de Propriété Intellectuelle](https://www.legifrance.gouv.fr/affichCodeArticle.do?idArticle=LEGIARTI000032655082&cidTexte=LEGITEXT000006069414&dateTexte=20160605).**</p>

            <h5>3 - Limitations de responsabilité.</h5>
            <p>SAYMAZ UGUR ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://ugursaymaz.fr/.**

                SAYMAZ UGUR décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://ugursaymaz.fr/.**

                SAYMAZ UGUR s’engage à sécuriser au mieux le site https://ugursaymaz.fr/, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.**

                Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. SAYMAZ UGUR se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.**

                Le cas échéant, SAYMAZ UGUR se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).**</p>


            <h5>CNIL et gestion des données personnelles.</h5>
            <p>Conformément aux dispositions de [la loi 78-17 du 6 janvier 1978 modifiée](https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000000886460), l’utilisateur du site https://ugursaymaz.fr/ dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : UGUR SAYMAZ - ugursaymaz@hotmail.fr.**

                Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...), lisez notre https://ugursaymaz.fr/politquedeconfidentialite. [Consignes : ajoutez ici le lien hypertexte vers votre politique de confidentialité]</p>

            <h5>6 - Droit applicable et attribution de juridiction.</h5>
            <p>Tout litige en relation avec l’utilisation du site https://ugursaymaz.fr/ est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Mantes la Jolie.</p>


        </div>


    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cgv/index.html.twig";
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
        <h1 class=\"\">Mention légales</h1>

        <div class=\"row\">
            <h5 class=\"mt-4\">1 - Édition du site</h5>
            <p>En vertu de [l'article 6 de la loi n° 2004-575 du 21 juin 2004](https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000000801164#LEGIARTI000042038977) pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet https://ugursaymaz.fr/ l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:**

                Propriétaire du site : SAYMAZ UGUR - Contact : ugursaymaz@hotmail.fr 0651205852 - Adresse : 12 Rue Blaise Pascal.**

                Identification de l'entreprise : SARL SAYMAZ UGUR au capital social de 1000€ - SIREN : - RCS ou RM : - Adresse postale : 12 Rue Blaise Pascal - [Consignes : ajoutez ici le lien hypertexte vers la page de vos conditions générales de vente si vous en avez une]**

                Directeur de la publication : - Contact : 651205852.**

                Hébergeur : O2Switch - 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand - Téléphone : 04.44.44.60.40**

                Délégué à la protection des données : UGUR SAYMAZ - ugursaymaz@hotmail.fr**

                Autres contributeurs :**</p>

            <h5>2 - Propriété intellectuelle et contrefaçons.</h5>
            <p>SAYMAZ UGUR est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.**

                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de SAYMAZ UGUR .**

                Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles [L.335-2 et suivants du Code de Propriété Intellectuelle](https://www.legifrance.gouv.fr/affichCodeArticle.do?idArticle=LEGIARTI000032655082&cidTexte=LEGITEXT000006069414&dateTexte=20160605).**</p>

            <h5>3 - Limitations de responsabilité.</h5>
            <p>SAYMAZ UGUR ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://ugursaymaz.fr/.**

                SAYMAZ UGUR décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://ugursaymaz.fr/.**

                SAYMAZ UGUR s’engage à sécuriser au mieux le site https://ugursaymaz.fr/, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.**

                Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. SAYMAZ UGUR se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.**

                Le cas échéant, SAYMAZ UGUR se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).**</p>


            <h5>CNIL et gestion des données personnelles.</h5>
            <p>Conformément aux dispositions de [la loi 78-17 du 6 janvier 1978 modifiée](https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000000886460), l’utilisateur du site https://ugursaymaz.fr/ dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : UGUR SAYMAZ - ugursaymaz@hotmail.fr.**

                Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...), lisez notre https://ugursaymaz.fr/politquedeconfidentialite. [Consignes : ajoutez ici le lien hypertexte vers votre politique de confidentialité]</p>

            <h5>6 - Droit applicable et attribution de juridiction.</h5>
            <p>Tout litige en relation avec l’utilisation du site https://ugursaymaz.fr/ est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Mantes la Jolie.</p>


        </div>


    </div>

{% endblock %}
", "cgv/index.html.twig", "C:\\wamp64\\www\\la-boutique-de-sport\\templates\\cgv\\index.html.twig");
    }
}
