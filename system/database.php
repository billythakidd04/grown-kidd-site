<?php

	class Database
	{
		public static function &getInstance($name ='default')
		{
			$host = 'localhost';
			$user = 'root';
			$pass = 'DITadmin123';
			$name = 'kidd_blog';

			static $instances;//array of db connections

			if(!isset($instances))
			{
				$instances = array();
			}

			$signature = serialize(array($name));

			if(empty($instances[$signature]))
			{
				$instance = new mysqli($host,$user,$pass,$name);

				if($instance->connect_error)
				{
					die("DB connection failed: ".$instance->connect_error." $host $user $pass $name");
				}

				$instances[$signature] = & $instance;
			}

			return $instances[$signature];
		}
	}
?>
