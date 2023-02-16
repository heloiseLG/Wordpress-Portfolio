<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       bbthemes.net
 * @since      1.0.0
 *
 * @package    Bonjour
 * @subpackage Bonjour/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Bonjour
 * @subpackage Bonjour/includes
 * @author     Mebarki Khaled <khaled05dz@gmail.com>
 */
class Bonjour {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Bonjour_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'bonjour';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Bonjour_Loader. Orchestrates the hooks of the plugin.
	 * - Bonjour_i18n. Defines internationalization functionality.
	 * - Bonjour_Admin. Defines all hooks for the admin area.
	 * - Bonjour_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-bonjour-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-bonjour-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-bonjour-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-bonjour-public.php';

		$this->loader = new Bonjour_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Bonjour_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Bonjour_i18n();
		$plugin_i18n->set_domain( $this->get_plugin_name() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Bonjour_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		// Add menu item
		$this->loader->add_action( 'admin_menu', $plugin_admin, 'add_plugin_admin_menu' );

		// Add Settings link to the plugin
		$plugin_basename = plugin_basename( plugin_dir_path( __DIR__ ) . $this->plugin_name . '.php' );
		$this->loader->add_filter( 'plugin_action_links_' . $plugin_basename, $plugin_admin, 'add_action_links' );
		// Save/Update our plugin options
		$this->loader->add_action('admin_init', $plugin_admin, 'options_update');




		// Declare script for new button
		function bonjour_add_tinymce_plugin( $plugin_array ) {
			$plugin_array['bonjour_mce_button'] = plugins_url('js/bonjour-mce-button.js', __FILE__);
			return $plugin_array;
		}

		// Register new button in the editor
		function bonjour_register_mce_button( $buttons ) {
			array_push( $buttons, 'bonjour_mce_button' );
			return $buttons;
		}

		add_filter( 'mce_external_plugins', 'bonjour_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'bonjour_register_mce_button' );
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {
		$this->bonjour_options = get_option($this->plugin_name);

		$plugin_public = new Bonjour_Public( $this->get_plugin_name(), $this->get_version() );

		if ( isset( $this->bonjour_options['active-bonjour-bar'] ) && 1 == $this->bonjour_options['active-bonjour-bar']  ) {

			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

			$this->loader->add_action( 'wp_footer', $plugin_public, 'bonjour_content' );


			if ( "top" == $this->bonjour_options['position'] && 1 == $this->bonjour_options['body-pusher']  ) {
				$this->loader->add_filter( 'body_class', $plugin_public, 'bonjour_body_pusher' );
			}
		}

		add_shortcode( 'bnjr_row', 'bonjour_row_sc' );
		function bonjour_row_sc( $atts, $content = null ) {
		    $content = '<div class="bnjr_row">'.$content.'</div>';
		     return preg_replace("#<br />#", "", do_shortcode($content));
		}

		add_shortcode( 'bnjr_column', 'bonjour_column_sc' );
		function bonjour_column_sc( $atts, $content = null ) {
		    extract( shortcode_atts( array(
		        'size' => '',
		        'text_align' => 'left'
		    ), $atts ) );
		    
		    $content = '<div class="bnjr_column bnjr_'.$size.' bnjr_align-'.$text_align.'"><div class="bnjr_inner">'.$content.'</div></div>';
		    return preg_replace("#<br />#", "", do_shortcode($content));
		}
		

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Bonjour_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}


}
