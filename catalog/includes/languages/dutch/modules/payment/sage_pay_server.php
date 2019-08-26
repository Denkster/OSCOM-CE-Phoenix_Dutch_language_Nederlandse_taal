<?php
/*
  $Id:sage_pay_server.php$

  $Path:catalog\includes\languages\dutch\modules\payment\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License

  20190826 Denkster Vertaald en Updated to Phoenix 1.0.2.1
*/

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_TITLE', 'Sage Pay Server');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_PUBLIC_TITLE', 'Creditcard of betaalpas (Verwerkt door Sage Pay)');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&server" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Toon online documentatie</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br /><i>Als u de bovenstaande link gebruikt om u aan te melden bij Sage Pay krijgt osCommerce een kleine aanbrengpremie.</i></span>');

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CURL', 'Deze module vereist dat cURL is ingeschakeld in PHP en laadt pas als dat is ingeschakeld op deze webserver.');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CONFIGURATION', 'Deze module laadt pas als de parameter Vendor geconfigureerd is. Bewerk en configureer a.u.b. de instellingen van deze module.');

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_TITLE', 'Er is een fout opgetreden bij het verwerken van uw creditcard');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_GENERAL', 'Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_LINK_TITLE', 'Test de verbinding met de API Server');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TITLE', 'API Server verbindingstest');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_GENERAL_TEXT', 'Bezig met testen van de verbinding met de server..');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_BUTTON_CLOSE', 'Sluit');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TIME', 'Verbindingstijd:');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_SUCCESS', 'Geslaagd!');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_FAILED', 'Mislukt! Controleer a.u.b. de instellingen van Verify SSL Certificate en probeer het opnieuw.');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_ERROR', 'Er is een fout opgetreden. Ververs a.u.b. de pagina, controleer uw instellingen en probeer het opnieuw.');

