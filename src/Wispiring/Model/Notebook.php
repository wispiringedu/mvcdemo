<?php

namespace Wispiring\Model;

class Notebook extends AbstractModel
{
    private $title;

    private $message;

    private $acthor;


    public function getAll()
    {
    	return $this->dbHandle->fetch("SELECT * FROM notebook");
    }
}
