<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
  '*' => array(
    'tablePrefix' => 'craft',
  ),

  // local
  '.dev' => array(
    'database' => '',
    'server' => '',
    'user' => '',
    'password' => ''
  ),

  // staging
  '.co.uk' => array(
    'database' => '',
    'server' => '',
    'user' => '',
    'password' => ''
  ),

   // production
  '.com' => array(
    'database' => '',
    'server' => '',
    'user' => '',
    'password' => ''
  )
);

