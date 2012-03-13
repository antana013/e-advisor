<?php
class Permission
{
	public function login($username, $password)
	{
		// paste code connect db in this place
		
		$result = TRUE;
		if ($result) {
			$_SESSION["username"] = "admin";
			$_SESSION["type"] = "1";
		}
	}
	
	public function logout()
	{
		
	}
}
?>