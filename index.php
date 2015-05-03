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
             
        <hr></hr>
        
        <div class="nav">
            <ul>
                <li><a href=#gallery>Gallery</a></li>
                <li><a href=#investment>Investment</a></li>
                <li><a href="main.html">About</a></li>
                <li><a href=#contact>Contact</a></li>
                <li><a href=#blog>Blog</a></li>
            </ul>
        </div>
        <br>
        
            
    </div>
    


    <!--Begin Content-->
    <div id="middle">
	
	<img class="centeredimage" src="<?php bloginfo('template_directory');?>/images/aboutpic.jpg" alt="Picture of Loving Couple within blossuming tree branches"/><br>
        
            <div class="sidebar">
            <h3>Eventual Subnavigation</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Flamingos</li>
            </ul>
        
            </div>
	
    <!--Begin Text-->
		<div id="content">
		<?php if ( have_posts() ): while ( have_posts()):the_post(); //start the loop?>
		<h2><a href="<?php the_permalink();//link to the page or posting?>"><?php the_title();//get the page or posting ?> </a></h2>
		<?php the_content(''); //get the page or posting written content ?>
		<?php endwhile; endif; //end the loop?>
		</div>
	<!--End Text-->
            
    </div>
    <!--End Content-->
	
    
    <!--Start footer-->
    <div id="footer">
        <hr></hr>
        <h2>&copy 2015 Blue Gate Photography</h2>
        
        <hr></hr>
        
        
        <dl>
            <dt><b>Site Navigation</b></dt>
            <dd><a href=#gallery>Gallery</a></dd>
            <dd><a href=#>Investment</a></dd>
            <dd><a href="index.php">About</a></dd>
            <dd><a href=#>Contact</a></dd>
            <dd><a href=#>Blog</a></dd>
        </dl>
   
    </div>
	<!--End footer-->
	
	<!--Start WP Footer-->
	<?php wp_footer(); ?>
	<!--End WP Footer--> 



</body>
</html>
