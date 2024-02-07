<?php
  function stt_scroll_script(){
    ?>
      <script>
        jQuery(document).ready(function () {
         jQuery.scrollUp();
        });
      </script>
    <?php 
  }
  add_action( "wp_footer", "stt_scroll_script" );
?>