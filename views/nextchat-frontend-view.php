<?php if($check_chanel == 1){ ?>
    <div 
        class="wrapper-nextchat-plugin-view"
        style="<?php echo esc_attr($option['lr'].':'.$option['lr_coor'].'px;'.$option['tb'].':'.$option['tb_coor'].'px;'); ?>"
    >
        <div class="wrapper-position-nextchat-plugin">
            
            <div 
                class="default-button"
                style="<?php echo esc_attr('height:'.$option['size'].'px; width:'.$option['size'].'px; background:'.$option['color']); ?>;"
            >
                <img src="<?php echo esc_url(NEXTCHAT_PLUGIN_URL.'images/'.$option['icon'].'.png'); ?>" alt="">

                <span 
                    style="<?php echo esc_attr($option['lr'].': calc(100% + 10px); margin-'.$option['lr'].': -15px; background: '.$option['color']); ?>"
                    class="title"
                >
                    <?php echo esc_html($option['title']); ?>
                </span>
            </div>
            <div 
                class="collapse-button" 
                style="<?php echo esc_attr($option['tb'].': 100%; padding-'.$option['tb'].': 10px; left: calc(50% - '.($option['size']/100*85/2).'px)'); ?>"
            >
                <?php foreach ($option['chanel'] as $item => $value) {
                    if($value['address'] != null && $value['address'] != ''){  $value['type']; ?>
                        <div class="wrap-chanel-button">
                            <a 
                                class="chanel-button"
                                target="<?php echo ($value['type'] == 0) ? esc_attr('_blank') : ''; ?>"
                                rel="noopener noreferrer"
                                href="<?php echo $value['prefix'].$value['address']; ?>"
                                style="<?php echo esc_attr('height:'.($option['size']/100*85).'px; width:'.($option['size']/100*85). 'px'); ?>;"
                            >
                                <img src="<?php echo esc_url(NEXTCHAT_PLUGIN_URL.'images/'.$item.'.png'); ?>" alt="">
                            </a>
                            <span 
                                style="<?php echo esc_attr($option['lr'].': calc(100% + 10px); margin-'.$option['lr'].': -15px;'); ?>"
                                class="sub-title"
                            >
                                <?php echo esc_html($item); ?>
                            </span>
                        </div>
                    <?php }
                } ?>
            </div>

        </div>
    </div>
<?php } ?>