<?php
        // define("URL_CSS","http://192.168.0.88/2016.8.30/mobile/css/");
        // define("URL_IMG","http://192.168.0.88/2016.8.30/mobile/images/");
        // define("URL_JS","http://192.168.0.88/2016.8.30/mobile/js/");
        define("URL_CSS","./css/");
        define("URL_IMG","./images/");
        define("URL_JS","./js/");
        ?>
<!DOCTYPE html>
<html>
    <head>
        <!--<meta name="renderer" content="webkit"/>-->
        <!--<meta content="yes" name="apple-mobile-web-app-capable"/>-->
        <!--<meta content="black" name="apple-mobile-web-app-status-bar-style"/>-->
        <meta charset="utf-8"/>
        <meta name="renderer" content="webkit" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>VRwedding</title>

        <link rel="stylesheet" href="<?php echo URL_CSS;?>swiper.min.css">
        <link rel="stylesheet" href="<?php echo URL_CSS;?>animate.min.css">
        <link rel="stylesheet" href="<?php echo URL_CSS;?>index.css">
    </head>
    <body>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- slider -->
                <section class="swiper-slide swiper-slide1 bg">
                    <div class="dear ani resize"
                         style="width:45px;height:18px;left:30px;top:200px; color: #F9D3BE"
                         swiper-animate-effect="fadeInLeft"
                         swiper-animate-duration="1s" swiper-animate-delay="0.5s">Dear:
                    </div>
                    <!--此处放video-->
                    <a href="http://d5.lgshouyou.com/vrplayer/index.html?value=http://cache.utovr.com/s1bnhbvyezvor6ugjd/L2_1920_3_25.mp4">
                        <img src="<?php echo URL_IMG;?>bofang_box.png" class="ani resize"
                             style="width:220px;height:170px;left:55px;top:210px;"
                             swiper-animate-effect="fadeInLeft"
                             swiper-animate-duration="1s" swiper-animate-delay="0.5s">
                    </a>
                    <div class="ani resize"
                         style="width:220px;height:18px;left:55px;top:360px;text-align: center;color: #F9D3BE"
                         swiper-animate-effect="fadeInLeft"
                         swiper-animate-duration="1s" swiper-animate-delay="0.5s">倒计时结束查看！
                    </div>
                    <div class="dear ani resize"
                         style="width:45px;height:18px;left:30px;top:375px; color: #F9D3BE"
                         swiper-animate-effect="fadeInLeft"
                         swiper-animate-duration="1s" swiper-animate-delay="1s">Yours:
                    </div>
                    <img src="<?php echo URL_IMG;?>user_img.jpg" class="ani resize"
                         style="width:23px;height:21px;left:95px;top:390px; color: #F9D3BE"
                         swiper-animate-effect="fadeInLeft"
                         swiper-animate-duration="1s" swiper-animate-delay="1s">
                    <div class="dear ani resize"
                         style="width:390px;height:18px;left:95px;top:420px; color: #F9D3BE"
                         swiper-animate-effect="fadeInLeft"
                         swiper-animate-duration="1s" swiper-animate-delay="1s">On july 27.2016
                    </div>
                </section>

                <section class="swiper-slide swiper-slide1 bg">
                    <div class="dear ani resize"
                         style="width:45px;height:18px;left:25px;top:200px;z-index:3; color: #F9D3BE"
                         swiper-animate-effect="fadeIn"
                         swiper-animate-duration="1s" swiper-animate-delay="0.5s">Dear:
                    </div>
                    <!--此处放video-->
                    <a href="http://d5.lgshouyou.com/vrplayer/index.html?value=http://cache.utovr.com/s1xfkbns3mjcolawbn/L1_h4ga1b4c8imh4pzp.mp4">
                        <img src="<?php echo URL_IMG;?>bofang_box.png" class="ani resize"
                             style="width:220px;height:170px;left:50px;top:210px;z-index:3;"
                             swiper-animate-effect="fadeIn"
                             swiper-animate-duration="1s" swiper-animate-delay="0.5s">
                    </a>
                    <div class="ani resize"
                         style="width:220px;height:18px;left:50px;top:360px;z-index:3;text-align: center;color: #F9D3BE"
                         swiper-animate-effect="fadeIn"
                         swiper-animate-duration="1s" swiper-animate-delay="0.5s">倒计时结束查看！
                    </div>
                    <div class="dear ani resize"
                         style="width:45px;height:18px;left:25px;top:375px;z-index:3; color: #F9D3BE"
                         swiper-animate-effect="fadeIn"
                         swiper-animate-duration="1s" swiper-animate-delay="1s">Yours:
                    </div>
                    <img src="<?php echo URL_IMG;?>user_img.jpg" class="ani resize"
                         style="width:23px;height:21px;left:90px;top:390px;z-index:3; color: #F9D3BE"
                         swiper-animate-effect="fadeIn"
                         swiper-animate-duration="1s" swiper-animate-delay="1s">
                    <div class="dear ani resize"
                         style="width:390px;height:18px;left:90px;top:415px;z-index:3; color: #F9D3BE"
                         swiper-animate-effect="fadeIn"
                         swiper-animate-duration="1s" swiper-animate-delay="1s">On july 27.2016
                    </div>
                </section>
            </div>
            <img src="images/arrow.png" style="width:20px;height:15px; bottom:20px; left:150px;" id="array" class="resize">
        </div>
        <script src="<?php echo URL_JS;?>swiper.min.js"></script>
        <script src="<?php echo URL_JS;?>swiper.animate.min.js"></script>
        <script src="<?php echo URL_JS;?>index.js"></script>
    </body>
</html>
