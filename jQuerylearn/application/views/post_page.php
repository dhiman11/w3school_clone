<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class='container shadow padding-top10 padding-bottom10'>
	<div class='row'>
	 <div class='col-lg-12'>
	 
	 </div>
		<!--------- LEFT SIDE MENU ----------------->
		<div class='col-lg-2  d-none  d-lg-block mobile_post_menu'> 
			<div class='left_post_menu'> 
				<ul>  
				<?php foreach($sub_category as $subcat):?>	 
				<li class='subcategory text-danger'><?php echo $subcat['sub_category_name']; ?></li> 
					<?php foreach($posts as $post):?>	
						<?php if($post['sub_cat_id'] == $subcat['id'])
						{
							echo "<li class='posts ".($selected_page==$post['slug'] ? 'active' : 'noo')."'><a href='".base_url('tutorial/'.$post['slug'])."'>".$post['post_title']."</a>";
							if ($this->session->userdata('logged_in') == 1)
							{
							echo"<b><a style='color:red;' target='_blank' href='".base_url('edit/post/'.$post['id'])."'> Edit</a></b></li></a>";
							}
						}			
						?>
						<?php endforeach; ?> 
					<?php endforeach; ?>
				<ul>	
			
			</div> 
		</div> 
		<!--------- LEFT SIDE MENU ----------------->
		
		<!--------- Main Content start ----------------->
		<div class='col-lg-7 col-xs-12'>
			<?php  
			 
				foreach ($post_data as $value)
				{
					$post_data =  $value['post'];
					$post_update_date =  $value['last_updated'];
					$updated_by =  $value['updated_by'];
					$slug =  $value['slug'];

				}
			
				
			?>
			<!--------- ads1start ----------------->
			<div class="ads_div">
				
			</div>
			<!--------- ads2 close ----------------->
			
			<div class="prev_post">
				<?php   foreach($prev_post as $value)
						{
							$prev_url = base_url('tutorial/'.$value['slug']);
						}
				?>
				<a href='<?php echo $prev_url; ?>'> <b><< Previous Page</b></a>
			</div>
			
			<div class="next_post">
				<?php   foreach($next_post as $value)
						{
							$next_url = base_url('tutorial/'.$value['slug']);
						}
				?>
				<a href='<?php echo $next_url; ?>'> <b>Next Page >></b></a>
			</div>
			<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
			xxxxxxxxxxxxxx Main POST xxxxxxxxxxxxxxxx-->
			
				<div class="content_data">
					<article>	
						<?php echo $post_data; ?>
					</article>
				</div><br> 
				<?php echo "<i>Last Updated: ".$post_update_date." By ".$updated_by."</i>" ;?>
				<br> <br> 
				
				
				<!-- Facebook comments -->
				<?php 
				$ip = $this->input->ip_address();
 
				
				$url = "http://getcitydetails.geobytes.com/getcitydetails?fqcn".$ip;
				$json = file_get_contents($url);
				 
				$address = json_decode($json);
				
				$mycountry =  $address->geobytescountry;
				
				
				?>
				
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				
				<div class="fb-comments" data-href="<?php echo base_url('tutorial/').$slug;?>" data-width="100%" data-numposts="5"></div>
				
				
				<!-- Facebook comments -->
				
				<!-- SHARE ON FACEBOOK-->
				<h3>SHARE THIS</h3><a href="https://www.facebook.com/sharer.php?u=<?php echo current_url(); ?>"><Img width="50px" alt='share_facebook' src='<?php echo base_url()."assets/images/Facebook-icon.png"; ?>'></a>
				<a href='https://twitter.com/share?url=<?php echo current_url(); ?>'><Img width="50px" alt='share_twitter' src='<?php echo base_url()."assets/images/Twitter-icon.png"; ?>'></a>
				<a href='https://plusone.google.com/_/+1/confirm?hl=en&url=<?php echo current_url(); ?>'><Img width="50px" alt='share_google_plus' src='<?php echo base_url()."assets/images/gplus.png"; ?>'></a>
				<br><br>
				<!-- SHARE ON FACEBOOK-->
				<h5>Please Comment Here :</h5>
			<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
			xxxxxxxxxxxxxx Main POST xxxxxxxxxxxxxxxx-->
			<div class="prev_post">
				<?php   foreach($prev_post as $value)
						{
							$prev_url = base_url('tutorial/'.$value['slug']);
						}
				?>
				<a href='<?php echo $prev_url; ?>'> <b><< Previous Page</b><br><span class="text-danger">(<?php echo $value['post_title']; ?>)</span></a>
			</div>
			
			<div class="next_post">
				<?php   foreach($next_post as $value)
						{
							$next_url = base_url('tutorial/'.$value['slug']);
						}
				?>
				<a href='<?php echo $next_url; ?>'> <b>Next Page >></b><br><span class="text-danger">(<?php echo $value['post_title']; ?>)</a>
			</div>
			
			
			<!--------- ads2 start ----------------->
			<div class="ads_div">
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
			<!--------- ads2 close ----------------->
			
		</div>
		<!--------- Main Content close ----------------->
		
		<!--------- Ads Bar Content ----------------->
		<div class='col-lg-3  d-none  d-lg-block' >
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Right side -->
				<ins class="adsbygoogle"
				style="display:block"
				data-ad-client="ca-pub-6956165890644293"
				data-ad-slot="6206270143"
				data-ad-format="auto"
				data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<hr>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- top_ad -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-6956165890644293"
					 data-ad-slot="4192133288"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
		</div>
		<!---------Ads Bar Content ----------------->
	
	</div>
</div>

 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.39.2/lib/codemirror.css">
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.39.2/lib/codemirror.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.39.2/mode/xml/xml.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.39.2/mode/clike/clike.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.39.2/mode/php/php.js"></script>
 
<script> 
	var js_editor = document.getElementsByClassName("code");
	Array.prototype.forEach.call(js_editor, function(el) {
		var editor = CodeMirror.fromTextArea(el, 
		{
			mode: "application/x-httpd-php",
			matchBrackets: true, 
			indentUnit: 3,
			lineNumbers: true,
			spellcheck : true,
			readOnly: true,
			indentWithTabs: true
		});
		// Update textarea
		function updateTextArea() 
		{
			editor.save();
		}
		editor.on('change', updateTextArea);
	}); 
	
	

</script>


	<style>
	.mobile_post_menu.active 
	{
		min-width: 100px;
		display: block !important;
		position: absolute;
		z-index: 99999;
		background: #fff;
		border: 3px solid #e64613;
	}
	</style>
	 	
	<script>
		$('.tutorial_toggle').on('click',function()
		{ 
			$('.mobile_post_menu').toggleClass('active');
		});
	</script>
	
