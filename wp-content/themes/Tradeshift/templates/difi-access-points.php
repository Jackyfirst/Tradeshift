<?php
/* Template Name: Landing Page: DIFI - Access Points
*/
get_header('difi'); ?>
<main class="main-content lpv3 difi-4 difi-microsite access-points">
	<!-- Hero Section -->
	<div id="has-animation" class="hero section-view">
		<a name="fillForm" id="fillForm"> </a>
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<h1>Tradeshift Aksesspunkt</h1>
					<h2>Tradeshift sitt PEPPOL Aksesspunkt gjør det mulig for Tradeshift sine kunder å utveksle dokumenter med sine handelspartnere via PEPPOL nettverket i tilfeller hvor handelspartneren som sender eller mottar dokumenter ikke er direkte integrert med Tradeshift.</h2>
					<div class=" visible-sm visible-xs"><a class="btn btn-primary-cta" data-toggle="modal" data-target="#contact" style="font-family: 'Open Sans',Helvetica,Arial,sans-serif !important;">Kom igang</a></div>
				</div>
				
				<?php if( !is_mobile() ): ?>
				<div class="cta-form">
					<h2 class="hidden-sm hidden-xs">Fyll inn din kontaktinformasjon:</h2>
					<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
					<form id="mktoForm_2987"></form>
					<script type="text/javascript">// <![CDATA[
				        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2987);
						// ]]>
						MktoForms2.whenReady(function(form){
						 	//Add an onSuccess handler
							form.onSuccess(function(values, followUpUrl){
								// Hide the form when submitted
								//form.getFormElem().hide();
								// show thank you message and clear fields
								$('#mktoModal').modal('hide'); 
								$('#mkSuccessMsg').modal({ show: 'true' }); 
								$('.mktoField').val('');
								// Uncomment if a message should be shown when form is hidden; append message to div below
								// document.getElementById('confirmSubmit').style.display = 'block';

								// Start Segment API tracking | Get email value entered in Marketo and pass it to segment
								var $emailMkto = form.vals().Email;
								var $companyMkto = form.vals().Company;
								var $companyRFAnnualRev = form.vals().RF_SITE_AnnualRev__c;
								var $segmentAnonID = analytics.user().anonymousId();
								analytics.alias(analytics.user().anonymousId());
								analytics.identify (analytics.user().anonymousId(), {
								    email: $emailMkto,
								 	company: {
										id: $segmentAnonID,
										name: $companyMkto,
										annual_revenue: $companyRFAnnualRev
										},
									companyName: $companyMkto
								     });
								analytics.track('PEPPOL Contact Form Submission', {
									formName: 'Email Field',
									email: $emailMkto,
									companyName: $companyMkto,
									annualRevenue: $companyRFAnnualRev
									});
								// Send a click event to Google Analytics
								ga('send', 'event', 'PEPPOL Landing Page', 'Submit', 'Marketo Form Submit');
								//return false to prevent the submission handler from taking the lead to the follow up url.
								return false;
							 });
						});
					</script>
				</div>
				<?php endif; ?>
			</div>
			
		</div>
		<div class="arrow hidden-xs"></div>
	</div>
	<div class="core">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2 class="has-more-marginBottom">Hva er PEPPOL?</h2>
					<p>PEPPOL står for Pan-European Public Procurement Online. Det er et nettverk av uavhengige tjenestetilbydere som utveksler XML meldinger relatert til elektronisk handel på vegne av deres kunder over internett ved hjelp av en sikker infrastruktur med et felles sett prinsipper og offentlige standarder.</p>
					<p>PEPPOL ble grunnlagt på initiativ av EU og blir nå driftet av openPEPPOL AISBL. OpenPEPPOL er en internasjonal non-profit organisasjon under belgisk lov grunnlagt av tidligere PEPPOL konsortium partnere, med medlemskap åpent for offentlige og private organisasjoner. Tradeshift (først som IBX Aksesspunkt) har vært et aktivt medlem av openPEPPOL siden det ble grunnlagt i 2012 og er en sertifisert PEPPOL Aksesspunkt tilbyder.</h2>
					<h3 class="no-paddingTop has-more-marginBottom has-paddingTop-xs">Registrering i PEPPOL nettverket</h3>
					<p>For å kunne motta meldinger (katalog, ordre,fakturaer etc.) via PEPPOL så må organisasjoner være koblet til et godkjent PEPPOL Aksesspunkt som kan registrere organisasjonen i nettverket for å motta spesifikke typer meldinger.  Det er mulig å benytte separate Aksesspunkt tilbydere for de forskjellige meldingstypene. Eksempelvis kan man benytte én Aksesspunkt tilbyder for å motta kataloger og en annen for å motta fakturaer. Det er derimot ikke mulig å være registrert for å motta samme meldingstype via to forskjellige Aksesspunkt tilbydere. En kunde som har en avtale med Tradeshift som inkluderer PEPPOL Aksesspunkt tjenester kan be om å bli registrert for å motta én eller flere av meldingstypene listet i <a href="<?php echo get_template_directory_uri()?>/pdf/Tradeshift Aksesspunkt.pdf" target="_blank">dette pdf vedlegget.</a></p>
					<p>Registrering av kunder for mottak av dokumenter via PEPPOL håndteres av Tradeshift Service desk som en tjenesteforespørsel. Registreringen gjøres i det nasjonale PEPPOL SMP registeret, som kalles ELMA. Derfra blir det synkronisert med det sentrale PEPPOL SML registeret (Service metadata Locator) driftet av EU. Så snart registreringen er klar kan enhver forretningsforbindelse søke opp organisasjonen for å se hvilke meldingstyper de kan motta. Ved bruk av tjenestene til en PEPPOL Aksesspunkt tilbyder kan leverandøren så begynne å sende elementer som eksempelvis kataloger og fakturaer til virksomheten dersom disse meldingstyper er lagt til i registreringen. </p>
					<p>Noter at registrering i ELMA ikke ferdigstilles før det er sikret at integrasjonen med kunden i Tradeshift sitt nettverk er ferdigstilt, slik at dokumenter som mottas via PEPPOL Aksesspunktet kan leveres helt frem til kunden. Levering av meldinger kan etableres enten via direkte HTTP integrasjon, til en FTP konto, per E-post, eller til en konto i Tradeshift sin portal.</p>
					<img src="<?php echo get_template_directory_uri()?>/img/difi/norge-diagram.jpg" alt="Tradeshift Aksesspunkt" title="Tradeshift Aksesspunkt" class="img-responsive" />
					<h3>Konvertering</h3>
					<p>Forretningsdokumenter blir prosessert i Tradeshift sitt nettverk i et format per dokumenttype som normalt er basert på xCBL 3.5 standarden. Kunder kan likevel sende og motta deres forretningsdokumenter i en rekke andre format til og fra Tradeshift, deriblant EHF. En viktig del av ordre og faktura fangsten består i konvertering mellom forskjellige format via Tradeshift sitt format for å betjene forskjellige typer ERP system og integrasjonsgrensesnitt på både kjøper og leverandørsiden.</p>
					<h3>Validering</h3>
					<p>Som en generell regel innen PEPPOL nettverket er ethvert Aksesspunkt forpliktet til å kun sende gyldige meldinger til andre Aksesspunkt. Med ”gyldig” menes at xml meldingen er både riktig oppbygd og syntaktisk gyldig i henhold til dens tilhørende XML skjema og at den oppfyller de relevante valideringsreglene. Hvilket sett av valideringsregler som er relevant for et dokument i EHF formatet blir uttrykt av to parametere inne i dokumentet: CustomizationID og ProfileID. Ethvert document som flyttes fra Tradeshift sitt nettverk til et annet PEPPOL Aksesspunkt blir validert mot XML skjema og relevante valideringsregler før det blir sendt. Hvis valideringen feiler blir dokumentet IKKE sendt, og senderen blir informert slik at nødvendige endringer kan utføres.</p>
					<p>Dokumentflyten i Tradeshift sitt nettverk blir monitorert til enhver tid. Tradeshift Service desk bruker de samme prosessene for å kommunisere og undersøke valideringsfeil som når dokumenter ikke kan leveres av andre årsaker.</p>
					<h3>Monitorering</h3>
					<p>Tradeshift Aksesspunkt blir monitorert til enhver tid med tanke på tilgjengelighet og ytelse. Utfall blir behandlet som prioritet 1 hendelser med mål om løsning innen 2 timer.</p>
					<p>Overordnet transaksjons-ledetid for ordre og faktura transaksjoner levert til leverandører og kjøpere gjelder også for ordre og fakturaer mottatt via PEPPOL med 99,0% levert innenfor en time eller mindre.</p>
					<p>Les mer om bruk av Tradeshift sine Aksesspunkt tjenester <a href="<?php echo get_template_directory_uri()?>/pdf/Tradeshift Aksesspunkt.pdf" target="_blank">her &raquo;</a></p>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- Modal Thank You Message After Form Submit -->
<div class="modal fade" id="mkSuccessMsg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel">Thank you!</h3>
      </div>
      <div class="modal-body" style="padding: 0 30px !important">
      	<p class="lead">We’ll contact you to set up a time to talk.</p>
      </div>
    </div>
  </div>
</div>

<?php if( is_mobile() || is_tablet() ): ?>
<!-- thank you message after submitting form -->
<div class="modal fade" id="contact" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel">Ready to explore your options?</h3>
        <p class="lead">We’ll contact you to set up a time to talk.</p>
      </div>
      <div class="modal-body">
		<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
		<form id="mktoForm_3023"></form>
		<script type="text/javascript">// <![CDATA[
	        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 3023);
			// ]]>
			MktoForms2.whenReady(function(form){
			 	//Add an onSuccess handler
				form.onSuccess(function(values, followUpUrl){
					// Hide the form when submitted
					//form.getFormElem().hide();
					// show thank you message and clear fields
					$('#contact').modal('hide'); 
					$('#mkSuccessMsg').modal({ show: 'true' }); 
					$('.mktoField').val('');
					// Uncomment if a message should be shown when form is hidden; append message to div below
					// document.getElementById('confirmSubmit').style.display = 'block';

					// Start Segment API tracking | Get email value entered in Marketo and pass it to segment
					var $emailMkto = form.vals().Email;
					var $companyMkto = form.vals().Company;
					var $companyRFAnnualRev = form.vals().RF_SITE_AnnualRev__c;
					var $segmentAnonID = analytics.user().anonymousId();
					analytics.alias(analytics.user().anonymousId());
					analytics.identify (analytics.user().anonymousId(), {
					    email: $emailMkto,
					 	company: {
							id: $segmentAnonID,
							name: $companyMkto,
							annual_revenue: $companyRFAnnualRev
							},
						companyName: $companyMkto
					     });
					analytics.track('PEPPOL Submit', {
						formName: 'Email Field',
						email: $emailMkto,
						companyName: $companyMkto,
						annualRevenue: $companyRFAnnualRev
						});
					//return false to prevent the submission handler from taking the lead to the follow up url.
					return false;
				 });
			});
		</script>
		<div class="confirm-wrapper" id="confirmSubmit" style="display: none;"><p></p></div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php get_footer('difi'); ?>
