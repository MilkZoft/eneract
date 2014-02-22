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

	public function getAllUsers()
	{
		return $this->Db->findAll($this->table, $this->fields);
	}
}