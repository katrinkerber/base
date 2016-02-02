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
  <link rel="stylesheet" href="/styleguide/styleguide.css">
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

    <section class="styleguide__section" id="landing">
      <blockquote>
          <p>Every line of code should appear to be written by a single person, no matter the number of contributors.</p>
      </blockquote>

      <h2>Basic editor preferences</h2>
        <p>Set your editor to the following settings to avoid common code inconsistencies and dirty diffs:</p>
      <ul>
        <li>Use soft-tabs set to <strong>4 spaces</strong>.</li>
        <li>Trim trailing white space on save.</li>
        <li>Set encoding to UTF-8.</li>
        <li>Add new line at end of files.</li>
      </ul>

      <p>If you are using <strong>Sublime Text 2</strong>, have a look at these <a href="https://gist.github.com/katrinkerber/d471b3f995f80f48117c">settings</a>.</p>

      <p>
        <small>This guide was heavily inspired by <a href="http://mdo.github.io/code-guide/">@mdo's Code Guide</a>.</small>
      </p>
    </section>

    <div data-section data-section-title="Coding guidelines">
        <?php
          include 'includes/notes_html.html';
          include 'includes/notes_css.html';
          include 'includes/notes_js.html';
        ?>
    </div>

    <div data-section data-section-title="Base">
        <?php
          include 'includes/colours.html';
          include 'includes/typography.html';
        ?>
    </div>
  </main>
  <!-- /page -->

<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Styleguide specific -->
<script src="/styleguide/prism/styleguide.js"></script>
<script src="/styleguide/prism/prism.js"></script>
</body>
</html>
