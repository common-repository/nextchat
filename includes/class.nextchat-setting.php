<?php
if (!function_exists('add_action')) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class Nextchat_Setting {

    protected $option;

    protected $default_setting_nextchat = array(
        'title' => 'Contact me',
        'chanel' => [],
        'icon' => 'block',
        'color' => '#e91e63',
        'tb' => 'bottom',
        'tb_coor' => 50,
        'lr' => 'right',
        'lr_coor' => 20,
        'size' => 50,
    );

    protected $list = array(
        [
            'name' => 'message',
            'label' => 'Message',
            'icon_path' => 'message',
            'type' => 0,
            'prefix' => 'http://m.me/',
            'example' => 'id message page - example: 1234567890'
        ],[
            'name' => 'instagram',
            'label' => 'Instagram',
            'icon_path' => 'instagram',
            'type' => 0,
            'prefix' => 'https://www.instagram.com/',
            'example' => 'username - example: koodinh'
        ],[
            'name' => 'sms',
            'label' => 'SMS',
            'icon_path' => 'sms',
            'type' => 1,
            'prefix' => 'sms:+',
            'example' => 'phone number - example: 1234567890'
        ],[
            'name' => 'skype',
            'label' => 'Skype',
            'icon_path' => 'skype',
            'type' => 1,
            'prefix' => 'https://msng.link/sk/',
            'example' => 'username - example: koodinh'
        ],[
            'name' => 'whatsapp',
            'label' => 'Whatsapp',
            'icon_path' => 'whatsapp',
            'type' => 0,
            'prefix' => 'https://wa.me/',
            'example' => 'phone number - example: 84868271095'
        ],[
            'name' => 'telegram',
            'label' => 'Telegram',
            'icon_path' => 'telegram',
            'type' => 0,
            'prefix' => 'https://telegram.me/',
            'example' => 'username - example: koodinh'
        ],[
            'name' => 'line',
            'label' => 'Line',
            'icon_path' => 'line',
            'type' => 0,
            'prefix' => 'http://line.me/ti/p/',
            'example' => 'line id - example: 1234567890'
        ],[
            'name' => 'wechat',
            'label' => 'Wechat',
            'icon_path' => 'wechat',
            'type' => 0,
            'prefix' => 'https://msng.link/wc/',
            'example' => 'user name - example: koodinh'
        ],[
            'name' => 'twitter',
            'label' => 'Twitter',
            'icon_path' => 'twitter',
            'type' => 0,
            'prefix' => 'https://twitter.com/messages/compose?recipient_id=',
            'example' => 'twitter id - example: 1234567890'
        ],[ 
            'name' => 'map',   
            'label' => 'Map',
            'icon_path' => 'map',
            'type' => 0,
            'prefix' => 'https://goo.gl/maps/',
            'example' => 'google local id - example: wddZBnG3JLd4iCuy8'
        ],[
            'name' => 'phone',
            'label' => 'Phone',
            'icon_path' => 'phone',
            'type' => 1,
            'prefix' => 'tel:+',
            'example' => 'example: 1234567890'
        ],[
            'name' => 'email',
            'label' => 'Email',
            'icon_path' => 'email',
            'type' => 1,
            'prefix' => 'mailto:',
            'example' => 'email address - example: demo@gmail.com'
        ],[
            'name' => 'snapchat',
            'label' => 'Snapchat',
            'icon_path' => 'snapchat',
            'type' => 0,
            'prefix' => 'https://www.snapchat.com/add/',
            'example' => 'username - example: koodinh'
        ],[
            'name' => 'linkedin',
            'label' => 'Linkedin',
            'icon_path' => 'linkedin',
            'type' => 0,
            'prefix' => 'https://www.linkedin.com/',
            'example' => 'linkedin id - example: koodinh-123456789'
        ],[
            'name' => 'viber',
            'label' => 'Viber',
            'icon_path' => 'viber',
            'type' => 0,
            'prefix' => 'https://msng.link/vi/',
            'example' => 'phone number - example: +12345678901'
        ],[
            'name' => 'vkontakte',
            'label' => 'Vkontakte',
            'icon_path' => 'vkontakte',
            'type' => 0,
            'prefix' => 'https://msng.link/vk/',
            'example' => 'username - example: koodinh'
        ],[
            'name' => 'waze',
            'label' => 'Waze',
            'icon_path' => 'waze',
            'type' => 0,
            'prefix' => 'https://waze.com/ul/',
            'example' => 'waze id - example: 1234hgf890'
        ],[
            'name' => 'link',
            'label' => 'Link',
            'icon_path' => 'link',
            'type' => 0,
            'prefix' => 'http://www.',
            'example' => 'your website url - example: company.com'
        ]
    );

    protected $color = array(
        [
            'name' => 'blue',
            'cl_code' => '#03a9f4',
        ],[
            'name' => 'purple',
            'cl_code' => '#673ab7',
        ],[
            'name' => 'pink',
            'cl_code' => '#e91e63',
        ],[
            'name' => 'red',
            'cl_code' => '#f44336',
        ],[
            'name' => 'orange',
            'cl_code' => '#ff5722',
        ],[
            'name' => 'yellow',
            'cl_code' => '#ffeb3b',
        ],[
            'name' => 'green',
            'cl_code' => '#4caf50',
        ],[
            'name' => 'black',
            'cl_code' => '#212121',
        ]
    );

    protected $icon = array(
        [
            'name' => 'Stroke',
            'ic_path' => 'stroke',
        ],[
            'name' => 'Block',
            'ic_path' => 'block',
        ],[
            'name' => 'Smooth',
            'ic_path' => 'smooth',
        ],[
            'name' => 'Double',
            'ic_path' => 'double',
        ]
    );

    public function __construct(){

        $default_chanel = [];

        foreach ($this->list as $key => $value) {
            $temp = ['address' => '', 'prefix' => $value['prefix'], 'type' => $value['type']];
            array_push($default_chanel, $temp);
        };

        $this->default_setting_nextchat['chanel'] = $default_chanel;

        if(get_option('nextchat_setting') == false){
            add_option('nextchat_setting', $this->default_setting_nextchat);
        }

        $this->option = get_option('nextchat_setting');

        add_action('admin_init', [$this, 'nextchat_register_setting']);

        add_action('admin_menu', function(){
            add_submenu_page(
                'options-general.php',
                'Nextchat Setting',
                'Nextchat Settings',
                'manage_options',
                'Nextchat',
                [$this, 'nextchat_create_page']
            );
        });

        add_action('admin_enqueue_scripts', function(){
            wp_register_script('nextchat-js', NEXTCHAT_PLUGIN_URL . 'scripts/js/functions.js', ['jquery']);
            wp_localize_script('nextchat-js', 'nextchat', [
                'url' => admin_url('admin-ajax.php')
            ]);
            wp_enqueue_script('nextchat-js');
        });

        add_action('wp_ajax_nextchat_reset_setting_default', function(){
            delete_option('nextchat_setting');
        });
    }

    public function nextchat_create_page(){
        $option = $this->option;
        $list = $this->list;
        $icon = $this->icon;
        $color = $this->color;
        require(NEXTCHAT_PLUGIN_DIR . 'views/nextchat-setting-view.php');
    }

    public function nextchat_register_setting(){
        register_setting(
            'my-option',
            'nextchat_setting',
            [$this, 'nextchat_save_setting']
        );
    }

    public function nextchat_save_setting($input){
        if(isset($_POST['title'])){
            $new_option['title'] = sanitize_text_field($_POST['title']);
        }else{
            $new_option['title'] = $this->default_setting_nextchat['title'];
        }

        if(isset($_POST['icon'])){
            $new_option['icon'] = sanitize_text_field($_POST['icon']);
        }else{
            $new_option['icon'] = $this->default_setting_nextchat['icon'];
        }

        if(isset($_POST['color'])){
            $new_option['color'] = sanitize_hex_color($_POST['color']);
        }else{
            $new_option['color'] = $this->default_setting_nextchat['color'];
        }

        if(isset($_POST['tb'])){
            $new_option['tb'] = sanitize_text_field($_POST['tb']);
        }else{
            $new_option['tb'] = $this->default_setting_nextchat['tb'];
        }

        if(isset($_POST['tb_coor']) && is_numeric($_POST['tb_coor'])){
            $_POST['tb_coor'] = (int)$_POST['tb_coor'];
            if($_POST['tb_coor'] > 250){
                $_POST['tb_coor'] = 250;
            }
            if($_POST['tb_coor' < 10]){
                $_POST['tb_coor'] = 10;
            }
            $new_option['tb_coor'] = $_POST['tb_coor'];
        }else{
            $new_option['tb_coor'] = $this->default_setting_nextchat['tb_coor'];
        }

        if(isset($_POST['lr'])){
            $new_option['lr'] = sanitize_text_field($_POST['lr']);
        }else{
            $new_option['lr'] = $this->default_setting_nextchat['lr'];
        }

        if(isset($_POST['lr_coor']) && is_numeric($_POST['lr_coor'])){
            $_POST['lr_coor'] = (int)$_POST['lr_coor'];
            if($_POST['lr_coor'] > 50){
                $_POST['lr_coor'] = 50;
            }
            if($_POST['lr_coor'] < 10){
                $_POST['lr_coor'] = 10;
            }
            $new_option['lr_coor'] = $_POST['lr_coor'];
        }else{
            $new_option['lr_coor'] = $this->default_setting_nextchat['lr_coor'];
        }

        if(isset($_POST['size']) && is_numeric($_POST['size'])){
            $_POST['size'] = (int)$_POST['size'];
            if($_POST['size'] > 80){
                $_POST['size'] = 80;
            }
            if($_POST['size'] < 40){
                $_POST['size'] = 40;
            }
            $new_option['size'] = $_POST['size'];
        }else{
            $new_option['size'] = $this->default_setting_nextchat['size'];
        }

        if(isset($_POST['chanel'])){
            for ($i=0; $i < count($this->list); $i++) {
                $temp = $this->list[$i];
                $new_option['chanel'][$temp['name']] = [
                    'address' => sanitize_text_field($_POST['chanel'][$i]),
                    'prefix' =>  $temp['prefix'],
                    'type' => $temp['type']
                ];
            }
        }else{
            $new_option['chanel'] = $this->default_setting_nextchat['chanel'];
        }

		return $new_option;
    }

}