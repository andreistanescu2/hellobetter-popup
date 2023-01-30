<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.andreistanescu.com
 * @since      1.0.0
 *
 * @package    Hellobetter_Popup
 * @subpackage Hellobetter_Popup/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Hellobetter_Popup
 * @subpackage Hellobetter_Popup/public
 * @author     Andrei Stanescu <contact@andreistanescu.com>
 */
class Hellobetter_Popup_Public {

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

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hellobetter_Popup_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hellobetter_Popup_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		if(is_singular( 'post' )) {
		 	wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'dist/index.css', array(), $this->version, 'all' );
		}
		

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
		 * defined in Hellobetter_Popup_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hellobetter_Popup_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		/**
		 * Check if default blog post and include the popup script
		 */		
		if(is_singular( 'post' )) {				
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'dist/index.js', array( 'jquery' ), $this->version, false );				
			/**
			 * Localize the script with additional data in order to use it later
			 */						
	        wp_localize_script( $this->plugin_name, 'hellobetter_popup', [
		            'form_id'	=> 'hellobetter_popup',
		            'action' 	=> 'nl_subscribe',
		            'ajaxUrl' 	=> admin_url('admin-ajax.php'),
		            'template' 	=> $this->_load_template('popup.php'),
		            'template_success' => $this->_load_template('popup_success.php'),
		            'nonce' 	=> wp_create_nonce('nl_subscribe'),
	        	]
	        );			
		}
	}
	
	/**
	 * Custom hook for returning plugin specific images
	 * 
	 * @since     1.0.0
	 * @return    string    The plugin image URL
	 */		
	public function get_media_url($img = '') {
		if(!empty($img)) {
			echo plugin_dir_url( __FILE__ ) . 'img/'.$img;
		}
	}
	
	/**
	 * Custom template loader
	 * 
	 * @since     1.0.0
	 * @return    string    The required template
	 */		
	private function _load_template($template = '') {
		if(!empty($template)) {
			ob_start();
			include(plugin_dir_path( dirname( __FILE__ ) ) . 'public' . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . $template);
			return ob_get_clean();
		}
		
		return FALSE;
	}	

}
