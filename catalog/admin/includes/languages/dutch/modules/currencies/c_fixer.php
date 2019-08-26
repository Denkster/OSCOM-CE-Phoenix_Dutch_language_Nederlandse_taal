<?php
/*
  $Id:c_fixer.php$

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

define('MODULE_ADMIN_CURRENCIES_FIXER_TITLE', 'Fixer');
define('MODULE_ADMIN_CURRENCIES_FIXER_DESCRIPTION', 'Update Currencies via the Fixer API.<div class=\'secWarning\'>Requires an API key from https://fixer.io</div>');

// good
define('MODULE_ADMIN_CURRENCIES_FIXER_CURRENCIES_UPDATED', 'The exchange rate for %s was updated successfully via Fixer.');

// error codes
define('FIXER_ERROR_404', 'De gevraagde bron is niet beschikbaar.');
define('FIXER_ERROR_101', 'Geen of een onjuiste API Key werd ingevoerd.');
define('FIXER_ERROR_103', 'Het gevraagde API eindpuunt  is niet beschikbaar.');
define('FIXER_ERROR_104', 'Het maximaal maandelijks toegestane aantal API requests is bereikt, u moet wellicht uw abonnement uitbreiden.');
define('FIXER_ERROR_105', 'Het huidige abonnement ondersteunt dit API eindpunt niet, u moet wellicht uw abonnement uitbreiden.');
define('FIXER_ERROR_106', 'Het huidige verzoek leverde 0 resultaten.');
define('FIXER_ERROR_102', 'Dit API verzoek komt van een inactief account.');
define('FIXER_ERROR_201', 'De ingevoerde basisvaluta is ongeldig.');
define('FIXER_ERROR_202', 'Een of meer van de ingevoerde symbolen is onjuist.');
define('FIXER_ERROR_301', 'Geen datum ingevoerd.[historical]');
define('FIXER_ERROR_302', 'Onjuiste datum ingevoerd. [historical, convert]');
define('FIXER_ERROR_403', 'Onjuiste of geen waarde voor \'Hoeveelheid\' ingevoerd. [convert]');
define('FIXER_ERROR_501', 'Onjuiste of geen waarde voor tijdsbestek ingevoerd. [timeseries]');
define('FIXER_ERROR_502', 'Onjuiste waarde voor \'begindatum\' ingevoerd. [timeseries, fluctuation]');
define('FIXER_ERROR_503', 'Onjuiste waarde voor \'einddatum\' ingevoerd. [timeseries, fluctuation]');
define('FIXER_ERROR_504', 'Onjuiste waarde voor tijdsbestek ingevoerd. [timeseries, fluctuation]');
define('FIXER_ERROR_505', 'Tijdsbestek dat de gebruiker invoerde is te lang - meer dan 365 dagen [timeseries, fluctuation]');
