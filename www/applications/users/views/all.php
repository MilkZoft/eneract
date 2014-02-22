<?php
	if (isset($users)) {
		foreach ($users as $user) {
		?>
			<p><?php echo __("Username for the account"); ?>: <?php echo $user["username"]; ?></p>
			<p><?php echo __("Email"); ?>: <?php echo $user["email"]; ?></p>
		<?php
		}
	}