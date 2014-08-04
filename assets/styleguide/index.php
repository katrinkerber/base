<!DOCTYPE html>
<!--[if lt IE 7 ]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>     <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>     <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>     <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"><!--<![endif]-->

<meta charset="UTF-8" />

<title>Style Guide SITE NAME</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- link to the site's main CSS here -->
<link rel="stylesheet" href="/assets/css/styles.min.css">
<link rel="stylesheet" href="/styleguide/prism/prism.css" />
<link rel="stylesheet" href="/styleguide/styleguide.css">

<!-- favicon -->
<link rel="shortcut icon" sizes="16x16 24x24 32x32 64x64" href="/favicon.ico">
<body>
<header role="banner">
  <h1>Site title</h1>
  <h2>Style Guide</h2>
  <nav>
    <ul>
      <li><a href="#notes">Notes</a></li>
      <li><a href="#colours">Colours</a></li>
      <li><a href="#typography">Typography</a></li>
  </nav>
</header>
<div role="main" class="page">
  <?php
    include 'includes/notes.html';
    include 'includes/colours.html';
    include 'includes/typography.html';
  ?>
</div>
<!-- /page -->

<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Styleguide specific -->
<script src="/styleguide/prism/prism.js"></script>
<!-- tabs -->
<script type="text/javascript">
  $(document).ready(function() {
    // tabs
    var $sections = $('.page').find('section.tab-content');
    var $links    = $('nav').find('a');

    if(window.location.hash) {
      $sections.hide();
      $('.page').find('section.tab-content' + window.location.hash).show();
      $('nav').find('a[href="' + window.location.hash + '"]').addClass('current');
    } else {
      $sections.hide();
      $('.page').find('section.tab-content#notes').show();
      $('nav li:first-child a').addClass('current');
    }

    $links.click(function(){
      var $this  = $(this);
      var target = $(this).attr('href');
      window.location.hash = target;
      $links.not(this).removeClass('current');
      $sections.hide();
      $this.addClass('current');
      $('section' +target).fadeIn(500);
      return false;
    });
  });
</script>
</body>
</html>
