<?php
/*
  $Id:stripe.php$

  $Path:catalog\includes\languages\dutch\modules\payment\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License

  20190826 Denkster Vertaald en Updated to Phoenix 1.0.2.1
*/

  define('MODULE_PAYMENT_STRIPE_TEXT_TITLE', 'Stripe');
  define('MODULE_PAYMENT_STRIPE_TEXT_PUBLIC_TITLE', 'Creditcard');
  define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&stripe&oscom23&stripe_js" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Toon online documentatie</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://www.stripe.com" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de Stripe website</a>');

  define('MODULE_PAYMENT_STRIPE_ERROR_ADMIN_CURL', 'Deze module vereist dat cURL is ingeschakeld in PHP en laadt pas als dat is ingeschakeld op deze webserver.');
  define('MODULE_PAYMENT_STRIPE_ERROR_ADMIN_CONFIGURATION', 'Deze module laadt pas als de parameters Publishable Key and Secret Key geconfigureerd zijn. Bewerk en configureer a.u.b. de instellingen van deze module.'); 

  define('MODULE_PAYMENT_STRIPE_CREDITCARD_NEW', 'Voer een nieuwe creditcard in');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_OWNER', 'Naam op de creditcard:');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_NUMBER', 'Creditcard Nummer:');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_EXPIRY', 'Verloopdatum:');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_CVC', 'Kaartcode (CVC):');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_SAVE', 'Kaartinformatie bewaren voor de volgende aankoop?');

  define('MODULE_PAYMENT_STRIPE_ERROR_TITLE', 'Er is een fout opgetreden bij het verwerken van uw creditcard');
  define('MODULE_PAYMENT_STRIPE_ERROR_GENERAL', 'Fout. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_STRIPE_ERROR_CARDSTORED', 'De opgeslagen kaartinformatie werd niet gevonden. 'Fout. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');

  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_LINK_TITLE', 'Test de verbinding met de API Server');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_TITLE', 'API Server verbindingstest');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_GENERAL_TEXT', 'Bezig met testen van de verbinding met de server..');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_BUTTON_CLOSE', 'Sluit');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_TIME', 'Verbindingstijd:');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_SUCCESS', 'Geslaagd!');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_FAILED', 'Mislukt! Controleer a.u.b. de instellingen van Verify SSL Certificate en probeer het opnieuw.');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_ERROR', 'Er is een fout opgetreden. Ververs a.u.b. de pagina, controleer uw instellingen en probeer het opnieuw.');

