<?php

/* checkout.html.twig */
class __TwigTemplate_b1211c300b97568feb7baa88f193dc03511eb3672fe394ed31c0980432ac66d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "checkout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'post_js' => array($this, 'block_post_js'),
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
        <li>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart", array()), "html", null, true);
        echo "\">
                <strong>Stap 1 - </strong>
                Winkelwagen
            </a>
        </li>
        <li>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "customer_details", array()), "html", null, true);
        echo "\">
                <strong>Stap 2 - </strong>
                Uw gegevens
            </a>
        </li>
        <li class=\"active\">
            <a href=\"javascript:void(0);\">
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
        $this->loadTemplate("blocks/flash_messages.html.twig", "checkout.html.twig", 34)->display($context);
        // line 35
        echo "
    ";
        // line 36
        if ((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) {
            // line 37
            echo "        <div class=\"alert alert-warning\">
            De bestelling is al bevestigd. Het is nog niet gelukt om de betaling te voltooien. Druk nogmaals op onderstaande knop om deze bestelling te betalen.
        </div>
    ";
        } else {
            // line 41
            echo "        <div class=\"alert alert-info\">
            Controleer de onderstaande informatie goed! Als u een fout ontdekt in het afleveradres, factuuradres of in de contactgegevens, <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "customer_details", array()), "html", null, true);
            echo "\">klik hier om deze te wijzigen</a>
        </div>
    ";
        }
        // line 45
        echo "
    <form class=\"form-horizontal confirm-form bv-form\" role=\"form\" method=\"post\">
    <input type=\"hidden\" name=\"submitting\" value=\"1\" />
    <table class=\"customer-details-overview table table-bordered\">
        <thead>
        <tr>
            <th width=\"33%\">Factuuradres</th>
            <th width=\"34%\">Afleveradres</th>
            <th width=\"33%\">Contactgegevens</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "first_name", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "last_name", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array())) ? (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "first_name", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "last_name", array()))) : (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_adress", array()), "first_name", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_adress", array()), "last_name", array())))), "html", null, true);
        echo "</td>
            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "last_name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td rowspan=\"2\">";
        // line 63
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_1", array()) . " ") . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_2", array())) ? ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_2", array()) . " ")) : (""))) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_house_nr", array())), "html", null, true);
        echo "</td>
            <td rowspan=\"2\">";
        // line 64
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array())) ? ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_1", array()) . " ") . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_2", array())) ? ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_2", array()) . " ")) : (""))) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_house_nr", array()))) : ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "address_1", array()) . " ") . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "address_2", array())) ? ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "address_2", array()) . " ")) : (""))) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "address_house_nr", array())))), "html", null, true);
        echo "</td>
            <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "telephone", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "postcode", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "city", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array())) ? (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "postcode", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "city", array()))) : (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "postcode", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "city", array())))), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "country_name", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 76
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "country_name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "country_name", array()))), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>


    <table class=\"shopping-bag table\">
        ";
        // line 83
        if ((twig_length_filter($this->env, ($context["shopping_cart"] ?? null)) < 1)) {
            // line 84
            echo "            <tbody>
            <td>
                <div class=\"alert alert-info center\">
                    <h5>Uw winkelwagen is leeg</h5>
                </div>
            </td>
            </tbody>
        ";
        } else {
            // line 92
            echo "        <thead>
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
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shopping_cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 105
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array()), "html", null, true);
                echo "\">
                    <td>
                        <img src=\"";
                // line 107
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "images", array())) > 0)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "images", array()), 0, array(), "array"), "url", array())) : ("/img/no_image.gif")), "html", null, true);
                echo "\"
                             class=\"fill\">
                    </td>
                    <td>
                        <strong><a href=\"";
                // line 111
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "product", array()) . twig_urlencode_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "name", array()))) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "name", array()), "html", null, true);
                echo "</a></strong>
                        <br>

                        ";
                // line 114
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array(), "any", false, true), "stock", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()) > 0))) {
                    // line 115
                    echo "
                            ";
                    // line 116
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()) > twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()))) {
                        // line 117
                        echo "                                <div class=\"label label-warning\">Niet genoeg op voorraad, langere levertijd</div>
                            ";
                    } else {
                        // line 119
                        echo "                                <div class=\"label label-success\">
                                    ";
                        // line 120
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()) > 10)) {
                            // line 121
                            echo "                                        <div class=\"label label-success\">Ruimschoots op voorraad</div>
                                    ";
                        } else {
                            // line 123
                            echo "                                        <div class=\"label label-success\">Op voorraad</div>
                                    ";
                        }
                        // line 125
                        echo "                                </div>
                            ";
                    }
                    // line 127
                    echo "
                            ";
                    // line 128
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array())) {
                        // line 129
                        echo "                                <div class=\"label label-info\">Levertijd ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array()), "html", null, true);
                        echo "
                                    werkdag(en)
                                </div>
                            ";
                    } else {
                        // line 133
                        echo "                                <div class=\"label label-info\">Levertijd 1-3 werkdag(en)</div>
                            ";
                    }
                    // line 135
                    echo "                        ";
                } else {
                    // line 136
                    echo "                            <div class=\"label label-warning\">Dit product is niet op voorraad</div>
                        ";
                }
                // line 138
                echo "
                        <table class=\"product-id-table\">
                            <tr>
                                <th>EAN</th>
                                <td>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "ean", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <th>SKU</th>
                                <td>";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "sku", array()), "html", null, true);
                echo "</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        ";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        &euro;&nbsp;<span
                                class=\"product_piece\">";
                // line 155
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "price_details", array()), "piece_price", array()), "in", array()), 2, ",", "."), "html", null, true);
                echo "</span>
                    </td>
                    <td>
                        &euro;&nbsp;<span
                                class=\"product_subtotal\">";
                // line 159
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "price_details", array()), "piece_price", array()), "in", array()) * twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array())), 2, ",", "."), "html", null, true);
                echo "</span>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "
        </tbody>

        <tbody>
        <tr>
            <td>&nbsp;</td>
            <td colspan=\"2\">
                <div class=\"col-xs-12\"><h4>Selecteer uw gewenste betaalmethode:</h4></div>
                <div class=\"row\">

                    ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 174
                echo "                        <div class=\"col-sm-3 col-xs-6 col-md-2\" style=\"text-align: center; margin-top: 20px;\">
                            <label>
                                <input type=\"radio\" name=\"paymentMethod\" class=\"radio-";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "id", array()), "html", null, true);
                echo "\">
                                ";
                // line 177
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "logo", array())) {
                    // line 178
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "logo", array()), "html", null, true);
                    echo "\" style=\"height: 50px; width: auto;\"><br />
                                ";
                }
                // line 180
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "name", array()), "html", null, true);
                echo "
                                ";
                // line 181
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "extra", array(), "any", true, true)) {
                    // line 182
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "extra", array()), "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 183
                        echo "                                    <br>
                                        ";
                        // line 184
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "type", array()) == "selectable")) {
                            // line 185
                            echo "                                            <select name=\"paymentMethodAttributes[";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), "html", null, true);
                            echo "]\">
                                                ";
                            // line 186
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["payment_method"], "extra", array()), "issuers", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                                // line 187
                                echo "                                                    <option value=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array()), "html", null, true);
                                echo "</option>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 189
                            echo "                                            </select>
                                        ";
                        }
                        // line 191
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo "                                ";
                }
                // line 193
                echo "                            </label>
                        </div>

                        ";
                // line 196
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) == 1)) {
                    // line 197
                    echo "                            <div class=\"clearfix visible-xs-block\"></div>
                        ";
                }
                // line 199
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) == 3)) {
                    // line 200
                    echo "                            <div class=\"clearfix visible-sm-block\"></div>
                        ";
                }
                // line 202
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) == 5)) {
                    // line 203
                    echo "                            <div class=\"clearfix visible-md-block visible-lg-block\"></div>
                        ";
                }
                // line 205
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "
                </div>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"4\">
                <div class=\"next-step\">
                    <div class=\"form-group checkbox has-feedback\">
                        <div class=\"col-sm-12\">
                            <label class=\"confirm\"><input type=\"checkbox\" name=\"conditions\" ";
            // line 217
            echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" checked=\"checked\" disabled=\"disabled\"") : (""));
            echo " data-bv-field=\"conditions\" class=\"i-agree-with-the-conditions\">
                                Ik ga akkoord met de algemene voorwaarden <a href=\"";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "terms_and_confitions", array()), "html", null, true);
            echo "\">(Bekijk)</a>
                            </label>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\" align=\"right\">
                <div class=\"next-step\">
                    ";
            // line 228
            if ((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) {
                // line 229
                echo "                        <button type=\"submit\" class=\"btn btn-lg btn-block btn-primary payment-link\"><span class=\"glyphicon glyphicon-shopping-cart\"></span>&nbsp;Opnieuw naar Betalen</button>
                    ";
            } else {
                // line 231
                echo "                        <button type=\"submit\" class=\"btn btn-lg btn-block btn-primary payment-link\"><span class=\"glyphicon glyphicon-shopping-cart\"></span>&nbsp;Bestelling plaatsen en Betalen</button>
                    ";
            }
            // line 233
            echo "                    <p>
                        U wordt omgeleid naar onze betaalpagina waar u het totaalbedrag direct kan voldoen.
                    </p>
                </div>
            </td>
            <td>
                <h3>&euro;&nbsp;";
            // line 239
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_price", array()), 2, ".", ","), "html", null, true);
            echo "</h3>
                <p>
                    <small>inclusief verzendkosten</small>
                </p>
            </td>
        </tr>
        </tfoot>

        <!-- END IF HAS PRODUCTS -->
        ";
        }
        // line 249
        echo "    </table>

";
    }

    // line 253
    public function block_post_js($context, array $blocks = array())
    {
        // line 254
        echo "    ";
        $this->displayParentBlock("post_js", $context, $blocks);
        echo "

    <script src=\"/js/bv.js\" language=\"javascript\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('.confirm-form').bootstrapValidator({
            message: 'Dit is een verplicht veld',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                conditions: {
                    validators: {
                        notEmpty: {
                            message: 'U dient akkoord te gaan met de algemene (verkoop)voorwaarden.'
                        }
                    }
                }

            }
        });
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 254,  521 => 253,  515 => 249,  502 => 239,  494 => 233,  490 => 231,  486 => 229,  484 => 228,  471 => 218,  467 => 217,  454 => 206,  440 => 205,  436 => 203,  433 => 202,  429 => 200,  426 => 199,  422 => 197,  420 => 196,  415 => 193,  412 => 192,  406 => 191,  402 => 189,  391 => 187,  387 => 186,  382 => 185,  380 => 184,  377 => 183,  372 => 182,  370 => 181,  365 => 180,  359 => 178,  357 => 177,  351 => 176,  347 => 174,  330 => 173,  318 => 163,  308 => 159,  301 => 155,  294 => 151,  286 => 146,  279 => 142,  273 => 138,  269 => 136,  266 => 135,  262 => 133,  254 => 129,  252 => 128,  249 => 127,  245 => 125,  241 => 123,  237 => 121,  235 => 120,  232 => 119,  228 => 117,  226 => 116,  223 => 115,  221 => 114,  213 => 111,  206 => 107,  200 => 105,  196 => 104,  182 => 92,  172 => 84,  170 => 83,  160 => 76,  156 => 75,  150 => 72,  146 => 71,  140 => 68,  134 => 65,  130 => 64,  126 => 63,  118 => 60,  114 => 59,  110 => 58,  95 => 45,  89 => 42,  86 => 41,  80 => 37,  78 => 36,  75 => 35,  73 => 34,  51 => 15,  42 => 9,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "checkout.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\checkout.html.twig");
    }
}
