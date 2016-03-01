	</div></div>
	<div class="container sidebar">

	<div class="row">
		<div class="col-md-4 col-xs-12">
<h3>recent posts</h3><ul>
<?php


$args = array( 'posts_per_page' => 10, 'offset'=>3 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endforeach; wp_reset_postdata();?></ul>
		</div>
		<div class="col-md-4 hidden-xs">
			<h3>categories</h3>
<ul><?php wp_list_categories('exclude=4,7&title_li='); ?></ul>

		</div>
		<div class="col-md-4 hidden-xs">
<?php get_sidebar(); ?>
		</div>
	</div>
	</div>
	
<div class="container footer-mobile">
	<div class="row">
		<div class="col-xs-2 text-left"><BR>
		<A href="http://www.tix.com">	<img src="<?php bloginfo('template_directory') ?>/assets/images/tix-footer.png" border="0" ></a>
			
		</div>
		<div class="col-xs-10 text-right">
				<strong>Tix Inc.</strong> <br>718 W. Anaheim Street <br>Long Beach, CA 90813<br>
		 
		 800.504.4849
			
		
		</div>
		<div class="col-xs-12  text-right"><strong>connect with us...</strong>
<ul>
				<li>
				<a href="http://www.facebook.com/tixinc">	<i class="fa fa-facebook fa-2x"></i></a>
				</li>
				<li>
				<a href="http://www.twitter.com/tixinc">
					<i class="fa fa-twitter fa-2x"></i></a>
				</li>
				<li>
				<A href="http://plus.google.com/106184051327532678900/about">	<i class="fa fa-google-plus fa-2x"></i></a>
				</li>
			</ul>
			
		</div>
	</div>
</div>



	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<?php wp_footer(); ?>
</body>

</html>
