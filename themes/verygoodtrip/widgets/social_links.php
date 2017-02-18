<?php

class SocialWidget extends WP_Widget {

	function __construct() {
		parent::__construct('socialWidget', 'Social Network', array('description' => 'Social Widget'));
	}

	public function widget($args, $instance) {
		echo $args['before_widget'];

        include 'social_links/div.php';

		echo $args['after_widget'];
	}

    // Widget Backend
    public function form($instance) {
		$twitter = '';
        if (isset($instance['twitter'])) {
            $twitter = $instance['twitter'];
        }

		$instagram = '';
		if (isset($instance['instagram'])) {
			$instagram = $instance['instagram'];
		}

        include 'social_links/admin_form.php';
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['twitter'] = (!empty( $new_instance['twitter'])) ? strip_tags($new_instance['twitter']) : '';
        $instance['instagram'] = (!empty( $new_instance['instagram'])) ? strip_tags($new_instance['instagram']) : '';

        return $instance;
    }
}

function load_social_link() {
	register_widget('socialWidget');
}
add_action('widgets_init', 'load_social_link');
