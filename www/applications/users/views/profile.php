<?php
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

$socialUser = SESSION("socialUser");
$service    = recoverPOST("service", $socialUser["service"]);
$username   = recoverPOST("username", $socialUser["username"]);
$email      = recoverPOST("email", $socialUser["email"]);
$name       = recoverPOST("name", decode($socialUser["name"]));
$avatar     = recoverPOST("avatar", $socialUser["avatar"]);
$serviceID  = recoverPOST("serviceID", $socialUser["serviceID"]);
?>
<div class="container">
	<form action="<?php path("users/facebook"); ?>" method="post" class="form-signin">
		<h2 class="form-signin-heading"><?php echo img($avatar, array("class" => "dotted")); ?> <strong><?php echo __("Hi"); ?></strong>, <?php echo $name; ?>!</h2>

		<p>
			<?php echo __("Username"); ?>: <input class="form-control" name="username" type="text" value="<?php echo $username; ?>" />
		</p>

		<p>
			<?php echo __("Email"); ?>: 
			<input class="form-control" name="email" type="email" value="<?php echo $email; ?>" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" />
		</p>

		<p>
			<input  class="btn btn-lg btn-primary btn-block" name="complete" type="submit" class="btn" value="<?php echo __("Complete Profile"); ?>" />
		</p>

		<input name="name" type="hidden" value="<?php echo $name; ?>" />
		<input name="avatar" type="hidden" value="<?php echo $avatar; ?>" />
		<input name="facebookId" type="hidden" value="<?php echo $serviceID; ?>" />
	</form>