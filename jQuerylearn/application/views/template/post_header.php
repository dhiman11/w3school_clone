<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
 <?php 
 
 foreach($meta_data as $value)
 {
	$post_title =$value['seo_title'];
	$seo_keyword =$value['seo_keyword'];
	$seo_description =$value['seo_description'];
 }
 
 ?>

<html lang='en'>

<head>
<meta charset="UTF-8">
<meta name="yandex-verification" content="a04e4627578e9648" />
<link rel="alternate" href="<?php echo current_url(); ?>" hreflang="en-us" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123402386-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123402386-1');
</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  

<!-- made by www.metatags.org -->
<TITLE><?php echo $post_title; ?></TITLE>
<meta name="yandex-verification" content="392ba0bdf60debbb" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $seo_description; ?>" />
<meta name="keywords" content="<?php echo $seo_keyword; ?>" />
<meta name="author" content="Akshay Dhiman">
<meta name="robots" content="index, follow">
<link rel="shortcut icon" href="<?php echo base_url('assets/images'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images'); ?>/favicon.ico" type="image/x-icon">
 
 <!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="<?php echo $post_title; ?>">
<meta name="twitter:description" content="<?php echo $seo_description; ?>">
<meta name="twitter:creator" content="@akshay_dhiman">
 <meta name="twitter:image:src" content="https://jquerylearn.com/uploads/photo_15322452151.jpeg">
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $post_title; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo current_url(); ?>" />
<meta property="og:description" content="<?php echo $seo_description; ?>" /> 
<meta property="og:site_name" content="<?php echo $post_title; ?>" />
 <meta property="og:image" content="https://jquerylearn.com/uploads/photo_15322452151.jpeg" />

<!--  -->

	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script> 
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg container  logo">
	<a TITLE='home page' class="navbar-brand" href="<?php echo base_url(); ?>"><img style="width: 230px;" src='<?php echo base_url(); ?>assets/images/logo.png'></a>
	<a title="Log In" class="nav-link text-light facebook_like" href="https://jquerylearn.com/Login/index">
<div class="fb-like" data-href="https://www.facebook.com/Jquery-learn-1992385744317299/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
		  </a>
	</nav>
<div class='jqheader bg-danger'>
 
		<nav class="navbar navbar-expand-lg   container">
		 
		  <button class="navbar-toggler bg-light tutorial_toggle" type="button"  >
			<span class="navbar-toggler-icon" style="width: auto;"><img style="width: 30px;height: 40px;margin-top: -5px;" src='<?php echo base_url('assets/images/'); ?>menu.png'></span>
		  </button>
		  
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
