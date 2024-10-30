<?php
/*
Plugin Name: Magnumchat integration
Plugin URI: http://magnumchat.com
Description: Magnumchat plugin adds Magnumchat script on website.
Author: Magnumchat	
Version: 1.0
Author URI: http://magnumchat.com
License: © Copyright 2013 - 2014 Magnumchat. All rights reserved.
*/


/*Display javascript just before th closign body tag on each page of the webstie. */
function magnumchat() {
    echo '<script type="text/javascript" src="http://magnumchat.com/MasterServer/Public/ScriptProvider.php"></script>';
}
add_action('wp_footer', 'magnumchat', 2000);



?>