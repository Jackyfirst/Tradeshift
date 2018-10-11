// JS file for Pages with Marketo Form
// Deregistered when there is no Marketo Form in a page


// Prevents Marketo Form to submit a non-business e-mail
// ------------------------------------------------------

(function (){
  // Please include the email domains you would like to block in this list
  var invalidDomains = ["@gmail.","@yahoo.","@hotmail.","@live.","@aol.","@outlook.","@msn."];

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
  
  function isEmailGood(email) {
    for(var i=0; i < invalidDomains.length; i++) {
      var domain = invalidDomains[i];
      if (email.indexOf(domain) != -1) {
        return false;
      }
    }
    return true;
  }

})();

// SameEmail for Footer into Marketo Form
// -------------------------------------------

function sameEmail() {
    var gsEmail = document.getElementById('e-mail').value;
    document.getElementById('Email').value = gsEmail;
}
window.onload = sameEmail;

