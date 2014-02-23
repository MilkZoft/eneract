<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Dashboard_Controller extends ZP_Load
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

	public function all()
	{
		$this->Users_Model = $this->model("Users_Model");

		$data = $this->Users_Model->getAllUsers();

		if ($data) {
			$vars["users"] = $data;
			$vars["view"] = $this->view("all", true);

			$this->render("content", $vars);
		} else {
			$this->render("error404");
		}
	}
}
