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

	public function updateLastLogin($facebookId)
	{
		$date = date("Y-m-d H:m:s", time());

		$this->Db->query("UPDATE nw_users SET lastLogin = '$date' WHERE facebookId = '$facebookId'");
	}

	public function completeProfile()
	{
		$this->helper("alerts");
		
		$data = array(
			"facebookId" => POST("facebookId"),
			"username" => POST("username"),
			"avatar" => POST("avatar"),
			"name" => POST("name"),
			"email" => POST("email"),
			"phone" => POST("phone"),
			"createAt" => date("Y-m-d H:m:s", time()),
			"lastLogin" => date("Y-m-d H:m:s", time())
		);

		$this->Db->insert($this->table, $data);

		showAlert(__("Welcome to Eneract"), path());
	}

	public function checkUserService($id, $service = "Facebook")
	{
		if ($service == "Facebook") {
			$serviceID = 'facebookId';
		} else {
			$serviceID = 'twitterId';
		}

		$fields = "userId, facebookId, username, name, avatar, email, phone";
		
		return $this->Db->query("SELECT $fields FROM ". DB_PREFIX ."users WHERE $serviceID = '$id'");
	}
}