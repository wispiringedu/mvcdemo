<?php

namespace Wispiring\Core\Component;

use Wispiring\Core\Component\Database\Mysql\Mysql;

class AbstractModel
{
	protected $dbHandle = null;
	public function __construct()
	{
		$this->dbHandle = new Mysql();
	}
}