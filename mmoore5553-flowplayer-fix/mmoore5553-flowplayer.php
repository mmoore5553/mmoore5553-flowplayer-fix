<?php
/**
 * Plugin Name: mmoore5553 flowplayer fix
 * Plugin URI: mmoore5553@gmail.com
 * Description: This plugin adds allows you to use older flowplayer and new version of flowplayer.
 * Version: 1.0.0
 * Author: Matthew Moore
 * Author URI: mmoore5553@gmail.com
 * License: GPL2
 */
 
 add_action( 'loop_start', 'flowplayer_fix' );
 
 function flowplayer_fix() {
	$currentdate = date("M-d-Y",mktime(0,0,0,9,04,2015)) ;
	//echo "this is the " . $currentdate;
	$postdate = get_the_date('M-d-Y');
	//echo "postdate" .$postdate;
	$today = strtotime($currentdate);
    $expiration_date = strtotime($postdate);
	if ($expiration_date <= $today) { ?>
		<script type="text/javascript" src="http://www.waybig.com/blog/flwplayerfiles/flowplayer-3.2.6.min.js"></script> 
    <?php
	}
 }
 ?>