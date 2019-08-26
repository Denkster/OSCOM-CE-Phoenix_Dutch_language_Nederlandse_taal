<?php
/*
  $Id:ot_subtotal.php$

  $Path:/catalog/includes/languages/dutch/modules/order_total/$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2017 osCommerce

  Released under the GNU General Public License

  20110609 Denkster tekst afhankelijk van prijzen in- of exclusief BTW
  20170527 Denkster   Translation into Dutch
  20190717 Denkster Updated to Phoenix
  20190804 Denkster Vertaald en Updated to Phoenix 1.0.1.2
*/

if (DISPLAY_PRICE_WITH_TAX == 'true') {
  define('MODULE_ORDER_TOTAL_SUBTOTAL_TITLE',       'Subtotaal artikelen inclusief BTW');
} else { 
  define('MODULE_ORDER_TOTAL_SUBTOTAL_TITLE',       'Subtotaal artikelen exclusief BTW');
} 
  define('MODULE_ORDER_TOTAL_SUBTOTAL_DESCRIPTION', 'Subtotaal van artikelen, exclusief verzendkosten');
