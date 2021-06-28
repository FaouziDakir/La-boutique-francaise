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

/* account/order_show.html.twig */
class __TwigTemplate_91197e6966f9b214ad9716f403529bc0a2954fba83bcb14ea2ad1552a7c395aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma commande - La boutique française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Ma commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <hr>
    <strong>Commande passée le : </strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
        echo " <br>
    <strong>Référence : </strong><small>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 9), "html", null, true);
        echo "</small> <br>
    <strong>Transporteur : </strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierName", [], "any", false, false, false, 10), "html", null, true);
        echo " <br>
    <strong>Statut de la commande : </strong> 
    ";
        // line 12
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 12), 1))) {
            // line 13
            echo "                        Paiement accepté
                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 14
($context["order"] ?? null), "state", [], "any", false, false, false, 14), 2))) {
            // line 15
            echo "                        Préparation en cours
                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 16
($context["order"] ?? null), "state", [], "any", false, false, false, 16), 3))) {
            // line 17
            echo "                        Livraison en cours
                    ";
        }
        // line 18
        echo " <br>

    <strong>Détails : </strong>

    <table class=\"table mt-4\">
    <thead>
        <tr>
        <th scope=\"col\">Produit</th>
        <th scope=\"col\">Quantité</th>
        <th scope=\"col\">Prix unitaire</th>
        <th scope=\"col\">Total</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "        
        <tr>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
        <td>x";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total : </strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
        <strong>Livraison : </strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierprice", [], "any", false, false, false, 47) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
        <strong>Total : </strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 48) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 48)) / 100), 2, ",", "."), "html", null, true);
        echo " €
    </div>

    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 51,  153 => 48,  149 => 47,  145 => 46,  138 => 41,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 33,  109 => 32,  93 => 18,  89 => 17,  87 => 16,  84 => 15,  82 => 14,  79 => 13,  77 => 12,  72 => 10,  68 => 9,  64 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "C:\\Users\\brico\\Desktop\\laboutiquefrancaise\\templates\\account\\order_show.html.twig");
    }
}
