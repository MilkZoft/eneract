<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Contact_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("contact");

		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Contact_Model = $this->model("Contact_Model");
	}
	
	public function index()
	{ 
		$vars["view"] = $this->view("contact", true);
		
		$this->render("content", $vars);
	}

	public function send()
	{ 
		if (POST("send")) {
			$alert = $this->Contact_Model->saveMessage();
			
			$vars["alert"] = $alert;
			$vars["view"] = $this->view("contact", true);

			$this->render('content', $vars);
		} else {
			$vars["view"] = $this->view("contact", true);
			$this->render("content", $vars);
		}
	}
}
