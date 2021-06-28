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

/* account/order.html.twig */
class __TwigTemplate_ee08cf945fde56cdcd9b3febcb3449871f3f03b4fd6373d5d9261504a2106ded extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes commandes - La boutique française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Mes commandes</h1>
    Bienvenue ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "firstname", [], "any", false, false, false, 7), "html", null, true);
        echo " <br>
    Ici vous pouvez gérer vos commandes <br>

    ";
        // line 10
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 10, $this->source); })())), 0))) {
            // line 11
            echo "    <hr>
        <p class=\"text-center\">Vous n'avez pas encore passé de commande.</p>
    ";
        } else {
            // line 14
            echo "  
    <table class=\"table mt-4\">
        <thead>
            <tr>
                <th scope=\"col\">Passé le</th>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Produits</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 28
                echo "                <tr>
                    <td><span class=\"badge badge-secondary\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 29), "html", null, true);
                echo "</span></td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 31)), "html", null, true);
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 32) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 32)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td>";
                // line 33
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 33), 1))) {
                    // line 34
                    echo "                        Paiement accepté
                    ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 35
$context["order"], "state", [], "any", false, false, false, 35), 2))) {
                    // line 36
                    echo "                        Préparation en cours
                    ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 37
$context["order"], "state", [], "any", false, false, false, 37), 3))) {
                    // line 38
                    echo "                        Livraison en cours
                    ";
                }
                // line 40
                echo "                    </td>
                    <td class=\"text-right\"><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">Voir ma commande</a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tbody>
    </table>
    ";
        }
        // line 47
        echo "
    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 48,  175 => 47,  170 => 44,  161 => 41,  158 => 40,  154 => 38,  152 => 37,  149 => 36,  147 => 35,  144 => 34,  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  123 => 28,  119 => 27,  104 => 14,  99 => 11,  97 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes - La boutique française{% endblock %}

{% block content %}
    <h1>Mes commandes</h1>
    Bienvenue {{ app.user.firstname }} <br>
    Ici vous pouvez gérer vos commandes <br>

    {% if orders|length == 0 %}
    <hr>
        <p class=\"text-center\">Vous n'avez pas encore passé de commande.</p>
    {% else %}
  
    <table class=\"table mt-4\">
        <thead>
            <tr>
                <th scope=\"col\">Passé le</th>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Produits</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            {% for order in orders %}
                <tr>
                    <td><span class=\"badge badge-secondary\">{{order.reference}}</span></td>
                    <td>{{order.createdAt|date('d/m/Y')}}</td>
                    <td>{{order.orderDetails|length}}</td>
                    <td>{{((order.carrierPrice + order.getTotal) / 100)|number_format(2, ',', '.')}} €</td>
                    <td>{% if order.state == 1 %}
                        Paiement accepté
                    {% elseif order.state == 2 %}
                        Préparation en cours
                    {% elseif order.state == 3 %}
                        Livraison en cours
                    {% endif %}
                    </td>
                    <td class=\"text-right\"><a href=\"{{ path('account_order_show', {'reference': order.reference}) }}\">Voir ma commande</a></td>
                </tr>
                {% endfor %}
        </tbody>
    </table>
    {% endif %}

    <a href=\"{{ path('account') }}\">Retour</a>
{% endblock %}
", "account/order.html.twig", "C:\\Users\\brico\\Desktop\\laboutiquefrancaise\\templates\\account\\order.html.twig");
    }
}
