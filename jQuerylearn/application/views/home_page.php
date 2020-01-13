<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
 
<div class='container'>

<div class='row'>
	<div class='col-lg-9'>
	<h1 class="h2">Its me JqueryLearn.com</h1>


	<div style="display:inherit;padding:20px;background-color: rgba(230, 70, 19, 0.26);border-left: 5px solid #e64613;">
	JqueryLearn provide <strong>Study Lessons</strong> regarding  PHP, css, html and jQuery. For more visit <b><a href='http://JqueryLearn.com'>
	 JqueryLearn.com</a></b>
	</div>

	<h2 class="h2">Latest Tutorials</h2>

	<?php

	 echo '<div class="row">';
	 
	foreach($menu as $value)
	{
		echo '
		<a title="'.$value->lesson_name.'" class="col-lg-2 col-6" href="'.base_url('tutorial/'.$value->slug).'">
			<div class="tutorial"> 
				<center>
					<img class="w-100" alt="'.$value->lesson_name.'"   src="'.base_url('./uploads/').$value->remarks.'">
					<b><p align="center">'.$value->lesson_name.'</p></b>
				</center>
			</div>
		</a>';

	}

	 ?>
	</div> 
	</div>
	
	<div class='col-lg-3   ' >
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Bottom_banner -->
				<ins class="adsbygoogle"
				style="display:block"
				data-ad-client="ca-pub-6956165890644293"
				data-ad-slot="7567862395"
				data-ad-format="auto"
				data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
	</div>
</div>
</div>