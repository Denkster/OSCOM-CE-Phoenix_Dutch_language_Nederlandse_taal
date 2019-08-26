<?php
/*
  $Id:advanced_search.php$

  $Path: /catalog/includes/languages/dutch/ $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2018 osCommerce

  Released under the GNU General Public License

  20080104 Denkster Tekst vertaald
  20190804 Denkster Updated to Phoenix 1.0.1.2
  20190817 Denkster Updated to Phoenix 1.0.2.0
*/

define('NAVBAR_TITLE_1',              'Uitgebreid zoeken');
define('NAVBAR_TITLE_2',              'Zoekresultaat');

define('HEADING_TITLE_1',             'Uitgebreid zoeken');
define('HEADING_TITLE_2',             'Artikelen die aan de zoekcriteria voldoen');

define('HEADING_SEARCH_CRITERIA',     'Zoekcriteria');

define('TEXT_SEARCH_IN_DESCRIPTION',  'Zoek ook in de artikelomschrijvingen');
define('ENTRY_CATEGORIES',            'Categorie&euml;n:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Inclusief sub-categorie&euml;n');
define('ENTRY_MANUFACTURERS',         'Fabrikanten:');
define('ENTRY_PRICE_FROM',            'Prijs vanaf:');
define('ENTRY_PRICE_TO',              'Prijs tot en met:');
define('ENTRY_DATE_FROM',             'Vanaf datum:');
define('ENTRY_DATE_TO',               'Tot en met datum:');

define('ENTRY_PRICE_FROM_TEXT',       'Vanaf');
define('ENTRY_PRICE_TO_TEXT',         'Tot en met');
define('ENTRY_DATE_FROM_TEXT',        'Vanaf');
define('ENTRY_DATE_TO_TEXT',          'Tot en met');

define('ENTRY_DATE',                  'Datum');
define('ENTRY_PRICE',                 'Prijs');

define('TEXT_SEARCH_HELP_LINK',       '<i class="fa fa-info-circle"></i> Hulp bij zoeken');

define('TEXT_ALL_CATEGORIES',         'Alle categorie&euml;n');
define('TEXT_ALL_MANUFACTURERS',      'Alle fabrikanten');

define('HEADING_SEARCH_HELP',         'Hulp bij zoeken');
define('TEXT_SEARCH_HELP',            'U kunt AND en OR gebruiken tussen trefwoorden, om preciezere zoekresultaten te krijgen.<br>
<br>De zoekopdracht <u>Encore AND notatie</u> levert alleen resultaten waarin beide woorden tegelijk voorkomen. Maar de opdracht <u>Encore OR notatie</u> levert ook de vindplaatsen waar slechts &eacute;&eacute;n van beide woorden in voorkomt.<br>
<br>Als u zoekt naar een letterlijke frase plaatst u de frase tussen dubbele aanhalingstekens (").<br>
<br>De zoekopdracht <u>"Denkster denkt door"</u> bijvoorbeeld, kan alleen resultaten opleveren waar deze zin letterlijk in staat.<br>
<br>Met haakjes verfijnt u uw zoekopdracht nog meer.<br>
<br>Zo zou u de opdracht <u>Encore and (Windows or OSX or "OS X")</u> kunnen gebruiken om tekst te vinden die iets bevatten over operating systemen in verband met Encore.');
define('TEXT_CLOSE_WINDOW',           '<u>Venster sluiten</u> [x]');

define('TEXT_NO_PRODUCTS',            'Er zijn geen artikelen die overeenkomen met de zoekcriteria.');

define('ERROR_AT_LEAST_ONE_INPUT',            'Vul a.u.b. ten minste een prijs of datum in.');
define('ERROR_INVALID_FROM_DATE',             'Vul a.u.b. de Vanaf-datum in als dd-mm-jjjj');
define('ERROR_INVALID_TO_DATE',               'Vul a.u.b. de Tot-en-met-datum in als dd-mm-jjjj');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE',   'Gebruik, als Tot-en-met-datum, a.u.b. een datum, die groter of gelijk is aan de Vanaf-datum.');
define('ERROR_PRICE_FROM_MUST_BE_NUM',        'Gebruik a.u.b. een geheel getal als Prijs-vanaf.');
define('ERROR_PRICE_TO_MUST_BE_NUM',          'Gebruik a.u.b. een geheel getal als Prijs-tot-en-met.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Gebruik, als Prijs-tot-en-met, a.u.b. een getal dat groter of gelijk is aan de Prijs-vanaf.');
define('ERROR_INVALID_KEYWORDS',              'Ongeldige trefwoorden');

// text for date of birth example
define('DOB_FORMAT_STRING',                   'dd-mm-jjjj');
