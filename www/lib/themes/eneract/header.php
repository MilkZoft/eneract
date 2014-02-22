<!DOCTYPE html>
<html lang="<?php echo _get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $this->getTitle(); ?></title>
		
		<link href="<?php echo path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php echo $this->themePath; ?>/css/style.css" rel="stylesheet">
		
		<?php echo $this->getCSS(); ?>
	</head>

	<body>
		<h1>This is the header</h1>