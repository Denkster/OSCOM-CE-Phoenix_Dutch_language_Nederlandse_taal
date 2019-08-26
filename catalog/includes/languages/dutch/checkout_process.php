<?php
/*
  $Id: checkout_process.php   $

  $Path: /catalog/includes/languages/dutch/  $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
  
  20080104 Denkster Tekst vertaald
  20080808 Denkster tekst bij EMAIL_TEXT_INVOICE_URL
  20100822 Denkster MOD to make checkout_payment_address.php identical to checkout_shipping_address.php
  20110609 Denkster tekst afhankelijk van prijzen in- of exclusief BTW
  20110930 Denkster NL tekst gecontroleerd voor update naar 2.3.1
  20190717 Denkster Updated to Phoenix
  20190804 Denkster Updated to Phoenix 1.0.1.2
*/

  define('EMAIL_TEXT_SUBJECT',          'Verwerking bestelling');
  define('EMAIL_TEXT_ORDER_NUMBER',     'Bestelnummer:');
  define('EMAIL_TEXT_INVOICE_URL',      'Gedetailleerde pakbon vindt u op dit adres:');
  define('EMAIL_TEXT_DATE_ORDERED',     'Besteldatum:');
  define('EMAIL_TEXT_PRODUCTS',         'Artikelen');
if (DISPLAY_PRICE_WITH_TAX == 'true') {
  define('EMAIL_TEXT_SUBTOTAL',         'Subtotaal artikelen inclusief BTW');
} else { 
  define('EMAIL_TEXT_SUBTOTAL',         'Subtotaal artikelen exclusief BTW');
} 
define('EMAIL_TEXT_TAX',              'Inbegrepen BTW: ');
define('EMAIL_TEXT_SHIPPING',         'Verzending: ');
define('EMAIL_TEXT_TOTAL',            'Totaal:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Verzendadres');
define('EMAIL_TEXT_BILLING_ADDRESS',  'Factuuradres');
define('EMAIL_TEXT_PAYMENT_METHOD',   'Betaalwijze');

define('EMAIL_SEPARATOR',             '------------------------------------------------------');
define('TEXT_EMAIL_VIA',              'via');
 