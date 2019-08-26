<?php
/*
  $Id: password_forgotten.php $

  $Path: /catalog/includes/languages/dutch/ $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
  
  20080105 Denkster Tekst vertaald
  20190804 Denkster Updated to Phoenix 1.0.1.2
*/

define('NAVBAR_TITLE_1',                'Login');
define('NAVBAR_TITLE_2',                'Wachtwoord vergeten');

define('HEADING_TITLE',                 'Ik weet mijn wachtwoord niet meer');

define('TEXT_MAIN',                     'Bent u uw wachtwoord vergeten? Vul hieronder het e-mailadres in, dan sturen we u instructies voor het veilig instellen van een nieuw wachtwoord.');

define('TEXT_PASSWORD_RESET_INITIATED', 'U ontvangt van ons een e-mailbericht met instructies voor het veranderen van uw wachtwoord (controleer ook uw spambak). De instructies bevatten een link die slechts 24 uur werkt, of totdat u uw wachtwoord heeft veranderd.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND',   '<font color="#ff0000"><b>Let op:</b></font>Wij vonden niemand met het e-mailadres dat u opgaf tussen onze klanten. Probeer het opnieuw');

define('ENTRY_EMAIL_ADDRESS',           'E-mailadres:');

define('EMAIL_PASSWORD_RESET_SUBJECT',  STORE_NAME . ' - Nieuw wachtwoord.');

define('EMAIL_PASSWORD_RESET_BODY',     'Een nieuw wachtwoord is aangevraagd voor ' . STORE_NAME . '.' . "\n\n" . 'Volg alstublieft deze persoonlijke link om uw wachtwoord veilig te veranderen:' . "\n\n" . '%s' . "\n\n" . 'Deze link werkt totdat u uw wachtwoord heeft veranderd en werkt maximaal 24 uur.' . "\n\n" . 'Hulp bij het gebruik van onze online diensten kunt u vragen aan de eigenaar van de webwinkel: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER',         'Fout: Er is al een link voor een nieuw wachtwoord naar u gestuurd. Controleer uw inbox en uw spambak. Wacht alstublieft %s minutes.');