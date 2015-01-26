<?php require_once("../inc/config.php");
$section = "extras";
include("../inc/header.php");

?>

<i><a style="color: #0000ff"href="http://www.youtube.com/subscription_center?add_user=scottanddave"target="_blank">
Click here</a> to subscribe to us on &nbsp; <img src="<?php echo BASE_URL; ?>images/youtube_logo_standard_againstwhite-vfl95119[4].jpg" WIDTH="100" HEIGHT="30" align="bottom"></i>

<h1>Alternate Takes!</h1> 

<div class="videocontainer">
<h4>Alternate Take: Park Run </h4>
<object width="355" height="225"><param name="movie" value="http://www.youtube.com/v/i-QJJnVRIcI&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/i-QJJnVRIcI&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="355" height="225"></embed></object>
</div>

<div class="videocontainer">
<h4>Alternate Take: Brita</h4>
<object width="355" height="225"><param name="movie" value="http://www.youtube.com/v/lUS2w29JQV8&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/lUS2w29JQV8&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="355" height="225"></embed></object>
</div>

<div class="videocontainer">
<h4>Alternate Take: Intro</h4>
<object width="355" height="225"><param name="movie" value="http://www.youtube.com/v/3h1imnDcfwI?fs=1&amp;hl=en_US&amp;hd=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/3h1imnDcfwI?fs=1&amp;hl=en_US&amp;hd=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="355" height="225"></embed></object>
</div>

<h1>Behind the Scenes Pictures and Alternate Logos!</h1>

<!-- bootstrap carousel -->
<div class="container">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img src="<?php echo BASE_URL; ?>images/Fighting Image.JPG" alt="test logo 1">
      <div class="carousel-caption">
        <h4>Earlier attempt at logo</h4>
      </div>
    </div>


    <div class="item">
      <img src="<?php echo BASE_URL; ?>images/Postcard 2.JPG" alt="postcard">
      <div class="carousel-caption"> 
       <h4>Postcard</h4>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo BASE_URL; ?>images/v14.JPG" alt="Another Version">
      <div class="carousel-caption">
      	<h4>Version 14</h4>
      </div>
    </div>

     <div class="item">
      <img src="<?php echo BASE_URL; ?>images/Postcard 1.JPG" alt="Postcard 1">
      <div class="carousel-caption">

       <h4>Postcard 1</h4>
      </div>
    </div>

     <div class="item">
      <img src="<?php echo BASE_URL; ?>images/ScottSketchWig.jpg" alt="sketch of wig">
      <div class="carousel-caption">
      	<h4>Thanks for the sketch, Ron!</h4>
      </div>
    </div>

        <div class="item">
      <img src="<?php echo BASE_URL; ?>images/IMG00094.jpg" alt="trying wig on">
      <div class="carousel-caption">

        <h4>Scott trying out The Wig</h4>
      </div>
    </div>


        <div class="item">
      <img src="<?php echo BASE_URL; ?>images/IMG00132.jpg" alt="on set">
      <div class="carousel-caption">

        <h4>On set with Scott</h4>
      </div>
    </div>

        <div class="item">
      <img src="<?php echo BASE_URL; ?>images/IMG00131.jpg" alt="on set 2">
      <div class="carousel-caption">

        <h4>On set with retardo Scott</h4>
      </div>
    </div>    
  </div><!--/carousel inner -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /bootsrap carousel -->





<div class="extras row">
	<h1>More on Scott and Dave</h1>
	<div class="col-sm-6">
		<a style="color: #0000ff"href="http://www.s-miller.com/"target="_blank">Scott's Website</a> 
	</div>
	<div class="col-sm-6">
		<a style="color: #0000ff"href="http://www.davidrynn.com/"target="_blank">David's Website</a>
	</div>
</div>
</div><!-- /container -->
<?php include(ROOT_PATH . "inc/footer.php"); ?>
