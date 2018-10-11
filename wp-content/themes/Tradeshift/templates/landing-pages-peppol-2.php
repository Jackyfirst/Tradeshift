<?php
/* Template Name: Landing Pages: Peppol 2
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
<script type="text/javascript">
	jQuery(document).ready(function($) {
	   $('.hero a[href$=".pdf"]')
	        .attr('download', '')
	        .attr('target', '_blank'); 
	});
</script>
<main class="main-content landing-pages lpv3 difi-2">
	<!-- Hero Section -->
	<div class="hero section-view">
		<a name="fillForm" id="fillForm"> </a>
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<h1>Universitetet i Oslo sparer 17,5 millioner NOK i året. Hvordan?</h1>
					<h2>Ved å sentralisere innkjøpsfunksjonen.</h2>
					<div class="clear">
						<a class="btn btn-cta btn-nm" href="/wp-content/themes/Tradeshift/pdf/University_Oslo_Case_Study_NO.pdf" download target="_blank">Download case study</a>
						<button type="button" class="btn btn-cta btn-nm white" data-toggle="modal" data-target="#contact">Contact us</button>
				</div>
				</div>
			
				<a href="#sectionOne"><div class="icon-down-arrow hidden-xs hidden-sm">Learn more</div></a>
			</div>
			
		</div>
	</div>
	<div class="testimonials" id="sectionOne">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div>
						<h3>Ehandelsplattform-avtalen er i ferd med å utløpe. Hva betyr dette for deg?</h3>
						<p>Når den sentrale rammeavtalen mellom Difi og Tradeshift (tidligere IBX Business Network) utløper i mai 2018 blir mulighetene innenfor innkjøpsområdet i Norge større enn noensinne. Dere som innkjøpsorganisasjon kan nå enklere velge mellom tjenesteleverandør dere ønsker å bruke for å samhandle med deres leverandører.</p>
						<p>Når dere skal ta dette valget, er det viktig å huske på at vi hos Tradeshift allerede overholder kravene til PEPPOL og EHF, <strong>noe som i praksis betyr at din virksomhet allerede er klar for å samhandle elektronisk med dine forretningsforbindelser via PEPPOL-nettverket</strong>. Dette gjør at du kan fortsette å bruke PEPPOL-infrastrukturen uten å måtte endre på noe. Så hvilken merverdi får dere egentlig fra IBX Business Network, utover tilgang til PEPPOL?</p>
						
						<h3>Dette kan vi gjøre for deg:</h3>
						<p>I tillegg til den eksisterende tilgangen til PEPPOL-nettverket, tilbyr Tradeshift funksjonalitet for sentral godkjenning og distribusjon av E-handels kataloger. Ved å strømlinjeforme prosessen for godkjenning og distribusjon av kataloger i samarbeid sikrer vi oppdatert kataloginnhold hos alle samarbeidende virksomheter med et minimum av ressurser involvert.</p>
						<p>Tradeshift er en ERP-uavhengig tjenesteleverandør som kan benyttes sammen med alle typer ERP-løsninger, slik at det ikke er nødvendig å gjennomføre omstrukturering av prosesser for å benytte våre tjenester. På denne måten sikrer vi at det kreves mindre ressurser for å opprettholde og konsolidere E-handels prosessen hos dere.</p>
						<p>Sist, men ikke minst: Ved å knytte seg til PEPPOL via Tradeshift får dere tilgang til et stort antall leverandører som allerede overholder kravene til PEPPOL og EHF samt at vi kan bidra med løsninger for å effektivt aktivere nye leverandører via PEPPOL og EHF. Tradeshift gjør det raskt og enkelt å finne dine leverandører og innlemme dem i prosessene dine.</p>
						<p>Tradeshift gjør det enkelt for virksomheten deres å få mest mulig nytte av PEPPOL samtidig som det gir alle fordelene med åpen infrastruktur og standardiserte formater, med minimale endringer av de eksisterende prosessene på deres side. Vår erfaring med PEPPOL og deres virksomhet gjør oss til det beste valget på både kort og lang sikt.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="resources prefooter video">
		<div class="container">
			<div class="row">
				<?php if( !is_mobile() || !is_tablet() ): ?>
				<div class="contents" style="padding-left: 0px !important">
				<?php else: ?>
				<div class="contents">
				<?php endif; ?>
					<h2>Vil du vite mer?</h2>
					<p>Her finner du en video som forklarer hvordan Tradeshift planlegger å jobbe videre fremover mot utløpet av<br class="visible-xs"> Ehandelsplattform-rammeavtalen. Hvis du vil ha mer informasjon, kan du ta kontakt for å avtale en prat om fremtidens E-handel i Norge!</p>
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
<!-- Modal View of Marketo Contact -->
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
<?php get_footer('difi'); ?>
