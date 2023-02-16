<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       bbthemes.net
 * @since      1.0.0
 *
 * @package    Bonjour
 * @subpackage Bonjour/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Bonjour
 * @subpackage Bonjour/admin
 * @author     Mebarki Khaled <khaled05dz@gmail.com>
 */
class Bonjour_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}


	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bonjour_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bonjour_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bonjour-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'playfair-bonjour', plugin_dir_url( __FILE__ ) . 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700', array(), $this->version, 'all' );


		 if ( 'settings_page_bonjour' == get_current_screen() -> id ) {

             // CSS stylesheet for Color Picker
		 	wp_enqueue_style('thickbox');
             wp_enqueue_style( 'wp-color-picker' );            
             wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bonjour-admin.css', array( 'wp-color-picker' ), $this->version, 'all' );
         }
	
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bonjour_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bonjour_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bonjour-admin.js', array( 'jquery' ), $this->version, false );

		if ( 'settings_page_bonjour' == get_current_screen() -> id ) {
            wp_enqueue_media();   
            wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bonjour-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );
            wp_enqueue_script('media-upload');
		    wp_enqueue_script('thickbox');
		    wp_enqueue_script( 'editor' );
		    wp_enqueue_script( 'wp-color-picker' );  
        }
	
	}

	public function add_plugin_admin_menu() {

	    /*
	     * Add a settings page for this plugin to the Settings menu.
	     *
	     * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
	     *
	     *        Administration Menus: http://codex.wordpress.org/Administration_Menus
	     *
	     */
	    add_options_page( 'Bonjour Bar', 'Bonjour Bar', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
	    );
	}

	public function add_action_links( $links ) {
	    /*
	    *  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
	    */
	   $settings_link = array(
	    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	 
	public function display_plugin_setup_page() {
	    include_once( 'partials/bonjour-admin-display.php' );
	}

	public function validate($input) {
	    // All checkboxes inputs        
	    $valid = array();

	    $valid['content-text'] = $input['content-text'];
	    $valid['call-action-descr'] = $input['call-action-descr'];
	    $valid['call-action-text'] = esc_html( $input['call-action-text'] );
	    $valid['call-action-url'] = esc_url( $input['call-action-url'] );

	    $valid['email-text'] = $input['email-text'] ;
	    $valid['email-shortcode'] =  $input['email-shortcode'] ;

	    //Cleanup
	    $valid['position'] = $input['position'];
	    $valid['exit-button-icon'] = $input['exit-button-icon'];
	    $valid['cookies_opt'] = $input['cookies_opt'];
	    $valid['cookies_opt'] = $input['cookies_opt'];
	    $valid['cookies-days-number'] = esc_html( $input['cookies-days-number'] );
	    $valid['background-type'] = $input['background-type'];
	    $valid['content-type'] = $input['content-type'];
	    $valid['body-pusher'] = (isset($input['body-pusher']) && !empty($input['body-pusher'])) ? 1 : 0;
	    $valid['exit-button'] = (isset($input['exit-button']) && !empty($input['exit-button'])) ? 1: 0;
	    $valid['active-bonjour-bar'] = (isset($input['active-bonjour-bar']) && !empty($input['active-bonjour-bar'])) ? 1: 0;
	    // Login Customization
                //First Color Picker
                $valid['bg-color'] = (isset($input['bg-color']) && !empty($input['bg-color'])) ? sanitize_text_field($input['bg-color']) : '';

                if ( !empty($valid['bg-color']) && !preg_match( '/^#[a-f0-9]{6}$/i', $valid['bg-color']  ) ) { // if user insert a HEX color with #
                    add_settings_error(
                            'bg-color',                     // Setting title
                            'login_background_color_texterror',            // Error ID
                            'Please enter a valid hex value color',     // Error message
                            'error'                         // Type of message
                    );
                }

                $valid['gradient-color-2'] = (isset($input['gradient-color-2']) && !empty($input['gradient-color-2'])) ? sanitize_text_field($input['gradient-color-2']) : '';

                if ( !empty($valid['gradient-color-2']) && !preg_match( '/^#[a-f0-9]{6}$/i', $valid['gradient-color-2']  ) ) { // if user insert a HEX color with #
                    add_settings_error(
                            'bg-color',                     // Setting title
                            'login_background_color_texterror',            // Error ID
                            'Please enter a valid hex value color',     // Error message
                            'error'                         // Type of message
                    );
                }

                $valid['gradient-color-1'] = (isset($input['gradient-color-1']) && !empty($input['gradient-color-1'])) ? sanitize_text_field($input['gradient-color-1']) : '';

                if ( !empty($valid['gradient-color-1']) && !preg_match( '/^#[a-f0-9]{6}$/i', $valid['gradient-color-1']  ) ) { // if user insert a HEX color with #
                    add_settings_error(
                            'bg-color',                     // Setting title
                            'login_background_color_texterror',            // Error ID
                            'Please enter a valid hex value color',     // Error message
                            'error'                         // Type of message
                    );
                }



                //Logo image id
                $valid['bg-image'] = (isset($input['bg-image']) && !empty($input['bg-image'])) ? absint($input['bg-image']) : 0;
	    
	    return $valid;
 	}
 	
 	public function options_update() {
    	register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
 	}

}
