<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Users_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("users");
		$this->Templates = $this->core("Templates");
		$this->Templates->theme();
	}
	
	public function index()
	{ 
		echo "Hello World";
	}

	public function profile()
	{
		if (POST("complete")) {
			$this->Users_Model = $this->model("Users_Model");
		
			$this->Users_Model->completeProfile();
		} else {

		}
	}
}
