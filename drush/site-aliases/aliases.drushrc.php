<?php
/**
 * @file
 * Drush Aliases for Example.com.
 */

$aliases['local'] = array(
  'root' => '/var/www/drupal/web',
  'uri' => '__remotesitename__.local',
);

$aliases['remote'] = array(
  'root' => '/var/www/html/__remotesitename__/web',
  'uri' => 'http://__remotesitename__.discoveryspace.ca',
  'remote-host' => '__remotesitename__.discoveryspace.ca',
  'remote-user' => 'rdrew',
  'ssh-options' => "-p 22"
);
?>
