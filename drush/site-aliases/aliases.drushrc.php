<?php
/**
 * @file
 * Drush Aliases for Example.com.
 */

$aliases['local'] = array(
  'root' => '/var/www/drupal/web',
  'uri' => 'http://remotesitename.local',
  'remote-host' => 'remotesitename.local',
  'remote-user' => 'vagrant',
  'ssh-options' => '-o PasswordAuthentication=no -i ' . drush_server_home() . '/.vagrant.d/insecure_private_key'
);

$aliases['remote'] = array(
  'root' => '/var/www/html/remotesitename/web',
  'uri' => 'http://remotesitename.discoveryspace.ca',
  'remote-host' => 'remotesitename.discoveryspace.ca',
  'remote-user' => 'rdrew',
  'ssh-options' => "-p 22"
);
?>
