<?php
namespace Wispiring\Core\Component\Config;

class Config
{
	private static $configInstance;
	public static function getInstance()
	{
		if (self::$configInstance) {
            return self::$configInstance;
        }
        return self::$configInstance = new Config();
	}

	private $values = array();
	public function setValue($key, $value)
	{
		$this->values[$key] = $value;
		return $this;
	}

	public function setValues($values)
	{
		$this->values = $values;
		return $this;
	}

	public function getValues()
	{
		return $this->values;
	}

	public function getValue($key)
	{
		if (isset($this->values[$key])) {
			return $this->values[$key];
		}
		throw new \Exception(sprintf('Config with key "%s" not found', $key));
	}

	public function loadConfigFromArray($config)
	{
		$this->setValues($config);
		//$this->values = $config;
	}

	public function loadConfigFromXml($filename)
	{
		if (file_exists($filename)) {
			$xml = simplexml_load_file($filename);// SimpleXmlObject

			$this->setValue('dbuser1', (string) $xml->dbuser1);

		}
	}
}