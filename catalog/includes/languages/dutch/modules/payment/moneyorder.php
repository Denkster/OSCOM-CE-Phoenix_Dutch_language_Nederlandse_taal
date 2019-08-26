<?php
/*
  $Id: moneyorder.php $
  
  $Path: /catalog/includes/languages/dutch/modules/payment/

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License

  20190826 Denkster Vertaald en Updated to Phoenix 1.0.2.1
*/

// Bank-overschrijving (gewoon in Nederland)
  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE',         'Handmatige bank-overschrijving');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION',   '<i>Betaal aan:</i>	' . STORE_ACCOUNT_IBAN . 
  	'<br /><div style="font-size:11px">(<i>vanuit het buitenland:</i> BIC:&nbsp;' . STORE_BANK_BIC . '<br /></div>' . 
	'<i>ten name van:</i> ' . STORE_NAME . 
  	'<br /> ' . STORE_ADDRESS . 
  	'<br /><i>' . STORE_NAME . ' verzendt uw bestelling zodra uw betaling op haar rekening staat.</i>');
// Voor cheques (niet gebruikelijk in Nederland)
//define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE',        'Schrijf een cheque');
//define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION',  'Stel betaalbaar aan:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br /><br />Stuur naar:<br />' . STORE_NAME . '<br />' . nl2br(STORE_ADDRESS) . '<br /><br />' . 'We versturen uw bestelling pas als we de betaling hebben ontvangen.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Betaal aan: " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\n\nStuur aan:\n" . STORE_NAME . "\n" . STORE_ADDRESS . "\n\n" . 'We versturen uw bestelling pas als de betaling bij ons binnen is.');

  define('MODULE_PAYMENT_MONEYORDER_WARNING_SETUP',     'Let op! vergeet niet de waarde bij \'Stel betaalbaar aan\' in te vullen.');
