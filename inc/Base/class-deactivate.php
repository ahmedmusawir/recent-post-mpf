<?php 

/**
* PLUGIN DEACTIVATION CLASS
*/
class MPFRecentPostDeactivate
{
	function __construct()
	{
		# code...
	}

	public static function deactivate() {

		flush_rewrite_rules();

	}

}
