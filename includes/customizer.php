<?php
  // Plugin customization settings
  function stt_scroll_to_top($wp_customize){
    $wp_customize-> add_section('stt_scroll_top_secetion',array(
     'title' => __('Scroll To Top','Saikat'),
     'description' => 'Scroll To Top Plugin Will Help you To Enable Back To Top Button To Your 
      Wordpress website',
    ));
    $wp_customize-> add_setting('stt_default_color',array(
     'default' => '#000000',
    ));
    $wp_customize-> add_control('stt_default_color',array(
      'label' => 'Background Color',
      'section' => 'stt_scroll_top_secetion',
      'type' => 'color',
    ));

    // Adding rounded corner  
    $wp_customize-> add_setting('stt_rounded_corner',array(
      'default' => '5px',
      'description' => 'If you need fully rounded or circular then use 25px here.',
    ));
    $wp_customize-> add_control('stt_rounded_corner',array(
      'label' => 'Rounded Corner',
      'section' => 'stt_scroll_top_secetion',
      'type' => 'text',
    ));
  }
  add_action("customize_register","stt_scroll_to_top");
?>