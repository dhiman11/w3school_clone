<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
 <html ng-app="angNewsApp">
<head>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
		
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/images_editor/angular.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/images_editor/angular-image-compress.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/images_editor/scripts/app.js');?>"></script>
	<style>
	.images_append_after .this_photo 
	{
    display: inline-block;
	}
	
.images_here, .images_append_after {
    display: inline-block;
    margin-bottom: 10px;
    margin-top: 10px;
}

.photo img {
    width: 100%;
    height: auto;
    margin: 0 auto;
}

.photo {
    background: black;
    width: 100%;
    height: 183px;
    margin-bottom: 10px;
}
	</style>
</head> 
 
 
<div class='container-fluid'> 
<div class='row'>
	
<div class="col-sm-12"><h2>UPLOAD IMAGES</h2></div>	
	<form >
		<div class="col-sm-12">
			<div class = "input-group pad10">
		 
				<input CLASS='btn btn-danger' required onchange='readImage()' id="inputImage" type="file" accept="image/*" ng-model="imageList" 
				image="imageList" resize-max-height="800" resize-max-width="800" resize-quality="0.6" resize-type="image/jpg" multiple="multiple" ng-image-compress/>  
			</div> 
		</div>

		<script>
		function readImage()
		{ 
			src = $('.images_here').html();
			if(src != '')
			{
				$(".images_append_after").append(src); 
			}
		} 
		</script>


		<div class="col-sm-12" > 
			<div class = "images_here">
				<div class='this_photo pad10'>
					<img width='100px'; ng-src="{{item.compressed.dataURL}}" ng-repeat="item in imageList" />
					<textarea style="display:none;"  type="hidden"   ng-repeat="item in imageList"  name='lesson_img[]' >{{item.compressed.dataURL}}</textarea>
				</div>
			</div> 
			<div class = "images_append_after"></div>  
		</div>

		
		<div class="col-sm-12">
			<input class="btn btn-danger" type='submit'>
		</div>
		
		
		<div class="col-sm-12">
			<hr style="border-top: 1px solid #c2c2c2;">
		</div>	 
	
	</form>
	</div>
	
	
	
	<div class='row'>
		<div class='col-sm-12'>
			<div class='row'>
				<?php 
				foreach($images as $value):	?>
				<div class="col-sm-2"> 
					<div class='photo'>
						<input class='form-control' type='text' value='<?php  echo base_url('uploads/').$value['image_name'];	?>'>
						<?php echo "<img src='".base_url('uploads/').$value['image_name']."'>";	?> 
					</div> 
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>

<script>
$(document).submit('form',function()
{
	 $.ajax({
           type: "POST",
           url: '<?php echo base_url('Image_upload/upload_images'); ?>',
           data: $("form").serialize(), // serializes the form's elements.
           success: function(data)
           { 
			location.reload();
           }
         });
});


</script>
</html>