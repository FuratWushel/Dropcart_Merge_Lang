<?php
/**
 * =========================================================
 * DROPCART
 * =========================================================
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
 * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * ---------------------------------------------------------
 *
 * File: nl.php
 * Date: 27-02-18 12:00
 *
 * @author Dropcart <info@dropcart.nl>
 * @copyright © [2016 - 2018] Dropcart - All rights reserved.
 * @license MIT (https://opensource.org/licenses/MIT)
 * @version 3.0.0
 *
 * =========================================================
 */

return [

    'site_footer' => 'Alle prijzen zijn inclusief BTW - Merknamen zijn alleen gebruikt om de toepasbaarheid van producten aan te geven en dienen verder niet te worden geassocieerd met',

    'page_titles' => [
        '404' => 'Hier gaat iets helemaal 404-fout',
        'about_us' => 'Over ons',
        'account' => 'Uw account',
        'checkout' => 'Afrekenen',
        'contact' => 'Contact',
        'customer_details' => 'Klantgegevens',
        'home' => 'Home',
        'order_confirmation' => 'Orderbevestiging',
        'product' => 'Product',
        'products' => 'Producten',
        'shopping_cart' => 'Winkelwagen',
        'support' => 'Ondersteuning',
    ],

    // CHANGES AT OWN RISK!
    'url' => [
        // Default pages
        'contact'				=> '/contact',
        'about_us'				=> '/over-ons',
        'terms_and_conditions'	=> '/onze-voorwaarden',
        'support'				=> '/support',
        'account'				=> '/mijn-account',
        // Products
        'products'	            => '/producten',
        'category_products'	    => '/producten/categorie/',
        // Product overview
        'product'				=> '/product/',
        // Shopping cart
        'shopping_cart'			=> '/winkelmandje',
        // Shopping cart add / remove
        'shopping_cart_add'		=> '/winkelmandje/toevoegen/',
        'shopping_cart_remove'	=> '/winkelmandje/verwijderen/',
        // Order routes
        'customer_details'		=> '/kantgegevens',
        'checkout'				=> '/bestellen/afrekenen',
        'confirmation'			=> '/bestellen/bevestiging'
    ],

    'page_home' => 	[
        'title' => 'Welkom',
        'lead_title' => 'Uw titel hier',
        'lead_text' => 'ondertitel',
    ],

    'page_thanks' => 	[
        'paid_title' => 'Bedankt voor uw bestelling!',
        'paid_content' => '<p>								We hebben uw betaling ontvangen en u een betalingsbewijs toegezonden. Uw bestelling zal zo spoedig mogelijk worden geleverd.							</p>',
        'unpaid_title' => 'Er ging iets fout',
        'paid_content2' => '<p>								  We hebben uw betaling ontvangen, maar deze is nog niet verwerkt. Controlleer goed uw opgegeven e-mail voor ontvangen berichten: zodra uw betaling geslaagd, ontvangt u een betalingsbevestiging.							</p>',
        'unpaid_content' => '<p>Er is iets misgegaan tijdens uw betaling. Controlleer goed uw opgegeven e-mail voor ontvangen berichten: als de betaling toch geslaagd is, ontvangt u een betalingsbevestiging.</p>',
        'try_again' => 'U kunt de betaling ook opnieuw proberen te doen.',
    ],

    'page_contact' => 	[
        'title' => 'Onze contactgegevens',
        'content' => '@Default::dynamic.page-contact',
        'emailaddress_desc' => 'E-mailadres',
        'emailaddress' => 'uw@emailadres.nl',
        'phone_desc' => 'Telefoonnummer',
        'phone' => '(+31) (0) 12-345678',
        'address_desc' => 'Adres',
        'address' => 'Uw straat 2, POSTCODE Plaats, Land',
        'vat_desc' => 'BTW-nummer',
        'vat' => 'Uw BTW-nummer',
        'coc_desc' => 'KvK-nummer',
        'coc' => 'Uw KvK-nummer',
    ],
    'page_about_us' => 	[
        'title'			=> 'About us',
        'content'		=> 'Wij zijn Dropcrart!',
    ],

    'page_search' => [
        'title' => 'Zoek binnen assortiment',
        'search' => 'Zoeken',
        ],


];