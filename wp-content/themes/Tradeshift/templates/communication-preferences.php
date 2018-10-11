<?php
/*
Template Name: Communication Preferences
Description: Redirect to the marketo language preferences landing page based on language code in the hostname, e.g.,
    fr.tradeshift.com/communication-preferences -> Unfortunately it seems I am not able to do a redirect based on
    hostname anywhere in our stack. I tried: updating the .htaccess (they are not fully evaluated by wpengine), adding
    a redirect rule to the wpengine dashboard, and looking at the smartling dashboard but it doesn't seem to
    support that.
*/
?>

<script>
  var match = location.hostname.match(/^(.{2})\./);
  if (match) {
    var countryCode = '-' + match[1];
  } else {
    countryCode =  '';
  }
  location = 'http://marketing.tradeshift.com/communication-preferences' + countryCode + '.html';
</script>
