<?php
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Contact_Model extends ZP_Load
{
	public function __construct()
	{
		$this->Db = $this->db();
		
		$this->table = "feedback";
		$this->fields = "name, email, message";
	}

	public function getContact($contactID)
	{
		return $this->Db->find($contactID, $this->table, $this->fields);
	}

	public function saveMessage() 
	{
		$this->helper("alerts");

		if (!POST("name")) {
			return array('error' => getAlert(__('You need to write your name.')));
		} elseif (!POST("email")) {
			return array('error' => getAlert(__('You need to write your email.')));
		} elseif (!POST("message")) {
			return array('error' => getAlert(__('You need to write a message.')));
		}

		$data = array(
			"name" => POST("name"),
			"email" => POST("email"),
			"message" => POST("message")
		);

		$this->Db->insert($this->table, $data);

		return array('success' => getAlert(__('Submission successful!')));
	}
}