<?php require_once 'nextchat-setting-view-styles.php'; ?>

<div class="wrapper-setting-nextchat">
    <br>
    <div class="">
        <h1>NextChat Settings</h1>
    </div>

    <br><br>
    
    <form name="post" action="options.php" method="post" id="post" autocomplete="off">
        <?php settings_fields( 'my-option' ); ?>
        
        <div class="">
            <h3>Enter title</h3>
            <div class="">
                <div class="wrap-input">
                    <input type="text" maxlength="40" name="title" value="<?php echo esc_attr($option['title']); ?>">
                </div>
                <p class="next-mgl-10"><i>*must not exceed 40 characters</i></p>
            </div>
        </div>

        <br><br><br>

        <div class="">
            <h3>Enter chat chanel</h3>
            <b>If no channels are filled in, the contact button will not be displayed on the frontend</b>
            <br><br>
            <div class="wrap-nextchat-row">
                <?php $chanel = $option['chanel'];
                    foreach ($list as $key => $value){ ?>
                    <div class="wrap-nextchat-col">
                        <br>
                        <label for=""><?php echo esc_attr($value['label']); ?></label>
                        <div class="wrap-input">
                            <img class="ic-next-chanel next-mgr-10" src="<?php echo esc_url(NEXTCHAT_PLUGIN_URL.'images/'.$value['icon_path'] .'.png'); ?>" alt="">
                            <input type="text" name="chanel[]" value="<?php echo esc_attr($chanel[$value['name']]['address']); ?>">
                        </div>
                        <p class="next-mgl-60">*<i><?php echo esc_html($value['example']); ?></i></p>
                    </div>
                <?php } ?>
            </div>
        </div>

        <br><br><br>

        <div class="">
            <h3>Choose Icon</h3>
            <div class="">
                <?php foreach ($icon as $item){
                        $checked_ic = null;
                        if($item['ic_path'] == $option['icon']){
                            $checked_ic = 'checked';
                        }
                    ?>
                    <div class="wrap-icon">
                        <p class="ic-nextchat">
                            <img src="<?php echo esc_url(NEXTCHAT_PLUGIN_URL.'images/'.$item['ic_path'].'.png'); ?>" alt="">
                        </p>
                        <input id="ic-<?php echo esc_attr($item['name']); ?>" type="radio" name="icon" <?php echo $checked_ic; ?> value="<?php echo esc_attr($item['ic_path']); ?>">
                        <label for="ic-<?php echo esc_attr($item['name']); ?>" class="tick-mask"></label>
                        <label for="ic-<?php echo esc_attr($item['name']); ?>"><?php echo esc_html($item['name']); ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>

        <br><br><br>

        <div class="">
            <h3>Choose color</h3>
            <br>
            <div class="">
                <?php foreach ($color as $item){
                    $checked_cl = null;
                    if($item['cl_code'] == $option['color']){
                        $checked_cl = 'checked';
                    } ?>
                    <div class="wrap-icon">
                        <span style="background: <?php echo esc_attr($item['cl_code']); ?>" class="thumb-color"></span>
                        <input id="cl-<?php echo esc_attr($item['name']); ?>" type="radio" name="color" <?php echo $checked_cl; ?> value="<?php echo esc_attr($item['cl_code']); ?>">
                        <label for="cl-<?php echo esc_attr($item['name']); ?>" class="tick-mask"></label>
                        <label for="cl-<?php echo esc_attr($item['name']); ?>"><?php echo esc_html($item['name']); ?></label>
                        <br><br>
                    </div>
                <?php } ?>
            </div>
        </div>

        <br><br><br>

        <div class="">
            <h3>Enter local</h3>
            <div class="">
                <h4>Choose end enter vertical:</h4>
                <div class="">
                    <?php 
                        $checked_t = null;
                        $checked_b = null;
                        if($option['tb'] == 'top'){
                            $checked_t = 'checked';
                        }else{
                            $checked_b = 'checked';
                        };
                    ?>

                    <span>
                        <input id="top" type="radio" name="tb" <?php echo $checked_t; ?> value="top">
                        <label for="top" class="tick-mask"></label>
                        <label for="top">Top</label>
                    </span>
                    <span>
                        <input id="bottom" type="radio" name="tb" <?php echo $checked_b; ?> value="bottom">
                        <label for="bottom" class="tick-mask"></label>
                        <label for="bottom">Bottom</label>
                    </span>
                </div>
                <div class="">
                    <br>
                    <div class="wrap-input">
                        <input required min="10" max="250" type="number" name="tb_coor" value="<?php echo esc_attr($option['tb_coor']); ?>">
                        <label class="next-mgl-10" for="">px</label>
                    </div>
                    <p class="next-mgl-10"><i>*locate margin. the lowest is 10px and the maximum is 250px</i></p>
                </div>
            </div>

            <br><br>

            <div class="">
                <h4>Choose end enter horizontal:</h4>
                <div class="">
                    <?php 
                        $checked_l = null;
                        $checked_r = null;
                        if($option['lr'] == 'left'){
                            $checked_l = 'checked';
                        }else{
                            $checked_r = 'checked';
                        }
                    ?>
                    
                    <span>
                        <input id="left" type="radio" name="lr" <?php echo $checked_l; ?> value="left">
                        <label for="left" class="tick-mask"></label>
                        <label for="left">Left</label>
                    </span>
                    <span>
                        <input id="right" type="radio" name="lr" <?php echo $checked_r; ?> value="right">
                        <label for="right" class="tick-mask"></label>
                        <label for="right">Right</label>
                    </span>
                    <div class="">
                    <div class="wrap-input">
                        <input required min="10" max="50" type="number" name="lr_coor" value="<?php echo esc_attr($option['lr_coor']); ?>">
                        <label class="next-mgl-10" for="">px</label>
                    </div>
                    <p class="next-mgl-10"><i>*locate margin. the lowest is 10px and the maximum is 50px</i></p>
                </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="">
            <h3>Enter size</h3>
            <div class="">
                <div class="wrap-input">
                    <input required min="40" max="80" type="number" name="size" value="<?php echo esc_attr($option['size']); ?>">
                    <label class="next-mgl-10" for="">px</label>
                </div>
                <p class="next-mgl-10"><i>*Determine the size of the icon. 40px largest lowest 80px</i></p>
            </div>
        </div>

        <br><br><br>

        <button type="button" style="background: #ff7474;" class="save-nextchat-reset">Reset</button>
        <button type="submit" style="background: <?php echo esc_attr($option['color']); ?>">Save Change</button>

        <br><br><br><br><br>
    </form>
</div>



