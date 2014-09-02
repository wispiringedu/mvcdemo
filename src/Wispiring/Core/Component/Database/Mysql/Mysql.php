<?php
namespace Wispiring\Core\Componet\Database\Mysql\Mysql;

class Mysql extends Database
{
    private $conn;

    public function __construct($hostname, $username, $userpassword, $dbname)
    {
        $this->connect($hostname, $username, $userpassword);
    }

    public function connect($hostname, $username, $userpassword)
    {
        $this->conn = mysql_connect($hostname, $username, $userpassword);
    }

    private $queryRes;
    public function query($sql)
    {
    	$this->queryRes = msyql_query($sql, $this->conn);
    }

    private $resultSet;
    public function fetch($sql)
    {
    	$this->query($sql)
    	
    	while($row = mysql_fetch_array($this->queryRes)) {
    		$this->resultSet[] = $row;
    	}
    }

}