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

    'site_header' => [
        'assortment' => 'Zoek binnen assortiment',
        'search' => 'Zoeken',
    ],

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
        'customer_details'		=> '/klantgegevens',
        'checkout'				=> '/bestellen/afrekenen',
        'confirmation'			=> '/bestellen/bevestiging'
    ],

    'pagination' => [
        'back'                  => 'Vorige',
        'next'                  => 'Volgende',
    ],

    'page_home' => 	[
        'lead_title'            => 'Uw titel hier',
        'lead_text'             => 'ondertitel',
        'left_block'            => 'Hier komt text in het linker blok',
        'right_block'           => 'Hier komt text in het rechter blok',
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

    'page_aboutus' => 	[
        'content'               => 'Wij zijn Dropcart! Hier kan je een kort verhaaltje maken over het bedrijf.',
    ],

    'page_support' => [
        'content'               => 'Hieronder vindt u de meest gestelde vragen. Staat uw vraag of gewenste antwoord er niet tussen. <a href="contact">Neem contact met ons op</a>',

        'faq' => 		[
            '0' => 			[
                'q' => 'Q',
                'a' => 'A',
            ],
            '1' => 			[
                'q' => 'Q',
                'a' => 'A',
            ],
            '2' => 			[
                'q' => 'Q',
                'a' => 'A',
            ],
        ],
    ],

    'page_products' => [
        'filter' => 	[
            'results'           => 'Filter resultaten',
            'not_in_stock'      => 'Toon ook niet voorraadige producten',
            'name'              => 'Filter',
            'search'            => 'Zoeken',
            'search_category'   => 'Zoeken binnen categorie',
        ],
    ],

    'page_shoppingcart' => [
        //
    ],

    'shopping_cart' => [
        'cart_empty'            => 'Uw winkelwagen is leeg',

        'product' => 	[
            'name'              => 'Product',
            'number'            => 'Aantal',
            'unit_price'        => 'Stukprijs',
            'price'             => 'Prijs',
        ],

        'steps' => [
          'step'                => 'Stap',
          'step_one'            => 'Winkelwagen',
          'step_two'            => 'Uw gegevens',
          'step_three'          => 'Bevestigen en betalen',
          'step_four'           => 'Bestelling geplaatst',
        ],

        'alerts' => [
            'change'            => 'De bestelling is al bevestigd. U kunt deze gegevens daarom niet meer aanpassen, maar alleen lezen: <a href="{{ lang.url.checkout }}">Klik hier om te betalen</a>.',
            'confirm'           => 'De bestelling is al bevestigd. Het is nog niet gelukt om de betaling te voltooien. Druk nogmaals op onderstaande knop om deze bestelling te betalen.',
            'check'             => 'Controleer de onderstaande informatie goed! Als u een fout ontdekt in het afleveradres, factuuradres of in de contactgegevens, <a href="{{ lang.url.customer_details }}">klik hier om deze te wijzigen</a>',
            'save'              => 'Vergeet niet onderaan de pagina op de knop "Opslaan" te drukken na het bewerken van de gegevens.',
        ],

        'checkout' => [
            'select_payment'    => 'Selecteer uw gewenste betaalmethode:',
            'termsandconditions'=> 'Ik ga akkoord met de algemene voorwaarden <a href="{{ lang.url.terms_and_confitions }}">(Bekijk)</a>',
            'redirect'          => 'U wordt omgeleid naar onze betaalpagina waar u het totaalbedrag direct kan voldoen.',
        ],

        'next_step' => [
            'checkout'          => 'Naar afrekenen',
            'customer_data'     => 'Naar klantgegevens',
            'backtopayment'     => 'Opnieuw naar Betalen',
            'place_order'       => 'Bestelling plaatsen en Betalen',
            'step_3'            => 'Naar stap 3 - Afrekenen',
            'save_step_3'       => 'Opslaan en naar stap 3 - Afrekenen',
        ],

        'register_form' => [
            'email'             => 'E-mailadres',
            'email_sub'         => 'Op dit e-mailadres ontvangt u het besteloverzicht, het betalingsbewijs en de verzendingsinformatie.',
            'phone'             => 'Telefoonnummer',
            'phone_sub'         => 'Met dit telefoonnummer nemen wij contact op als wij u dringend willen spreken over uw bestelling.',
            'company'           => 'Bedrijf',
            'firstname'         => 'Voornaam',
            'lastname'          => 'Achternaam',
            'zipcode'           => 'Postcode',
            'housenumber'       => 'Huisnummer',
            'address'           => 'Adres',
            'extra_address'     => 'Extra adres regel',
            'city'              => 'Woonplaats',
            'country'           => 'Land',
            'other_address'     => 'Mijn bestelling op een ander adres afleveren.',
            'delivery_address'  => 'Afleveradres',
        ],

        'order_confirmation' => [
            'thanks'            => 'Bedankt voor uw bestelling!',
            'paid'              => 'We hebben uw betaling ontvangen en u een betalingsbewijs toegezonden. Uw bestelling zal zo spoedig mogelijk worden geleverd.',
            'pending'           => 'We hebben uw betaling ontvangen, maar deze is nog niet verwerkt. Controlleer goed uw opgegeven e-mail voor ontvangen berichten: zodra uw betaling geslaagd, ontvangt u een betalingsbevestiging.',
            'oops'              => 'Er ging iets fout',
            'error'             => 'Er is iets misgegaan tijdens uw betaling. Controlleer goed uw opgegeven e-mail voor ontvangen berichten: als de betaling toch geslaagd is, ontvangt u een betalingsbevestiging.',
            'retry'             => 'U kunt de betaling ook opnieuw proberen te doen.',
        ],
    ],

    'product_details' => [
        'ean'                   => 'EAN',
        'sku'                   => 'SKU',
        'include_shipping'      => 'Inclusief verzendkosten',
        'order'                 => 'Bestellen',
        'no_products'           => 'Geen producten beschikbaar',
    ],

    'stock' => 	[
        'out_of_stock'          => 'Dit product is niet op voorraad',
        'small_stock'           => 'Niet genoeg op voorraad, langere levertijd',
        'big_stock'             => 'Ruimschoots op voorraad',
        'in_stock'              => 'Op voorraad',
    ],

    'shipping' => 	[
        'time'                  => 'Levertijd',
        'days'                  => 'werkdag(en)',
        'time_days'             => 'Levertijd 1-3 werkdag(en)',
    ],
];