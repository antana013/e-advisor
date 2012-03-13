<?php
	class Database
	{
		private $con;
		
		function __construct()
		{
			$userDb = "root";
			$passDb = "root";
			$hostDb = "localhost";
			$dbName = "e-advisor";
			
			$this->con = mysql_connect($hostDb, $userDb, $passDb) or die("Error: " . mysql_error());
			mysql_select_db($dbName, $this->con) or die("Error: " . mysql_error());
			mysql_query("SET NAMES UTF8");
		}
		
		function disconnect()
		{
			mysql_close($this->con);
		}
	}
?>