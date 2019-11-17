<?php 

function realEstateLite_child_enqueue() {

  $parent_style = 'parent-style';

  wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css', false);

  wp_enqueue_style('child_style', get_stylesheet_directory_uri().'/style.css',array($parent_style),wp_get_theme() ->get('Version'));

}

add_action('wp_enqueue_scripts', 'realEstateLite_child_enqueue');

?>