// // Grab the UTM parameters from the URL
// // stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
// function getParameterByName(name) {
//     name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
//     var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
//         results = regex.exec(location.search);
//     return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
// }

// // Inject UTM parameters into a hidden form field
// $(document).ready(function () {
//     function addFormElem(paramName, fieldName) {
//       var paramValue = getParameterByName(paramName);
//       var $utmEl = $("<input type='hidden' name='" + fieldName + "' value='" + paramValue + "'>");
//       if (paramValue != "") {
//         $("#smbForm, #smbFormModal").prepend($utmEl);
//       }
//     }

//     // Method provided by Terminus
//     // http://www.terminusapp.com/blog/bet-you-havent-used-utm-parameters-like-this/
//     // Use Google UTM Generator to test :)  |  https://support.google.com/analytics/answer/1033867?hl=en
//     var utmParams = {
//       "utm_source"   : "utm_source",  // Change this value (right side), based on the name of your input field to properly post the parameters
//       "utm_medium"   : "utm_medium",
//       "utm_campaign" : "utm_campaign",
//       "utm_content"  : "utm_content",
//       "utm_term"     : "utm_term"
//     };

//     for (var param in utmParams) {
//       addFormElem(param, utmParams[param]);
//     }
// });

// // Inject UTM parameters into URL
// $(document).ready(function () {
//     function addFormElem(paramName, fieldName) {
//       var paramValue = getParameterByName(paramName);
//       var $utmEl = $("<input type='hidden' name='" + fieldName + "' value='" + paramValue + "'>");
//       if (paramValue != "") {
//         $("#smbForm, #smbFormModal").prepend($utmEl);
//       }
//     }

//     // Method provided by Terminus
//     // http://www.terminusapp.com/blog/bet-you-havent-used-utm-parameters-like-this/
//     // Use Google UTM Generator to test :)  |  https://support.google.com/analytics/answer/1033867?hl=en
//     var utmParams = {
//       "utm_source"   : "utm_source",  // Change this value (right side), based on the name of your input field to properly post the parameters
//       "utm_medium"   : "utm_medium",
//       "utm_campaign" : "utm_campaign",
//       "utm_content"  : "utm_content",
//       "utm_term"     : "utm_term"
//     };

//     for (var param in utmParams) {
//       addFormElem(param, utmParams[param]);
//     }
// });