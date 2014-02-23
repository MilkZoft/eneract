<?php
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Users_Model extends ZP_Load
{
	public function __construct()
	{
		$this->Db = $this->db();
		
		$this->table = "users";
		$this->fields = "userId, username, pwd, email";
	}

	public function checkUserService($id, $service = "Facebook")
	{
		if ($service == "Facebook") {
			$serviceID = 'facebookId';
		} else {
			$serviceID = 'twitterId';
		}

		$fields = "userId, facebookId, facebookImageUrl, email, phone";
	
		return $this->Db->query("SELECT $fields FROM ". DB_PREFIX ."users WHERE $serviceID = '$id'");
	}
}