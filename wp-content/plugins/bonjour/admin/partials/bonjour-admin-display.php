<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       bbthemes.net
 * @since      1.0.0
 *
 * @package    Bonjour
 * @subpackage Bonjour/admin/partials
 */
?>

<form method="post" name="cleanup_options" action="options.php">

   	<?php
    //Grab all options
    $options = get_option($this->plugin_name);

    $active_bonjour_bar = $options['active-bonjour-bar'];

    $call_action_descr = $options['call-action-descr'];
    $call_action_url = $options['call-action-url'];
    $call_action_text = $options['call-action-text'];


    $position = $options['position'];
    $cookies_opt = $options['cookies_opt'];
    $background = $options['background-type'];
    $body_pusher = $options['body-pusher'];
    $exit_button = $options['exit-button'];
    $exit_button_icon = $options['exit-button-icon'];
    $cookies_days_number = $options['cookies-days-number'];
    $content_type = $options['content-type'];

    $email_text = $options['email-text'];
    $email_shortcode = $options['email-shortcode'];

    $content_text = $options['content-text'];

    $bg_image = $options['bg-image'];
	$bg_image_id = wp_get_attachment_image_src( $bg_image, 'thumbnail' );
	$bg_image_url = $bg_image_id[0];
	
	$bg_color = $options['bg-color'];

	$gradient_color_2 = $options['gradient-color-2'];
	$gradient_color_1 = $options['gradient-color-1'];

 	settings_fields($this->plugin_name);
    do_settings_sections($this->plugin_name);
	
	?>

	<div class="bonjour-bar">

		<header class="bonjour-bar__header clear-after">
			<h2 class="bonjour-bar__header-title">
				<img class="bonjour-bar__header-logo" name ="<?php echo esc_html(get_admin_page_title()); ?>" src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/logo.png' );?>" />
			</h2>
			<label class="bonjour-bar__active" for="<?php echo $this->plugin_name; ?>-active-bonjour-bar">
				<input type="checkbox" data-width="48" data-height="40" data-toggle="toggle" id="<?php echo $this->plugin_name; ?>-active-bar" name="<?php echo $this->plugin_name; ?>[active-bonjour-bar]" value="1" <?php checked($active_bonjour_bar, 1); ?> />
			</label>
		</header>


		<div class="bonjour-bar__content animated">
			<div class="bonjour-bar__content-active-box fadeInUp animated">
				<h2>To Active Bonjour Bar Please Press The Button !</h2>
			</div>
			   	
			    <div class="bonjour-bar__content-table">
			    	
			    	<div class="bonjour-bar__content-block clear-after">

				    	<div class="bonjour-bar__content-left bonjour-bar__content-browser">
				    		<div class="browser-mockup">
				    			<div class="fixed-bar">This is your bar <span class="fixed-bar__exit dashicons dashicons-no"></span></div>
		  						<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/site.png' );?>" />
							</div>
				    	</div>

				    	<div class="bonjour-bar__content-right">
				    		<h3 class="bonjour-bar__content-title">Bar Options</h3>
				    		<table class="bonjour-bar__content-right-table">
				    			<tbody>	

						    		<tr>
						    			<td class="bonjour-bar__content-option-name"><?php esc_html_e('Select Bar Position', $this->plugin_name); ?></td>
						    			<td>
							    		     <select id="<?php echo $this->plugin_name; ?>-position" name="<?php echo $this->plugin_name; ?>[position]" >
												<option id="<?php echo $this->plugin_name; ?>-top" value="top" <?php selected($position, "top"); ?>> Top </option>
					   							<option id="<?php echo $this->plugin_name; ?>-bottom" value="bottom" <?php selected($position, "bottom"); ?>> Bottom </option>
					                        </select>
				                    	</td>			       
								    </tr>

								    <tr>
										<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Active body pusher', $this->plugin_name); ?></td>
										<td>
									        <label for="<?php echo $this->plugin_name; ?>-body-pusher">
									            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-body-pusher" name="<?php echo $this->plugin_name; ?>[body-pusher]" value="1" <?php checked($body_pusher, 1); ?> />
									        </label>
								        </td>
								    </tr>

								    <tr>
								    	<td class="bonjour-bar__content-option-name"><?php esc_attr_e('display Exit icon ?', $this->plugin_name); ?></td>
								    	<td>
									        <label for="<?php echo $this->plugin_name; ?>-exit-button">
									            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-exit-button" name="<?php echo $this->plugin_name; ?>[exit-button]" value="1" <?php checked($exit_button, 1); ?> />
									        </label>
									    </td>
								    </tr>
								    				    		
						    		<tr class="fixed-bar__exit">

						    			<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Exit Button Icon ', $this->plugin_name); ?></td>
						    			<td>
									    	
											<ul class="bonjour-bar__icon-type">
												<li>
											        <label>
											            <input type="radio" id="<?php echo $this->plugin_name; ?>-icon-type-1" name="<?php echo $this->plugin_name; ?>[exit-button-icon]" value="exite-1" <?php checked($exit_button_icon, "exite-1"); ?> />
											            <img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/exite-1.png' );?>" />
											        </label>

										        </li>
												
												<li>
											        <label>
											            <input type="radio" id="<?php echo $this->plugin_name; ?>-icon-type-2" name="<?php echo $this->plugin_name; ?>[exit-button-icon]" value="exite-2" <?php checked($exit_button_icon, "exite-2"); ?> />
											        	<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/exite-2.png' );?>" />
											        </label>
										        </li>

										        <li>
											        <label>
											            <input type="radio" id="<?php echo $this->plugin_name; ?>-icon-type-3" name="<?php echo $this->plugin_name; ?>[exit-button-icon]" value="exite-3" <?php checked($exit_button_icon, "exite-3"); ?> />
											        	<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/exite-3.png' );?>" />
											        </label>
										        </li>

										        <li>
											        <label>
											            <input type="radio" id="<?php echo $this->plugin_name; ?>-icon-type-4" name="<?php echo $this->plugin_name; ?>[exit-button-icon]" value="exite-4" <?php checked($exit_button_icon, "exite-4"); ?> />
											        	<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/exite-4.png' );?>" />
											        </label>
										        </li>

										        <li>
											        <label>
											            <input type="radio" id="<?php echo $this->plugin_name; ?>-icon-type-5" name="<?php echo $this->plugin_name; ?>[exit-button-icon]" value="exite-5" <?php checked($exit_button_icon, "exite-5"); ?> />
											        	<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/exite-5.png' );?>" />
											        </label>
										        </li>

										        <li>
											        <label>
											            <input type="radio" id="<?php echo $this->plugin_name; ?>-icon-type-6" name="<?php echo $this->plugin_name; ?>[exit-button-icon]" value="exite-6" <?php checked($exit_button_icon, "exite-6"); ?> />
											        	<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/exite-6.png' );?>" />
											        </label>
										        </li>

									        <ul>
											

				                        </td>
								    </tr>
								

								</tbody>
							</table>

							<h3 class="bonjour-bar__content-title">styling options</h3>
							<table class="bonjour-bar__content-right-table">
						    	<tbody>

						    		<tr>
						    			<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Select background type', $this->plugin_name); ?></td>
						    			<td>
							    		     <select id="<?php echo $this->plugin_name; ?>-background-type" name="<?php echo $this->plugin_name; ?>[background-type]" >
												<option value="color" <?php selected($background, "color"); ?>> Background color </option>
					   							<option value="gradient" <?php selected($background, "gradient"); ?>> Background Gradient</option>
					   							<option value="image" <?php selected($background, "image"); ?>> Background Image</option>
					                        </select>
				                        </td>
								    </tr>

						             <tr class="bonjour-bar__background-image bonjour-bar__hide-option animation">
						             	<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Background Image', $this->plugin_name);?></td>
						             	<td>
							                <label for="<?php echo $this->plugin_name;?>-bg_image">
							                    <input type="hidden" id="bonjour-bg-image-id" name="<?php echo $this->plugin_name;?>[bg-image]" value="<?php echo $bg_image; ?>" />
							                    <input id="upload_bg_image_button" type="button" class="button" value="<?php _e( 'Upload Image +', $this->plugin_name); ?>" />
							                </label>
							                <div id="upload_image_preview" class="bonjour-upload-preview <?php if(empty($bg_image)) echo 'hidden'?>">
							                    <img src="<?php echo $bg_image_url; ?>" />
							                    <button id="bonjour-delete_image_button" class="bonjour-delete-image"><span class="dashicons dashicons-no"></span></button>
							                </div>
							            </td>
						            </tr>

						            <tr class="wp_cbf-admin-colors bonjour-bar__bg-color bonjour-bar__hide-option animation">
						            	<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Bar Background Color', $this->plugin_name);?></td>
						            	<td>
							                <label for="<?php echo $this->plugin_name;?>-bg-color">
							                    <input type="text" class="<?php echo $this->plugin_name;?>-color-picker" id="<?php echo $this->plugin_name;?>-bg-color" name="<?php echo $this->plugin_name;?>[bg-color]"  value="<?php echo $bg_color;?>"  />
							                </label>
						                </td>
						            </tr>

						           	<tr class="wp_cbf-admin-colors bonjour-bar__gradient-color bonjour-bar__hide-option animation">
						            	<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Background Gradient Color One', $this->plugin_name);?></td>
						            	<td>
							                <label for="<?php echo $this->plugin_name;?>-gradient-color-1">
							                    <input type="text" class="<?php echo $this->plugin_name;?>-color-picker" id="<?php echo $this->plugin_name;?>-gradient-color-1" name="<?php echo $this->plugin_name;?>[gradient-color-1]"  value="<?php echo $gradient_color_1;?>"  />
							                </label>
						                </td>
						            </tr>

						            <tr class="wp_cbf-admin-colors bonjour-bar__gradient-color bonjour-bar__hide-option animation">
						            	<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Background Gradient Color Two', $this->plugin_name);?></td>
						            	<td>
							                <label for="<?php echo $this->plugin_name;?>-gradient-color-2">
							                    <input type="text" class="<?php echo $this->plugin_name;?>-color-picker" id="<?php echo $this->plugin_name;?>-gradient-color-2" name="<?php echo $this->plugin_name;?>[gradient-color-2]"  value="<?php echo $gradient_color_2;?>"  />
							                </label>
						                </td>
						            </tr>

				        		</tbody>
				    		</table>	    
		                </div>
		            </div>
				</div>

				<div class="bonjour-bar__content-table">
			    	<div class="bonjour-bar__content-block clear-after">

				    	<div class="bonjour-bar__content-left cookies-option-left">
				    		<div class="rounded-clock">
				    			<p>When the user click exite button the bar will be shown again after </p>
				    			<h3 id="cookies-value">Select an option</h3>
				    		</div>
				    			
				    	</div>

				    	<div class="bonjour-bar__content-right cookies-option-right">
				    		<h3 class="bonjour-bar__content-title">Cookies Options</h3>
				    		<table class="bonjour-bar__content-right-table">
				    			<tbody>	

						    		<tr>
										<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Deactivate Cookies', $this->plugin_name); ?></td>
										<td>
									        <label for="<?php echo $this->plugin_name; ?>-cookies-non">
									            <input type="radio" id="<?php echo $this->plugin_name; ?>-cookies-non" name="<?php echo $this->plugin_name; ?>[cookies_opt]" value="cookies-non" <?php checked($cookies_opt, "cookies-non"); ?> />
									        </label>
								        </td>
								    </tr>
								    <tr>
										<td class="bonjour-bar__content-option-name"><?php esc_attr_e('New Browser Sesson', $this->plugin_name); ?></td>
										<td>
									        <label for="<?php echo $this->plugin_name; ?>-cookies-new-sesson">
									            <input type="radio" id="<?php echo $this->plugin_name; ?>-cookies-new-sesson" name="<?php echo $this->plugin_name; ?>[cookies_opt]" value="cookies-new-sesson" <?php checked($cookies_opt, "cookies-new-sesson"); ?> />
									        </label>
								        </td>
								    </tr>

								    <tr>
										<td class="bonjour-bar__content-option-name"><?php esc_attr_e('Specific Number Of Days', $this->plugin_name); ?> </td>
										<td>
									        <label for="<?php echo $this->plugin_name; ?>-cookies-days">
									            <input type="radio" id="<?php echo $this->plugin_name; ?>-cookies-days" name="<?php echo $this->plugin_name; ?>[cookies_opt]" value="cookies-days" <?php checked($cookies_opt, "cookies-days"); ?> />
									        </label>
									        <input type="number" class="regular-text" id="<?php echo $this->plugin_name;?>-cookies-days-number" name="<?php echo $this->plugin_name;?>[cookies-days-number]" value="<?php if(!empty($cookies_days_number)) echo $cookies_days_number;?>"/>
								        </td>
								         
								    </tr>
								   


								</tbody>
							</table>


				    	</div>

				    </div>
				</div>

				<div class="bonjour-bar__content-table">
			    	<div class="bonjour-bar__content-block clear-after">

				    	<div class="bonjour-bar__content-left content-option-left clear-after">
				    		<div class="content-type">
				    			<h3>Select Your Content Type </h3>
				    		</div>
				    		<table class="bonjour-bar__content-right-table bonjour-bar__content-type">
						    	<tbody>
						    		<tr>
						    			<td>
							    		     <select id="<?php echo $this->plugin_name; ?>-content-type" name="<?php echo $this->plugin_name; ?>[content-type]" >
												<option value="email" <?php selected($content_type, "email"); ?>> Email Subscription </option>
					   							<option value="call-action" <?php selected($content_type, "call-action"); ?>> Call To Action Button </option>
					   							<option value="text" <?php selected($content_type, "text"); ?>> Wordpress Editor</option>
					                        </select>
				                        </td>
								    </tr>
								<tbody>
							</table>
				    		
				    		 
				    	
				    	</div>

				    	<div class="bonjour-bar__content-right">
				    		<h3 class="bonjour-bar__content-title">Bar Content</h3>
				    		<table class="bonjour-bar__content-right-table">
				    			<tbody class="bonjour-bar__content-content">
									
									<!-- wp editor -->
						    		<tr class="content-type-editor zero-opacity">
						    			<td>
											<?php wp_editor( $content_text ,"content-text", $settings = array('textarea_name'=> ''.$this->plugin_name.'[content-text]', 'textarea_rows' => 10 ) ); ?> 
								    	</td>
								    </tr>
									
									<!-- Call to action -->
								    <tr class="content-type-call-action zero-opacity">
								    	<td>							 
								    		<?php esc_attr_e('Write your description !', $this->plugin_name); ?>
								    	</td>
								    </tr>

								    <tr class="content-type-call-action zero-opacity">
								    	<td>
								    		<textarea rows="7" id="<?php echo $this->plugin_name;?>call-action-descr" name="<?php echo $this->plugin_name;?>[call-action-descr]"><?php echo $call_action_descr; ?></textarea>
										</td>
									</tr>



									<tr class="content-type-call-action zero-opacity">
								    	<td>							 
								    		<?php esc_attr_e('Button Url', $this->plugin_name); ?>
								    	</td>
								    </tr>

								    <tr class="content-type-call-action zero-opacity">
								    	<td>
								    		<input type="url" id="<?php echo $this->plugin_name;?>call-action-url" name="<?php echo $this->plugin_name;?>[call-action-url]" value="<?php echo $call_action_url;?>" />
										</td>
									</tr>


									<tr class="content-type-call-action zero-opacity">
								    	<td>							 
								    		<?php esc_attr_e('Button Text', $this->plugin_name); ?>
								    	</td>
								    </tr>

								    <tr class="content-type-call-action zero-opacity">
								    	<td>
								    		<input type="text" id="<?php echo $this->plugin_name;?>call-action-text" name="<?php echo $this->plugin_name;?>[call-action-text]" value="<?php echo $call_action_text;?>" />
										</td>
									</tr>


									<!-- Email subscruption -->
									<tr class="content-type-email zero-opacity">
								    	<td>							 
								    		<?php esc_attr_e('Your Description', $this->plugin_name); ?>
								    	</td>
								    </tr>
									<tr class="content-type-email zero-opacity">
								    	<td>
								    		<textarea rows="4" id="<?php echo $this->plugin_name;?>email-text" name="<?php echo $this->plugin_name;?>[email-text]"><?php echo $email_text; ?></textarea>
										</td>
									</tr>

									
									<tr class="content-type-email zero-opacity">
								    	<td>							 
								    		<?php esc_attr_e('Email Subscription Form Code', $this->plugin_name); ?>
								    	</td>
								    </tr>
									<tr class="content-type-email zero-opacity">
								    	<td>
								    		<textarea rows="4" id="<?php echo $this->plugin_name;?>email-shortcode" name="<?php echo $this->plugin_name;?>[email-shortcode]"><?php echo $email_shortcode; ?></textarea>
										</td>
									</tr>
														  							    
								 

								</tbody>
							</table>


				    	</div>

				    </div>
				</div>

		</div>
		<footer class="bonjour-bar__footer">
			<?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
	    </footer>
	
	</div>

</form>