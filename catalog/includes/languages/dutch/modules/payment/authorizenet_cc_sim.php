<?php
/*
  $Id:authorizenet_cc_sim.php$

  $Path:catalog\includes\languages\dutch\modules\payment\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
  20190825 Denkster Vertaald en Updated to Phoenix 1.0.2.1
*/

  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_TITLE', 'Authorize.net Server Integration Method (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_PUBLIC_TITLE', 'Creditcard');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&authorizenet&oscom23&sim" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Toon online-documentatie</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://reseller.authorize.net/application/?id=5559280" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Bezoek de Authorize.net website</a>&nbsp;<a href="javascript:toggleDivBlock(\'anetInfo\');">(info)</a><span id="anetInfo" style="display: none;"><br /><i>Als u de bovenstaande link gebruikt om u aan te melden bij Authorize.net krijgt osCommerce een kleine aanbrengpremie.</i></span>');

  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_ERROR_ADMIN_CONFIGURATION', 'Deze module laadt pas als de API Login ID en API Transaction Key parameters zijn geconfigureerd. Bewerk en configureer a.u.b. de instellingen van deze module.');

  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_RETURN_BUTTON', 'Terug naar ' . STORE_NAME);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_A', 'Adres (straatnaam-huisnummer) klopt, postcode niet');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_B', 'Adresinformatie niet beschikbaar voor AVS controle');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_E', 'AVS fout');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_G', 'Kaart uitgegeven door bank buiten V.S.');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_N', 'Geen overeenkomst voor adres (straatnaam-huisnummer) of postcode');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_P', 'AVS niet toepasbaar voor deze transactie');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_R', 'Probeer opnieuw – Systeem niet beschikbaar of te langzaam');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_S', 'Service niet ondersteund door kaart-uitgever');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_U', 'Adresinformatie niet beschikbaar');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_W', 'Negen tekens van de postcode komen overeen, Adres (straatnaam-huisnummer) niet');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_X', 'Adres (straatnaam-huisnummer) en negen tekens van de postcode komen overeen');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_Y', 'Adres (straatnaam-huisnummer) en vijf tekens van de postcode komen overeen');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_AVS_Z', 'Vijf tekens van de postcode komen overeen, Adres (straatnaam-huisnummer) niet');

  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CVV2_M', 'Komt overeen');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CVV2_N', 'Komt niet overeen');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CVV2_P', 'Niet verwerkt');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CVV2_S', 'Had er moeten zijn');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CVV2_U', 'Kaart-uitgever kan het verzoek niet verwerken');

  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_0', 'CAVV niet gevalideerd want de invoer bevatte fouten');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_1', 'CAVV validatie gefaald');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_2', 'CAVV validatie geslaagd');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_3', 'CAVV validatie kon niet worden uitgevoerd; contact met kaart-uitgever niet volledig');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_4', 'CAVV validatie kon niet worden uitgevoerd; systeemfout bij kaart-uitgever');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_5', 'Gereserveerd voor toekomstig gebruik');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_6', 'Gereserveerd voor toekomstig gebruik');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_7', 'CAVV poging – validatie gefaald – kaart-uitgever beschikbaar (kaart-uitgever uit V.S./koper niet)');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_8', 'CAVV poging – validatie gefaald – kaart-uitgever beschikbaar (kaart-uitgever uit V.S./koper niet)');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_9', 'CAVV poging – validatie gefaald – kaart-uitgever niet beschikbaar (kaart-uitgever uit V.S./koper niet)');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_A', 'CAVV poging – validatie geslaagd – kaart-uitgever niet beschikbaar (kaart-uitgever uit V.S./koper niet)');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_TEXT_CAVV_B', 'CAVV validatie geslaagd, alleen informatie, geen verlegde aansprakelijkheid');

  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_ERROR_TITLE', 'Er is een fout opgetreden bij het verwerken van uw creditcard');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_ERROR_VERIFICATION', 'Deze creditcard transactie kon niet geverifieerd worden voor deze bestelling. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_ERROR_DECLINED', 'Deze creditcard transactie is geweigerd. Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');
  define('MODULE_PAYMENT_AUTHORIZENET_CC_SIM_ERROR_GENERAL', 'Probeer het a.u.b. opnieuw en probeer een andere betaalmethode als de problemen aanhouden.');

