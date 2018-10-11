<?php
/* Template Name: Landing Pages: Peppol 4
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
<main class="main-content landing-pages lpv3 difi-4">
	<!-- Hero Section -->
	<div class="hero section-view">
		<a name="fillForm" id="fillForm"> </a>
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<h1>Fremtidens E-handel i Norge – et åpent nettverk for fri samhandling</h1>
					<button id="heroVideoTS_buy" class="btn btn-play-white" onclick="fn_vidyard_192TUKPLoyKLrH6nVxtRpb();"> </button>
					<button class="cta-text" onclick="fn_vidyard_192TUKPLoyKLrH6nVxtRpb();">Watch the video</button>
					<button type="button" class="btn btn-cta btn-nm visible-sm visible-xs" id="finalForm" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Contact us</button>
				</div>
				
				<?php if( !is_mobile() ): ?>
				<div class="cta-form">
					<!-- <h2 class="hidden-sm hidden-xs">Har du spørsmål? Vi vil fortelle deg mer!</h2> -->
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
				<a href="#sectionOne"><div class="icon-down-arrow hidden-xs hidden-sm">Learn more</div></a>
			</div>
			
		</div>
	</div>
	<div class="testimonials" id="sectionOne">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div>
						<h3>Fremtidens E-handel i Norge – et åpent nettverk for fri samhandling</h3>
						<p>I fremtiden vil det bli stadig mer vanlig å knytte seg til åpne nettverk. Denne trenden vil ta et stort steg videre i løpet av årene som kommer. Allerede nå kan dere ta del av dette ved å dra nytte av avtalene som Statens innkjøpssenter inngår.</p>
						<p>Kataloger fra Statens innkjøpssenter blir distribuert til alle statlige organisasjoner som har en E-handelsløsning som er knyttet til PEPPOL infrastrukturen. Det betyr at organisasjoner som for øyeblikket ikke har en E-handelsløsning, må anskaffe en for å kunne dra nytte av denne muligheten. <strong>Tradeshift (tidligere IBX Business Network)</strong> tilbyr en komplett E-handelsløsning som overholder alle kravene til PEPPOL og EHF og som samtidig er ferdig konfigurert for å motta kataloger fra statens innkjøpssenter.</p>
						<h3>Hva gjør løsningen vår annerledes?</h3>
						<p>Heller enn å tvinge brukere til å lære å bruke et komplisert og lite brukervennlig system, gir løsningen vår en innkjøpsopplevelse som ikke krever opplæring på forhånd. Denne løsningen gir deg friheten til å finne og kjøpe det du trenger for å utføre arbeidsoppgavene dine og gjør det enklere å holde styr på innkjøpsordre, så synligheten blir bedre.</p>
						<p>Tradeshift er godkjent av og ferdig integrert mot Statens innkjøpssenters elektroniske kataloger, så du er garantert tilgang til det forhånds- godkjente innholdet. Vår lange erfaring med PEPPOL og innkjøp i offentlig sektor i Norge gjør oss til det beste valget på både kort og lang sikt.</p>

						<h3>Vil du vite mer?</h3>
						<p><strong>Her finner du en video</strong> som forklarer hvordan Tradeshift planlegger å jobbe videre i året som kommer. Hvis du vil ha mer informasjon, kan du ta kontakt for å avtale en prat om fremtidige innkjøp!</p>
					</div>
					<div class="vid">
						<img src="<?php echo get_template_directory_uri() ?>/img/difi/difi-video-screenshot-2.jpg" class="img-responsive" >
						    <div class="play-icon">
						    	<button id="heroVideoTS_buy" class="btn btn-play-white" onclick="fn_vidyard_192TUKPLoyKLrH6nVxtRpb();"> </button>
						    </div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="dash" />
	<div class="resources blogs" style="padding: 33px 0;">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2>Ekspertblogger</h2>
					<blockquote style="border-left: none;padding-bottom: 55px">"For optimal use of PEPPOL, it´s important for businesses to partner with the right eProcurement service provider"
					<footer>Regine Boehm Gams</footer></blockquote>

					<div class="resource-wrapper brikt">
						<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/difi/brikt-grendar.png" style="display: inline">
						<span class="name">Brikt Grendar</span>
						<span class="title">VP - Public Sector</span>
						<span class="company">Tradeshift</span>
						<p>
							<a href="https://tradeshift.com/start/en-titt-fremover-hvordan-vil-innkjop-utvikle-seg-fremtiden/" target="_blank">E-handel over åpen infrastruktur gir større valgfrihet. Hvilke spørsmål er det viktig å ta stilling til for å ta det riktige valget? &raquo;</a>
							<br />
							<a href="/start/time-procurement-departments-across-europe-adopt-peppol/" target="_blank">It's time for procurement departments across Europe to Adopt PEPPOL &raquo;</a>
							<br>
							<a href="/start/mature-peppol-supplier-side/" target="_blank">How to Mature with PEPPOL, the Supplier side &raquo;</a>
						</p>
					</div>
					<div class="resource-wrapper regine">
						<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/difi/regine-bohm-gams.png" style="display: inline">
						<span class="name">Regine Boehm Gams</span>
						<span class="title">VP - Product Management</span>
						<span class="company">Tradeshift</span>
						<p><a href="/start/means-peppol-hits-critical-mass/" target="_blank">What it Means When PEPPOL Hits Critical Mass &raquo;</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="resources prefooter" style="text-align: center;">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2>Les mer om Tradeshift og PEPPOL her</h2>
					<div class="resource-wrapper col-sm-4 col-xs-12">
						<a class="trigger-res-1" href="<?php echo get_template_directory_uri() ?>/pdf/University_Oslo_Case_Study_NO.pdf" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/difi/Oslo University.jpg" style="margin: auto;"></a>
						<p><br class="visible-sm"><a class="trigger-res-1" href="/wp-content/themes/Tradeshift/pdf/University_Oslo_Case_Study_NO.pdf" target="_blank">University of Oslo Success Story »</a></p>
					</div>
					<div class="resource-wrapper col-sm-4 col-xs-12">
						<a class="trigger-res-2" href="<?php echo get_template_directory_uri() ?>/pdf/Peppol Access Point_Tradeshift.pdf" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/difi/PEPPOL.jpg" style="margin: auto;"></a>
						<p><br class="visible-sm"><a class="trigger-res-2" href="<?php echo get_template_directory_uri() ?>/pdf/Peppol Access Point_Tradeshift.pdf" target="_blank">PEPPOL access point »</a></p>
					</div>
					<div class="resource-wrapper col-sm-4 col-xs-12">
						<a class="trigger-res-3" href="<?php echo get_template_directory_uri() ?>/pdf/137_Helse Vest Case Study.pdf" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/difi/Helse.jpg" style="margin: auto;"></a>
						<p><br class="visible-sm"><a class="trigger-res-3" href="<?php echo get_template_directory_uri() ?>/pdf/137_Helse Vest Case Study.pdf" target="_blank">Helse Vest Success Story  »</a></p>
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
<?php get_footer('difi'); ?>
