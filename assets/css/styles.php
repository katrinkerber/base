<?php
  require "_scssphp/scss.inc.php";

  $scss = new scssc();
  // $scss->setFormatter("scss_formatter_compressed");

  // paths are relative to location of scss.inc.php
  $dir = "../css/";
  $cacheDir = "../css/_scssphp/cache";

  $server = new scss_server($dir, $cacheDir, $scss);
  $server->serve();
?>
