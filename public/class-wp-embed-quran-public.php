<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://kamalabs.com
 * @since      1.0.0
 *
 * @package    Wp_Embed_Quran
 * @subpackage Wp_Embed_Quran/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Embed_Quran
 * @subpackage Wp_Embed_Quran/public
 * @author     Mustafa Kamal <mustafakamal87@gmail.com>
 */
class Wp_Embed_Quran_Public {

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

	private function process_attributes($atts) {
		
		return array("chapter"=>20, "verses"=>12);
	}

	/**
	 * [quran surah="12" ayah="1"]
	 * [quran surah="12" ayah="1-10"]
	 * [quran surat="12" ayat="1"]
	 * [quran chapter="12" verse="1"]
	 * [quran 12:78]
	 * [qs 12:78]
	 */
	public function quran_shortcode( $atts ){
		// $attr = $this->process_attributes($atts);

		// http://api.alquran.cloud/ayah/2:255

		return "<div class='wpEmbedQuran' data-atts='".$atts[0]."' data-chapter='' data-verses=''>[Quran ".$atts[0]."]</div>";
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
		 * defined in Wp_Embed_Quran_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Embed_Quran_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-embed-quran-public.css', array(), $this->version, 'all' );

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
		 * defined in Wp_Embed_Quran_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Embed_Quran_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-embed-quran-public.js', array( 'jquery' ), $this->version, false );

	}

}
