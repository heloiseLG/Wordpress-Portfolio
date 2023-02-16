<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       bbthemes.net
 * @since      1.0.0
 *
 * @package    Bonjour
 * @subpackage Bonjour/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Bonjour
 * @subpackage Bonjour/public
 * @author     Mebarki Khaled <khaled05dz@gmail.com>
 */
class Bonjour_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->bonjour_options = get_option($this->plugin_name);

	}

	public function bonjour_apparence() {
		
		$bg_type = $this->bonjour_options['background-type'];
		
		switch($bg_type){
			
			case 'image':
				$image_id =  $this->bonjour_options['bg-image'];
				$bg_image = wp_get_attachment_image_src( $image_id, 'full' );
	   			$bg_image_url = $bg_image[0];
				$bonjour_apparence = '
		   			.bonjour__bar-bg-image{
						background-image: url('.$bg_image_url.');
					}
					.bonjour__bar-bg-image:after{
					  content: "";
					  background: rgba(2,2,2,.3);
					  z-index: 0;
					  position: absolute;
					  top: 0;
					  right: 0;
					  left: 0;
					  bottom: 0;
		   			}';
			 break;
			
			case 'color':
				$bg_color = $this->bonjour_options['bg-color'];
				$bonjour_apparence = '.bonjour__bar{
					background: '.$bg_color.';
		   		}';
			 break;
			
			case 'gradient':
				$gradient_1 = $this->bonjour_options['gradient-color-1'];
				$gradient_2 = $this->bonjour_options['gradient-color-2'];
				$bonjour_apparence =' .bonjour__bar-bg-image{
					background: -webkit-linear-gradient(90deg, '.$gradient_1.' 10%, '.$gradient_2.' 90%);
	  				/* Chrome 10+, Saf5.1+ */
					background: -moz-linear-gradient(90deg, '.$gradient_1.' 10%, '.$gradient_2.' 90%);
					 /* FF3.6+ */
					background: -ms-linear-gradient(90deg, '.$gradient_1.' 10%, '.$gradient_2.' 90%);
					/* IE10 */
					background: -o-linear-gradient(90deg, '.$gradient_1.' 10%, '.$gradient_2.' 90%);
					/* Opera 11.10+ */
					background: linear-gradient(90deg, '.$gradient_1.' 10%, '.$gradient_2.' 90%);}';
			 break;
		}
		
   		return $bonjour_apparence;
    }


	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		$bonjour_apparence = $this->bonjour_apparence();

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

		wp_enqueue_style( "bonjour-styles", plugin_dir_url( __FILE__ ) . 'css/bonjour-public.css', array(), $this->version, 'all' );

		wp_add_inline_style( 'bonjour-styles', $bonjour_apparence );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		$bar_data = array(
			'cookies_opt' => $this->bonjour_options['cookies_opt'],
			'cookies_days_number' => $this->bonjour_options['cookies-days-number'],
			'bar_position' => $this->bonjour_options['position']
		);

		wp_register_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bonjour-public.js', array( 'jquery' ), $this->version, false );
		
		wp_localize_script( $this->plugin_name, 'bar_data_js', $bar_data );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bonjour-public.js' );

	}


	public function bonjour_body_pusher( $bonjour_class ) {
		$bonjour_class[] = 'bonjour__bar-body-pusher';
		return $bonjour_class;
    }
     
	public function bonjour_content() {

		$content_type = $this->bonjour_options['content-type'];
		
        
    ?>
 

			<div class="bonjour__bar bonjour__bar-position-<?php echo esc_attr( $this->bonjour_options['position'] );?> bonjour__bar-bg-image bonjour__bar-<?php echo esc_attr( $content_type );?>-type bonjour__bar-animated">
				<div class="bonjour__bar-container">
					<?php switch($content_type){
		
						case 'call-action':
							
							if ( !empty( $this->bonjour_options['call-action-descr'] ) ) {
								echo "<p>".esc_html( $this->bonjour_options['call-action-descr'] )."</p>";
							};
					 		
					 		if ( !empty( $this->bonjour_options['call-action-url'] ) ){
								echo '<a href="'.esc_url( $this->bonjour_options["call-action-url"] ).'" class="bonjour__bar-button bonjour__bar-animated">
									 '.esc_html( $this->bonjour_options["call-action-text"] ).'
								</a>';
							}
					 	
					 	break; 

					 	case 'email':
					 	
					 		if ( !empty( $this->bonjour_options['email-text'] ) ) {
								echo  $this->bonjour_options['email-text'] ;
							};
							if ( !empty( $this->bonjour_options['email-shortcode'] ) ) {
								$email_shortcode = $this->bonjour_options["email-shortcode"];
								echo "<div class='bonjour__bar-email-form'>$email_shortcode</div>";
							};
					 	break;

					 	case 'text':
					 		$content = apply_filters('the_content', $this->bonjour_options["content-text"]);
					 		echo $content;
					 	break; 

					 }?>
				</div>

				
					<?php if ( 1 == $this->bonjour_options['exit-button'] ) : 
						$icon_type = $this->bonjour_options['exit-button-icon']?>
						<div id ="bonjour__bar-hide-promotion" class="bonjour__bar-exit bonjour__bar-animated">
							<img class="bonjour-bar__header-logo" name ="hide-bar" src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'images/' . $icon_type . '.png' );?>" />
						</div>
					<?php endif;?>

			</div>

	<?php
    }

}