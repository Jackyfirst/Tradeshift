<?php
/* Template Name: Landing Page: DIFI - Buy
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
<main class="main-content lpv3 difi-4 difi-buy">
	<!-- Hero Section -->
	<div id="has-animation" class="hero section-view">
		<a name="fillForm" id="fillForm"> </a>
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<h1>Tradeshift<sup>®</sup> Buy</h1>
					<h2>Din nøkkel til smartere, raskere innkjøp - kjøp bedre, spar mer, skap verdi.</h2>
					<div class=" visible-sm visible-xs"><a class="btn btn-primary-cta" data-toggle="modal" data-target="#contact" style="font-family: 'Open Sans',Helvetica,Arial,sans-serif !important;">Kom igang</a></div>
					<img src="<?php echo get_template_directory_uri() ?>/img/difi/hero-mac.png" />
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
		<div class="arrow hidden-xs"></div>
	</div>
	<div class="ts-buy-section">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="ts-buy-features">
						<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-approved-icon.png" alt="Intuitive shopping experience for employees to buy from approved sources and stay in policy | Tradeshift Buy">
						<p>Intuitiv innkjøpsopplevelse som gjør det mulig for ansatte å handle fra godkjente kilder og holde seg innenfor virksomhetens retningslinjer</p>
					</div>
					<div class="ts-buy-features">
						<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-graph-icon.png" alt="Get complete spend under management for total visibility and control | Tradeshift Buy">
						<p>Få oversikt over virksomhetens fullstendige innkjøpsvolum med total synlighet og kontroll</p>
					</div>
					<div class="ts-buy-features">
						<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-typing-indicator-icon.png" alt="Collaborate internally, and with suppliers, to improve procurement agility | Tradeshift Buy">
						<p>Kommuniser internt og med leverandører i sanntid for å forbedre smidigheten innenfor innkjøpsområdet</p>
					</div>
					<div class="ts-buy-features">
						<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-cloud-icon.png" alt="Lightweight, flexible, and extensible platform makes managing change and growth easy | Tradeshift Buy">
						<p>Fleksibel og utvidbar plattform gjør endringer og vekst enkelt</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="dash">
	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div>
						<h2>Shop</h2>
						<h3>Intuitiv innkjøpsopplevelse utvider adopsjon på tvers av virksomheten.</h3>
						<p>En enkel, velkjent søkeopplevelse veileder brukere til riktige produkter og tjenester som er i henhold til virksomheten innkjøpsmål. Ansatte har bedre prissynlighet for å finne beste pris basert på krav, og for å oppnå samsvar med fremforhandlede priser.<br>Med Shop kan de ansatte opprette godkjente innkjøpsordre for enhver innkjøpskategori. Det bidrar til å forbedre interne prosesser som igjen øker effektiviteten og skaper verdi.</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/difi/difi-buy-screenshot.png" class="img-responsive screenshot" >
						<p>Tradeshift Buy er en av nøkkelelementene i Tradeshift sin plattform. Det er en strømlinjeformet, cloud-basert innkjøpsløsning som fokuserer på å fange og håndtere direkte og indirekte innkjøp og la bestillere finne og handle elementer fra forskjellige kilder online.</p>
						<p>En av hovedkomponentene er en virtuell butikk med innhold fra alle leverandørene organisasjonen handler med. I denne virtuelle butikken kan organisasjonens ansatte finne og handle et utvalg produkter og tjenester som er forhåndsgodkjent av avtaleansvarlige. De ansatte går gjennom en forbruker lignende innkjøpsopplevelse for å effektivt finne og handle produkter og tjenester, og de kommuniserer med kollegaer rundt innkjøpsbehov. De får også innsyn i hvordan deres forespørsler blir behandlet.</p>
						<p>Leverandører kan velge å signere en avtale med Tradeshift for å tilgjengeliggjøre sitt sortiment, eller de kan benytte PEPPOL infrastrukturen for å nå frem til sine forretningsforbindelser. Se mer informasjon om dette HER. Dersom leverandører velger å bli en del av Tradeshift sitt nettverk, kan de enten inviteres av en av deres kjøpende virksomheter, eller de kan signere uoppfordret fordi de kjenner til fordelene ved plattformen.</p>
					</div>
					<div class="vid hidden">
						<img src="<?php echo get_template_directory_uri() ?>/img/difi/difi-video-screenshot-2.jpg" class="img-responsive" >
						    <div class="play-icon">
						    	<button id="heroVideoTS_buy" class="btn btn-play-white" onclick="fn_vidyard_1vyCso2gb8gyX3w4usCzt6();"> </button>
						    </div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="dash">
	<div class="modern">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div>
						<h2>Moderne chattefunksjon</h2>
						<h3>Enkel sanntid meldingsfunksjon som lagrer samtaler og dokumentutveksling.</h3>
						<p>Med Buy kan ditt innkjøpsteam, ledere og ansatte, chatte og samarbeide i sanntid gjennom hele innkjøpsprosessen. Legg til personer i samtalen, del produkt- og tjeneste informasjon, og snakk med innkjøpsekspertise for å komme frem til riktig kilde for å dekke ditt behov, finne riktig pris og kontraktsamsvar.</p>
						<div class="vidyard-outer">
							<div class="vidyard-inner" id="video_container">
					        	<script type="text/javascript" id="vidyard_embed_code_1vyCso2gb8gyX3w4usCzt6" src="//play.vidyard.com/1vyCso2gb8gyX3w4usCzt6.js?v=3.1.1&type=inline"></script>
					        </div>
					    </div>
						<!-- <div class="vid">
						    <script type="text/javascript" id="vidyard_embed_code_1vyCso2gb8gyX3w4usCzt6" src="//play.vidyard.com/1vyCso2gb8gyX3w4usCzt6.js?v=3.1.1&type=inline"></script>
						</div> -->
					</div>
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
<?php endif; ?>
<?php get_footer('difi'); ?>
