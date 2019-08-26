<?php
/*
  $Id:banner_manager.php$

  $Path:\catalog\admin\includes\languages\dutch\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License

  20190808 Denkster vertaling en update to Phoenix 1.0.1.2
*/

define('HEADING_TITLE',                         'Bannerbeheer');

define('TABLE_HEADING_BANNERS',                 'Banners');
define('TABLE_HEADING_GROUPS',                  'Groepen');
define('TABLE_HEADING_STATISTICS',              'Vertoningen / kliks');
define('TABLE_HEADING_STATUS',                  'Status');
define('TABLE_HEADING_ACTION',                  'Actie');

define('TEXT_BANNERS_TITLE',                    'Bannerkoptekst:');
define('TEXT_BANNERS_URL',                      'Banner URL:');
define('TEXT_BANNERS_GROUP',                    'Banner Groep:');
define('TEXT_BANNERS_NEW_GROUP',                ', of voeg hieronder een nieuwe bannergroep in');
define('TEXT_BANNERS_IMAGE',                    'Afbeelding:');
define('TEXT_BANNERS_IMAGE_LOCAL',              ', of voer hieronder een lokaal bestand in');
define('TEXT_BANNERS_IMAGE_TARGET',             'Afbeelding Doellocatie (Opslaan in):');
define('TEXT_BANNERS_HTML_TEXT',                'HTML Tekst:');
define('TEXT_BANNERS_EXPIRES_ON',               'Verloopt Op:');
define('TEXT_BANNERS_OR_AT',                    ', of op');
define('TEXT_BANNERS_IMPRESSIONS',              'impressions/vertoningen.');
define('TEXT_BANNERS_SCHEDULED_AT',             'Ingeroosterd voor:');
define('TEXT_BANNERS_BANNER_NOTE',              '<strong>Banner opmerking:</strong><ul><li>Gebruik een afbeelding of een HTML tekst voor de banner - niet beide.</li><li>HTML Tekst heeft prioriteit boven een afbeelding</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE',              '<strong>Afbeelding opmerking:</strong><ul><li>De directories waarheen u upload moeten de juiste (schrijf) rechten hebben!</li><li>Vul het \'Save To\' veld niet in als u geen afbeelding gaat uploaden naar de webserver (stel, u gebruikt een lokale (serverside) afbeelding).</li><li>Het \'Sla op in\' veld moet een bestaande directorynaam zijn, met een slash aan het einde (bijv., banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE',             '<strong>Verloopdatum opmerking:</strong><ul><li>U moet slechts een van de beide velden invoeren</li><li>Als de looptijd van de banner niet automatisch moet eindigen moet u deze velen leeg laten</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE',            '<strong>Inrooster opmerking:</strong><ul><li>Als een rooster is ingesteld, zal de banner op de ingestelde datum actief worden.</li><li>Alle ingeroosterde banners zijn als inactief gemarkeerd tot hun datum is aangebroken, vanaf dewelke ze vervolgens als actief gemarkeerd zullen zijn.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED',               'Datum toegevoegd:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE',        'Ingeroosterd voor: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_DATE',          'Verloopt op: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS',   'Verloopt op: <strong>%s</strong> vertoningen');
define('TEXT_BANNERS_STATUS_CHANGE',            'Status gewijzigd: %s');

define('TEXT_BANNERS_DATA',                     'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS',              'Laatste 3 Dagen');
define('TEXT_BANNERS_BANNER_VIEWS',             'Banner vertoningen');
define('TEXT_BANNERS_BANNER_CLICKS',            'Banner kliks');

define('TEXT_INFO_DELETE_INTRO',                'Weet u zeker dat u deze banner wilt verwijderen?');
define('TEXT_INFO_DELETE_IMAGE',                'Verwijder afbeelding van banner');

define('SUCCESS_BANNER_INSERTED',               'Geslaagd: De banner is toegevoegd.');
define('SUCCESS_BANNER_UPDATED',                'Geslaagd: De banner is bijgewerkt.');
define('SUCCESS_BANNER_REMOVED',                'Geslaagd: De banner is verwijderd.');
define('SUCCESS_BANNER_STATUS_UPDATED',         'Geslaagd: De bannerstatus is bijgewerkt.');

define('ERROR_BANNER_TITLE_REQUIRED',           'Fout: Banner koptekst vereist.');
define('ERROR_BANNER_GROUP_REQUIRED',           'Fout: Banner groep vereist.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST',  'Fout: Doel-directory bestaat niet: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE',   'Fout: Doel-directory is niet beschrijfbaar: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST',            'Fout: Afbeelding bestaat niet.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE',          'Fout: Afbeelding verwijderen lukt niet.');
define('ERROR_UNKNOWN_STATUS_FLAG',             'Fout: Onbekende status.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Fout: Grafieken-directory bestaat niet. Maak a.u.b.:  \'graphs\' directory inside \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE',  'Fout: Grafieken-directory is niet beschrijfbaar.');

