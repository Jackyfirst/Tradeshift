<?php
/**
 * This component serves the SmartForm product from ReachForce
 *
 * @package wpbc_s
 */
?>
<!-- SmartForms Config BEGIN -->
<script language="javascript" type="text/javascript">var sfjq$ = jQuery.noConflict(true);</script>
<script language="javascript" type="text/javascript" src="//d12ulf131zb0yj.cloudfront.net/SmartForms3-0/SmartForms.js"></script>
<!-- SmartForms JavaScript -->
<script language="javascript" type="text/javascript">
 var sfcc$ = {};
 sf$.doSetup=false;
 sfjq$(document).ready(function() {
   sf$.token="131711";
   sf$.deployDropDown = true;
   //visibleFields
   sf$.companyNameFieldAlias="Company";
   sf$.confidenceDescFieldAlias="RF_ConfidenceDescription__c";
   sf$.confidenceLevelFieldAlias="RF_ConfidenceLevel__c";
   sf$.emailFieldAlias="Email";
   sf$.firstNameFieldAlias="FirstName";
   sf$.lastNameFieldAlias="LastName";
   sf$.phoneFieldAlias="Phone";

   //siteLevelFields
   sf$.mAnnualRevFieldAlias="RF_SITE_AnnualRev__c";
   sf$.mCompanyNameFieldAlias="RF_SITE_Company__c";
   sf$.mCountryFieldAlias="RF_SITE_Country__c";
   sf$.mEmplyeeCountFieldAlias="RF_SITE_EmployeesTotal__c";
   sf$.mPhoneFieldAlias="RF_SITE_Phone__c";
   sf$.mStateFieldAlias="RF_SITE_State__c";

   //dhqLevelFields
   sf$.dhqAnnualRevFieldAlias="RF_DHQ_AnnualRev__c";
   sf$.dhqCompanyNameFieldAlias="RF_DHQ_Company__c";
   sf$.dhqCountryFieldAlias="RF_DHQ_Country__c";
   sf$.dhqEmplyeeCountFieldAlias="RF_DHQ_EmployeesTotal__c";
   sf$.dhqPhoneFieldAlias="RF_DHQ_Phone__c";
   sf$.dhqStateFieldAlias="RF_DHQ_State__c";

   //ghqLevelFields
   sf$.ghqAnnualRevFieldAlias="RF_GHQ_AnnualRev__c";
   sf$.ghqCompanyNameFieldAlias="RF_GHQ_Company__c";
   sf$.ghqCountryFieldAlias="RF_GHQ_Country__c";
   sf$.ghqEmplyeeCountFieldAlias="RF_GHQ_EmployeesTotal__c";
   sf$.ghqPhoneFieldAlias="RF_GHQ_Phone__c";
   sf$.ghqStateFieldAlias="RF_GHQ_State__c";

   //inferredFields
   sf$.inferredIndustryFieldAlias="RF_inferredIndustry__c";

   sf$.selectListColor1="#FFFFFF"; // Hex color for background of company select list
   sf$.selectListHoverColor="#CCCCCC"; //Hex color for background of company select hover color

   sfcc$.checkFormExist = setInterval(function() {
     if (sfjq$("#" + sf$.companyNameFieldAlias).length) {
       sfcc$.formID=sfjq$("input[name=formid]").val();
       sfcc$.form=MktoForms2.getForm(sfcc$.formID);

       if (typeof Mkto === "object" && typeof Mkto.formSubmit === "function") {
         // Mkto Forms 1.0 submit injection
         sf$.smartFormID="mktForm_" + sfcc$.formID;
         sf$.overrideSubmit=true;
       } else {
         // Mkto Forms 2.0 submit injection
         sf$.smartFormID="mktoForm_" + sfcc$.formID;
         sf$.overrideSubmit=false;
       }

       sf$.assignIDsByName=true;
       sf$.doSetup=true;
       sf$.runSFSetup();

       if (!sf$.overrideSubmit) {
         sfcc$.doAppend=true;
         sfcc$.form=MktoForms2.getForm(sfcc$.formID);
         sfcc$.form.onSubmit(function() {
           if (typeof sf$.forceSelection === "function" && sfcc$.doAppend && sf$.formCheck()) {
             sfcc$.form.submitable(false)
             sfcc$.doAppend = false;
             sf$.forceSelection();
             return false;
           }
           // return true to allow submit when SF submit injection completes - submit request initiated with sf$.doSmartFormSubmit()
           return true;
         });

         // override sf$.doSmartFormSubmit() so that we force an original form submit, not a scripted form.submit()
         sf$.doSmartFormSubmit = function() {
           sfcc$.form.submitable(true);
           sfjq$("#"+sf$.smartFormID+" :submit").removeAttr("disabled").click();
         };
       }
       clearInterval(sfcc$.checkFormExist);
     }
   }, 100);

 });
</script>
<style type="text/css">
 @import url(//fonts.googleapis.com/css?family=Raleway);
 .divDisplayFrame {
   visibility:hidden;
   border-color:#FFFFFF !important;
   border-width:1px !important;
   border-style:outset !important;
   border-radius:3px !important;
   -webkit-border-radius:3px !important;
   -moz-border-radius:3px !important;
   -moz-box-shadow:5px 5px 7px 3px #6B6B6B;
   -webkit-box-shadow:5px 5px 7px 3px #6B6B6B;
   box-shadow:5px 5px 7px 3px #6B6B6B;
   width:400px;
   position:absolute !important;
   background-color:#FFFFFF !important;
   text-align:left;
   font-size:26px;
   padding:5px;
   z-index:1101 !important;
   font-family:"Raleway", Arial, Helvetica, sans-serif !important;
 }
 @media screen and (min-width:404px) {.divDisplayFrame{width:402px !important;}}
 @media screen and (max-width:403px) {.divDisplayFrame{width:318px !important;}}
 .divBlockFrame {
   z-index: 1100 !important;
 }
 .tabCompList {
   border:0;
   margin-bottom:16px;
 }
 .tabCompList hr {
   width:100% !important;
   padding:0px !important;
 }
 .tabCompList caption {
   line-height:95%;
   padding:0;
 }
 .tabCompList h3 {
   padding:20px 0 10px 0;
   font-weight: bold;
   color:#3c3c3c !important;
   border-width:0;
   text-align: center;
 }
 .tabCompList td {
   line-height:115%;
   font-size:14px;
   border-width:0;
 }
 .tabCompTR {}
 .tabCompTD {
   padding:2px 4px 2px 4px;
   border-bottom: 1px solid #CCCCCC !important;
 }
 .tabCompNATR {}
 .tabCompNATD {padding-left:2px;}
 .divCompList {
   font-weight:200 !important;
 }
 .divCompName {color:#15317E !important;}
 .divCompDetails {color:#606060 !important;}
 .divCompNAName {
   color:#000000 !important;
   font-weight:bold;
   font-size:12px;
 }
 .divCompNADetails {
   color:#3c3c3c;
 }
</style>
<!-- SmartForms Config END -->
