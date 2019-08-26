<?php
/*
  $Id:paypal_pro_payflow_ec.php$

  $Path:catalog\includes\languages\dutch\modules\payment\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License

  20190826 Denkster Vertaald en Updated to Phoenix 1.0.2.1
*/

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_TITLE', 'PayPal Express Checkout (Payflow Edition)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_PUBLIC_TITLE', 'PayPal (inclusief creditcards en betaalpassen)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout_payflow" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de PayPal Website</a>');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DIRECT_MODULE', 'PayPal staat toe dat de PayPal Payments Pro (Payflow Edition) betaalmodule beschikbaar is als deze module geactiveerd is. Deze module laadt pas als de PayPal Payments Pro (Payflow Edition) module geinstalleerd is.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADMIN_CURL', 'Deze module vereist dat cURL is ingeschakeld in PHP en laadt pas als dat is ingeschakeld op deze webserver.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADMIN_CONFIGURATION', 'Deze module laadt pas als de parameters Vendor en wachtwoord geconfigureerd zijn. Bewerk en configureer a.u.b. de instellingen van deze module.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_BUTTON', 'Afrekenen met PayPal');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_COMMENTS', 'Opmerkingen:');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_EMAIL_PASSWORD', 'Er is automatisch een account voor u gemaakt met het volgende e-mail adres en wachtwoord:' . "\n\n" . 'Winkel account e-mailadres: %s' . "\n" . 'Winkel account wachtwoord: %s' . "\n\n");

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_GENERAL', 'Fout. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_CFG_ERROR', 'Fout: Betaalmodule configuratiefout. Controleer a.u.b. de login gegevens.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADDRESS', 'Fout: Geen overeenkomst gevonden voor verzendadres stad, staat (provincie) en postcode. Probeer het a.u.b. opnieuw.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DECLINED', 'Fout: Deze transactie is geweigerd. Probeer het a.u.b. opnieuw.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_EXPRESS_DISABLED', 'Fout: PayPal Express Checkout is uitgeschakeld voor deze verkoper. Contacteer a.u.b. PayPal Klantenservice.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_LINK_TITLE', 'Test de verbinding met de API Server');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_TITLE', 'API Server verbindingstest');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_GENERAL_TEXT', 'Bezig met testen van de verbinding met de server..');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_BUTTON_CLOSE', 'Sluit');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_TIME', 'Verbindingstijd:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_SUCCESS', 'Geslaagd!');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_FAILED', 'Mislukt! Controleer a.u.b. de instellingen van Verify SSL Certificate en probeer het opnieuw.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_ERROR', 'Er is een fout opgetreden. Ververs a.u.b. de pagina, controleer uw instellingen en probeer het opnieuw.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS', 'Het is momenteel niet mogelijk te verzenden voor het geselecteerde adres. Kies of maak a.u.b.  een nieuw verzendadres voor uw aankoop.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_WARNING_LOCAL_LOGIN_REQUIRED', 'Log a.u.b. in bij uw account on de bestelling te controleren.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_NOTICE_CHECKOUT_CONFIRMATION', 'Controleer en en bevestig a.u.b. uw bestelling hieronder. Uw bestelling wordt pas verwerkt nadat u deze bevestigd heeft.');

