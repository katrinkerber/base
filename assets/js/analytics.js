var _gaq = _gaq || [];
// Enhanced Link Attribution - https://support.google.com/analytics/answer/2558867?hl=en&utm_id=ad
var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
_gaq.push(['_setAccount', 'UA-XXXXX']);
_gaq.push(['_trackPageview']);

(function(d,t){
  var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)
}(document,'script'));
