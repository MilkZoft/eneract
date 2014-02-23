<!DOCTYPE html>
<html lang="en">

<head>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Eneract</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->themePath; ?>/css/bootstrap.css" rel="stylesheet">
   <!-- Add custom CSS here -->
    <link href="<?php echo $this->themePath; ?>/css/stylish-portfolio.css" rel="stylesheet">
    <link href="<?php echo $this->themePath; ?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo $this->themePath; ?>/js/jquery-1.10.2.js"></script>
    <?php if (whichApplication() == "users" or whichApplication() == "contact") { ?>
		  <link href="<?php echo $this->themePath; ?>/css/forms.css" rel="stylesheet">
    <?php } ?>
    <style>
    html {
    font-family: 'Roboto Slab', serif;
      -webkit-text-size-adjust: 100%;
     -ms-text-size-adjust: 100%;
    }
    
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
        -moz-box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
        -webkit-box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
        box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
    }
  .btn-Twitter {
    background-color: #34c3e9;
    border-color: #CCCCCC;
    color: #ffffff;
        -moz-box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
        -webkit-box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
        box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
  }
  .btn-Download {
    background-color: #875bb3;
    border-color: #CCCCCC;
    color: #ffffff;
        -moz-box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
        -webkit-box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
        box-shadow: 0px 2px 4px 0px hsla(0, 0%, 0%, 0.20);
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
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><img src="<?php echo $this->themePath; ?>/img/logo-header.png" title="Eneract" style="margin-top:6px;"/></li>
             <li>&nbsp;</li>
             <?php 
             if (!isConnected()) {
                echo '<li><a href="' . path("default") . '">Home</a></li>';
             } else {
                echo '<li><a href="'. path("dashboard") .'">Dashboard</a></li>';
             } 
             ?>
            <li><a href="partners.html">Partners</a></li>
             <li><a href="<?php echo path("reward"); ?>">Rewards</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="<?php echo path("contact"); ?>">Contact</a></li>
            <?php 
             if (isConnected()) {
                echo '<li><a href="' . path("users/logout") . '">Logout</a></li>';
             } 
             ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>