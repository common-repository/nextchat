<?php

if (!function_exists('add_action')) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}


class Nextchat {
    public function __construct(){
        $nextchat_setting = new Nextchat_Setting;
        $nextchat_frontend = new Nextchat_Frontend;
    }

    public function activation_hook(){

    }

    public function deactivation_hook(){
        
    }
}