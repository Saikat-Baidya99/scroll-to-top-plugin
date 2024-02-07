<?php 
/*
plugin name:       Scroll To Top
plugin URI:        https://wordpress.org/plugins/scroll-to-top
Author:            Saikat
Author URI:        https://home-it.com
Version:           1.0.0
Requires at least: 6.4.3
Requires PHP:      7.3.11
Description:       Scroll To Top Plugin Will Help you To Enable Back To Top Button To Your Wordpress website
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       stt
*/

   //Including css
   function stt_enqueue_style(){
     wp_enqueue_style('stt-style', plugins_url('assets/css/stt-style.css',__FILE__));
   }
   add_action("wp_enqueue_scripts","stt_enqueue_style");

   //Including javascript
   function stt_enqueue_scripts(){
     wp_enqueue_script('stt-plugin-script', plugins_url('assets/js/stt-plugin.js',__FILE__), array('jquery'),'1.0.0','true');
   }
   add_action("wp_enqueue_scripts","stt_enqueue_scripts");
   
   //Include Plugin Info file
   function stt_php_file_called(){
    require_once( plugin_dir_path( __FILE__ ) . '/includes/stt-plugin.php');
    require_once( plugin_dir_path( __FILE__ ) . '/includes/customizer.php');
    require_once( plugin_dir_path( __FILE__ ) . '/includes/stt-style-css.php');
   }
   add_action('init','stt_php_file_called');  
?>