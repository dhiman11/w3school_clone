<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
 
  
		<?php  
		 
			foreach($data as $value) 
			{
				$id = $value['id'];
				$post_title = $value['post_title'];
				$data = $value['post'];  
				$slug = $value['slug'];  
				$seo_keyword = $value['seo_keyword'];  
				$seo_description = $value['seo_description']; 
				$seo_title = $value['seo_title'];   
			} 
		

			
		?>
 
<html>
<head>
 <meta charset="UTF-8">
<title><?php echo $post_title; ?></title> 

	

 <style>
 
 
iframe {
    height: 100% !important;
}
label {
    width: 100%;
}
 
 </style>
    
 
</head>
<body>
<div class="container">
	 

	<div class="row">
 

 <?php 
 foreach($next_post as $value) 
 {
	 $next_id = $value['id'];
	 $next_slug = $value['slug'];
 }
 if($id !=1)
 {
	foreach($prev_post as $value) 
	{
		$prev_id = $value['id'];
		$prev_slug = $value['slug'];
	}
}
else
{
	$prev_id = 1;
	$prev_slug = $value['slug'];  
}
 ?>


	<div class="col-lg-6">
		<a class=' btn btn-danger' href='<?php echo base_url('Edit/post/').$prev_id; ?>'><< Edit Prev POST(<?php echo $prev_slug; ?>)</a>
	</div>
	<div class="col-lg-6  ">
		<a class='float-lg-right btn btn-danger' href='<?php echo base_url('Edit/post/').$next_id; ?>'>Edit Next POST(<?php echo $next_slug; ?>) >></a>
	</div>



	<div class="col-lg-12  ">
		<hr>
	</div>

	 
			 
			<input id='lesson_id' readonly name ='text'  type='hidden' class='form-control' value='<?php echo $id ; ?>' style="background: #ababab;border: 1px solid black;">
	 
		
		<div class="col-lg-6">
			<label>Lesson Title</label>
			<input id='lesson_title'    name ='text'  type='text' class='form-control' value='<?php echo $post_title; ?>'  style="background: #ababab;border: 1px solid black;">
		</div>
		
		<div class="col-lg-6">
			<label>Lesson Slug</label>
			<input id='lesson_slug' name ='slug'  type='text' class='form-control' value='<?php echo $slug; ?>'>
		</div>
		
		
		<div class="col-lg-6">
			<label>Seo Title</label>
			<input  id='lesson_seo_title'   name ='seo_title'  type='text' class='form-control' value='<?php echo $seo_title; ?>'>
		</div> 
		
		<div class="col-lg-6">
			<label>Lesson Seo Keyword</label>
			<input  id='lesson_seo_keyword' name ='seokeyword'  type='text' class='form-control' value='<?php echo $seo_keyword; ?>'>
		</div>

		<div class="col-lg-8">
			<label>Seo Description</label>
			<textarea  id='lesson_seo_description'   name ='seo_desc'  type='text' class='form-control' > <?php echo $seo_description; ?> </textarea>
		</div>
		

		<div class="col-lg-4"> 
			<label>&nbsp;</label>
			<input type='submit' class='btn btn-danger submit_form' value='Save'><div class='status'></div>
		</div> 
		
		<div class="col-lg-12">
			<hr style="border-top: 1px solid rgba(241, 0, 0, 0.65);">
		</div>
	
		<div class="col-lg-12">
		  <textarea class='summernote validation' id='lesson_description' name ='desc' id="txtDefaultHtmlArea"  width='100%' >
		  <?php echo htmlentities($data);	 ?> 
		  </textarea> 
		</div>
		 
	</div>
</div>

<!-- include libraries(jQuery, bootstrap) -->
<link href="<?php echo base_url('assets/editor/') ?>editor_bootstrap.css" rel="stylesheet">
<script src="<?php echo base_url('assets/editor/') ?>jquery.js"></script> 
<script src="<?php echo base_url('assets/editor/') ?>editor_bootstrap.js"></script> 

<!-- include summernote css/js -->
<link href="<?php echo base_url('assets/editor/') ?>summernote.css" rel="stylesheet">
<script src="<?php echo base_url('assets/editor/') ?>summernote.js"></script>
<script>
$('.submit_form').on('click',function()
	{
		lesson_id = $('#lesson_id').val();
		lesson_title = $('#lesson_title').val();
		lesson_slug = $('#lesson_slug').val();
		lesson_seo_keyword = $('#lesson_seo_keyword').val();
		lesson_seo_description = $('#lesson_seo_description').val();
		lesson_description = $('#lesson_description').val();
		lesson_seo_title = $('#lesson_seo_title').val();
		
			$.ajax({
			type: "POST",
			url: "<?php echo base_url('update/lesson');?>",
			data: {"lesson_id":lesson_id,"lesson_title":lesson_title,"lesson_slug":lesson_slug,"lesson_seo_title":lesson_seo_title,"lesson_seo_keyword":lesson_seo_keyword,"lesson_seo_description":lesson_seo_description,"lesson_description":lesson_description},
			dataType: "json",
			success: function(data) {
				alert('saved');
			},
			error: function() {
				alert('saved');
			}
			});

	});
 
</script>


 
		 
<script>
	$(document).ready(function() {
  $('.summernote').summernote();
});
 


</script>
	
	
	
</body>
<html>