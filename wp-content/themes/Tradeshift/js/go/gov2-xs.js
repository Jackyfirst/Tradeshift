// TS Gov2 JS

// Marketo Forms - Utility
//  Filter forms for business address only
(function (){
  // Please include the email domains you would like to block in this list
  var invalidDomains = ["@gmail.","@yahoo.","@hotmail.","@live.","@aol.","@outlook."];

  // Assign the email from the form to a variable
  function isEmailGood(email) {
    for(var i=0; i < invalidDomains.length; i++) {
      var domain = invalidDomains[i];
      if (email.indexOf(domain) != -1) {
        return false;
      }
    }
    return true;
  };
  // Grab the input from Mkto field and check for validity
  MktoForms2.whenReady(function (form){
    form.onValidate(function(){
      var email = form.vals().Email.toLowerCase();
      if(email){
        if(!isEmailGood(email)) {
          form.submitable(false);
          var emailElem = form.getFormElem().find("#Email");
          form.showErrorMessage("Must be business email", emailElem);
        }else{
          form.submitable(true);
        }
      }
    });
  });
})();
