<?php 

/**
* PLUGIN ACTIVATION CLASS
*/
class MPFRecentPostActivate
{
	function __construct()
	{
		# code...
	}

	public static function activate() {

		flush_rewrite_rules();
	}
}
