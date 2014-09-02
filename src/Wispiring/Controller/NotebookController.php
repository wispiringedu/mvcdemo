<?php

namespace Wispiring\Controller;

use Wispiring\Core\AbstractController;

class NotebookController extends AbstractController
{
    public function listAction()
    {

        $this->tpl->assign('result', $this->getModel('notebook')->getAll());
        $this->tpl->assign('name', 'XXXXX');
        $this->tpl->display('index.tpl');
    }

    public function viewAction()
    {
        echo "view";
    }

    public function addAction()
    {
        echo "vadddiew";
    }

    public function editAction()
    {
        echo "EDITview";
    }

    public function saveAction()
    {

    }
}
