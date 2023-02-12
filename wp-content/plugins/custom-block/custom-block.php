<?php
/*
Plugin Name: ideapro custom block
Description: custom block de test
*/

 function ideapro_custom_block_script_register()
 {
    wp_enqueue_script('ideapro-custom-block',plugin_dir_url(__FILE__).'ideapro-block.js',array('wp-blocks','wp-i19n','wp-editor'),true,false);
 }
 add_action('enqueue_block_editor_assets', 'ideapro_custom_block_script_register');


?>