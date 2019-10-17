<?php
/*
  $Id: dutch.php $

  $Path: /catalog/includes/languages/ $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License

  20190717 Denkster Updated to Phoenix
  20190817 Denkster Updated to Phoenix 1.0.2.0
  20190901 Denkster Updated to Phoenix 1.0.2.1
  20190914 Denkster Updated to Phoenix 1.0.2.3
  20191013 Denkster Updated to Phoenix 1.0.2.6
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'nl_NL'
// on FreeBSD try 'nl_NL.ISO_8859-1'
// on Windows try 'nl' or 'Dutch'
// @setlocale(LC_TIME, 'nl_NL.ISO_8859-1');
// @setlocale (LC_TIME, 'Dutch');

// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_ALL,                                 array('nl_NL.UTF-8', 'nl_NL.UTF8', 'nl_nld'));

define('DATE_FORMAT_SHORT',                       '%d-%m-%Y');     // this is used for strftime()
define('DATE_FORMAT_LONG',                        '%A, %d %B %Y'); // this is used for strftime()
define('DATE_FORMAT',                             'd-m-Y');        // this is used for date()
define('DATE_TIME_FORMAT',                        DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_FORMAT',                'dd-mm-yyyy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm-dd-yyyy (input)
// raw date is in format YYYYMMDD, or DDMMYYYY		// Nederlandse notering
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY',                       'EUR');

// Global entries for the <html> tag
define('HTML_PARAMS',                             'dir="ltr" lang="nl"');

// charset for web pages and emails
define('CHARSET',                                 'utf-8');

// page title
define('TITLE',                                   STORE_NAME);

// text in includes/modules/downloads.php
define('HEADER_TITLE_MY_ACCOUNT',                 'Uw gegevens en bestellingen');

// text in includes/application_top.php
define('HEADER_TITLE_TOP',                        '<i class="fas fa-home"></i><span class="sr-only">Home</span>');
define('HEADER_TITLE_CATALOG',                    'Winkel');

// text for gender
define('MALE',                                    'M<span class="hidden-xs">an</span>');
define('FEMALE',                                  'V<span class="hidden-xs">rouw</span>');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY',                   'Verzendinformatie');
define('CHECKOUT_BAR_PAYMENT',                    'Betaalinformatie');
define('CHECKOUT_BAR_CONFIRMATION',               'Bevestiging');

// pull down default text
define('PULL_DOWN_DEFAULT',                       'Selecteer');

// javascript messages
define('JS_ERROR',                                'De informatie, die u invoerde, is niet duidelijk.\nPas a.u.b. de volgende punten aan:\n\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED',     '* Selecteer hoe u wilt betalen voor uw bestelling.\n');

define('ERROR_NO_PAYMENT_MODULE_SELECTED',        '* Selecteer hoe u wilt betalen voor uw bestelling.');

define('ENTRY_COMPANY',                           'Bedrijfsnaam:');
define('ENTRY_COMPANY_TEXT',                      '');

define('ENTRY_GENDER',                            'Man/Vrouw:');
define('ENTRY_GENDER_ERROR',                      'Kies man of vrouw');
define('ENTRY_GENDER_TEXT',                       '');

define('ENTRY_FIRST_NAME',                        'Voornaam<br />of -letters:');
define('ENTRY_FIRST_NAME_ERROR',                  'Vul minimaal ' .ENTRY_FIRST_NAME_MIN_LENGTH . ' tekens in bij Voornaam.');
define('ENTRY_FIRST_NAME_TEXT',                   'Voornaam of -letters');

define('ENTRY_LAST_NAME',                         'Achternaam:');
define('ENTRY_LAST_NAME_ERROR',                   'Vul minimaal ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tekens in bij Achternaam.');
define('ENTRY_LAST_NAME_TEXT',                    'Achternaam inclusief eventueel voorvoegsel');

define('ENTRY_PREFIX',                            'Voorvoegsel:');
define('ENTRY_PREFIX_ERROR',                      'Vul maximaal 10 tekens in bij voorvoegsel (bijvoorbeeld: van, de, in&lsquo;t)' );
define('ENTRY_PREFIX_TEXT',                       'van, de, \'t');

define('ENTRY_LAST_NAME_ONLY',                    'Achternaam:');
define('ENTRY_LAST_NAME_ONLY_ERROR',              'Vul minimaal ' .ENTRY_LAST_NAME_MIN_LENGTH  . ' tekens tekens in bij Achternaam.');
define('ENTRY_LAST_NAME_ONLY_TEXT',               'Achternaam zonder voorvoegsels');

define('ENTRY_DATE_OF_BIRTH',                     'Geboortedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR',               'Vul Geboortedatum a.u.b. als volgt in: (voorbeeld) 24/12/1970');
define('ENTRY_DATE_OF_BIRTH_TEXT',                'bijv. 24-12-1970');

define('ENTRY_EMAIL_ADDRESS',                     'E-mailadres:');
define('ENTRY_EMAIL_ADDRESS_ERROR',               'Vul minimaal '.ENTRY_EMAIL_ADDRESS_MIN_LENGTH.' tekens in.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR',         'Het lijkt erop dat uw e-mailadres onjuist is!');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS',        'De winkel heeft al een klant met dit e-mailadres! De winkel kan daar een nieuw wachtwoord naartoe sturen');
define('ENTRY_EMAIL_ADDRESS_TEXT',                'E-mailadres, dient als gebruikersnaam');

define('ENTRY_STREET_ADDRESS',                    'Straatnaam:');
define('ENTRY_STREET_ADDRESS_ERROR',              'Vul minimaal '.ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens in bij Straatnaam.');
define('ENTRY_STREET_ADDRESS_TEXT',               'Straatnaam, huisnummer en huisnummer toevoeging');

define('ENTRY_STREET_ONLY',                       ENTRY_STREET_ADDRESS);
define('ENTRY_STREET_ONLY_ERROR',                 'Vul minimaal ' .ENTRY_STREET_ONLY_MIN_LENGTH . ' tekens in bij Straatnaam.');
define('ENTRY_STREET_ONLY_TEXT',                  'Straatnaam zonder huisnummer');

define('ENTRY_STREET_NO',                         'Huisnr:');
define('ENTRY_STREET_NO_ERROR',                   'Vul bij Huisnummer alleen cijfers in, minimaal '.ENTRY_STREET_NO_MIN_LENGTH.', maximaal '.ENTRY_STREET_NO_MAX_LENGTH.'.');
define('ENTRY_STREET_NO_TEXT',                    'Nr.');

define('ENTRY_STREET_NO_ADD',                     'Toevoe-<br />ging:');
define('ENTRY_STREET_NO_ADD_ERROR',               'Vul maximaal ' .ENTRY_STREET_NO_ADD_MAX_LENGTH . ' tekens in bij Huisnummer toevoeging.');
define('ENTRY_STREET_NO_ADD_TEXT',                'Bis, II, bij');

define('ENTRY_SUBURB',                            'Stadsdeel:');
define('ENTRY_SUBURB_ERROR',                      '');
define('ENTRY_SUBURB_TEXT',                       'Stadsdeel');

define('ENTRY_POST_CODE',                         'Postcode:');
define('ENTRY_POST_CODE_ERROR',                   'Vul minimaal ' .ENTRY_POSTCODE_MIN_LENGTH . ' tekens in bij Postcode.');
define('ENTRY_POST_CODE_TEXT',                    'Postcode');

define('ENTRY_CITY',                              'Woonplaats:');
define('ENTRY_CITY_ERROR',                        'Vul minimaal ' .ENTRY_CITY_MIN_LENGTH . ' tekens in bij woonplaats.');
define('ENTRY_CITY_TEXT',                         'Woonplaats');

define('ENTRY_NAME_TEXT',                         'Naam');
define('ENTRY_DOB_TEXT',                          'dd-mm-jjjj Geboortedatum');

define('ENTRY_STATE',                             'Provincie:');
define('ENTRY_STATE_ERROR',                       'U moet een provincie uit het uittrekmenu kiezen.');
define('ENTRY_STATE_ERROR_SELECT',                'Selecteer een provincie uit het uittrekmenu.');
define('ENTRY_STATE_TEXT',                        '');

define('ENTRY_COUNTRY',                           'Land:');
define('ENTRY_COUNTRY_ERROR',                     'U moet een land uit het uittrekmenu kiezen.');
define('ENTRY_COUNTRY_TEXT',                      '');

define('ENTRY_TELEPHONE_NUMBER',                  'Telefoon:');
define('ENTRY_TELEPHONE_NUMBER_ERROR',            'Vul minimaal ' .ENTRY_TELEPHONE_MIN_LENGTH . ' tekens in bij Telefoonnummer.');
define('ENTRY_TELEPHONE_NUMBER_TEXT',             'Telefoonnummer, voor noodgevallen');

define('ENTRY_FAX_NUMBER',                        'Faxnummer:');
define('ENTRY_FAX_NUMBER_TEXT',                   'Faxnummer');

define('ENTRY_NEWSLETTER',                        'Nieuwsbrief:');
define('ENTRY_NEWSLETTER_TEXT',                   'Aanvinken indien u de nieuwsbrief wilt ontvangen');
define('ENTRY_NEWSLETTER_YES',                    'Geabonneerd');
define('ENTRY_NEWSLETTER_NO',                     'Niet geabonneerd');

define('ENTRY_PASSWORD',                          'Wachtwoord:');
define('ENTRY_PASSWORD_ERROR',                    'Vul minimaal ' .ENTRY_PASSWORD_MIN_LENGTH . ' tekens in bij Wachtwoord.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING',       'U vulde verschillende waarden in bij Wachtwoord. '.'Vul twee keer hetzelfde in.');
define('ENTRY_PASSWORD_TEXT',                     'Wachtwoord');
define('ENTRY_PASSWORD_CONFIRMATION',             'Herhaal (ter controle):');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT',        'Herhaal wachtwoord');
define('ENTRY_PASSWORD_CURRENT',                  'Huidig wachtwoord:');
define('ENTRY_PASSWORD_CURRENT_TEXT',             'Huidig wachtwword');
define('ENTRY_PASSWORD_CURRENT_ERROR',            'Vul minimaal ' .ENTRY_PASSWORD_MIN_LENGTH . ' tekens in bij Huidig wachtwoord.');
define('ENTRY_PASSWORD_NEW',                      'Nieuw wachtwoord:');
define('ENTRY_PASSWORD_NEW_TEXT',                 'Nieuw wachtwoord');
define('ENTRY_PASSWORD_NEW_ERROR',                'Vul minimaal ' .ENTRY_PASSWORD_MIN_LENGTH . ' tekens in bij Nieuw wachtwoord.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING',   'U vulde verschillende waarden in bij Nieuw wachtwoord. '. 'Vul twee keer hetzelfde in.');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE',                        'Pagina(s) gevonden:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS',         'Toont artikel <strong>%d</strong> tot en met '. 
                                                  '<strong>%d</strong> (van <strong>%d</strong> artikelen)');

define('PREVNEXT_TITLE_FIRST_PAGE',               'Eerste pagina');
define('PREVNEXT_TITLE_PREVIOUS_PAGE',            'Vorige pagina');
define('PREVNEXT_TITLE_NEXT_PAGE',                'Volgende pagina');
define('PREVNEXT_TITLE_LAST_PAGE',                'Laatste pagina');
define('PREVNEXT_TITLE_PAGE_NO',                  'Pagina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE',      'Vorige reeks van %d pagina\'s');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE',      'Volgende reeks van %d pagina\'s');
define('PREVNEXT_BUTTON_FIRST',                   '&lt;&lt;FIRST');
define('PREVNEXT_BUTTON_PREV',                    '[&lt;&lt;&nbsp;Vorige]');
define('PREVNEXT_BUTTON_NEXT',                    '[Volgende&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST',                    'LAST&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS',                'Adres toevoegen');
define('IMAGE_BUTTON_BACK',                       'Terug');
define('IMAGE_BUTTON_BUY_NOW',                    'Bestel NU');
define('IMAGE_BUTTON_CHANGE_ADDRESS',             'Adres veranderen');
define('IMAGE_BUTTON_CHECKOUT',                   'Afrekenen');
define('IMAGE_BUTTON_CONFIRM_ORDER',              'Controleer en bevestig bestelling');
define('IMAGE_BUTTON_CONTINUE',                   'Volgende');
define('IMAGE_BUTTON_DELETE',                     'Verwijderen');
define('IMAGE_BUTTON_LOGIN',                      'Inloggen');
define('IMAGE_BUTTON_IN_CART',                    'In winkelkar');
define('IMAGE_BUTTON_SEARCH',                     'Zoeken');
define('IMAGE_BUTTON_UPDATE',                     'Bijwerken');
define('IMAGE_BUTTON_UPDATE_PREFERENCES',         'Voorkeuren bijwerken');

define('SMALL_IMAGE_BUTTON_DELETE',               'Verwijderen');
define('SMALL_IMAGE_BUTTON_EDIT',                 'Bewerken');
define('SMALL_IMAGE_BUTTON_VIEW',                 'Bekijken');
define('SMALL_IMAGE_BUTTON_BUY',                  'Koop');

define('ICON_ARROW_RIGHT',                        'Meer');

define('TEXT_SORT_PRODUCTS',                      'Sorteer artikelen ');
define('TEXT_DESCENDINGLY',                       'aflopend');
define('TEXT_ASCENDINGLY',                        'oplopend');
define('TEXT_BY',                                 ' volgens ');

define('TEXT_UNKNOWN_TAX_RATE',                   'Onbekend belastingstarief');

define('TEXT_CCVAL_ERROR_INVALID_DATE',           'De vervaldatum van de creditard, die u invulde, is ongeldig. '. 
                                                  'Controleer a.u.b. de datum en probeer het opnieuw.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER',         'Het nummer dat u invulde is geen geldig nummer van een creditcard. '. 
                                                  'Controleer a.u.b. het nummer en probeer het opnieuw.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD',           'U vulde voor de eerste vier cijfers van uw creditCard in: %s. '. 
                                                  'We accepteren geen creditcards. die beginnen met die vier cijfers. '. 
                                                  'Probeer a.u.b. een ander nummer.');

// category views
define('TEXT_VIEW',                               'Bekijk: ');
define('TEXT_VIEW_LIST',                          ' Lijst');
define('TEXT_VIEW_GRID',                          ' Vakjes');

// search placeholder
define('TEXT_SEARCH_PLACEHOLDER',                 'Zoek');

// message for required inputs
define('FORM_REQUIRED_INFORMATION',               '<i class="fas fa-asterisk text-danger"></i> Verplicht gegeven');
define('FORM_REQUIRED_INPUT',                     '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>');

// grid/list
define('TEXT_SORT_BY',                            'Sorteer op ');

// moved from index
define('TABLE_HEADING_IMAGE',                     '');
define('TABLE_HEADING_MODEL',                     'Model');
define('TABLE_HEADING_PRODUCTS',                  'Artikel naam');
define('TABLE_HEADING_MANUFACTURER',              'Fabrikant');
define('TABLE_HEADING_QUANTITY',                  'Hoeveelheid');
define('TABLE_HEADING_PRICE',                     'Prijs');
define('TABLE_HEADING_WEIGHT',                    'Gewicht (gram)');
define('TABLE_HEADING_BUY_NOW',                   'Koop nu');
define('TABLE_HEADING_LATEST_ADDED',              'Nieuwste artikelen');
define('TABLE_HEADING_ORDERED',                   'Meest gekocht');

// product notifications
define('PRODUCT_SUBSCRIBED',                      '%s is toegevoegd aan uw verlanglijstje');
define('PRODUCT_UNSUBSCRIBED',                    '%s is verwijderd van uw verlanglijstje');
define('PRODUCT_ADDED',                           '%s is toegevoegd aan uw winkelkar');
define('PRODUCT_REMOVED',                         '%s is verwijderd uit uw winkelkar');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION','');

// noscript helper
define('TEXT_NOSCRIPT',                           '<p><strong>Het lijkt erop dat JavaScript uit staat in uw internet-blader-programma.</strong></p><p>JavaScript moet ingeschakeld zijn om de mogelijkheden van deze webstek te kunenen gebruiken.<br><a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Klik hier voor instructions om javascript in te schakelen</a>.');

// sitewide is-product 
define('IS_PRODUCT_SHOW_PRICE',                   '%s');
define('IS_PRODUCT_SHOW_PRICE_SPECIAL',           '<del>%s</del> <span class="text-danger">nu %s</span>');
define('IS_PRODUCT_BUTTON_BUY',                   '<i class="fas fa-shopping-cart"></i>');
define('IS_PRODUCT_BUTTON_VIEW',                  '<i class="fas fa-eye"></i> Toon');

// sitewide product listing
define('LISTING_SORT_DOWN',                       '<i class="fas fa-level-down-alt text-primary"></i>');
define('LISTING_SORT_UP',                         '<i class="fas fa-level-up-alt text-primary"></i>');
define('LISTING_SORT_UNSELECTED',                 '<i class="fas fa-level-up-alt text-black-50"></i>');
// for new style internal pages
define('LINK_TEXT_EDIT',                          '<small><a class="%s" href="' . tep_href_link('%s', '', 'SSL') . '">Wijzig</a></small>');
define('SHIPPING_FA_ICON',                        '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>');
define('PAYMENT_FA_ICON',                         '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>');

define('ENTRY_COMMENTS',                          'Wilt u iets laten weten?');
define('ENTRY_COMMENTS_PLACEHOLDER',              'Plaats uw opmerkingen hier...');
define('TABLE_HEADING_OR',                        '-of-');
