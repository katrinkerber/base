<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
    'omitScriptNameInUrls' => true,
    'phpMaxMemoryLimit' => '1024M',
    'sendPoweredByHeader' => false,
    'timezone' => 'Europe/London',
    'defaultFilePermissions' => 0744,
    'defaultFolderPermissions' => 0775,
    'convertFilenamesToAscii' => true,
    'limitAutoSlugsToAscii' => true,
    // 'imageDriver' => 'gd',
    'defaultSearchTermOptions' => array(
      'attribute' => 'title',
      'subLeft' => true,
      'subRight' => true,
    ),
    'errorTemplatePrefix' => "pages/",
    'postCpLoginRedirect' => 'entries',
    'preserveImageColorProfiles' => true
  ),
  // local
  '.dev' => array(
    'devMode' => true,
    'enableTemplateCaching' => false,
    'userSessionDuration' => false,
    'siteUrl' => '',
  ),
  // live
  '.com' => array(
    'siteUrl' => ''
  ),
);
