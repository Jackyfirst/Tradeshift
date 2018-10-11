<?php
/* Template Name: Landing Page: DIFI - Services
*/
get_header('difi'); ?>
<main class="main-content lpv3 difi-4 difi-microsite services">
	<!-- Hero Section -->
	<div id="has-animation" class="hero section-view">
		<a name="fillForm" id="fillForm"> </a>
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<h1>Tradeshift Tjenester</h1>
					<h2>Tradeshift tilbyr en rekke tjenester som støtter opp under elektronisk samhandling, slik at din virksomhet kan fokusere på innkjøpsfaglige oppgaver. Vårt fokus er alltid at dere skal kunne oppnå enklere, bedre og sikrere innkjøp!</h2>
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
		<div class="section-white">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2 class="has-more-marginBottom">Kundesenter</h2>
						<p>Primærfunksjonen for Tradeshift sitt kundesenter er å være et kontaktpunkt for alle operasjonelle spørsmål fra våre kunder, i tillegg til å følge opp rapportere hendelser og kommunisere løsning. Kundesenteret definerer en prioritet på alle hendelser og gir kunden en ledetid basert på prioritet.</p>
						<img src="<?php echo get_template_directory_uri()?>/img/difi/difi-services-kundesenter.png" alt="Tradeshift Tjenester" title="Tradeshift Tjenester" class="img-responsive hidden-xs" />
						<img src="<?php echo get_template_directory_uri()?>/img/difi/difi-services-kundesenter-xs.png" alt="Tradeshift Tjenester" title="Tradeshift Tjenester" class="img-responsive visible-xs" />
						<p>Tradeshift har etablerte rutiner for klassifisering og behandling av henvendelser, og loggfører alt i et sentralt rapporteringssystem. I tillegg sendes det ut driftsmeldinger til våre kunder ved avvik eller nedetid på systemer, samt release informasjon om oppgraderinger og generelle endringer på plattformen.</p>
						<p>Tradeshift måler kontinuerlig tjenestens tilgjengelighet og responstider, og registrerer alle avvik fra forventet tjenestenivå basert på simuleringer. Dersom Tradeshift ikke tilfredsstiller garantert tjenestenivå, blir kompensasjon gitt ut fra størrelsen på avviket.</p>
						<p>Tradeshift har sitt kundesenter lokalisert i Stockholm, Sverige. Det holder åpent fra 08:00 til 17:00, men prioriterte saker behandles mellom 07:00 og 20:00. Kundesenteret er tilgjengelig både per E-post og telefon (kostnadsfritt nummer).</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section-gray">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Leverandørtjenester</h2>
						<img src="<?php echo get_template_directory_uri()?>/img/difi/difi-services-leverandortjenester.png" alt="Leverandørtjenester | Tradeshift" title="Leverandørtjenester | Tradeshift" class="img-responsive hidden-xs" />
						<img src="<?php echo get_template_directory_uri()?>/img/difi/difi-services-leverandortjenester-xs.png" alt="Leverandørtjenester | Tradeshift" title="Leverandørtjenester | Tradeshift" class="img-responsive visible-xs" />
						<p>Tradeshift sin avdeling for leverandørtjenester knytter kjøpende virksomheter og leverandører sammen for elektronisk samhandling. De er erfarne konsulenter som er ansvarlige for å drive, koordinere og veilede leverandører gjennom hele aktiveringsprosessen. Teamet tar hånd om dialogen med dine leverandører for deg og sørger for at dere kan samhandle elektronisk, ved blant å utføre teknisk oppsett på ønsket ordrekanal og format, og eventuell opplæring. Idet en aktivering blir initiert av den kjøpende virksomheten kobles en ressurs fra leverandørteamet inn og følger opp den aktuelle leverandøren inntil begge parter er fornøyd med den etablerte koblingen.</p>
						<p>Alle leverandøraktiveringer følger standard prosesser med etablerte ledetider, avhengig av avropsmetode. Tradeshift sin avdeling for leverandørtjenester.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section-white third">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Integrasjonstjenester</h2>
						<p>Våre løsninger er uavhengig av virksomhetssystem, noe som betyr at dersom du ønsker å benytte andre system for utvalgte innkjøpsmoduler enn hva Tradeshift tilbyr så sørger vår integrasjonsavdeling for en sømlys meldingsflyt med Tradeshift fra og til ditt system. Vi kan hjelpe deg med integrasjon av dokumenttyper som eksempelvis ordre, ordresvar og faktura, uavhengig av hvilket format ditt virksomhetssystem har støtte for. Dersom leverandørene du samhandler med benytter et annet format enn deg, konverteres meldingene i vår meldingssentral før de sendes til mottaker.</p>
						<p>Vår integrasjonsavdeling har en veletablert prosess med standard aktiviteter for oppsett og testing i testmiljø, utveksling av nødvendig systeminformasjon og kontrollert overgang til produksjon. Tradeshift har også verktøy tilgjengelig som gjør det mulig for våre kunder å teste på egen hånd dersom det er interesse for dette.</p>
						<p>I tillegg til å gjennomføre kjøperintegrasjoner  gjennomføres også en rekke leverandørintegrasjoner av våre erfarne konsulenter. Dette gjør at leverandørene på tilsvarende måte kan få en automatisert prosess for behandling av sine ordre, ordresvar og fakturaer, uavhengig av hvilket format de benytter og uavhengig av hvilket virksomhetssystem de benytter seg av.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section-gray">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Konsulenttjenester</h2>
						<p>Tradeshift har et lokalt team i Norge med erfarne konsulenter som står klare til å hjelpe deg med dine behov. Er du en ny kunde følger en av våre prosjektledere deg gjennom hele etableringsprosessen, fra oppstartsmøte og planlegging til opplæring og idriftsettelse. Vårt apparat med applikasjonskonsulenter og støtteteam beskrevet over står klare til å gjøre nødvendig oppsett og konfigurering i bakkant.</p>
						<p>Utover etablering tilbyr vi blant annet prosjekter for innkjøpsanalyse, endringsledelse og volum boost, hvor hensikten er å hjelpe din virksomhet med å oppnå høyest mulig utnyttelse av E-handels initiativet. Våre konsulenter utfører også en rekke andre mindre og større oppdrag, tilpasset dine behov.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section-white third">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Kundeoppfølging</h2>
						<p>Hos Tradeshift mener vi at hver enkelt kunde bør representere en suksess historie. Vår største prioritet er å få våre kunder til å få mest ut av alle aspekter ved våre produkter, og å sikre optimal brukeropplevelse på tvers av alle tilgjengelige moduler. </p>
						<p>Med Tradeshift har du alltid én dedikert person som er ansvarlig for deres suksess for hvert stadium i livssyklusen, som har støtte fra høyt spesialiserte team. Fra driftsstart frem til kontraktsfornyelse er én dedikert Customer Success konsulent allokert til kunden. Denne konsulenten fungerer som “kundens stemme” internt i Tradeshift, og er ansvarlig for at kunden oppnår best mulig utnyttelse og suksess. Customer Success konsulenten får støtte fra spesialister for leveranse, leverandøraktivering og Support.</p>
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
