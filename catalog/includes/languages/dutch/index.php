<?php
/*
  $Id:index.php$

  $Path: /catalog/includes/languages/dutch/ $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License

  20190804 Denkster Vertaald en Updated to Phoenix 1.0.1.2
  20190817 Denkster Updated to Phoenix 1.0.2.0
*/

define('TABLE_HEADING_NEW_PRODUCTS',        'Nieuw(e) artikel(en) voor %s');

define('TEXT_NO_PRODUCTS',                  'De winkel heeft nu geen nieuwe artikelen in deze categorie.');
define('TEXT_NUMBER_OF_PRODUCTS',           'Aantal artikelen: ');
define('TEXT_SHOW',                         '<strong>Toon:</strong>');
define('TEXT_BUY',                          'Koop 1\'');
define('TEXT_NOW',                          '\' nu');
define('TEXT_ALL_CATEGORIES',               'Alle categorie&euml;n');
define('TEXT_ALL_MANUFACTURERS',            'Alle fabrikanten');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE',                 'Indexpaginakop');
  define('META_SEO_DESCRIPTION',           'Deze beschrijving van uw website zal worden gebruikt in het element META Description');
  /*
  keywords are USELESS unless you are selling into China and want to be listed in Baidu Search Engine
  */
  define('META_SEO_KEYWORDS', 'dit, zijn, de, komma, gescheiden, sleutelwoorden, die in het element META keywords komen');
}

