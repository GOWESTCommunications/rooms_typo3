<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Rooms (& Packages)',
	'description' => 'Plugin lists Rooms and Packages from Kognitiv API',
	'category' => 'frontend',
	'author' => 'Sigfried Arnold',
	'author_email' => 's.arnold@go-west.at',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '9.5.0 - 10.4.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'autoload' => [
		'psr-4' => [
			'GoWest\\RoomsTypo3\\' => 'Classes'
		]
	 ],
);
