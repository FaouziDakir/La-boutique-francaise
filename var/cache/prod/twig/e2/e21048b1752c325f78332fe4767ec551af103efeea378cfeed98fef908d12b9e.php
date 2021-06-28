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
class __TwigTemplate_44d2152ca0b98cca64d730c3847969f5a8b27fff0835932b11ae542e3889ba87 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes commandes - La boutique française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Mes commandes</h1>
    Bienvenue ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "firstname", [], "any", false, false, false, 7), "html", null, true);
        echo " <br>
    Ici vous pouvez gérer vos commandes <br>

    ";
        // line 10
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["orders"] ?? null)), 0))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
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
        return array (  148 => 48,  145 => 47,  140 => 44,  131 => 41,  128 => 40,  124 => 38,  122 => 37,  119 => 36,  117 => 35,  114 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  93 => 28,  89 => 27,  74 => 14,  69 => 11,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "C:\\Users\\brico\\Desktop\\laboutiquefrancaise\\templates\\account\\order.html.twig");
    }
}
