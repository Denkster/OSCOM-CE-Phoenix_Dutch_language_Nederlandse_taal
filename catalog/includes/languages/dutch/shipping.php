<?php
/*
  $Id:shipping.php$

  $Path:catalog/includes/languages/dutch/$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License

  20080105 Denkster vertaald en uitgebreid
  20190804 Denkster Updated to Phoenix 1.0.1.2
*/

define('NAVBAR_TITLE',  'Verzenden, retouren');
define('HEADING_TITLE', 'Verzenden, retouren');

define('TEXT_INFORMATION', 
	   '<h2>Levertijd</h2>
			<p>De winkel verzendt uw bestelling direct na ontvangst van uw betaling, als de artikelen op voorraad zijn.<br>
			Binnen Nederland is de bezorging in de regel binnen 3 werkdagen. Zendingen buiten Nederland nemen meestal een paar dagen extra.<br>
			De meeste producten zijn in voorraad. U ziet bij het bestellen al of een artikel op voorraad is.
			Indien een besteld artikel niet direct uit voorraad leverbaar is, informeren wij u over de te verwachten levertermijn. Naleveringen ontvangt u zonder verzendkosten.</p>
		<h2>Verzendkosten</h2>
			<p>De verzendkosten hangen af van het gewicht, omvang en land van aflevering van het te verzenden pakket en aanvullende diensten.</p> 
			<p>Bij het afrekenen berekent de winkel de verzendkosten, en verwerkt ze in het totaalbedrag.</p> 		
		<h2 class="heading">Retourzendingen</h2>
			<p>Om een soepele afhandeling van een retournering te waarborgen verzoeken wij u de volgende aanwijzingen in acht te nemen.</p>		
			<ul>
				<li>Verpak de goederen, inclusief alle accessoires, in een stevige, liefst de originele,  verzendverpakking, </li>
				<li>Sluit de kopie-factuur bij</li>
				<li>vul het retourformulier compleet in en sluit het in</li>
				<li>Adresseer het pakket aan ' . STORE_NAME .', ' .  STORE_ADDRESS . '</li>
				<li>Verstuur het met een betrouwbare verzender.</li>
			</ul>
			<p>Indien u niet meer over een factuur beschikt kunt u contact opnemen met onze service-hotline, tel. '. STORE_PHONE . ', of via '. STORE_OWNER_EMAIL_ADDRESS . '</p>
		
			<a href="pub/retourformulier_NL.pdf" target="_blank">Retourformulier</a> (PDF)
			
		<h3>Retourrecht</h3>
			<p>Bij ' . STORE_NAME . ' bestelde artikelen krijgt u 10 werkdagen op zicht. De zichttermijn gaat in op de dag volgend op de dag van bezorging. Vanaf de bezorging heeft u dus twee weken de tijd om te beslissen of u uw pakket wilt behouden of niet. Alleen ongebruikte artikelen die in originele, onbeschadigde verpakking en met de kopie-factuur zijn teruggezonden, worden door ons als niet besteld beschouwd. Het bedrag exclusief verzendkosten wordt dan zo spoedig mogelijk terugbetaald. </p>
			<p>	Een aantal artikelen is om diverse redenen uitgesloten van retourrecht:</p>
			<ul>
				<li>audio- en videocassettes </li>
				<li>batterijen en accu&acute;s </li>
				<li>boeken, waarbij de verpakking is geopend</li>
				<li>(artikelen met) software, waarbij de verpakking is geopend</li>
				<li>diskettes, CD&acute;s, MD&acute;s en DVD&acute;s</li>
				<li>cartridges</li>
				<li>laptops</li>
				<li>PC&acute;s, PDA&acute;s</li>
				<li>reeds ingebouwde drives en kaarten in PC&acute;s (zoals CD-drives en videokaarten)</li>
				<li>mobiele telefoons</li>
				<li>beltegoed kaarten </li>
				<li>blaasinstrumenten, waarbij de verpakking is geopend</li>
				<li>satellietontvangers met smartcard, waarbij de smartcard is geactiveerd</li>
				<li>gezondheidsartikelen (zoals thermometers, inhalers, gehoorapparatuur), waarbij de verpakking is geopend</li>
				<li>lampen, halfgeleiders of overeenkomstige zaken</li>
				<li>opgebouwde bouwcomponenten en delen, die reeds opgebouwd waren</li>
				<li>bijzondere bestellingen, zoals bestellingen van reserve-onderdelen en inbouw navigatiesystemen. </li>
			</ul> 
		<h3>Terugbetaling</h3>
			<p>Bij betalingen via iDEAL wordt het bedrag van de creditnota terugbetaald op het rekeningnummer waarvan de betaling heeft plaatsgevonden.<br>
			Bij betalingen via creditcard wordt het bedrag van de creditnota terugbetaald op de creditcard waarvan de betaling heeft plaatsgevonden.</p>
		');