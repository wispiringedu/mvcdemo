<?php
namespace Wispiring\Core;

use Wispiring\Core\Template\Template; 
use Wispiring\Core\Componet\Database\Mysql\Mysql;
use Wispiring\Core\Utils;

use Smarty;

abstract class AbstractController
{

    protected $tpl = null;


    public function __construct()
    {

        $config = Utils::getConfigInstance();
        $smartyConfig = $config->getValue('template');
        $smarty = new Smarty();
        $smarty->setTemplateDir($smartyConfig['template_path']);
        $smarty->setCompileDir($smartyConfig['templates_c_path']);
        // $smarty->setConfigDir('configs/');
        $smarty->setCacheDir($smartyConfig['catch_path']);

        $this->tpl = $smarty;
        



        //$this->mysql = new Mysql();
    }   

    public function getValue($name, $type = 'string')
    {
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }
    }

    public function postValue($name)
    {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        }
    }

    public function assign($key, $value)
    {
        $this->tpl->assign($key, $value);
    }

    public function display($template, $cache_id = null, $compile_id = null)
    {
        $this->tpl->display($template, $cache_id = null, $compile_id = null);
    }


    public function getModel($modelname)
    {
        $modelClass = 'Wispiring\\Model\\' . ucfirst($modelname);

        return new $modelClass();
    }


}
