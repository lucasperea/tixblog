<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>
        TIX/BLOG <?php wp_title(); ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>



    
  <link href="<?php bloginfo('template_directory') ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_directory') ?>/assets/css/bootstrap-theme.min.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- bootstrap-->
    <!--font awesome-->
  <link href="<?php bloginfo('template_directory') ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_directory') ?>/assets/css/font-awesome.min.css">

    <!--custom css-->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>

<body class="<?php body_class( $class ); ?>">



		<div class="container header-single ">
			<div class="row">
				<div class="col-md-12 text-right ">
					<a href="<?php bloginfo('home'); ?>"><h1><b>tix</b>/blog</h1></a>

				</div>
			</div>
		</div>