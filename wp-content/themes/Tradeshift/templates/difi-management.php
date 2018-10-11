<?php
/* Template Name: Landing Page: DIFI - Management
*/
get_header('difi'); ?>
<main class="main-content lpv3 difi-4 difi-microsite management">
	<!-- Hero Section -->
	<div id="has-animation" class="hero section-view">
		<a name="fillForm" id="fillForm"> </a>
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<h1>Verktøy for katalogadministrasjon</h1>
					<h2>Med Tradeshift sitt verktøy for katalogadministrasjon får du som kjøpende virksomhet en enkel oversikt over dine elektroniske kataloger, og full kontroll på alle endringer i katalogene som utføres av dine leverandører</h2>
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
					<h2>Oversikt og kontroll med Tradeshift sitt katalogverktøy</h2>
					<p>Dine leverandører kan laste opp deres elektroniske kataloger i ett av formatene støttet av Tradeshift, enten direkte i verktøyets grensesnitt, via automatisk opplastning fra FTP, innsending av katalog til Tradeshift Service desk eller via PEPPOL infrastruktur.  Teknisk og kvalitetsmessig validerering av katalog utføres automatisk før katalog gjøres tilgjengelig for godkjenning hos avtaleansvarlig i Kjøpende virksomhet i katalogverktøyet. Formidling av varsler utføres via e-post til Kjøper for alle endringer i katalogstatus.</p>
					<p>Gjennom presentasjon av en avviksrapport i Excel format oppnår du full kontroll på endringer som utføres av leverandøren hva gjelder pris og sortiment. Avviksrapport kan kontrolleres både mot forrige katalogversjon og mot en bbaseversjon. Det er i tillegg mulig å legge til kjøperspesifikk informasjon i leverandørkatalogene.</p>
					<h3>Konvertering</h3>
					<p>I tilfeller hvor mottaker ikke er i stand til å ta imot samme format som avsender har opprettet katalogen i, sørger Tradeshift sitt katalogverktøy for konvertering av katalogfilen. Eksempel på dette kan være at leverandør har opprettet katalogen i EHF format men kjøpers innkjøpsløsning ikke har støtte for dette formatet.</p>
					<h3>Sikring av innholdskvalitet</h3>
					<p>Det er støtte for å implementere kjøperspesifikke valideringsregler samt å sette krav til kvalitet på innholdet i katalogen som det gjøres teknisk validering på. Eksempel på en kjøperspesifikk valideringsregel kan være obligatorisk verdi i felt for Kontraktsnummer, mens eksempel på krav til kvalitet på innhold kan være at 99 % av produktene skal ha et tilhørende bilde i katalogen.</p>
					<p>Rollestyrt tilgang gjør at administrator kan se og godkjenne samtlige kataloger for virksomheten mens en standard bruker kun har tilgang til kataloger han/hun har eierskap til.</p>
					<img src="<?php echo get_template_directory_uri()?>/img/difi/difi-compliance.png" alt="Verktøy for katalogadministrasjon" title="Verktøy for katalogadministrasjon" class="img-responsive" />
					<h2>Sentral godkjenning og distribusjon av kataloger</h2>
					<p>Funksjonalitet for sentral godkjenning gir mulighet for kontroll av pris- og sortiment utvikling på en sentral avtale for innkjøpssamarbeid. Ved godkjenning og aktivering vil katalogen spres til alle virksomheter som tar del i den sentrale avtalen og tilgjengeliggjøres i virksomhetenes innkjøpsløsning.</p>
					<p>Egen flik i verktøyet viser oversikt over hvilke virksomheter innenfor samarbeidet katalogen er aktivert for og distribueres til.</p>
					<div class="list-container">
						<h2>Følgende katalogformat støttes av Tradeshift:</h2>
						<ul>
							<li><p>CIF Catalog File Format</p></li>
							<li><p>CLM Catalog File Format</p></li>
							<li><p>CSV/DPWN-ZLP</p></li>
							<li><p>CSV/Flexible Input Import</p></li>
							<li><p>CSV/Standard CSV Import</p></li>
							<li><p>cXML Catalog File Format</p></li>
						</ul>
						<ul>
							<li><p>EHF Catalog File Format</p></li>
							<li><p>Excel/Flexible Input Format</p></li>
							<li><p>Excel/TRADESHIFT Standard Excel Import</p></li>
							<li><p>OCIS Smart Punchout Catalog File Format</p></li>
							<li><p>XML/TRADESHIFT Standard BMEcat12</p></li>
							<li><p>XML/UBL20</p></li>
						</ul>
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
