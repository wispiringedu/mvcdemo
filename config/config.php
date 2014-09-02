<?php

/*
$smarty->setTemplateDir(SYSYTEM_ROOT . '/templates/default');
        $smarty->setCompileDir(SYSYTEM_ROOT . '/caches/templates_c/');
        // $smarty->setConfigDir('configs/');
        $smarty->setCacheDir(SYSYTEM_ROOT . '/caches/cache/');
        */

return array(
	'debug' => true,
	'dbname' => 'notebook',
	'dbuser' => 'root',
	'dbpasswd' => '123456',
	'dbhost' => 'localhost',



	
	'template' => array(
		'template_path' => SYSYTEM_ROOT . '/templates/default',
		'templates_c_path' => SYSYTEM_ROOT . '/caches/templates_c/',
		'catch_path' => SYSYTEM_ROOT . '/caches/cache/'
	)

);