<?php

class NewsletterWidget extends WP_Widget {

	function __construct() {
		parent::__construct('newsletterWidget', 'Newsletter', array('description' => 'Newsletter form'));
	}

	public function widget($args, $instance) {
		echo $args['before_widget'];
        echo $args['before_title'] . 'Newsletter' . $args['after_title'];

        include 'newsletter/form.php';
        include 'newsletter/save.php';

		echo $args['after_widget'];
	}

    public function save_settings($settings){
        global $wpdb;

        $query = "
            CREATE TABLE wp_newsletter (
                id INTEGER PRIMARY KEY AUTO_INCREMENT,
                email VARCHAR(255) NOT NULL
            );
        ";

        try{
            $wpdb->query($query);
        }catch(\Exception $ex){

        }

        update_option($this->option_name, $settings);
    }

}

function wpb_load_widget() {
	register_widget('newsletterWidget');
}
add_action('widgets_init', 'wpb_load_widget');
