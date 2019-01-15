<!DOCTYPE html>
<html>
<head>
    <title><?=isset($setting['title'])? $setting['title']:''?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="<?=isset($setting['title'])? $setting['title']:'GB'?>" />
    <meta name="description" content="<?=isset($setting['description'])? cutOf(strip_tags($setting['description']),200,false):'GB'?>" />


    <meta property="og:title" content="<?=isset($setting['title'])? $setting['title']:'GB'?>" />
    <meta property="og:type" content="<?=isset($setting['title'])? $setting['title']:'GB'?>" />
    <meta property="og:url" content="<?=isset($setting['url'])?$setting['url']:URL?>" />
    <meta property="og:image" content="<?=isset($setting['thumb'])? $setting['thumb']:'GB'?>" />
    <meta property="og:description" content="<?=isset($setting['description'])? cutOf(strip_tags($setting['description']),200,false):'GB'?>" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//for-mobile-apps -->
    <!--Custom Theme files -->
    <link rel="icon" href="<?=CDN?>/frontend/images/favicon.ico" type="image/x-icon">
    <link href="<?=CDN?>/frontend/css/bootstrap.css?vs=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=CDN?>/frontend/css/style_goc.css?vs=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=CDN?>/frontend/css/mrdam.css?vs=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=CDN?>/frontend/css/fixwh.css?vs=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
    <!--//Custom Theme files -->
    <!--js-->
    <script type="text/javascript" src="<?=CDN?>/frontend/js/jquery.min.js"></script>
    <script src="<?=CDN?>/frontend/js/modernizr.custom.js?vs=<?=time()?>"></script>
    <!--//js-->
    <!--web-fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <!--web-fonts-->
    <!--animation-effect-->
    <link href="<?=CDN?>/frontend/css/animate.min.css?vs=<?=time()?>" rel="stylesheet">
    <script src="<?=CDN?>/frontend/js/wow.min.js?vs=<?=time()?>"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        var base_url = '<?=URL?>';
    </script>
    <!--//animation-effect-->
    <!--start-smooth-scrolling-->
    <script type="text/javascript" src="<?=CDN?>/frontend/js/move-top.js?vs=<?=time()?>"></script>
    <script type="text/javascript" src="<?=CDN?>/frontend/js/easing.js?vs=<?=time()?>"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1731304433866549';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
<!--header-->
<div id="fb-root"></div><script>$(document).ready(function() {var raido = $(".wrap").attr("data-toggle");if(raido==1){$(".vnk-tuvan").css("display","none");$(".x").click(function(){$(".wrap").slideToggle();$(".vnk-tuvan").slideToggle();});$(".vnk-tuvan").click(function(){$(".wrap").slideToggle();$(this).slideToggle();}); }else{$(".wrap").css("display","none");$(".x").click(function(){$(".wrap").slideToggle();$(".vnk-tuvan").slideToggle();});$(".vnk-tuvan").click(function(){$(".wrap").slideToggle();$(this).slideToggle();});}}) (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&&appId=126586364523772";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script><style>.wrap{position:fixed; width:300px; height: 400px; z-index:9999999; right:0px; bottom:0px;}.x{font-family: arial, helvetica;background: rgba(78,86,101,0.8) none repeat scroll 0 0;font-size:14px;font-weight:bold;color: #fff;display: inline-block;height: 25px;line-height: 25px;position: absolute;right: 0;text-align: center;top: -19px;width: 25px;z-index: 99999999;}.x:hover{cursor: pointer;}.pxem{text-align:left;height:20px;margin-bottom: 0;margin-top: 0;background: #34495E;width:100%;bottom: 0;display: block;left: 0px;position: absolute;z-index: 999999999;border-left: 1px solid #fff;}.pxem a.axem{color: #fff;font-family: arial,helvetica;font-size: 12px;line-height: 23px;padding-left: 5px;text-decoration: none;}.pxem a.axem:hover{text-decoration: underline;}.alogo{position: absolute;bottom: 0;right: 0px;z-index: 999999999999;width: 75px;height: 20px;display: inline-block;background:#34495E;border-left:2px solid #2c3e50;padding-right: 0px;padding-left: 5px}.vnk-tuvan{position:fixed;width: 300px;background:#34495E;z-index:99999999;right:0px;bottom:0px;  border-style: solid solid none;border-width: 1px 1px 0; border-color: #2c3e50}.vnk-tuvan p{color: #fff;font-size: 15px;margin: 0;padding: 0 13px; text-align: left;}.vnk-tuvan p a{color: #fff;font-size: 15px;padding: 5px 0px 7px;margin: 0;display:inline-block;font-family: arial, helvetica;text-decoration: none;}.vnk-tuvan p a:hover{text-decoration: underline;cursor: pointer;}.vnk-tuvan p img {float: right;margin-top: 10px;} </style><div data-toggle="1" class="wrap" style="position:fixed; width:280px; height: 320px; "><span class="x" style="">X</span><div class="fb-page" data-adapt-container-width="true" data-height="320" data-hide-cover="false" data-href="https://www.facebook.com/tatcadeuhay/" data-show-facepile="true" data-show-posts="false" data-small-header="false" data-tabs="messages" data-width="280" style="position:relative; z-index:9999999; right:0px; bottom:21px;border-left: 1px solid #fff;border-top: 1px solid #fff;"></div><p class="pxem" style=""><a class="axem" style="" href="" target="_blank">Linh Chi's Shop</a><a class="alogo" style=""></a></p></div><div class="vnk-tuvan" style="width: 278px;" ><p style=" "><a style="">Bạn cần tư vấn ?</a><img src="https://wordpress.vnkings.com/wp-content/themes/wordpress-vnkings/images/supprt.png"></p></div>
<div class="header">
    <div class="top-header navbar navbar-default"><!--header-one-->
        <div class="container">
            <?php
                if (isset($check_login) && count($check_login) > 0)
                {
                    ?>
                    <div class="col-lg-7 col-sm-7 col-xs-6 col-gb-12 nav nav-gb navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
                        <p><span class="welcome">Chào mừng <?=$check_login['full_name']?> đến với Linh Chi's Shop </span><a href="/tai-khoan.html">Quản lý tài khoản</a> | <a href="/dang-xuat.html">Thoát tài khoản</a></p>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                        <div class="col-lg-7 col-sm-7 col-xs-6 col-gb-12 nav-gb nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
                            <p><span class="welcome">Chào mừng <?=$check_login['full_name']?> đến với Linh Chi's Shop </span><a href="/dang-ky.html">Đăng ký </a> | <a href="/dang-nhap.html">Đăng nhập</a></p>
                        </div>
                    <?php
                }
            ?>
            <div class="col-lg-5 col-sm-5 col-xs-6 col-gb-12 nav-gb nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
                <div class="header-right my-account hidden-xs">
                    <a href="<?=isset($setting['link_facebook'])? $setting['link_facebook']:'/'?>"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Liên Hệ</a>
                </div>
				<div class="header-right empty-cart gb-welcome">
                   <div class="cart-box"><p><a href="javascript:;" class="simpleCart_empty" onclick="Emptycart()">Empty cart</a></p><div class="clearfix"> </div></div>
                </div>
                <div class="header-right empty-cart empty-cart-gb">
                    <span onclick="Emptycart()" class="glyphicon glyphicon-remove"></span>
                </div>
                <div class="header-right cart">
                    <a href="/cart.html"><span class="gb-welcome glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    <h4><a href="/cart.html"><span class="simpleCart_total" id="totalmoney3"></span>(<span id="simpleCart_quantity"  class="simpleCart_quantity"> 0 </span>)</a></h4>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="header-two navbar navbar-default"><!--header-two-->
        <div class="container">
            <div class="nav navbar-nav header-two-left">
                <ul>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?=isset($setting['phome'])? $setting['phome']:''?></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"><?=isset($setting['eamil'])? $setting['eamil']:''?></a></li>
                </ul>
            </div>
            <div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
                <h1><a href="/">Linh Chi's  <b>Shop</b><span class="tag"> </span> </a></h1>
            </div>
<!--            <div class="nav navbar-nav navbar-right header-two-right">-->
<!--			   <div class="clearfix"> </div>-->
<!--            </div>-->
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
        <?=$this->load->widget('menu_head');?>
    </div>
</div>
<!--//header-->