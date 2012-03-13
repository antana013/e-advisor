<?php
	require_once "database_class.php";
	require_once "sidebar_class.php";
	require_once "selection_class.php";
	
	class Window
	{
		private $grant;
		private $sidebar;
		private $selection;
		
		function __construct($type)
		{
			$db = new Database();
			$sql = "SELECT * FROM test";
			$result = mysql_query($sql);
			echo "result is ".$result;
			$this->grant = mysql_fetch_array($result);
			echo "this->grant is ".$this->grant["test_id"];
			$row = mysql_fetch_array($result);
			echo "row is ".$row["test_id"];
			$db->disconnect();
		}
		
		function getGrant()
		{
			return $this->grant[1];
		}
	}
?>