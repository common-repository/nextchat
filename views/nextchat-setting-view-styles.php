<style>
    .wrap-nextchat-row{
        display: block;
        width: 100%;
    }
    .wrap-nextchat-col{
        width: 48%;
        display: inline-block;
    }
    @media only screen and (max-width: 900px) {
        .wrap-nextchat-col{
            width: 100%;
            display: block;
        }
    }
    .next-mgl-10{
        margin-left: 10px;
    }
    .next-mgl-60{
        margin-left: 60px;
    }
    .next-mgr-10{
        margin-right: 10px;
    }
    .wrapper-setting-nextchat .wrap-icon{
        display: inline-block;
        align-items: center;
    }
    .wrapper-setting-nextchat label{
        display: inline-block;
        margin-bottom: 10px;
        min-width: 100px;
    }
    .wrapper-setting-nextchat .wrap-input{
        display: flex;
        align-items: center;
        font-weight: 600;
        margin-right: 10px;
        max-width: 400px;
    }
    .wrapper-setting-nextchat .wrap-input img.ic-next-chanel{
        border-radius: 50%;
        height: 40px;
        width: 40px;
    }
    .wrapper-setting-nextchat input[type='text'], input[type='number']{
        border-radius: 30px;
        height: 40px;
        padding: 0px 20px;
        width: 100%;
        display: block;
    }
    .wrapper-setting-nextchat input[type='radio']{
        display: none;
    }
    .wrapper-setting-nextchat input[type='radio']:checked ~ .tick-mask:after,
    .wrapper-setting-nextchat input[type='checkbox']:checked ~ .tick-mask:after{
        content: '';
        display: block;
        width: 12px;
        height: 12px;
        margin-top: 6px;
        margin-left: 6px;
        border-radius: 50%;
        background: #212121;
    }
    .wrapper-setting-nextchat .tick-mask{
        min-width: unset;
        height: 24px;
        width: 24px;
        border-radius: 50%;
        border: 2px solid #757575;
        display: inline-block;
        margin-right: 10px;
    }
    .wrapper-setting-nextchat .thumb-color{
        width: 40px;
        height: 15px;
        margin-right: 5px;
        display: inline-block;
    }
    .wrapper-setting-nextchat .ic-nextchat img{
        border-radius: 5px;
        height: 50px;
        width: 50px;
        padding: 20px;
        background: #bebebe;
    }
    .wrapper-setting-nextchat button{
        height: 40px;
        border-radius: 20px;
        padding: 0px 30px;
        text-transform: uppercase;
        font-weight: bold;
        border: none;
        color: #fff;
        box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    }
</style>