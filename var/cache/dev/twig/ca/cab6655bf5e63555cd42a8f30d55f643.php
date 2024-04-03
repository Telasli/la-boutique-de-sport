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

/* admin/order.html.twig */
class __TwigTemplate_73e6fadab2087e7802af667f2845e36f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_admin", ["id_order" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\" class=\"btn btn-light btn-sm\">Voir/Imprimer la facture</a>
    <h3 class=\"mt-2\">Commande n°";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "</h3>
    ";
        // line 6
        echo twig_include($this->env, $context, "admin/state.html.twig", ["field" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "state", [], "any", false, false, false, 6)]]);
        echo "
    <br/>
    <br/>
    <span>Passée le : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</span><br/>
    <span>Stripe Session Id : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "stripeSessionId", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>


    <div class=\"row my-4\">
        <div class=\"col-md-6\">
            <strong>Adresse de livraison :</strong><br/>
            ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "delivery", [], "any", false, false, false, 16);
        echo "
        </div>
        <div class=\"col-md-6\">
            <strong>Transporteur</strong><br/>
            ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "carrierName", [], "any", false, false, false, 20), "html", null, true);
        echo "
        </div>
    </div>

    <strong>Contenu de la commande :</strong><br/>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Illustration</th>
            <th scope=\"col\">Nom du produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire H.T</th>
            <th scope=\"col\">TVA</th>
            <th scope=\"col\">Total T.T.C</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "orderDetails", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "                <tr>
                    <td>
                        <img src=\"/uploads/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productIllustration", [], "any", false, false, false, 41), "html", null, true);
            echo "\" width=\"100px\" alt=\"\">
                    </td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productQuantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, $context["product"], "productPrice", [], "any", false, false, false, 45)), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productTva", [], "any", false, false, false, 46), "html", null, true);
            echo "%</td>
                    ";
            // line 47
            $context["coeff"] = (1 + (twig_get_attribute($this->env, $this->source, $context["product"], "productTva", [], "any", false, false, false, 47) / 100));
            // line 48
            echo "
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(((twig_get_attribute($this->env, $this->source, $context["product"], "productPrice", [], "any", false, false, false, 49) * (isset($context["coeff"]) || array_key_exists("coeff", $context) ? $context["coeff"] : (function () { throw new RuntimeError('Variable "coeff" does not exist.', 49, $this->source); })())) * twig_get_attribute($this->env, $this->source, $context["product"], "productQuantity", [], "any", false, false, false, 49))), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            <tr>
                <td></td>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "carrierName", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 58, $this->source); })()), "carrierPrice", [], "any", false, false, false, 58)), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"text-right fs-5\">
        <strong>Total H.T : </strong> ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 64, $this->source); })()), "totalWt", [], "any", false, false, false, 64) - twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 64, $this->source); })()), "totalTva", [], "any", false, false, false, 64))), "html", null, true);
        echo "<br/>
        <strong>Total TVA : </strong> ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "totalTva", [], "any", false, false, false, 65)), "html", null, true);
        echo "<br/>
        <strong>Total T.T.C : </strong> ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtensions']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "totalWt", [], "any", false, false, false, 66)), "html", null, true);
        echo "
    </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 66,  191 => 65,  187 => 64,  178 => 58,  171 => 54,  167 => 52,  158 => 49,  155 => 48,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  132 => 41,  128 => 39,  124 => 38,  103 => 20,  96 => 16,  87 => 10,  83 => 9,  77 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}

{% block main %}
    <a target=\"_blank\" href=\"{{ path('app_invoice_admin', { id_order : order.id }) }}\" class=\"btn btn-light btn-sm\">Voir/Imprimer la facture</a>
    <h3 class=\"mt-2\">Commande n°{{ order.id }}</h3>
    {{ include('admin/state.html.twig', { field : { 'value' : order.state } } ) }}
    <br/>
    <br/>
    <span>Passée le : {{ order.createdAt|date('d/m/Y') }}</span><br/>
    <span>Stripe Session Id : {{ order.stripeSessionId }}</span>


    <div class=\"row my-4\">
        <div class=\"col-md-6\">
            <strong>Adresse de livraison :</strong><br/>
            {{ order.delivery|raw }}
        </div>
        <div class=\"col-md-6\">
            <strong>Transporteur</strong><br/>
            {{ order.carrierName }}
        </div>
    </div>

    <strong>Contenu de la commande :</strong><br/>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Illustration</th>
            <th scope=\"col\">Nom du produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire H.T</th>
            <th scope=\"col\">TVA</th>
            <th scope=\"col\">Total T.T.C</th>
        </tr>
        </thead>
        <tbody>
            {% for product in order.orderDetails %}
                <tr>
                    <td>
                        <img src=\"/uploads/{{ product.productIllustration }}\" width=\"100px\" alt=\"\">
                    </td>
                    <td>{{ product.productName }}</td>
                    <td>{{ product.productQuantity }}</td>
                    <td>{{ product.productPrice|price }}</td>
                    <td>{{ product.productTva }}%</td>
                    {% set coeff = 1 + (product.productTva / 100) %}

                    <td>{{ ((product.productPrice * coeff) * product.productQuantity)|price }}</td>
                </tr>
            {% endfor %}
            <tr>
                <td></td>
                <td>{{ order.carrierName }}</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>{{ order.carrierPrice|price }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"text-right fs-5\">
        <strong>Total H.T : </strong> {{ (order.totalWt - order.totalTva)|price }}<br/>
        <strong>Total TVA : </strong> {{ order.totalTva|price }}<br/>
        <strong>Total T.T.C : </strong> {{ order.totalWt|price }}
    </div>



{% endblock %}", "admin/order.html.twig", "C:\\wamp64\\www\\la-boutique-de-sport\\templates\\admin\\order.html.twig");
    }
}
