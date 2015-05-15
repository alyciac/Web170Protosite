<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('description'); ?>| <?php bloginfo('name'); ?></title>
	
	<!--Begin Style-->
	 
    <link rel="stylesheet" href="<?bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	
	
	<!--End Style-->
     
	<?php wp_head(); ?>	 
    
</head>

<body <?php body_class(); ?>>

    <div id="header">
        
        <div id="socialmedia">
            <a href="https://www.facebook.com/Bluegatephoto">
                <img id="socialmedia" src="<?php bloginfo ('template_directory');?>/images/facebook.png" alt="facebook logo" style="width: 25px; height: 25px;"/>
            </a>
            <a href="https://twitter.com/BlueGatePhoto">
                <img id="socialmedia" src="<?php bloginfo ('template_directory');?>/images/twitter.png" alt="twitter logo" style="width:25px; height: 25px;"/>
            </a>
        </div>
        
        <a href="home.html">
         <img id="largelogo" src="<?php bloginfo ('template_directory');?>/images/logo.jpg" alt="Blue Gate Photo Logo" style="width: 199px; height: 136px;"/>
        </a>
	<small>header.php</small>
             
        <hr></hr>
        
	<!--Begin Navigation-->
	<?php wp_nav_menu( array ('theme_location' => 'main-menu', 'container'=> 'div', 'container_id' => 'navigation',
	    'items_wrap' => '<ul id="navigation-items" class=%2$s">%3$s</ul>', )); ?>
	<!--End Navigation-->
            
    </div>
    


    <!--Begin Content-->
    <div id="middle">