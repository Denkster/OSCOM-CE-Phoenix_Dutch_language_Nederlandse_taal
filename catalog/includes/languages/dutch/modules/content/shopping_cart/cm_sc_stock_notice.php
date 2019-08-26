<?php
/*
  $Id:cm_sc_stock_notice.php$
	
  $Path:\catalog\includes\languages\dutch\modules\content\shopping_cart\$

  Copyright (c) 2016:
    Dan Cole - @Dan Cole
    James Keebaugh - @kymation
    Lambros - @Tsimi
    Rainer Schmied - @raiwa

  All rights reserved.

  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

  1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

  2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

  3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

  20190804 Denkster Vertaald en Updated to Phoenix 1.0.1.2
*/

  define('MODULE_CONTENT_SC_STOCK_NOTICE_TITLE',         'Uitverkocht bericht');
  define('MODULE_CONTENT_SC_STOCK_NOTICE_DESCRIPTION',   'Laat \'t in de winkel zien als iets uitverkocht is');
  
  define('MODULE_CONTENT_SC_STOCK_NOTICE_CANT_CHECKOUT', '<p class="lead">Artikelen gemarkeerd als ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' zijn niet in de gewenste hoeveelheid voorradig.</p><p>Verminder a.u.b. de bestelhoeveelheid van de artikelen die als ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ', zijn gemarkeerd, dankuwel.</p>');
  define('MODULE_CONTENT_SC_STOCK_NOTICE_CAN_CHECKOUT',  '<p class="lead">Artikelen gemarkeerd als ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' zijn niet in de gewenste hoeveelheid voorradig.</p><p>U kunt ze evengoed bestellen en in het afrekenproces aangeven dat u de hoeveelheid die wel op voorraad is meteen wil laten leveren.</p>');
