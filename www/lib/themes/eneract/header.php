<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Eneract</title>
		<!-- Bootstrap core CSS -->
    	<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
		<link href="<?php echo $this->themePath; ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo $this->themePath; ?>/css/stylish-portfolio.css" rel="stylesheet">

		<?php if (whichApplication() == "users") { ?>
			<link href="<?php echo $this->themePath; ?>/css/forms.css" rel="stylesheet">
    	<?php } ?>
    	
    	<link href="<?php echo $this->themePath; ?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<?php echo $this->getCSS(); ?>

		<style>
		.btn-lg {
			border-radius: 6px;
			font-size: 18px;
			line-height: 1.33;
			padding: 10px 16px;
			width:150px;
		}
		.btn-Facebook {
			background-color: #5784c7;
			border-color: #CCCCCC;
			color: #ffffff;
		}
		.btn-Twitter {
			background-color: #34c3e9;
			border-color: #CCCCCC;
			color: #ffffff;
		}
		.btn-Download {
			background-color: #875bb3;
			border-color: #CCCCCC;
			color: #ffffff;
		}
		.btn {
			-moz-user-select: none;
			background-image: none;
			border: 1px solid rgba(0, 0, 0, 0);
			border-radius: 4px;
			cursor: pointer;
			display: inline-block;
			font-size: 14px;
			font-weight: normal;
			line-height: 1.42857;
			margin-bottom: 0;
			padding: 6px 12px;
			text-align: center;
			vertical-align: middle;
			white-space: nowrap;
		}
		</style>
	</head>

	<body>
