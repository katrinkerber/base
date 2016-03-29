<?php

// Path to your craft/ folder
$craftPath = './craft';

// templates folder
define('CRAFT_TEMPLATES_PATH', './assets/templates/');

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
  exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
