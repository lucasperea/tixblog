<?php get_header(); ?>	
	     <!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

 	<?php if ( in_category( '3' ) ) : ?>
 	
 	<?php else : ?>
 		
 	<?php endif; ?>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12 text-left post">
 					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<small>written by: <?php the_author_posts_link(); ?></small>
 			</div>
 		</div>
 	</div>
<div class="container content">
	<div class="row">
		<div class="col-md-2 hidden-xs">
		
							<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="col-md-10 hidden-xs text-left post">
						<?php the_excerpt( ); ?>
		</div>
	</div>
</div>
<div class="container content">
	<div class="row">

		<div class="col-xs-12 visible-xs text-left post">
						<?php the_excerpt( ); ?>
		</div>
	</div>
</div>
	 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>

<?php get_footer(); ?>
