<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Default_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("default");

		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		//$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index()
	{ 
		if (isConnected()) {
			redirect(path("dashboard"));
		}

		$vars["view"] = $this->view("index", true);

		$this->render("content", $vars);
	}

	public function printMessage($message)
	{
		echo "Message: $message";
	}

	public function show($message)
	{
		$this->title("ZanPHP");
		
		$vars["message"] = $message;
		$vars["view"] = $this->view("show", true);

		$this->render("content", $vars);		
	}
}
