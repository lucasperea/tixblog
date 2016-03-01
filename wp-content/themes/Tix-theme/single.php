<?php get_header(single); ?>	
<div style="padding: 0; "class="container">
	<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

  <div style="    
   background: url(<?php echo $src[0]; ?> )  no-repeat left center  !important;  border-radius: 0 !important; margin: 0; background-size: cover !important;" class="jumbotron">
   
				<h1><?php the_title(); ?></h1>
					<p>		<?php the_post(); ?>
				
					
				
				written by: <?php the_author_posts_link(); ?></p>
				
  </div>
 
</div>



		<div class="container post-entry ">
			<div class="row">


				<div class="col-md-12 col-xs-12 post-entry ">
				
		
					<p><?php the_content(); ?></p>




				</div>
			</div>
		</div>


<?php get_footer(single); ?>