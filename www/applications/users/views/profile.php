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
	<form action="<?php echo path("users/profile"); ?>" method="post" class="form-signin">
		<h2 class="form-signin-heading"><?php echo img($avatar); ?> <strong><?php echo __("Hi"); ?></strong>, <?php echo $name; ?>!</h2>

		<p>
			<?php echo __("Email"); ?>: 
			<input class="form-control" required name="email" type="email" value="<?php echo $email; ?>" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" />
		</p>

		<p>
			<?php echo __("Phone"); ?>: 
			<input class="form-control" placeholder="<?php echo __("XXX-XXX-XXXX"); ?>" name="phone" type="tel" />
		</p>
		<h4>Household Information</h4>
		<div class="form-group">
    		<label for="houseNum">Number in household</label>
    		<input type="number" class="form-control col-xs-3" id="houseNum" placeholder="Enter a number">
 		</div>
 		<div class="form-group">
    		<label for="houseSize">Size of the house (in sq. ft)</label>
    		<input type="number" class="form-control col-xs-3" id="houseSize" placeholder="Enter a number">
 		</div>
 		<select class="form-control">
			<option>United States</option>
			<option>Canada</option>
			<option>Mexico</option>
			<option>Spain</option>
		</select>
 		<div class="form-group">
    		<label for="zipCode">ZipCode</label>
    		<input type="number" class="form-control col-xs-3" id="zipCode" placeholder="Zip Code">
 		</div>
 		<br>
		<h4>Car 1</h4>
		<div class="radio">
			<label>
				<input type="radio" name="car1radios" checked> Gas
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="car1radios" checked> Hybrid
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="car1radios" checked> Electric
			</label>
		</div>
		<br>
		<h4>Car 2</h4>
		<div class="radio">
			<label>
				<input type="radio" name="car2radios" checked> Gas
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="car2radios" checked> Hybrid
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="car2radios" checked> Electric
			</label>
		</div>
		<br>
		<h4>Transportation to Work</h4>
		<label>
      		<input type="checkbox"> Car
      	</label>
      	<label>
			<input type="checkbox"> Carpool
		</label>
      	<label>
			<input type="checkbox"> Bus
		</label>
      	<label>
			<input type="checkbox"> Bike
		</label>
		<p>
			<input  class="btn btn-lg btn-primary btn-block" name="complete" type="submit" class="btn" value="<?php echo __("Complete Profile"); ?>" />
		</p>

		<input name="username" type="hidden" value="<?php echo $username; ?>" />
		<input name="name" type="hidden" value="<?php echo $name; ?>" />
		<input name="avatar" type="hidden" value="<?php echo $avatar; ?>" />
		<input name="facebookId" type="hidden" value="<?php echo $serviceID; ?>" />
	</form>