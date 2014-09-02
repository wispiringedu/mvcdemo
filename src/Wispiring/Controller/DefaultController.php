<?php

namespace Wispiring\Controller;

use Wispiring\Core\AbstractController;
use Wispiring\Core\Utils;


class DefaultController extends AbstractController
{
    public function indexAction()
    {

    	$config = Utils::getConfigInstance();


    	$config = $config->getValues();

    	var_dump($config);



       $this->assign('name', 'TEst name');
       $this->display('index.tpl');
    }
}