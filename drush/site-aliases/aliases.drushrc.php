<?php
/**
 * @file
 * Drush Aliases for Example.com.
 */

$aliases['local'] = array(
  'root' => '/var/www/drupal/web',
  'uri' => 'remotesitename.local',
);

$aliases['remote'] = array(
  'root' => '/var/www/html/remotesitename/web',
  'uri' => 'http://remotesitename.discoveryspace.ca',
  'remote-host' => 'remotesitename.discoveryspace.ca',
  'remote-user' => 'rdrew',
  'ssh-options' => "-p 22"
);
?>
