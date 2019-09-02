<?php
/*
  $Id:c_currencylayer.php$

  $Path:\admin\includes\languages\dutch\modules\currencies\$

  Copyright (c) 2018, G Burton
  All rights reserved. 

  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

  1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

  2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

  3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

  20190808 Denkster vertaling en update to Phoenix 1.0.1.2
*/

define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_TITLE',       'Valutalaag');
define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_DESCRIPTION', 'Valuta bijwerken via de CurrencyLayer API. <div class="secWarning">Vereist een API key van https://currencylayer.com</div>');

// good
define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_CURRENCIES_UPDATED', 'De wisselkoers voor %s bijwerken via de Valutalaag API is gelukt.');

// error codes
define('CURRENCYLAYER_ERROR_404', 'De gevraagde bron is niet beschikbaar.');
define('CURRENCYLAYER_ERROR_101', 'De toegangscode is niet verstrekt of onjuist.');
define('CURRENCYLAYER_ERROR_103', 'De gevraagde API functie is niet beschikbaar.');
define('CURRENCYLAYER_ERROR_104', 'De einddatum van het abonnement is bereikt of overschreden.');
define('CURRENCYLAYER_ERROR_105', 'Het abonnement ondersteunt de gevraagde API Functie niet.');
define('CURRENCYLAYER_ERROR_106', 'De Query leverde geen resultaat.');
define('CURRENCYLAYER_ERROR_102', 'Het Account is niet actief. Neem a.u.b. contact op met de klantenservice van  de Valutalaag API.');
define('CURRENCYLAYER_ERROR_201', 'Onjuiste bronvaluta ingevoerd.');
define('CURRENCYLAYER_ERROR_202', 'Een of meer onjuiste valutacodes ingevoerd.');
define('CURRENCYLAYER_ERROR_301', 'Geen datum ingevoerd.[historical]');
define('CURRENCYLAYER_ERROR_302', 'Onjuiste datum ingevoerd. [historical, convert]');
define('CURRENCYLAYER_ERROR_401', 'Onjuiste waarde voor \'van\' ingevoerd. [convert]');
define('CURRENCYLAYER_ERROR_402', 'Onjuiste waarde voor \'naar\' ingevoerd. [convert]');
define('CURRENCYLAYER_ERROR_403', 'Onjuiste of geen waarde voor \'Hoeveelheid\' ingevoerd. [convert]');
define('CURRENCYLAYER_ERROR_501', 'Geen waarde voor tijdsbestek ingevoerd. [timeframe, change].');
define('CURRENCYLAYER_ERROR_502', 'Onjuiste waarde voor \'begindatum\' ingevoerd. [timeframe, change]');
define('CURRENCYLAYER_ERROR_503', 'Onjuiste waarde voor \'einddatum\' ingevoerd. [timeframe, change]');
define('CURRENCYLAYER_ERROR_504', 'Onjuiste waarde voor tijdsbestek ingevoerd. [timeframe, change]');
define('CURRENCYLAYER_ERROR_505', 'Tijdsbestek dat de gebruiker invoerde is te lang - meer dan 365 dagen');
