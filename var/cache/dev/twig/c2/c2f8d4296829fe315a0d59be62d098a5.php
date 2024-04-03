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

/* home/index.html.twig */
class __TwigTemplate_0be1bbc6947648fdb28553395b391c50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["header"]) {
            // line 12
            echo "                <div class=\"carousel-item ";
            if (($context["key"] == 0)) {
                echo "active";
            }
            echo "\">
                    <img src=\"/uploads/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></img>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h1>
                            <p class=\"opacity-75\">
                                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 18), "html", null, true);
            echo "
                            </p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "buttonLink", [], "any", false, false, false, 20), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "buttonTitle", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <h3>Nos meilleures ventes</h3>
        <p>Découvrez les articles les plus vendus</p>
        <div class=\"row\">

            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsInHomepage"]) || array_key_exists("productsInHomepage", $context) ? $context["productsInHomepage"] : (function () { throw new RuntimeError('Variable "productsInHomepage" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "                <div class=\"col-lg-4\">
                    <img src=\"/uploads/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"img-fluid\">
                    <h2 class=\"fw-normal mt-2\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</h2>
                    <div style=\"font-size: 14px;\">
                        ";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 53);
            echo "
                    </div>
                    <p><a class=\"btn btn-secondary mt-2\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Découvrir</a></p>
                </div><!-- /.col-lg-4 -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Une équipe de passionnée <span class=\"text-body-secondary\">avec des professionnels</span></h2>
                <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class=\"col-md-5\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/first.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Venez nous recontrer dans nos<span class=\"text-body-secondary\"> boutique en France</span></h2>
                <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/second.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">

            </div>
        </div>


        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 84,  188 => 72,  172 => 58,  163 => 55,  158 => 53,  153 => 51,  149 => 50,  146 => 49,  142 => 48,  117 => 25,  104 => 20,  99 => 18,  94 => 16,  88 => 13,  81 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            {% for key,header in headers %}
                <div class=\"carousel-item {% if key == 0 %}active{% endif %}\">
                    <img src=\"/uploads/{{ header.illustration }}\" class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></img>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>{{ header.title }}</h1>
                            <p class=\"opacity-75\">
                                {{ header.content }}
                            </p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{ header.buttonLink }}\">{{ header.buttonTitle }}</a></p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <h3>Nos meilleures ventes</h3>
        <p>Découvrez les articles les plus vendus</p>
        <div class=\"row\">

            {% for product in productsInHomepage %}
                <div class=\"col-lg-4\">
                    <img src=\"/uploads/{{ product.illustration }}\" class=\"img-fluid\">
                    <h2 class=\"fw-normal mt-2\">{{ product.name }}</h2>
                    <div style=\"font-size: 14px;\">
                        {{ product.description|raw }}
                    </div>
                    <p><a class=\"btn btn-secondary mt-2\" href=\"{{ path('app_product', { slug : product.slug } ) }}\">Découvrir</a></p>
                </div><!-- /.col-lg-4 -->
            {% endfor %}

        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Une équipe de passionnée <span class=\"text-body-secondary\">avec des professionnels</span></h2>
                <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class=\"col-md-5\">
                <img src=\"{{ asset('assets/img/first.jpg') }}\" alt=\"\" class=\"img-fluid\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Venez nous recontrer dans nos<span class=\"text-body-secondary\"> boutique en France</span></h2>
                <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <img src=\"{{ asset('assets/img/second.jpg') }}\" alt=\"\" class=\"img-fluid\">

            </div>
        </div>


        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
{% endblock %}

", "home/index.html.twig", "C:\\wamp64\\www\\la-boutique-de-sport\\templates\\home\\index.html.twig");
    }
}
