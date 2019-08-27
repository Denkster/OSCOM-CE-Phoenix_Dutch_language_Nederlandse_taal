<?php
/*
  $Id: dutch.php  $

  $Path: /catalog/admin/includes/languages/ $
  
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2017 osCommerce

  Released under the GNU General Public License
  
  20190719 Denkster Updated to Phoenix 
  20190720 Denkster Updated to Phoenix 1.0.1.0
  20190724 Denkster QPBPP 2.0 and MOD 8885_Invoice Editor v.1.3 for 2.3.x commented out
  20190827 Denkster replaced Denkster specific items by generic items 
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'

setlocale(LC_ALL,                          array('nl_NL.UTF-8', 'nl_NL.UTF8', 'nl_nld'));
define('DATE_FORMAT_SHORT',                '%d-%m-%Y');       // this is used for strftime()
define('DATE_FORMAT_LONG',                 '%A, %d. %B %Y');   // this is used for strftime()
define('DATE_FORMAT',                      'd-m-Y');                // this is used for strftime()
define('PHP_DATE_TIME_FORMAT',             'd-m-Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE',      'nl');    // leave empty for en_US; see: http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT',         'dd-mm-yyyy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS',                      'dir="ltr" lang="nl"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE',                            'Kantoor van webwinkel van ' . STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_TOP',                 'Administratie');
define('HEADER_TITLE_SUPPORT_SITE',        'Support OsC website');
define('HEADER_TITLE_ONLINE_CATALOG',      'Online winkel');
define('HEADER_TITLE_ADMINISTRATION',      'Administratie');

// text for gender
define('MALE',                             'Man');
define('FEMALE',                           'Vrouw');

// text for date of birth example
define('DOB_FORMAT_STRING',                'dd-mm-jjjj');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION',        'Configuratie');
define('BOX_CONFIGURATION_MYSTORE',        'Mijn winkel');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'Beheerders');
define('BOX_CONFIGURATION_STORE_LOGO', 'Store Logo');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modules');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG',              'Winkel');
define('BOX_CATALOG_CATEGORIES_PRODUCTS',  'Categorie&euml;n / Artikelen');

/* BOF qpbpp
define('BOX_CATALOG_CATEGORIES_DISCOUNT_CATEGORIES', 'Kortings Categorie&euml;n');
// EOF qpbpp
*/
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Artikelopties');
define('BOX_CATALOG_MANUFACTURERS',                  'Fabrikanten');
define('BOX_CATALOG_REVIEWS',                        'Beoordelingen');
define('BOX_CATALOG_SPECIALS',                       'Aanbiedingen');
define('BOX_CATALOG_PRODUCTS_EXPECTED',              'Verwacht');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS',            'Klanten');
define('BOX_CUSTOMERS_CUSTOMERS',          'Klanten');

// orders box text in includes/boxes/orders.php
define('BOX_HEADING_ORDERS',               'Bestellingen');
define('BOX_ORDERS_ORDERS',                'Bestellingen');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES',   'Locatie / BTW');
define('BOX_TAXES_COUNTRIES',              'Landen');
define('BOX_TAXES_ZONES',                  'Regio');
define('BOX_TAXES_GEO_ZONES',              'BTW Zones');
define('BOX_TAXES_TAX_CLASSES',            'BTW tariefgroepen');
define('BOX_TAXES_TAX_RATES',              'BTW tarieven');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS',              'Rapporten');
define('BOX_REPORTS_PRODUCTS_VIEWED',      'Bekeken artikelen');
define('BOX_REPORTS_PRODUCTS_PURCHASED',   'Gekochte artikelen');
define('BOX_REPORTS_ORDERS_TOTAL',         'Totaalbedrag klantenorders');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS',                'Gereedschap');
define('BOX_TOOLS_ACTION_RECORDER',        'Action Recorder');
define('BOX_TOOLS_BACKUP',                 'Database Backup');
define('BOX_TOOLS_BANNER_MANAGER',         'Banner Manager');
define('BOX_TOOLS_CACHE',                  'Cache-manager');
define('BOX_TOOLS_DEFINE_LANGUAGE',        'Talen-manager');
define('BOX_TOOLS_MAIL',                   'Stuur Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER',     'Nieuwsbrief-manager');
define('BOX_TOOLS_SEC_DIR_PERMISSIONS',    'Rechten op beveiligde directories');
define('BOX_TOOLS_SERVER_INFO', 'Server Info');
define('BOX_TOOLS_VERSION_CHECK', 'Version Checker');
define('BOX_TOOLS_WHOS_ONLINE', 'Who\'s Online');

// localization box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION',         'Lokalisatie');
define('BOX_LOCALIZATION_CURRENCIES',      'Valuta');
define('BOX_LOCALIZATION_LANGUAGES',       'Talen');
define('BOX_LOCALIZATION_ORDERS_STATUS',   'Order status');

// javascript messages
define('JS_ERROR', 'Errors have occured during the process of your form!\nPlease make the following corrections:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* The new product atribute needs a price value\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* The new product atribute needs a price prefix\n');

define('JS_PRODUCTS_NAME', '* The new product needs a name\n');
define('JS_PRODUCTS_DESCRIPTION', '* The new product needs a description\n');
define('JS_PRODUCTS_PRICE', '* The new product needs a price value\n');
define('JS_PRODUCTS_WEIGHT', '* The new product needs a weight value\n');
define('JS_PRODUCTS_QUANTITY', '* The new product needs a quantity value\n');
define('JS_PRODUCTS_MODEL', '* The new product needs a model value\n');
define('JS_PRODUCTS_IMAGE', '* The new product needs an image value\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* A new price for this product needs to be set\n');

define('JS_GENDER', '* The \'Gender\' value must be chosen.\n');
define('JS_FIRST_NAME', '* The \'First Name\' entry must have at least ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_LAST_NAME', '* The \'Last Name\' entry must have at least ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_DOB', '* The \'Date of Birth\' entry must be in the format: xx/xx/xxxx (month/date/year).\n');
define('JS_EMAIL_ADDRESS', '* The \'E-Mail Address\' entry must have at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_ADDRESS', '* The \'Street Address\' entry must have at least ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_POST_CODE', '* The \'Post Code\' entry must have at least ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.\n');
define('JS_CITY', '* The \'City\' entry must have at least ' . ENTRY_CITY_MIN_LENGTH . ' characters.\n');
define('JS_STATE', '* The \'State\' entry is must be selected.\n');
define('JS_STATE_SELECT', '-- Select Above --');
define('JS_ZONE', '* The \'State\' entry must be selected from the list for this country.');
define('JS_COUNTRY', '* The \'Country\' value must be chosen.\n');
define('JS_TELEPHONE', '* The \'Telephone Number\' entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');
define('JS_PASSWORD', '* The \'Password\' amd \'Confirmation\' entries must match amd have at least ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Order Number %s does not exist!');
// end javascript messages  ? ??  */

// added for display of customer number on customer address details form
define('ENTRY_CUSTOMER_ID',                'Relatienummer:');
define('ENTRY_DEFAULT_ADDRESS_ID',         'Adresnummer: ');

define('CATEGORY_PERSONAL',                'Persoonlijk');
define('CATEGORY_ADDRESS',                 'Adres');
define('CATEGORY_CONTACT',                 'Contact');
define('CATEGORY_COMPANY',                 'Bedrijf');
define('CATEGORY_OPTIONS',                 'Opties');

define('ENTRY_COMPANY',                    'Bedrijfsnaam:');
define('ENTRY_COMPANY_TEXT',               '');

define('ENTRY_GENDER',                     'Man of vrouw:');
define('ENTRY_GENDER_ERROR',               '&nbsp;<span class="errorText">verplicht</span>');

define('ENTRY_FIRST_NAME',                 'Voornaam<br />of -letters:');
define('ENTRY_FIRST_NAME_ERROR',           '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tekens.</span>');
define('ENTRY_FIRST_NAME_TEXT',            'Voornaam of -letters');

define('ENTRY_LAST_NAME',                  'Achternaam:');
define('ENTRY_LAST_NAME_ERROR',            '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tekens</span>');
define('ENTRY_LAST_NAME_TEXT',             'Achternaam inclusief eventueel voorvoegsel');

define('ENTRY_PREFIX',                     'Voorvoegsel:');
define('ENTRY_PREFIX_ERROR',               ENTRY_PREFIX. ' max. 10 tekens. (bijvoorbeeld: van, de, in&lsquo;t)' );
define('ENTRY_PREFIX_TEXT',                'van, de, \'t');

define('ENTRY_LAST_NAME_ONLY',             'Achternaam:');
define('ENTRY_LAST_NAME_ONLY_TEXT',        'Achternaam zonder voorvoegsels');
define('ENTRY_LAST_NAME_ONLY_ERROR',       '&nbsp;<span class="errorText">min. ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tekens</span>');

define('ENTRY_DATE_OF_BIRTH',              'Geboortedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR',        '&nbsp;<span class="errorText">(voorbeeld) 24-12-1970</span>');
define('ENTRY_DATE_OF_BIRTH_TEXT',         'bijv. 24-12-1970');

define('ENTRY_EMAIL_ADDRESS',              'E-mailadres:');
define('ENTRY_EMAIL_ADDRESS_ERROR',        '&nbsp;<span class="errorText">min. '.ENTRY_EMAIL_ADDRESS_MIN_LENGTH.' tekens</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR',  '&nbsp;<span class="errorText">Het lijkt erop dat dit e-mailadres niet correct is.</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'De winkel heeft al een klant met dit e-mailadres! De winkel kan daar een nieuw wachtwoord naartoe sturen.');
define('ENTRY_EMAIL_ADDRESS_TEXT',         ENTRY_EMAIL_ADDRESS.', dient als gebruikersnaam');

define('ENTRY_COMPANY', 'Company name:');

define('ENTRY_STREET_ONLY',                'Straatnaam: ');
define('ENTRY_STREET_ONLY_ERROR',          '&nbsp;<span class="errorText">min. '.ENTRY_STREET_ONLY_MIN_LENGTH .' tekens</span>');
define('ENTRY_STREET_ONLY_TEXT',           'Straatnaam, zonder huisnummer en huisnummer toevoeging');

define('ENTRY_STREET_NO',                  'Huisnr:');
define('ENTRY_STREET_NO_ERROR',            '&nbsp;<span class="errorText">alleen cijfers, min. '.ENTRY_STREET_NO_MIN_LENGTH.', max. '.ENTRY_STREET_NO_MAX_LENGTH.' tekens</span>');
define('ENTRY_STREET_NO_TEXT',             'Nr.');

define('ENTRY_STREET_NO_ADD',              'Toevoeging:');
define('ENTRY_STREET_NO_ADD_ERROR',        '&nbsp;<span class="errorText">max. '.ENTRY_STREET_NO_ADD_MAX_LENGTH.' tekens</span>');
define('ENTRY_STREET_NO_ADD_TEXT',         'Bis, II, bij');

define('ENTRY_STREET_ADDRESS',             'Straatnaam:');
define('ENTRY_STREET_ADDRESS_ERROR',       '&nbsp;<span class="errorText">min. '.ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens</span>');
define('ENTRY_STREET_ADDRESS_TEXT',        ENTRY_STREET_ADDRESS.', inclusief '.ENTRY_STREET_NO.' en '.ENTRY_STREET_NO_ADD);

define('ENTRY_SUBURB',                     'Stadsdeel:');
define('ENTRY_SUBURB_ERROR',               '');
define('ENTRY_SUBURB_TEXT',                'Stadsdeel');

define('ENTRY_POST_CODE',                  'Postcode:');
define('ENTRY_POST_CODE_ERROR',            '&nbsp;<span class="errorText">min. ' . ENTRY_POSTCODE_MIN_LENGTH . ' tekens</span>');
define('ENTRY_POST_CODE_TEXT',             'Postcode');

define('ENTRY_CITY',                       'Woonplaats:');
define('ENTRY_CITY_ERROR',                 '&nbsp;<span class="errorText">min. ' . ENTRY_CITY_MIN_LENGTH . ' tekens</span>');
define('ENTRY_CITY_TEXT',                  'Woonplaats');

define('ENTRY_STATE',                      'Provincie:');
define('ENTRY_STATE_ERROR',                '&nbsp;<span class="errorText">required</span>');
define('ENTRY_STATE_ERROR_SELECT',         ENTRY_STATE_ERROR);
define('ENTRY_STATE_TEXT',                 'Provincie');

define('ENTRY_COUNTRY',                    'Land:');
define('ENTRY_COUNTRY_ERROR',              'Kies een land uit het uittrekmenu.');
define('ENTRY_COUNTRY_TEXT',               ENTRY_COUNTRY_ERROR);

define('ENTRY_TELEPHONE_NUMBER',           'Telefoon');
define('ENTRY_TELEPHONE_NUMBER_ERROR',     '&nbsp;<span class="errorText">min. ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tekens.</span>');
define('ENTRY_TELEPHONE_NUMBER_TEXT',      ENTRY_TELEPHONE_NUMBER.', voor noodgevallen.');

define('ENTRY_FAX_NUMBER',                 'Faxnummer:');
define('ENTRY_FAX_NUMBER_ERROR',           'Ongeldig faxnummer?');
define('ENTRY_FAX_NUMBER_TEXT',            ENTRY_FAX_NUMBER);

define('ENTRY_NEWSLETTER',                 'Nieuwsbrief:');
define('ENTRY_NEWSLETTER_TEXT',            'Aanvinken indien u de nieuwsbrief wilt ontvangen');
define('ENTRY_NEWSLETTER_YES',             'Geabonneerd');
define('ENTRY_NEWSLETTER_NO',              'Niet geabonneerd');
define('ENTRY_NEWSLETTER_ERROR',           '');

// images
define('IMAGE_ANI_SEND_EMAIL',             'E-mail wordt verzonden');
define('IMAGE_BACK',                       'Terug');
define('IMAGE_BACKUP',                     'Backup');
define('IMAGE_CANCEL',                     'Annuleer');
define('IMAGE_CONFIRM',                    'Bevestig');
define('IMAGE_COPY',                       'Kopieer');
define('IMAGE_COPY_TO',                    'Kopieer naar');
define('IMAGE_DETAILS',                    'Details');
define('IMAGE_DELETE',                     'Verwijder');
define('IMAGE_EDIT',                       'Bewerk');
define('IMAGE_EMAIL',                      'E-mail');
define('IMAGE_EXPORT',                     'Exporteer');
define('IMAGE_ICON_STATUS_GREEN',          'Actief');
define('IMAGE_ICON_STATUS_GREEN_LIGHT',    'Activeer');
define('IMAGE_ICON_STATUS_RED',            'Niet actief');
define('IMAGE_ICON_STATUS_RED_LIGHT',      'Deactiveer');
define('IMAGE_ICON_INFO',                  'Informatie');
define('IMAGE_INSERT',                     'Invoegen');
define('IMAGE_LOCK',                       'Vastzetten');
define('IMAGE_MODULE_INSTALL',             'Module installeren');
define('IMAGE_MODULE_REMOVE',              'Module verwijderen');
define('IMAGE_MOVE',                       'Verplaats');
define('IMAGE_NEW_BANNER',                 'Nieuwe banner');
define('IMAGE_NEW_CATEGORY',               'Nieuwe categorie');
define('IMAGE_NEW_COUNTRY',                'Nieuw land');
define('IMAGE_NEW_CURRENCY',               'Nieuwe valuta');
define('IMAGE_NEW_FILE',                   'Nieuw bestand');
define('IMAGE_NEW_FOLDER',                 'Nieuwe map');
define('IMAGE_NEW_LANGUAGE',               'Nieuwe taal');
define('IMAGE_NEW_NEWSLETTER',             'Nieuwe nieuwsbrief');
define('IMAGE_NEW_PRODUCT',                'Nieuw artikel');
define('IMAGE_NEW_TAX_CLASS',              'Nieuwe BTW tariefgroep');
define('IMAGE_NEW_TAX_RATE',               'Nieuw BTW tarief');
define('IMAGE_NEW_TAX_ZONE',               'Nieuwe BTW zone');
define('IMAGE_NEW_ZONE',                   'Nieuwe regio');
define('IMAGE_ORDERS',                     'Bestellingen');
define('IMAGE_ORDERS_INVOICE',             'Factuur');
define('IMAGE_ORDERS_INVOICE_PDF',         'Factuur PDF');
define('IMAGE_ORDERS_PACKINGSLIP',         'Pakbon');
define('IMAGE_ORDERS_PACKINGSLIP_PDF',     'Pakbon PDF');
define('IMAGE_PREVIEW',                    'Voorbeeld');
define('IMAGE_RESTORE',                    'Herstel');
define('IMAGE_RESET',                      'Reset');
define('IMAGE_SAVE',                       'Sla op');
define('IMAGE_SEARCH',                     'Zoek');
define('IMAGE_SELECT',                     'Selecteer');
define('IMAGE_SEND',                       'Verstuur');
define('IMAGE_SEND_EMAIL',                 'Stuur e-mail');
define('IMAGE_UNLOCK',                     'Geef vrij');
define('IMAGE_UPDATE',                     'Wijzigingen opslaan');
define('IMAGE_UPDATE_CURRENCIES',          'Gewijzigde wisselkoers opslaan');
define('IMAGE_UPLOAD',                     'Upload');

// BOF qpbpp
define('IMAGE_SHOW_PRODUCTS',              'Toon artikelen');
// EOF qpbpp

define('ICON_CROSS',                       'Onwaar');
define('ICON_CURRENT_FOLDER',              'Huidige map');
define('ICON_DELETE',                      'Verwijder');
define('ICON_ERROR',                       'Fout');
define('ICON_FILE',                        'Bestand');
define('ICON_FILE_DOWNLOAD',               'Download');
define('ICON_FOLDER',                      'Map');
define('ICON_LOCKED',                      'Vastgezet');
define('ICON_PREVIOUS_LEVEL',              'Vorige map');
define('ICON_PREVIEW',                     'Voorbeeld');
define('ICON_STATISTICS',                  'Statistieken');
define('ICON_SUCCESS',                     'Geslaagd');
define('ICON_TICK',                        'Waar');
define('ICON_UNLOCKED',                    'Geef vrij');
define('ICON_WARNING',                     'Waarschuwing');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE',                         'Blz %s van %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS',           'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES',         'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> landen)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS',         'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> klanten)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES',        'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> valuta)');
define('TEXT_DISPLAY_NUMBER_OF_ENTRIES',           'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> regels)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES',         'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> talen)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS',     'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> fabrikanten)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS',       'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> nieuwsbrieven)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS',            'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> bestellingen)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS',     'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> bestelling statussen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS',          'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> verwachte artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS',           'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> beoordelingen)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS',          'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> aanbiedingen)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES',       'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> BTW tariefgroepen)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES',         'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> BTW zones)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES',         'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> BTW tarieven)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES',             'Toon <strong>%d</strong> t/m <strong>%d</strong> (van <strong>%d</strong> zones)');

define('PREVNEXT_BUTTON_PREV',             '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT',             '&gt;&gt;');

define('TEXT_DEFAULT',                     'standaard');
define('TEXT_SET_DEFAULT',                 'Als standaard defini&euml;ren');
define('TEXT_FIELD_REQUIRED',              '&nbsp;<span class="fieldRequired">* Verplicht</span>');

define('TEXT_CACHE_CATEGORIES',            'Categori&euml;n box');
define('TEXT_CACHE_MANUFACTURERS',         'Fabrikanten box');
define('TEXT_CACHE_ALSO_PURCHASED',        'Eveneens gekocht module');

define('TEXT_NONE',                        '--none--');
define('TEXT_TOP',                         'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Fout: Bestemming bestaat niet.');
define('ERROR_DESTINATION_NOT_WRITEABLE',  'Fout: Bestemming niet schrijfbaar.');
define('ERROR_FILE_NOT_SAVED',             'Fout: Bestand upload niet bewaard.');
define('ERROR_FILETYPE_NOT_ALLOWED',       'Fout: Upload bestand niet toegestaan.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY',  'Success: Bestand met succes ge&uuml;pload.');
define('WARNING_NO_FILE_UPLOADED',         'Waarschuwing: Geen bestand ge&uuml;pload.');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '<p>Content Width can be 12 or less per column per row.</p><p>12/12 = 100% width, 6/12 = 50% width, 4/12 = 33% width.</p><p>Total of all columns in any one row must equal 12 (eg:  3 boxes of 4 columns each, 1 box of 12 columns and so on).</p>');

// seo helper
define('PLACEHOLDER_COMMA_SEPARATION',     'Must, Be, Comma, Separated');

//FAQDesk 2.1
define('BOX_TOOLS_FAQ',                    'FAQ Manager');

// For MOD 8885_Invoice Editor v.1.3 for 2.3.x
define('IMAGE_EDIT_INVOICE',               'Factuur bewerken');
define('IMAGE_CHANGE',                     'Wijzig');
define('IMAGE_INVOICE_PDF',                'Factuur PDF');
define('IMAGE_PACKINGSLIP_PDF',            'Pakbon PDF');
define('IMAGE_INVOICE',                    'Factuur HTML');
define('IMAGE_PACKINGSLIP',                'Pakbon HTML');
define('IMAGE_VIEW_PDF',                   'Toon PDF Factuur');
define('IMAGE_INVOICE_NEW_PDF',            'Nieuwe PDF factuur');

//define('INVOICE_NUMBER_PREFIX',    'Factuurnr voorvoegsel');
//define('INVOICE_NUMBER_SUFIX',     'Factuurnr achtervoegsel');

/* start Ship2Pay Integrated */
define('BOX_MODULES_SHIP2PAY', 'Ship 2 Pay');
define('TEXT_DISPLAY_NUMBER_OF_PAYMENTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> ship 2 pay)');
/* end Ship2Pay Integrated */
