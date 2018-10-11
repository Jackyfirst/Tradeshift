function setCookie(name, value, days){
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000)); 
    var expires = "; expires=" + date.toGMTString();
    document.cookie = name + "=" + value + expires;
}
function getParam(p){
    var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}
var gclid = getParam('gclid');
var utm_campaign = getParam('utm_campaign');
var utm_medium = getParam('utm_medium');
var utm_source = getParam('utm_source');
if(gclid){
    var gclsrc = getParam('gclsrc');
    if(!gclsrc || gclsrc.indexOf('aw') !== -1){
        setCookie('GCLID', gclid, 30);
    }
}
if(utm_campaign){
    setCookie('UTM_Campaign', utm_campaign, 30);
}
if(utm_medium){
    setCookie('UTM_Medium', utm_medium, 30);
}
if(utm_source){
    setCookie('UTM_Source', utm_source, 30);
}