<?php
  function stt_theme_color_cus(){
    ?>
      <style>
        #scrollUp {
          background-color: <?php echo get_theme_mod('stt_default_color'); ?>;
          border-radius: <?php echo get_theme_mod('stt_rounded_corner'); ?>;
        }
      </style>
    <?php
  }
  add_action('wp_head','stt_theme_color_cus');
?>