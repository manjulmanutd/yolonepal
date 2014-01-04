<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <?php $options = get_option('elite'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
        ?>
    </head>
	<!--[if IE 6]>
<style>
.flex-caption {
min-height:333px;}
.flexslider .slides img {
width: 100%;
height: 332px;
}
</style>
<![endif]-->
<!--[if IE 7]>
<style>
.flex-caption {
min-height:333px;}
.flexslider .slides img {
width: 100%;
height: 332px;
}
</style>
<![endif]-->
<!--[if IE 8]>
<style>
.flex-caption {
min-height:333px;}
.flexslider .slides img {
width: 100%;
height: 332px;
}
</style>
<![endif]-->
<!--[if lte IE 9]>
		<style>
.flexslider .slides{
list-style:none;
}
		</style>
		<![endif]-->
<body <?php body_class(); ?> id="regal_body" style="<?php if (elite_get_option('elite_bodybg') !='') { ?> background: fixed url('<?php echo elite_get_option('elite_bodybg'); ?>') <?php } ?>">
 
 

 
 
     
<header>
<div class="container_24">
<div class="grid_24 main-container-wrapper">
<div class="home">

	<div id="banner"> 
		<div id="logo"><a href="<?php echo home_url(); ?>" ><img src="<?php if (elite_get_option('elite_logo') != '') { ?><?php echo elite_get_option('elite_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" width="120" height="60" /></a></div>
	</div><!-- end banner -->
	
</div>
</div>
</div>

	<nav>
	 	<div class="container_24">
		<div class="grid_24 main-container-wrapper">
		<div class="home">
			<a href="#" class="mobile_nav closed">Main Menu<span></span></a>
			<?php elite_nav(); ?>	
		</div>
		</div>
		</div>
	</nav><!-- menu-wrapper -->

</header>   

<div class="clear"></div>

<?php get_slider(); ?>


<div class="wrapper">
				        
            <div class="container_24">
                <div class="grid_24 main-container-wrapper">
                    <div class="main-container home">
                        
