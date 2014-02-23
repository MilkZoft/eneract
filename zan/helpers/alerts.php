<?php
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

if (!function_exists("getAlert")) {
	function getAlert($message, $type = "error", $URL = null)
	{
		if (!is_null($URL)) {
			$message = a($message, encode($URL), true);
		}
		
		if ($type === "error") {
			return '<div id="alert-message" class="alert alert-warning">
						<a class="close" data-dismiss="alert">×</a> 
						<h4 class="alert-heading">Error!</h4>  
						'. __($message) .'
					</div>';
		} elseif ($type === "success") {
			unset($_POST);
			return '<div id="alert-message" class="alert alert-success">
						<a class="close" data-dismiss="alert">×</a> 
						<h4 class="alert-heading">Success!</h4>  
						'. __($message) .'
					</div>';
		} elseif ($type === "warning") {
			return '<div id="alert-message" class="alert alert-block alert-warning">'. __($message) .'</div>';
		} elseif ($type === "notice") {
			return '<div id="alert-message" class="alert alert-block alert-info">'. __($message) .'</div>';
		}
	}
}

if (!function_exists("showAlert")) {
	function showAlert($message, $URL = false)
	{
		echo '<script>alert("'. $message .'");';
		
		if ($URL) {
			echo 'window.location.href="'. $URL .'";';			
		}
		
		echo '</script>';
		exit();
	}
}