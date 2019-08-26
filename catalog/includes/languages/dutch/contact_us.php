<?php
/*
  $Id: contact_us.php  $

  $Path: /catalog/includes/languages/dutch/ $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
  
  20190804 Denkster feitelijke informatie over de winkel toegevoegd
  20190807 Denkster Vertaald, Updated to Phoenix 1.0.1.2
*/

define('HEADING_TITLE',                       'Contact');
define('NAVBAR_TITLE',                        'Contact');
define('TEXT_SUCCESS',                        'Uw bericht is naar ' . STORE_NAME . ' verzonden. U krijgt zo spoedig mogelijk antwoord.');
//define('EMAIL_SUBJECT',                     'Informatievraag van ' . STORE_NAME);

define('ENTRY_NAME',                          'Uw naam:');
define('ENTRY_EMAIL',                         'Uw e-mail-adres:');
define('ENTRY_EMAIL_SUBJECT',                 'Onderwerp:');
define('ENTRY_EMAIL_SUBJECT_TEXT',            'Waarover gaat uw vraag?');
define('ENTRY_ENQUIRY',                       'Typ uw vraag of opmerking hier');
define('ENTRY_ENQUIRY_TEXT',                  '');

define('ERROR_ACTION_RECORDER', 'Error: An enquiry has already been sent. Please try again in %s minutes.');
/* * * * *
 * Add-on shop factual info by Denkster
 */
define('TITLE_SHOP_DATA',                     'Over deze webshop');
define('TITLE_SEND_EMAIL',                    'Zend een bericht aan deze webshop');
define('ENTRY_STORE_NAME',                    'Webshop naam: ');   // store name is in database: STORE_NAME
define('ENTRY_STORE_OWNER',                   'Eigenaar: ');          // STORE_OWNER
define('ENTRY_STORE_ADDRESS',                 'Postadres: ');   // store address is in database: STORE_ADDRESS
define('ENTRY_STORE_PHONE',                   'Telefoon: ');          // store phone is in database: STORE_PHONE
define('ENTRY_STORE_TAX_NR',                  'BTWnummer: ');     // store tax number is in database STORE_TAX_NUMBER
define('ENTRY_STORE_KVK_NR',                  'Kamer van koophandel registratie: ');  // store CoC number is in database STORE_KVK_NR
define('ENTRY_STORE_BANK_ACCOUNT_NAME',       'Ten name van: ');   // store name is in database STORE_NAME . STORE_ADDRESS
define('ENTRY_STORE_ACCOUNT_IBAN',            'Banrekening (IBAN): ');  // store bank account number  is in database STORE_BANK_ACCOUNT_NR_NATIONAL
define('TEXT_STORE_BANK_INTERNATIONAL_CODE',  'Bank Identificatie Code (BIC): ');

