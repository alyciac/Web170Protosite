<!--Last modified on 5.17--> 

<!--Get Header Function-->
<?php get_header(); ?>


    <!--Begin Flexslider-->
    <div  class="flexslider">
	<ul class="slides">
	    <li><img src="http://alyciacahill.com/wp-content/themes/nicolestheme/images/pic1.jpg" width="900" height="600" alt="Dog with Baby"/></li>
	    <li><img src="http://alyciacahill.com/wp-content/themes/nicolestheme/images/pic2.jpg" width="900" height="600" alt="Cute Baby"/></li>
	    <li><img src="http://alyciacahill.com/wp-content/themes/nicolestheme/images/pic3.jpg" width="900" height="600" alt="Another Cute Baby"/></li>
	    <li><img src="http://alyciacahill.com/wp-content/themes/nicolestheme/images/pic4.jpg" width="900" height="600" alt="Family Picture"/></li>
	</ul>
    </div>
    <!--End Flexslider-->
    
    <!--Begin Wigets-->
    <div id="widgets">
    <section class="widget-item">
	<h1>About The Photographer</h1>
	    <!--Loop One-->
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
	    <?php the_content(''); //get the home page's content ?>
	    <?php endwhile; endif; // end loop one ?>
    </section>
    
    <section class="widget-item">
	<h1>Latest Postings</h1>
	<ul>
	    <!--Loop Two-->
	    <?php rewind_posts(); //stop loop one ?>
	    <?php query_posts('showposts=4')//give directions to loop two ?>
	    <?php while( have_posts() ) : the_post(); // start loop two ?>
	    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	    <?php endwhile; //end loop two ?> 
	</ul>
    </section>
    
    <section class="widget-item">
	<h1>Contact</h1>
	    <p><strong>Phone:</strong> 916.867.5309</p>
    </section>
    <small>front-page.php</small>
    </div>
  
            
<!--Get Sidebar Function-->
<?php get_sidebar(); ?>
	    
<!--Get Footer Function-->
<?php get_footer(); ?> 