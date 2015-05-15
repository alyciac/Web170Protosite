<!--Modified for assignment due 5.15--> 

<!--Get Header Function-->
<?php get_header(); ?>

	<img class="centeredimage" src="<?php bloginfo('template_directory');?>/images/aboutpic.jpg" alt="Picture of Loving Couple within blossuming tree branches"/><br>
        
	    
    <!--Begin Text-->
		<div id="content">
		<?php if ( have_posts() ): while ( have_posts()):the_post(); //start the loop?>
		<h2><a href="<?php the_permalink();//link to the page or posting?>"><?php the_title();//get the page or posting ?> </a></h2>
		<?php the_content(''); //get the page or posting written content ?>
		<?php endwhile; endif; //end the loop?>
		<small>front-page.php</small>
		</div>
    <!--End Text-->
            
<!--Get Sidebar Function-->
<?php get_sidebar(); ?>
	    
<!--Get Footer Function-->
<?php get_footer(); ?> 