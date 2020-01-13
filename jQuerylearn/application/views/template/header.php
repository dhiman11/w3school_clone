<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
 

<html lang='en'>

<head>
 <meta charset="UTF-8">
<link rel="alternate" href="<?php echo current_url(); ?>" hreflang="en-us" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123402386-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123402386-1');
</script>

<!--ADSENSE CODE-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6956165890644293",
    enable_page_level_ads: true
  });
</script>
 <!--ADSENSE CODE-->

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
<!-- made by www.metatags.org -->
<TITLE>Learn Programming with Us |jQuerylearn.com</TITLE>
<meta name="yandex-verification" content="392ba0bdf60debbb" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="JqueryLearn provide Study Lessons regarding PHP, css, htmland jQueryin Kangra/Himachal, India. For more visit JqueryLearn.com " />
<meta name="keywords" content="jquerylearn,jquerylearn.com, php tutorial,css tutorial,html tutorial ,jQuery tutorial" />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 month">
<link rel="shortcut icon" href="<?php echo base_url('assets/images'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images'); ?>/favicon.ico" type="image/x-icon">
<!--  -->

	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
 	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script> 
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>	
</head>

<body>
	<nav class="navbar navbar-expand-lg  container logo">
	<a TITLE='home page' class="navbar-brand" href="<?php echo base_url(); ?>"><img style="width: 230px;" src='<?php echo base_url(); ?>assets/images/logo.png'></a>
	<a title="Log In" class="nav-link text-light facebook_like" href="https://jquerylearn.com/Login/index">
	<div class="fb-like" data-href="https://www.facebook.com/Jquery-learn-1992385744317299/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
		  </a>
	</nav>
 
<div class='jqheader bg-danger'>
 
		
		
		<nav class="navbar navbar-expand-lg  container "> 
		<a></a>
		  <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><img style="width: 30px;height: 40px;margin-top: -5px;" src='<?php echo base_url('./uploads/'); ?>Down_red_arrow.png'></span>
		  </button>
		  
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">	
			 <li class="nav-item active">
					<a  TITLE='home page'class="nav-link text-light" href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a>
					</li>
			<?php 
				foreach($menu as $value)
				{
				 
					echo '<li class="nav-item">
					<a class="nav-link text-light"  TITLE="'.$value->lesson_name.'" href="'.base_url('tutorial/'.$value->slug).'">'.$value->lesson_name.'<span class="sr-only">(current)</span></a>
					</li>';
				}
			?>
			
			</ul>
			<ul class="navbar-nav float-lg-right ">	
			<?php  if ($this->session->userdata('logged_in') == 1)
			 { ?>
			<li class="nav-item  ">
				<a  TITLE='home page' class="nav-link text-light" href="<?php echo base_url('Image_upload/index'); ?>">Images Upload(Admin Only) </a>
			</li>
			 <?php } ?>
 
			<li class="nav-item    ">
			
			<?php 
			
			if ($this->session->userdata('logged_in') == 1)
			 {
				echo '<a TITLE="Log In" class="nav-link text-light"  href="'.base_url('Login/log_out').'">Log Out ('.$this->session->userdata('username').')</a> ';
			 }
			 else
			 {
				echo '<a   TITLE="Log In" class="nav-link text-light" href="'.base_url('Login/index').'">Login</a>' ;
			 }
			
			?>
				 
			</li>
		  
			</ul>
		  </div>
		</nav>
		
		
		
		

 
</div>
