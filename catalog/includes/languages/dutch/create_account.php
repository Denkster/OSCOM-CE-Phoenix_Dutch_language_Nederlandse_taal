<?php
/*
  $Id:create_account.php$

  $Path: /catalog/includes/languages/dutch/ $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2018 osCommerce

  Released under the GNU General Public License
  
  20080103 Denkster Tekst vertaald
  20190804 Denkster Updated to Phoenix 1.0.1.2
*/

define('NAVBAR_TITLE',       'Schrijf u in als klant');

define('HEADING_TITLE',      'Uw klantgegevens');

define('TEXT_ORIGIN_LOGIN',  '<span class="text-danger"><strong>LET OP:</strong></span> Als u al ingeschreven bent log dan in op de <a class="alert-link" href="%s"><u>login pagina</u></a>.');

define('EMAIL_SUBJECT',       'Uw inschrijving bij ' . STORE_NAME);
define('EMAIL_GREET_MR',      'Geachte heer %s,' . "\n\n");
define('EMAIL_GREET_MS',      'Geachte mevrouw %s,' . "\n\n");
define('EMAIL_GREET_NONE',    'Geachte %s' . "\n\n");
define('EMAIL_WELCOME',       'Bedankt voor uw inschrijving bij <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT',          'U kunt nu profiteren van de <b>handige mogelijkheden</b> van deze webwinkel. Om er een paar te noemen:' . "\n\n" . 
		'<ul> <li><strong>- Permanente winkelwagen</strong> - Als u een artikel in uw winkelwagen doet blijft het daarin tot u het zelf verwijdert of bestelt. U kunt op een andere dag doorgaan met shoppen waar u gebleven was.' . "\n" . 
		'</li><li><strong>- Uw adresboek bij ons</strong> - U kunt ' . MAX_ADDRESS_BOOK_ENTRIES . ' adressen opgeven in uw adresboek bij onze winkel. Per bestelling kiest u zelf factuuradres en afleveradres. Wij kunnen uw bestelling afleveren op elk door u gewenst adres. Handig, als u  bijvoorbeeld iemand een geschenk wilt sturen.' . "\n" . 
		'</li><li><strong>- Overzicht bestellingen</strong> - Bekijk alle bestellingen die u bij ons heeft geplaatst.'. "\n\n" . 
		'</li><li><strong>- Overzicht downloads</strong> - Bekijk de beschikbare downloads.'. "\n\n" . 
		'</li></ul>');
define('EMAIL_CONTACT',       'Heeft u nog vragen?' . "\n". 'Stel ze aan ' . STORE_NAME . ': '. STORE_OWNER_EMAIL_ADDRESS . "\n" . STORE_ADDRESS . "\n\n");
define('EMAIL_WARNING',       '<strong>OPMERKING:</strong> Indien u zich niet zelf heeft ingeschreven neemt u dan a.u.b. contact op met ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");

define('CATEGORY_COMPANY',    'Bedrijf');
define('CATEGORY_PERSONAL',   'Uw persoonlijke gegevens');
define('CATEGORY_ADDRESS',    'Uw adres');
define('CATEGORY_CONTACT',    'Uw contactgegevens');
define('CATEGORY_OPTIONS',    'Opties');
define('CATEGORY_PASSWORD',   'Uw  wachtwoord');