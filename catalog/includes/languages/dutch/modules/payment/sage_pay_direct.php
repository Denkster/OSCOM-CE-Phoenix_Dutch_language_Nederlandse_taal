<?php
/*
  $Id:sage_pay_direct.php$

  $Path:catalog\includes\languages\dutch\modules\payment\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License

  20190826 Denkster Vertaald en Updated to Phoenix 1.0.2.1
*/

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_TITLE', 'Sage Pay Direct');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_PUBLIC_TITLE', 'Creditcard of betaalpas (Verwerkt door Sage Pay)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&direct" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Toon online documentatie</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br /><i>Als u de bovenstaande link gebruikt om u aan te melden bij Sage Pay krijgt osCommerce een kleine aanbrengpremie.</i></span>');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CURL', 'Deze module vereist dat cURL is ingeschakeld in PHP en laadt pas als dat is ingeschakeld op deze webserver.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CONFIGURATION', 'Deze module laadt pas als de parameter Vendor geconfigureerd is. Bewerk en configureer a.u.b. de instellingen van deze module.');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NEW', 'Voer een nieuwe kaart in');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_TYPE', 'Kaarttype:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_OWNER', 'Naam op de kaart:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NUMBER', 'Kaartnummer:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS', 'Begindatum:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS_INFO', '(alleen voor Maestro en American Express cards)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_EXPIRES', 'Verloopdatum:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER', 'Uitgiftenummer:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER_INFO', '(Alleen voor Maestro kaarten)');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_CVC', 'Kaartcode (CVC):');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_SAVE', 'Kaartinformatie bewaren voor latere aankopen?');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_TITLE', '3D veilige verificatie');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_INFO', 'Klik a.u.b. op de knop VOLGENDE om uw kaart te laten authenticeren via de website van uw bank.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_BUTTON', 'VOLGENDE');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_TITLE', 'Er is een fout opgetreden bij het verwerken van uw creditcard');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_GENERAL', 'Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDTYPE', 'Dit type card wordt niet ondersteund. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDOWNER', 'U moet de naam van de eigenaar van de creditcard invoeren om de bestelling te voltooien. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDNUMBER', 'Het nummer van de kaart kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDSTART', 'De begindatum van de kaart kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDEXPIRES', 'De verloopdatum van de kaart kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDISSUE', 'Het uitgiftenummer van de kaart kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDCVC', 'De kaartcode (CVC) kon niet verwerkt worden. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');

  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_LINK_TITLE', 'Test de verbinding met de API Server');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TITLE', 'API Server verbindingstest');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_GENERAL_TEXT', 'Bezig met testen van de verbinding met de server..');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_BUTTON_CLOSE', 'Sluit');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TIME', 'Verbindingstijd:');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_SUCCESS', 'Geslaagd!');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_FAILED', 'Mislukt! Controleer a.u.b. de instellingen van Verify SSL Certificate en probeer het opnieuw.');
  define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_ERROR', 'Er is een fout opgetreden. Ververs a.u.b. de pagina, controleer uw instellingen en probeer het opnieuw.');

