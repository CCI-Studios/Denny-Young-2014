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
	'uri'=> 'livedrupal.dennyyoung.ca',
	'root' => '/home/denny/subdomains/livedrupal/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'denny',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=> '-p 37241'
);

