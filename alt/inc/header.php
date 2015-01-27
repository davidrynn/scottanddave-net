<?php 
$section=""; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Comedy Shorts to fight soul crushing boredom.  Who knew the power of a guy in a wig?">
  <title>Scott and Dave's comedy shorts to fight soul crushing boredom</title>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css" >

  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>      

</head>

<body>
  <header>
  <img id="logo-main" src="../images/wig.png" alt="The Wig Project logo">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>      
        </div><!-- /navbar-header -->
        <!-- Collect the nav links toggling -->
        <div class="collapse navbar-collapse" id="menu-collapse-1">
          <ul class="nav navbar-nav">          
            <li <?php if ($section=="home"){ echo 'class="active"';}?>><a href="<?php echo BASE_URL; ?>">Home</a></li>
            <li <?php if ($section=="reviews"){ echo 'class="active"';}?>><a href="<?php echo BASE_URL; ?>reviews/">Rave Reviews!</a></li>
            <li <?php if ($section=="para"){ echo 'class="active"';}?>><a href="<?php echo BASE_URL; ?>para/">Gear</a></li>
            <li <?php if ($section=="contact"){ echo 'class="active"';}?>><a href="<?php echo BASE_URL; ?>contact/">Contact Us</a></li> 
            <li <?php if ($section=="extras"){ echo 'class="active"';}?>><a href="<?php echo BASE_URL; ?>extras/">Extras</a></li>        
          </ul>
        </div>
      </div> <!--/container -->
    </nav> 
  </header>