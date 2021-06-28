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

/* order/add.html.twig */
class __TwigTemplate_6e0b17c47e8b0fd42a8edb238783ee75261c95a5ad17602e56a5cdd3925a09c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        <script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande - La boutique française";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<h2>Mon récap</h2>
    <p>Vérifiez vos informations avant de payer</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong> <br>
            <div class=\"form-check mt-4\">
                ";
        // line 17
        echo ($context["delivery"] ?? null);
        echo "
            </div>
            <hr>
            <strong>Mon transporteur</strong> <br>
            <div class=\"form-check\">
                ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
        echo " <br>
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        echo " <br>
                ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 24) / 100), 2, ",", "."), "html", null, true);
        echo " €
            </div>
        </div>
        <div class=\"col-md-6\">
        <div class=\"text-center\">
            <p>Ma commande</p>
        </div>
            <div class=\"order-summary\">
                ";
        // line 32
        $context["total"] = null;
        // line 33
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 34
            echo "                <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                    <div class=\"col-2\">
                        <img src=\"/uploads/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "illustration", [], "any", false, false, false, 36), "html", null, true);
            echo "\" height=\"75\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "\"> <br>
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "<br>
                        <small>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "subtitle", [], "any", false, false, false, 40), "html", null, true);
            echo "
                        <br>
                        x ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42), "html", null, true);
            echo "
                        </small>
                    </td>
                    </div>
                    <div class=\"col-2 my-auto\">
                        ";
            // line 47
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                    </div>
                </div>
                ";
            // line 50
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 50), "price", [], "any", false, false, false, 50) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50)));
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>

            <hr>

            <strong>Sous-total : </strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo " € <br>
            <strong>Livraison : </strong> ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 57) / 100), 2, ",", "."), "html", null, true);
        echo " €
            <hr>
            <strong>Total : </strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 59) / 100)), 2, ",", "."), "html", null, true);
        echo " €<br>

            <a class=\"btn-block btn btn-success mt-3\" id=\"checkout-button\">Payer ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 61) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
    </div>
";
    }

    // line 67
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    <script type=\"text/javascript\">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe(\"pk_test_51IcVT3CZ2CAz2ydEI6SaB2NIkWxlqB4ETAZIdrSvvBxRhHudZGPqwifAEWkWAnwIdsyMpCairgNQFe1U4msB6i7f00s7uxty7i\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function () {
      fetch(\"/commande/create-session/";
        // line 73
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
        echo "\", {
        method: \"POST\",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
            if(session.error == 'order'){
                window.location.replace('";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "');
            } else {
                return stripe.redirectToCheckout({ sessionId: session.id });
            }
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error(\"Error:\", error);
        });
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 81,  198 => 73,  191 => 68,  187 => 67,  179 => 61,  174 => 59,  169 => 57,  165 => 56,  159 => 52,  153 => 51,  151 => 50,  145 => 47,  137 => 42,  132 => 40,  128 => 39,  120 => 36,  112 => 34,  107 => 33,  105 => 32,  94 => 24,  90 => 23,  86 => 22,  78 => 17,  69 => 10,  65 => 9,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "C:\\Users\\brico\\Desktop\\laboutiquefrancaise\\templates\\order\\add.html.twig");
    }
}
