<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Reward_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("users");
		$this->Templates = $this->core("Templates");
		$this->Templates->theme();
	}
	
	public function index()
	{ 
		$vars['view'] = $this->view("reward", true);
		$this->render("content", $vars);
	}
}
