var _gaq = _gaq || [];
  // Enhanced Link Attribution - https://support.google.com/analytics/answer/2558867?hl=en&utm_id=ad
  var pluginUrl = 
   '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);

  _gaq.push(['_setAccount', 'UA-XXXXX-X']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
