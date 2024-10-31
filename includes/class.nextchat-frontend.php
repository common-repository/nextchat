<?php
if (!function_exists('add_action')) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class Nextchat_Frontend {
    
    protected $option;

    public function __construct(){
        $this->option = get_option('nextchat_setting');
        
        add_action('wp_enqueue_scripts', function(){
            wp_register_script('nextchat-js', NEXTCHAT_PLUGIN_URL . 'scripts/js/functions.js', ['jquery']);
            wp_localize_script('nextchat-js', 'nextchat', [
                'url' => admin_url('admin-ajax.php')
            ]);
            wp_enqueue_script('nextchat-js');
        });

        add_action('wp_enqueue_scripts', function(){
            wp_register_style('nextchat-css', NEXTCHAT_PLUGIN_URL . 'scripts/css/styles.css');
            wp_enqueue_style('nextchat-css');
        });
        
        add_action('wp_footer', [$this, 'create_form_nextchat']);
    }

    public function create_form_nextchat(){
        $option = $this->option;
        $check_chanel = 0;
        
        foreach ($option['chanel'] as $key) {
            if($key['address'] != null && $key['address'] != ''){
                $check_chanel = 1;
                break;
            }
        };

        require(NEXTCHAT_PLUGIN_DIR . 'views/nextchat-frontend-view.php');
    }
}