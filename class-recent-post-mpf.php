<?php 
/**
 * Widget Main Class
 */
class MPFRecentPostWidget
{
	
	function __construct()
	{
		add_action( 'widgets_init', array( $this, 'mpf_recent_post_widget' ) );
	}

	public function mpf_recent_post_widget()	
	{
		register_widget( 'MPFRecentPostWidgetBody' );
	}
}