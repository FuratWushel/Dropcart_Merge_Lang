<?php

/* shopping_cart_overview.html.twig */
class __TwigTemplate_927890590c0378e68be8bf1e889e9464dc542ae442e87aacf06e9c589b3e2231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "shopping_cart_overview.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</h1>

    <ul class=\"nav nav-tabs order-tabs\">
        <li class=\"active\">
            <a href=\"javascript:void(0);\">
                <strong>Stap 1 - </strong>
                Winkelwagen
            </a>
        </li>
        <li class=\"";
        // line 14
        echo (((twig_length_filter($this->env, ($context["shopping_cart"] ?? null)) <= 0)) ? ("disabled") : (""));
        echo "\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["shopping_cart"] ?? null)) >= 1)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "customer_details", array())) : ("javascript:void(0);")), "html", null, true);
        echo "\">
                <strong>Stap 2 - </strong>
                Uw gegevens
            </a>
        </li>
        <li class=\"";
        // line 20
        echo ((array_key_exists("transaction", $context)) ? ("") : ("disabled"));
        echo "\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("transaction", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "checkout", array())) : ("javascript:void(0);")), "html", null, true);
        echo "\">
                <strong>Stap 3 - </strong>
                Bevestigen en betalen
            </a>
        </li>
        <li class=\"disabled\">
            <a href=\"javascript:void(0);\">
                <strong>Stap 4 - </strong>
                Bestelling geplaatst
            </a>
        </li>
    </ul>

    ";
        // line 34
        $this->loadTemplate("blocks/flash_messages.html.twig", "shopping_cart_overview.html.twig", 34)->display($context);
        // line 35
        echo "
    ";
        // line 36
        if ((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) {
            // line 37
            echo "        <div class=\"alert alert-warning\">
            De bestelling is al bevestigd. U kunt deze gegevens daarom niet meer aanpassen, maar alleen lezen: <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "checkout", array()), "html", null, true);
            echo "\">klik hier om te betalen</a>.
        </div>
    ";
        }
        // line 41
        echo "
    <table class=\"shopping-bag table\">

        ";
        // line 44
        if ((twig_length_filter($this->env, ($context["shopping_cart"] ?? null)) < 1)) {
            // line 45
            echo "            <tbody>
            <td>
                <div class=\"alert alert-info center\">
                    <h5>Uw winkelwagen is leeg</h5>
                </div>
            </td>
            </tbody>
        ";
        } else {
            // line 53
            echo "            <thead>
            <tr>
                <th width=\"10%\"></th>
                <th>Product</th>
                <th width=\"14%\">Aantal</th>
                <th width=\"12%\">Stukprijs</th>
                <th width=\"12%\">Prijs</th>
                <th class=\"fold\"></th>
            </tr>
            </thead>
            <tbody>

            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shopping_cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 66
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array()), "html", null, true);
                echo "\">
                    <td>
                        <img src=\"";
                // line 68
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "images", array())) > 0)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "images", array()), 0, array(), "array"), "url", array())) : ("/img/no_image.gif")), "html", null, true);
                echo "\"
                             class=\"fill\">
                    </td>
                    <td>
                        <strong><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "product", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "name", array())) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "name", array()), "html", null, true);
                echo "</a></strong>
                        <br>

                        ";
                // line 75
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array(), "any", false, true), "stock", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()) > 0))) {
                    // line 76
                    echo "
                            ";
                    // line 77
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()) > twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()))) {
                        // line 78
                        echo "                                <div class=\"label label-warning\">Niet genoeg op voorraad, langere levertijd</div>
                            ";
                    } else {
                        // line 80
                        echo "                                <div class=\"label label-success\">
                                    ";
                        // line 81
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()) > 10)) {
                            // line 82
                            echo "                                        <div class=\"label label-success\">Ruimschoots op voorraad</div>
                                    ";
                        } else {
                            // line 84
                            echo "                                        <div class=\"label label-success\">Op voorraad</div>
                                    ";
                        }
                        // line 86
                        echo "                                </div>
                            ";
                    }
                    // line 88
                    echo "
                            ";
                    // line 89
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array())) {
                        // line 90
                        echo "                                <div class=\"label label-info\">Levertijd ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array()), "html", null, true);
                        echo "
                                    werkdag(en)
                                </div>
                            ";
                    } else {
                        // line 94
                        echo "                                <div class=\"label label-info\">Levertijd 1-3 werkdag(en)</div>
                            ";
                    }
                    // line 96
                    echo "                        ";
                } else {
                    // line 97
                    echo "                            <div class=\"label label-warning\">Dit product is niet op voorraad</div>
                        ";
                }
                // line 99
                echo "
                        <table class=\"product-id-table\">
                            <tr>
                                <th>EAN</th>
                                <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "ean", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <th>SKU</th>
                                <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "sku", array()), "html", null, true);
                echo "</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <input class=\"product-quantity\" type=\"text\" data-truevalue=\"";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()), "html", null, true);
                echo "\"
                               value=\"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()), "html", null, true);
                echo "\" disabled/>

                        ";
                // line 115
                if (( !array_key_exists("transaction", $context) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) != "CONFIRMED"))) {
                    // line 116
                    echo "
                            <a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart_add", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array())) . "/1"), "html", null, true);
                    echo "\"><span
                                        class=\"glyphicon glyphicon-plus\"></span></a>
                            <a href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart_remove", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array())) . "/1"), "html", null, true);
                    echo "\"><span
                                        class=\"glyphicon glyphicon-minus\"></span></a>

                        ";
                }
                // line 123
                echo "
                    </td>
                    <td>
                        &euro;&nbsp;<span
                                class=\"product_piece\">";
                // line 127
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "price_details", array()), "piece_price", array()), "in", array()), 2, ",", "."), "html", null, true);
                echo "</span>
                    </td>
                    <td>
                        &euro;&nbsp;<span
                                class=\"product_subtotal\">";
                // line 131
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "price_details", array()), "piece_price", array()), "in", array()) * twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array())), 2, ",", "."), "html", null, true);
                echo "</span>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "
            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"4\" align=\"right\">
                    <div class=\"next-step\">
                        ";
            // line 141
            if ((array_key_exists("transaction", $context) && ($context["transaction"] ?? null))) {
                // line 142
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "checkout", array()), "html", null, true);
                echo "\" class=\"btn btn-lg btn-block btn-primary\">Naar afrekenen <span
                                        class=\"glyphicon glyphicon-shopping-cart\"></span></a>
                        ";
            } else {
                // line 145
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "customer_details", array()), "html", null, true);
                echo "\" class=\"btn btn-lg btn-block btn-primary customer-link\">Naar klantgegevens <span
                                        class=\"glyphicon glyphicon-shopping-cart\"></span></a>
                        ";
            }
            // line 148
            echo "                    </div>
                </td>
                <td>
                    <h3>&euro;&nbsp;<span class=\"shopping-bag-total\">";
            // line 151
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_price", array()), 2, ".", ","), "html", null, true);
            echo "</span>
                    </h3>
                    <p>
                        <small>Inclusief verzendkosten</small>
                    </p>
                </td>
            </tr>
            </tfoot>
        ";
        }
        // line 160
        echo "        <!-- END IF HAS PRODUCTS -->
    </table>

";
    }

    public function getTemplateName()
    {
        return "shopping_cart_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 160,  301 => 151,  296 => 148,  289 => 145,  282 => 142,  280 => 141,  272 => 135,  262 => 131,  255 => 127,  249 => 123,  242 => 119,  237 => 117,  234 => 116,  232 => 115,  227 => 113,  223 => 112,  215 => 107,  208 => 103,  202 => 99,  198 => 97,  195 => 96,  191 => 94,  183 => 90,  181 => 89,  178 => 88,  174 => 86,  170 => 84,  166 => 82,  164 => 81,  161 => 80,  157 => 78,  155 => 77,  152 => 76,  150 => 75,  142 => 72,  135 => 68,  129 => 66,  125 => 65,  111 => 53,  101 => 45,  99 => 44,  94 => 41,  88 => 38,  85 => 37,  83 => 36,  80 => 35,  78 => 34,  62 => 21,  58 => 20,  50 => 15,  46 => 14,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "shopping_cart_overview.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\shopping_cart_overview.html.twig");
    }
}
