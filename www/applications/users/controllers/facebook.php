<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Facebook_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("users");
		$this->Templates = $this->core("Templates");
		$this->Templates->theme();

		//$this->Users_Model = $this->model("Users_Model");
	}
	
	public function index()
	{ 
		echo "Hello World from Facebook controller";
	}

	public function display($message = "Hello World from Display Method")
	{
		$this->title("You're on Display method");

		$vars["message"] = $message;
		$vars["view"] = $this->view("display", true);

		$this->render("content", $vars);

		// $this->view("display", $vars);
	}

	public function test($param1 = "Hola", $param2 = "Adios")
	{
		print "New dispatcher it's works fine: $param1, $param2";
	}

	public function show($message)
	{
		$this->title("ZanPHP");
		
		$vars["message"] = $message;
		$vars["view"] = $this->view("show", true);

		$this->render("content", $vars);		
	}
}
