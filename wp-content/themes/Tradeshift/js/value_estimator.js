$(document).ready(function(){
  $('.Form > fieldset:eq(0)').addClass('active');

  $('.Form > fieldset:not(:first-child)').one("click", function() {
    $('.Form > fieldset').removeClass('active');
    $(this).addClass('active');
  });
  $('.Form > fieldset:eq(0) input').one("focus", function() {
    $('.Form > fieldset:eq(0)').removeClass('active');
    $('.Form > fieldset:eq(1)').addClass('active');
  });
  $('.Form > fieldset:eq(1) input').one("focus", function() {
    $('.Form > fieldset:eq(1)').removeClass('active');
    $('.Form > fieldset:eq(1)').next().addClass('active');
  });
  $('.Form > fieldset:eq(2) input').one("focusout", function() {
    $('.Form > fieldset').removeClass('active');
    $('.Form>div>fieldset:eq(0)').addClass('active');
  });


  $('.Form > div > fieldset').one("click", function() {
    $('.Form > fieldset').removeClass('active');
    $(this).addClass('active');
  });
  $('.Form>div>fieldset:eq(0)').one("focusout", function() {
    $('.Form > fieldset').removeClass('active');
    $('.Form>div>fieldset:eq(1)').addClass('active');
  });
  $('.Form>div>fieldset:eq(0)').one("focusout", function() {
    $('.Form > div > fieldset').removeClass('active');
    $('.Form>div>fieldset:eq(1)').addClass('active');
  });
  $('.Form>div>fieldset:eq(1)').one("focusout", function() {
    $('.Form > div > fieldset').removeClass('active');
    $('.Form>div>fieldset:eq(2)').addClass('active');
  });

  $('.Form > div > fieldset.submitButtonParent').click(function() {
    $('.Form > div > fieldset.submitButtonParent').removeClass('active');
  });


  $( "<h2 class='start_here'>Start Here</h2>" ).insertBefore( ".Form" );
  setTimeout(function() {
    $(".smartling-fr img.sampleReport").attr("src", "https://tradeshift.com/wp-content/themes/Tradeshift/valueestimator/sampleReport.jpg");

    $( ".smartling-fr .start_here").text("Commencez ici");
    $( ".smartling-fr .Form > .Fieldset:nth-child(1) h2.fieldsetHeader").text("Choix de la devise");
    $( ".smartling-fr .Form > .Fieldset:nth-child(2) h2.fieldsetHeader").text("Intéressé(e) par");
    $( ".smartling-fr .Form > .Fieldset:nth-child(3) h2.fieldsetHeader").text("Fournisseurs et recrutement");
    $( ".smartling-fr .Form > div > .Fieldset:nth-child(1) h2.fieldsetHeader").text("Dépenses");
    $( ".smartling-fr .Form > div > .Fieldset:nth-child(2) h2.fieldsetHeader").text("Transactions");
    $( ".smartling-fr .Form > div > .Fieldset:nth-child(3) h2.fieldsetHeader").text("Ressources");
    $(".smartling-fr .solutionAreaAPAutomation").html('<div class="fieldBlock"><label><input type="checkbox" name="solutionAreaAPAutomation" value="1" checked>Automation AP</label></div>');
    $(".smartling-fr .solutionAreaSupplierManagement").html('<div class="fieldBlock"><label><input type="checkbox" name="solutionAreaSupplierManagement" value="1" checked>Gestion fournisseurs</label></div>');
    //
    $(".smartling-fr .numberOfSuppliers .fieldLabel").text("Nombre de fournisseurs");
    $(".smartling-fr .supplierOnboardingRate .fieldLabel").text("Taux de recrutement");
    // $(".smartling-fr .supplierOnboardingRate .fieldBlock").html('<div class="fieldBlock"><div><div class="fieldLabel">Taux de recrutement</div><label><input type="radio" name="supplierOnboardingRate" value="rateStandart"><!-- react-text: 61 -->Standard<!-- /react-text --></label><label><input type="radio" name="supplierOnboardingRate" value="rateBestInClass">Best-in-Class</label></div></div>');
    $(".smartling-fr .percentageOfTotalSpend .fieldLabel").text("Votre % de dépenses indirectes");
    $(".smartling-fr .numberOfInvoices .fieldLabel").text("Nombre total de factures");
    $(".smartling-fr .numberOfPurchaseOrders .fieldLabel").text("Nombre total de Bons de commande");
    $(".smartling-fr .numberOfAPStaff .fieldLabel").text("Effectifs total AP (ETP)");
    $(".smartling-fr .appStaffHourlyRate .fieldLabel").text("Taux horaire moyen");
    $(".smartling-fr .numberOfProcurementStaff .fieldLabel").text("Effectif total des Achats (ETP)");
    $(".smartling-fr .procurementStaffHourlyRate .fieldLabel").text("Taux horaire moyen");
    $(".smartling-fr .submitButtonParent .submit").text("Envoyer");
    $(".smartling-fr .footNote").text("Les références utilisées dans cet outil proviennent du Hackett Group et de Ardent Partners");
    // Popups
    $(".smartling-fr .numberOfSuppliers .popup .header + p").text("Saisir le nombre total de fournisseur de votre société");
    $(".smartling-fr .supplierOnboardingRate .popup .header + p").html("<p>Les taux d'adoption impactent le ROI.<br> La différence entre 'standard' (plus faible) et 'Best in class' (supérieur) est:<ul><li><span>La qualité des données fournisseur</span></li><li><span>L'adhésion des intervenants et le soutien de la direction</span></li><li><span>Support technique</span></li></ul></p>");
    $(".smartling-fr .spendType .popup .header + p").text("Sélectionner l'une ou l'autre option et utiliser le curseur pour les proportions");
    $(".smartling-fr .percentageOfTotalSpend .popup .header + p").text("Les dépenses indirectes représentent habituellement 20 à 30% des dépenses totales selon votre secteur d'activité.");
    $(".smartling-fr .numberOfInvoices .popup .header + p").text("Saisir le nombre total de factures de votre société sur 1 an");
    $(".smartling-fr .numberOfPurchaseOrders .popup .header + p").text("Saisir le nombre total de Bons de Commande signés sur 1 an");
    $(".smartling-fr .numberOfAPStaff .popup .header + p").text("Saisir le nombre total d'employés de l'équipe AP ou ETP (Eq.Temps plein)");
    $(".smartling-fr .appStaffHourlyRate .popup .header + p").text("Saisir le salaire horaire moyen d'un employé du service AP, le curseur montre un salaire par default.");
    $(".smartling-fr .numberOfProcurementStaff .popup .header + p").text("Saisir le nombre total de d'opérationnels au service achat ou ETP");
    $(".smartling-fr .procurementStaffHourlyRate .popup .header + p").text("Saisir le salaire horaire moyen d'un employé du service Achats, le curseur montre un salaire par default.");
    console.log("translation completed.");
  }, 500);

  // Modal
  $(".submit").click(function() {
    setTimeout(function() {
      $(".smartling-fr .ModalDialog .header h3").text("Vous y êtes presque");
      $(".smartling-fr .ModalDialog .header h4").text("Nous avons besoin de quelques informations");
      console.log("Form header translated!");
    }, 100);
  });



  // German
  setTimeout(function() {
    // Free Sample Report
    $(".smartling-de .SampleResults h2").text("Kostenloser Musterbericht");
    // Start here
    $(".smartling-de .start_here").text("HIER BEGINNEN");
    // Choose Your Currency
    $( ".smartling-de .Form > .Fieldset:nth-child(1) h2.fieldsetHeader").text("Wählen Sie Ihre Währung");
    // Solution Area
    $( ".smartling-de .Form > .Fieldset:nth-child(2) h2.fieldsetHeader").text("Lösungsbereich");
    // Suppliers & Onboarding
    $( ".smartling-de .Form > .Fieldset:nth-child(3) h2.fieldsetHeader").text("Lieferanten & Einbindung");
    // spends
    $( ".smartling-de .Form > div > .Fieldset:nth-child(1) h2.fieldsetHeader").text("Ausgaben");
    // Transations
    $( ".smartling-de .Form > div > .Fieldset:nth-child(2) h2.fieldsetHeader").text("Transaktionen");
    // Resources
    $( ".smartling-de .Form > div > .Fieldset:nth-child(3) h2.fieldsetHeader").text("Ressourcen");

    // AP Automation
    $(".smartling-de .solutionAreaAPAutomation").html('<div class="fieldBlock"><label><input type="checkbox" name="solutionAreaAPAutomation" value="1" checked>AP-Automatisierung</label></div>');

    // $(".smartling-de .solutionAreaSupplierManagement").html('<div class="fieldBlock"><label><input type="checkbox" name="solutionAreaSupplierManagement" value="1" checked>Gestion fournisseurs</label></div>');
    //
    // $(".smartling-de .numberOfSuppliers .fieldLabel").text("Anzahl Lieferanten");
    // Supplier Onboarding Rate
    $(".smartling-de .supplierOnboardingRate .fieldLabel").text("Lieferanteneinbindungs-Rate");
    // Best in class
    $('.smartling-de .supplierOnboardingRate label:nth-child(3)').html('<input type="radio" name="supplierOnboardingRate" value="rateBestInClass">Klassenbester');
    // Select
    $('.smartling-de .spendType option:first-of-type').text("Auswählen");
    // Indirect Spend
    $('.smartling-de .spendType option:nth-of-type(2)').text("Indirekte Ausgaben");
    // Total spend
    $('.smartling-de .spendType option:last-of-type').text("Gesamtausgaben");
    // What % of total spend is indirect spend?
    $(".smartling-de .percentageOfTotalSpend .fieldLabel").text("Wie viel Prozent der Gesamtausgaben werden indirekt ausgegeben?"); 
    // Total Number of Invoices
    $(".smartling-de .numberOfInvoices .fieldLabel").text("Gesamtanzahl an Rechnungen");
    // Total Number of Purchase Orders
    $(".smartling-de .numberOfPurchaseOrders .fieldLabel").text("Gesamtanzahl an Bestellungen");
    // Total Number of AP Staff (FTEs)
    $(".smartling-de .numberOfAPStaff .fieldLabel").text("AP-Mitarbeiter insgesamt (Vollzeitstellen)");
    // AP Estimated Hourly Rate
    $(".smartling-de .appStaffHourlyRate .fieldLabel").text("Für AP geschätzter Stundensatz");
    // Total Procurement Staff (FTEs)
    $(".smartling-de .numberOfProcurementStaff .fieldLabel").text("Beschaffungspersonal insgesamt (Vollzeitstellen)");
    // Procurement Estimated Hourly Rate
    $(".smartling-de .procurementStaffHourlyRate .fieldLabel").text("Für Beschaffung geschätzter Stundensatz");
    // Submit
    $(".smartling-de .submitButtonParent .submit").text("Absenden");

    // Benchmark information used in this tool comes from The Hackett Group and Ardent Partners
    $(".smartling-de .footNote").text("Benchmark-Informationen, die in diesem Tool verwendet werden, stammen von The Hackett Group und Ardent Partners");

    


    // Popups
    // $(".smartling-de .numberOfSuppliers .popup .header + p").text("Saisir le nombre total de fournisseur de votre société");

    // $(".smartling-de .supplierOnboardingRate .popup .header + p").html("<p>Les taux d'adoption impactent le ROI.<br> La différence entre 'standard' (plus faible) et 'Best in class' (supérieur) est:<ul><li><span>La qualité des données fournisseur</span></li><li><span>L'adhésion des intervenants et le soutien de la direction</span></li><li><span>Support technique</span></li></ul></p>");

    // $(".smartling-de .spendType .popup .header + p").text("Sélectionner l'une ou l'autre option et utiliser le curseur pour les proportions");
    // $(".smartling-de .percentageOfTotalSpend .popup .header + p").text("Les dépenses indirectes représentent habituellement 20 à 30% des dépenses totales selon votre secteur d'activité.");

    // $(".smartling-de .numberOfInvoices .popup .header + p").text("Saisir le nombre total de factures de votre société sur 1 an");

    // $(".smartling-de .numberOfPurchaseOrders .popup .header + p").text("Saisir le nombre total de Bons de Commande signés sur 1 an");

    // $(".smartling-de .numberOfAPStaff .popup .header + p").text("Saisir le nombre total d'employés de l'équipe AP ou ETP (Eq.Temps plein)");

    // $(".smartling-de .appStaffHourlyRate .popup .header + p").text("Saisir le salaire horaire moyen d'un employé du service AP, le curseur montre un salaire par default.");

    // $(".smartling-de .numberOfProcurementStaff .popup .header + p").text("Saisir le nombre total de d'opérationnels au service achat ou ETP");

    // $(".smartling-de .procurementStaffHourlyRate .popup .header + p").text("Saisir le salaire horaire moyen d'un employé du service Achats, le curseur montre un salaire par default.");

    console.log("translation completed.");
  }, 500);

  // Modal
  // $(".submit").click(function() {
  //   setTimeout(function() {
  //     $(".smartling-fr .ModalDialog .header h3").text("Vous y êtes presque");
  //     $(".smartling-fr .ModalDialog .header h4").text("Nous avons besoin de quelques informations");
  //     console.log("Form header translated!");
  //   }, 100);
  // });


});