<?php
/*
  $Id:administrators.php$

  $Path:\catalog\admin\includes\languages\dutch\$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2009 osCommerce

  Released under the GNU General Public License

  20190824 Denkster vertaling en update to Phoenix 1.0.2.1
*/

define('HEADING_TITLE',                        'Beheerders');

define('TABLE_HEADING_ADMINISTRATORS',         'Beheerders');
define('TABLE_HEADING_HTPASSWD',               'Beveiligd met htpasswd');
define('TABLE_HEADING_ACTION',                 'Actie');

define('TEXT_INFO_INSERT_INTRO',               'Voer a.u.b. de nieuwe beheerder in met de relevante ggevens');
define('TEXT_INFO_EDIT_INTRO',                 'Maak a.u.b. de nodige wijzigingen');
define('TEXT_INFO_DELETE_INTRO',               'Weet u zeker dat u deze beheerder wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR',  'Nieuwe beheerder');
define('TEXT_INFO_USERNAME',                   'Gebruikersnaam:');
define('TEXT_INFO_NEW_PASSWORD',               'Nieuw wachtwoord:');
define('TEXT_INFO_PASSWORD',                   'Wachtwoord:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD',      'Beveilig met htaccess/htpasswd');

define('ERROR_ADMINISTRATOR_EXISTS',           'Fout: Beheerder bestaat al.');

define('HTPASSWD_INFO',                        '<strong>Aanvullende beveiliging met htaccess/htpasswd</strong><p>Deze OSCOM CE Phoenix Beheersgereedschap installatie is niet aanvullend beveiligd met de htaccess/htpasswd methode.</p><p>Na inschakelen van de htaccess/htpasswd beveiligingslaag zijn de beheerders gebruikersnaam en wachtwoord automatisch opgeslagen in een htpasswd bestand telkens als het beheerderswachtwoord wordt bijgewerkt.</p><p><strong>Let op</strong>, als deze aanvullende beveiligingslaag ingeschakeld is en u geen toegang meer krijgt tot het beheersgereedschap, maak dan de volgende wijzigingen en verzoek uw website hosting provider om htaccess/htpasswd bescherming in te schakelen:</p><p><u><strong>1. Bewerk dit bestand:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Verwijder de volgende regels als die bestaan:</p><p><i>%s</i></p><p><u><strong>2. Verwijder dit bestand:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED',                     '<strong>Aanvullende beveiliging met htaccess/htpasswd</strong><p>Deze OSCOM CE Phoenix Beheersgereedschap installatie is aanvullend beveiligd met de htaccess/htpasswd methode.</p>');
define('HTPASSWD_PERMISSIONS',                 '<strong>Aanvullende beveiliging met htaccess/htpasswd</strong><p>Deze OSCOM CE Phoenix Beheersgereedschap installatie is niet aanvullend beveiligd met de htaccess/htpasswd methode.</p><p>De volgende bestanden moeten beschrijfbaar zijn  door de webserver om de htaccess/htpasswd beveiligingslaag te laten werken:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Ververs deze pagina om vast te stellen of de juiste bestandsrechten ingesteld zijn.</p>');

