<?php

/*
Theme Name: Alycia's WordPress Demo Theme 
Author: Alycia Cahill
Author URI: www.alyciacahill.com
Description: I'm gunna learn WordPress!
Version: 1.0
*/


register_sidebar(array (  
    'before_widget' => 'div id="%1$s" class+"widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>', 
)); 

//register my menu 

register_nav_menus(array(
    'main-menu' => __ ('Main'), 
));
// 


?>