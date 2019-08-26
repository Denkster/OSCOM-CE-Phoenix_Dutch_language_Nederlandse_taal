<?php
/*
  $Id:braintree_cc.php$

  $Path:catalog\includes\languages\dutch\modules\payment\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2018 osCommerce

  Released under the GNU General Public License

  20190826 Denkster Vertaald en Updated to Phoenix 1.0.2.1
*/

  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_TITLE', 'Braintree Payment Solutions');
  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_PUBLIC_TITLE', 'Creditcard');
  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&braintree&oscom23&braintree_js" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Toon Online Documentatie</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://www.braintreepayments.com" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de Braintree Payments Website</a>');

  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_PHP', 'De minimum PHP versie voor deze module is %s. De module laadt pas als de webserver is voorzien van tenminste die nieuwere versie.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_PHP_EXTENSIONS', 'Deze module vereist de volgende PHP extensies en laadt pas als PHP is bijgewerkt:<br /><br />%s');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_MERCHANT_ACCOUNTS', 'Deze module laadt pas als een merchant account is gedefinieerd voor de valuta %s.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_CONFIGURATION', 'Deze module laadt pas als merchant ID, Public Key, Private Key, en Client Side Encryption Key parameters geconfigureerd zijn. Bewerk en configureer a.u.b. de instellingen van deze module.');

  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_NEW', 'Voer een nieuwe kaart in');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_LAST_4', 'Laatste 4 cijfers:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_OWNER', 'Naam op kaart:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_NUMBER', 'Kaartnummer:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_EXPIRY', 'Kaart verloopdatum:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_CVV', 'Kaart code (CCV):');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_SAVE', 'Kaart bewaren voor volgende aankoop?');

  define('MODULE_PAYMENT_BRAINTREE_CC_CURRENCY_CHARGE', 'De valuta waarin de prijzen getoond worden is op dit moment %3$s. Uw creditcard zal belast worden met in totaal <span style="white-space: nowrap;">%1$s %2$s</span> voor deze bestelling.');

  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_TITLE', 'Er is een fout opgetreden bij het verwerken van uw creditcard');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_GENERAL', 'Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDOWNER', 'De naam van de kaart-eigenaar is nodig om de bestelling te kunnen voltooien. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDNUMBER', 'Het nummer van de kaart kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDEXPIRES', 'De geldigheidsdatum van de kaart kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDCVV', 'De code (CCV) van de creditcard kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');

