<?php
/*
  $Id:backup.php$

  $Path:\catalog\admin\includes\languages\dutch\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License

  20190808 Denkster vertaling en update to Phoenix 1.0.1.2
*/

define('HEADING_TITLE',                         'Database Backup Manager');

define('TABLE_HEADING_TITLE',                   'Koptekst');
define('TABLE_HEADING_FILE_DATE',               'Datum');
define('TABLE_HEADING_FILE_SIZE',               'Omvang');
define('TABLE_HEADING_ACTION',                  'Actie');

define('TEXT_INFO_HEADING_NEW_BACKUP',          'Nieuwe Backup');
define('TEXT_INFO_HEADING_RESTORE_LOCAL',       'Herstel Lokaal');
define('TEXT_INFO_NEW_BACKUP',                  'Onderbreek het backup process niet, het kan een paar minuten duren.');
define('TEXT_INFO_UNPACK',                      '<br /><br />(Na het uitpakken van de bestanden uit het archief)');
define('TEXT_INFO_RESTORE',                     'Onderbreek het herstelprocess niet.<br /><br />Hoe groter de backup, deste langer dit herstelproces duurt!<br /><br />Gebruik zo mogelijk de mysql client.<br /><br />Bijvoorbeeld:<br /><br /><strong>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </strong> %s');
define('TEXT_INFO_RESTORE_LOCAL',               'Onderbreek het herstelprocess niet.<br /><br />Hoe groter de backup, deste langer dit herstelproces duurt!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE',      'Het te uploaden bestand moet een ruwe sql (text) bestand zijn.');
define('TEXT_INFO_DATE',                        'Datum:');
define('TEXT_INFO_SIZE',                        'Omvang:');
define('TEXT_INFO_COMPRESSION',                 'Compressie:');
define('TEXT_INFO_USE_GZIP',                    'Gebruik GZIP');
define('TEXT_INFO_USE_ZIP',                     'Gebruik ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION',          'Geen compressie (Pure SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY',               'Alleen downloaden (niet opslaan op de server)');
define('TEXT_INFO_BEST_THROUGH_HTTPS',          'Bij voorkeur via een HTTPS verbinding');
define('TEXT_DELETE_INTRO',                     'Weet u zeker dat u deze backup wilt verwijderen?');
define('TEXT_NO_EXTENSION',                     'Geen');
define('TEXT_BACKUP_DIRECTORY',                 'Backup Directory:');
define('TEXT_LAST_RESTORATION',                 'Laatste herstelpoging:');
define('TEXT_FORGET',                           '(<u>vergeet</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fout: Het Backup directory betaat niet. Stel dit a.u.b. in via configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE',  'Fout: Het Backup directory is niet beschrijfbaar.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE',    'Fout: De Download link is niet geldig.');

define('SUCCESS_LAST_RESTORE_CLEARED',          'Geslaagd: De datum van de laatste herstelpoging is gewist.');
define('SUCCESS_DATABASE_SAVED',                'Geslaagd: De database is opgeslagen.');
define('SUCCESS_DATABASE_RESTORED',             'Geslaagd: De database is hersteld.');
define('SUCCESS_BACKUP_DELETED',                'Geslaagd: De backup is verwijderd.');

