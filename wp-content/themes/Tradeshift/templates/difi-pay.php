<?php
/* Template Name: Landing Page: DIFI - Pay
*/
get_header('difi'); ?>

<style type="text/css">
	.videowrapper {
    float: none;
    clear: both;
    width: 100%;
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
}
.videowrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
<main class="main-content lpv3 difi-4 difi-pay">
	<!-- Hero Section -->
	<div id="has-animation" class="hero section-view">
		<a name="fillForm" id="fillForm"> </a>
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<h1>Tradeshift<sup>®</sup> Pay</h1>
					<h2>Transform the way you pay.</h2>
					<div class=" visible-sm visible-xs"><a class="btn btn-primary-cta" data-toggle="modal" data-target="#contact">Kom igang</a></div>
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
								//return false to prevent the submission handler from taking the lead to the follow up url.
								return false;
							 });
						});
					</script>
				</div>
				<?php endif; ?>
			</div>
			
		</div>
	</div>
	<div class="ts-med">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2>Med Tradeshift Pay kan du:</h2>
					<div class="ts-med-item">
						<img src="<?php echo get_template_directory_uri() ?>/img/difi/difi-pay-icon-kutte.png" alt="Intuitive shopping experience for employees to buy from approved sources and stay in policy | Tradeshift Buy">
						<h3>Kutte kostnader</h3>
						<p>Forenkle manuell repeterende registrering med 3-veis matching og innebygd godkjenningsflyt.</p>
					</div>
					<div class="ts-med-item">
						<img src="<?php echo get_template_directory_uri() ?>/img/difi/difi-pay-icon-effektiviteten.png" alt="Get complete spend under management for total visibility and control | Tradeshift Buy">
						<h3>Øke effektiviteten</h3>
						<p>Spar 40-50% av manuelt arbeid for virksomheten ved å redusere avvikshåndtering.</p>
					</div>
					<div class="ts-med-item">
						<img src="<?php echo get_template_directory_uri() ?>/img/difi/difi-pay-icon-generere.png" alt="Collaborate internally, and with suppliers, to improve procurement agility | Tradeshift Buy">
						<h3>Generere inntekt</h3>
						<p>Skap verdi for din finansavdeling med dynamisk rabattering og forsyningskjede finansiering.</p>
					</div>
				</div>
			</div>
			<hr class="dash">
			<div class="ts-med__sectionTwo row">
				<div class="contents">
					<h2>Få fakturabehandling til å bety noe</h2>
					<p>Å redusere kostnader er bra. Å skape effektive prosesser er bedre. Å generere inntekt for virksomheten ditt? Det er der magien skjer. Alt for lenge har finansavdelinger blitt sett på rent taktisk, eller verre - som et kostsenter. Vi foreslår noe annet: det at fakturabehandling er nøkkelen til å kutte kostnader er kun begynnelsen. Det starter med å knytte seg digitalt til alle dine leverandører. (Topp 20 holder ikke lenger)</p>
					<p class="is-bold">Det er på tide å ta fakturabehandling til neste nivå.</p>
					<p class="is-bold is-orange">Velkommen til Tradeshift Pay.</p>
					<img src="https://3ggqje2jhgjp45f9yd48ay211i1-wpengine.netdna-ssl.com/wp-content/themes/Tradeshift/img/solutions/pay/payables-matter.png" class="img-responsive img-center" />
				</div>
			</div>
			<hr class="dash">
			<div class="ts-med__sectionThree row">
				<div class="contents">
					<h2>Tradeshift Fakturamotor</h2>
					<h3>Ta farvel med avvik.</h3>
					<p>Papirarbeid er tidkrevende. Tradeshift sin fakturamotor digitaliserer og tar hånd om dine dokumenter, og hjelper deg med å prosessere fakturaer og betalingsdata uavhengig av kilde. Håndter alle dine faktura behov med CloudScan™, elektronisk fakturering, og vår forretnings-brannvegg.</p>
					<img src="https://3ggqje2jhgjp45f9yd48ay211i1-wpengine.netdna-ssl.com/wp-content/themes/Tradeshift/img/solutions/pay/invoice-engine-sm.gif" class="img-responsive img-center" />
					<h4>Elektronisk fakturering</h4>
					<p>Eliminer papir med en enkel, intuitiv måte å motta, godkjenne og betale fakturaer. Ingen behov for komplisert opplæring eller tidkrevende data inntasting. Kommuniser digitalt om alle dine forretningsdokumenter inkludert fakturaer, innkjøpsordre, kreditnota og annet.</p>
					<h4>CloudScan<sup>TM</sup></h4>
					<p>Digitaliser dine papir og PDF fakturaer med et enkelt, pålitelig bildefangst verktøy som håndterer fakturaer og enkelt flytter leverandører over til gratis elektronisk fakturering. Ingen behov for å taste inn data fra bunn. Gi leverandørene en måte å bli kvitt papir på på permanent basis.</p>
					<h4>Forretnings-brannvegg</h4>
					<p>Beskytt din finansavdeling mot feilaktige fakturaer som stjeler tid. Vår forretnings-brannvegg sjekker felt mot korrekte data, og validerer mot forretningsregler. Vi kan få deg opp og gå med dine eksisterende forretningsregler fra dag én. Systemet hindrer leverandører i å sende fakturaer med feil, noe som forhindrer avvik før de er sendt.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="insights">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="product-screenshot hidden-sm hidden-xs">
						<img class="laptop pull-right" src="https://3ggqje2jhgjp45f9yd48ay211i1-wpengine.netdna-ssl.com/wp-content/themes/Tradeshift/img/solutions/pay/insights-laptop-min.png">
					</div>
					<div class="text-intro">
						<h2>Tradeshift Insights</h2>
						<h3>Ta bedre avgjørelser - nå.</h3>
						<p>Vit hva som skjer i sanntid for AP, Finans og Innkjøp. Tradeshift Insights gir deg fullt innsyn i data så som rabatter for tidlig betaling, automatisk prosessering og matching rater, samt innkjøpsvolum på leverandørnivå. Få akkurat de dataene du trenger, akkurat når du trenger de.</p>
						<p>Du trenger ikke å være en dataingeniør med Insights sine enkle-å-forstå dashboards. Pop-up insights gir deg raskt og nøyaktig innsyn i informasjonen du trenger mest, som fakturastatus, leverandørdata og månedlig innkjøpsvolum. </p>
						<p>Til motsetning av andre løsninger kan vi fange viktige mønstre og endringer mens de oppstår (ikke en måned fra nå) for å sikre at du ikke går glipp av dem. Få proaktive alarmer og anbefalinger som du kan agere på.</p>
					</div>
					<img class="visible-sm visible-xs product-screenshot-sm" src="https://3ggqje2jhgjp45f9yd48ay211i1-wpengine.netdna-ssl.com/wp-content/themes/Tradeshift/img/solutions/pay/insights-laptop-min.png" />
				</div>
			</div>
		</div>
	</div>
	<div class="collaborate">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2>Tradeshift Collaborate.</h2>
					<h3>Simplify your workflow.</h3>
					<p>Forsikre deg om at alle er på samme side. Med Tradeshift Collaborate kan ditt AP team, leverandører, ledere og ansatte chatte i sanntid og samarbeide i Tradeshift sin plattform gjennom hele prosessen.</p>
					<p>Legg til personer i dine samtaler og løs avvik raskt sammen med dine leverandører. Å kommunisere informasjon og tilbakemeldinger som lett kunne blitt utelatt betyr at du får riktig ordre eller faktura fra starten av - og lynrask prosesseringstid.</p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/difi/difi-pay-round-bubbles-xs.png" class="img-responsive visible-xs" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/difi/difi-pay-round-bubbles.png" class="img-responsive hidden-xs" style='margin: auto' />
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
					// Send a click event to Google Analytics
					ga('send', 'event', 'DIFI NORGE Landing Page', 'Submit', 'Marketo Form Submit');
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
<?php get_footer('difi'); ?>
