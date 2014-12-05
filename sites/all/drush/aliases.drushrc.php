<?php

$aliases['dev'] = array(
	'uri'=> 'example.com',
	'root' => '/home/denny/subdomains/dev/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'denny',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=> '-p 37241'
);


$aliases['live_drupal'] = array(
	'uri'=> 'example.com',
	'root' => '/home/denny/subdomains/live_drupal/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'denny',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=> '-p 37241'
);

