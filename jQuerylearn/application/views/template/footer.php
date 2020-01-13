<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
 
 <!---------EXAMPLE ------------> 
  <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="
    min-width: 97% !important;
">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Execution</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class='row'>
			<div class='col-sm-6'>
				<h3>CODE</h3>
				<form>
					<textarea readonly='readonly' style="width: 100%; height: 500px; min-height: 100%; margin-top: 0px; margin-bottom: 0px;" class='code code_popup'></textarea>
				</form>
			</div>
			<div class='col-sm-6'>
			<h3>OUTPUT</h3>
				<div class='result'>
			 
				</div>		
			</div>
		 </div>
      </div>
      
    </div>
  </div>
</div>
 <!---------EXAMPLE ------------> 
 
 
 <footer>

<div class='bg-danger'>

	<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<div class='footer_data'>
				<h4>Contact Us</h4>  
				<p>Please Contact us for more detail.And if you have any guest post for us please contact us . We are free to help every beginner who is facing problems . </p>
				<b>Name :</b> Akshay Dhiman<br>
				<b>Email 1 :</b> info@jquerylearn.com <br>
				<b>Email 2 :</b> jquerylearnhere.com <br>
				<b>Whatsapp :</b>+86-186 16384857<br>
				<b>Skype :</b> mr.akshaydhiman<br><br>
			</div>
		</div>

		<div class="col-lg-3">
			<div class='footer_data'>
				<h4>Pages</h4>  
				<ul class="list-unstyled">
					<li><a href='<?php base_url(); ?>'>Home Page</a></li>
					<li><a href='<?php base_url(); ?>/p/privacy'>Privacy</a></li>					
					<li><a href='<?php base_url(); ?>/p/about_us'>About Us</a></li>
					<li><a href='<?php base_url(); ?>/p/Contact_us'>Contact Us</a></li>
				 
				</ul>
			</div>
		</div>

		<div class="col-lg-3">

		</div>

		<div class="col-lg-3">

		</div>

		</div>	
	</div>	
</div>


	<div class='container-fluid bg-dark lower_footer'> 
		<a title="home page">© Copyright 2018 www.jQuerylearn.com. All rights reserved. Developed by jQueryLearn.com</a>
  </div>
  


 </footer>
 
 

	<script>
	$('.content_data form').prepend('<input type="submit" class="action btn btn-danger" value="Try it">');
	$('.content_data form').attr('target','_BLANK');
	$('.content_data form').attr('method','post');
	$('.content_data form').attr('action','../lab'); 
	$('.content_data form textarea.code').attr('name','data'); 
	</script> 
	
	  
 </body>
 
</html>