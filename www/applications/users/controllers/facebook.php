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

		$this->Users_Model = $this->model("Users_Model");
	}
	//cujo9681
	public function index()
	{
		$this->helper(array("alerts", "facebook", "forms", "html"));

		$code = REQUEST("code");

		if (!$code) {
			getFacebookLogin();
		} else {
			if (isConnectedToFacebook()) {
				$facebookUser = getFacebookUser($code);
				
		     	if ($facebookUser) {
		     		$data = $this->Users_Model->checkUserService($facebookUser["serviceID"]);

		     		if ($data) {
		     			SESSION("ZanUserId", $data[0]["facebookId"]);
						SESSION("ZanUser", $data[0]["username"]);
						SESSION("ZanName", $data[0]["name"]);
						SESSION("ZanAvatar", $data[0]["avatar"]);
						SESSION("ZanEmail", $data[0]["email"]);

						$this->Users_Model->updateLastLogin($data[0]["facebookId"]);

						redirect();
		     		} else {
		     			$vars = array(
		     				"service" 	=> "facebook",
		     				"serviceID" => $facebookUser["serviceID"],
		     				"username" 	=> $facebookUser["username"],
		     				"name" 		=> $facebookUser["name"],
		     				"email" 	=> $facebookUser["email"],
		     				"birthday" 	=> $facebookUser["birthday"],
		     				"avatar" 	=> $facebookUser["avatar"]
		     			);
		     			
		     			SESSION("ZanUserId", $facebookUser["serviceID"]);
						SESSION("ZanUser", $facebookUser["username"]);
						SESSION("ZanName", $facebookUser["name"]);
						SESSION("ZanAvatar", $facebookUser["avatar"]);
						SESSION("ZanEmail", $facebookUser["email"]);

						SESSION("socialUser", $vars);

		     			$vars["view"] = $this->view("profile", true);

		     			$this->render("content", $vars);
		     		}
		     	} else {
		     		showAlert(__("An unknown problem occurred, try to login again"), path());
		     	} 
		    } else {
		     	showAlert(__("Invalid Token, try to login again"), path());
			}
		}
	}
}