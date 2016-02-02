<!doctype html>
<!--[if IE 7 ]>     <html class="no-js old-ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>     <html class="no-js old-ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>     <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="UTF-8" />

  <title>Style Guide {SITE NAME}</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="robots" content="noindex, nofollow">

  <link rel="stylesheet" href="/assets/css/styles.min.css">
  <link rel="stylesheet" href="styleguide.css">
  <link rel="stylesheet" href="/assets/libs/prism/prism.css" />
</head>

<body>

  <header role="banner">
    <h1>{SITE NAME}</h1>
    <h2>Style Guide</h2>
    <nav>
      <ul>
        <!-- section links populated via JS -->
      </ul>
    </nav>
  </header>

  <main role="main">

    <div data-section data-section-title="Coding guidelines">
      <?php
        include 'includes/notes/intro.html';
        include 'includes/notes/html.html';
        include 'includes/notes/css.html';
        include 'includes/notes/js.html';
      ?>
    </div>

    <div data-section data-section-title="Base">
      <?php
        include 'includes/base/colours.html';
        include 'includes/base/typography.html';
      ?>
    </div>
  </main>


  <!-- JavaScript -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="/assets/js/libs.min.js"></script>
  <script src="/assets/js/global.min.js"></script>
  <!-- Styleguide specific -->
  <script src="styleguide.js"></script>
  <script src="/assets/libs/prism/prism.js"></script>
</body>
</html>
