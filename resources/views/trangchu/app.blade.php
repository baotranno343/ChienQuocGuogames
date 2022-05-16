<!DOCTYPE html>
<html>

<head>
    <meta name="renderer" content="webkit" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Chiến Quốc GuoGames</title>
    <link href="favicon.ico" rel="shortcut icon" />
    <!--[if IE 6
      ]><script>
        try {
          document.execCommand("BackgroundImageCache", false, true);
        } catch (e) {}
      </script><!
    [endif]-->

    <script src="/templates/V2015/images/js/html5.js"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link rel="stylesheet" type="text/css" href="/templates/V2015/images/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/templates/V2015/images/css/global_201402.css?2021" />
    <link rel="stylesheet" type="text/css" href="/templates/V2015/images/css/main.css?2021" />
    <link rel="stylesheet" type="text/css" href="/templates/V2015/images/css/panel-reg.css" />
    <link rel="stylesheet" type="text/css" href="/templates/V2015/images/css/subpage_201402.css?2020">
    <style type="text/css" id="PageHead" siteurl="chienquoc.guogames.com">
        body,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            padding: 0;
            margin: 0;
        }

        fieldset,
        img {
            border: 0;
        }

        ol,
        ul {
            list-style: none;
        }

        :focus {
            outline: 0;
        }

        #cyou_top_flash {
            display: none;
            position: absolute;
            left: 0;
            top: 55px;
            z-index: 9999;
        }

        #cyou_top_close {
            position: absolute;
            display: block;
            width: 59px;
            height: 28px;
            top: 20px;
            left: 50%;
            margin-left: 400px;
            background: url({$Think.config.Site_url}/Tpl/Template_www/Public/gamesitetf/v1/close.png) no-repeat;
        }

        .cyou_top_animate_elem {
            -webkit-animation-delay: 0.2s;
            -moz-animation-delay: 0.2s;
            -ms-animation-delay: 0.2s;
            -o-animation-delay: 0.2s;
            animation-delay: 0.2s;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            -ms-animation-duration: 1s;
            -o-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            -moz-animation-fill-mode: both;
            -ms-animation-fill-mode: both;
            -o-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-timing-function: ease;
            -moz-animation-timing-function: ease;
            -ms-animation-timing-function: ease;
            -o-animation-timing-function: ease;
            animation-timing-function: ease;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .cyou_top_tipsbox b,
        .cyou_top_categroylist a,
        .cyou_top_webgame,
        .cyou_top_li_icon,
        .cyou_top_gm_select_icon {
            background-image: url(http://www.laowaner.com/Tpl/Template_www/Public/gamesitetf/v1/cyou_sprite.png);
            background-repeat: no-repeat;
        }

        #cyou_top {
            position: relative;
            width: 100%;
            height: 55px;
            background: url(http://www.laowaner.com/Tpl/Template_www/Public/gamesitetf/v1/nav_bg.png) no-repeat center top;
            z-index: 99;
            min-width: 980px;
        }

        #cyou_top a,
        #cyou_bottom a {
            text-decoration: none;
        }

        #cyou_top_main {
            width: 980px;
            height: 50px;
            margin: 0 auto;
            color: #4a4a4a;
            font-family: "宋体";
            font-size: 12px;
        }

        .cyou_top_logo,
        .cyou_top_nav,
        .cyou_top_ads {
            position: relative;
            z-index: 2;
        }

        .cyou_top_logo a {
            display: block;
            float: left;
            width: 115px;
            height: 36px;
            text-indent: -9999em;
        }

        .cyou_top_logo,
        .cyou_top_ads {
            float: left;
            width: auto;
            height: 50px;
        }

        .cyou_top_logo {
            width: auto;
            height: 36px;
            margin-top: 6px;
            padding-right: 13px;
        }

        .cyou_top_ads {
            position: static;
            width: 240px;
            height: 50px;
            padding-left: 30px;
            text-align: center;
            z-index: 1;
            overflow: hidden;
        }

        .cyou_top_ads a {
            display: block;
            height: 50px;
            margin: 0 auto;
            line-height: 0;
            font-size: 0;
        }

        .cyou_top_ads_big {
            display: none;
            position: absolute;
            margin-left: -110px;
            top: 0;
        }

        .cyou_top_nav {
            float: right;
            height: 41px;
        }

        .cyou_top_nav_li {
            display: block;
            position: relative;
            float: left;
            width: auto;
            padding: 0 10px;
            height: 50px;
            line-height: 50px;
            text-align: center;
        }

        .cyou_pingtai_rig_bor_reg {
            border-right: solid 1px #dbdbdb;
        }

        #cyou_top_main .cyou_top_nav_li_logined {
            width: auto;
            line-height: 50px;
            border-right: none;
            display: none;
        }

        .cyou_top_nav_li a {
            font-family: "宋体";
            font-size: 13px;
        }

        #cyou_top_main .cyou_top_nav_li_logined a {
            background-color: #666;
            color: #fff;
            padding: 3px 5px;
        }

        #cyou_top_main .cyou_top_nav_li_logined a:hover {
            color: #fff;
        }

        .cyou_top_pingtai {
            width: auto;
            padding: 0 10px;
        }

        .cyou_top_pingtai a {
            line-height: 40px;
        }

        .cyou_top_reg {
            color: 8dc420;
        }

        .cyou_top_arrow {
            position: absolute;
            background: #f2f2f2;
            width: 112px;
            height: 6px;
            line-height: 6px;
            right: -1px;
            top: -6px;
            font-size: 0px;
            border-right: solid 1px #bbb;
            border-left: solid 1px #bbb;
        }

        .cyou_top_game_list .cyou_top_arrow {
            top: -5px;
            z-index: 10;
        }

        #cyou_top_service .cyou_top_lists {
            background: #fcfcfc;
        }

        .cyou_top_tipsbox {
            _display: inline;
            float: left;
            width: 100%;
            padding: 0;
            line-height: 0;
            font-size: 0;
        }

        .cyou_top_tipsbox b {
            display: block;
            background-position: -116px -125px;
            line-height: 50px;
            font-size: 12px;
            font-weight: normal;
        }

        .cyou_top_tipsbox:hover b,
        .cyou_top_tipsbox_clicked b {
            background-position: -116px -64px;
            background-color: #f2f2f2;
            color: #681683;
        }

        #cyou_top_tips_gm .cyou_top_tipsbox:hover b,
        #cyou_top_tips_gm .cyou_top_tipsbox_clicked b {
            background-position: -148px -64px;
            background-color: #f2f2f2;
            color: #681683;
        }

        #cyou_top_tips_gm {
            width: 82px;
        }

        #cyou_top_tips_gm .cyou_top_tipsbox b {
            background-position: -148px -125px;
        }

        #cyou_top_gm_select .cyou_top_arrow {
            width: 82px;
        }

        #cyou_top_gm_select .cyou_top_lists a {
            display: block;
            width: 82px;
            padding-left: 12px;
            height: 30px;
            text-align: left;
            line-height: 30px;
            background: #f2f2f2;
        }

        #cyou_top_gm_select .cyou_top_lists a:hover .cyou_top_gm_select_icon {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .cyou_top_gm_select_icon {
            display: inline-block;
            float: left;
            height: 18px;
            margin: 6px 3px 0 0;
            *zoom: 1;
            transition: transform 0.4s ease-out 0s;
            width: 18px;
        }

        #cyou_top_gm_select .cyou_top_gm_icon_a {
            width: 18px;
            height: 18px;
            float: left;
            background-position: 0 -129px;
        }

        #cyou_top_gm_select .cyou_top_gm_icon_b {
            width: 18px;
            height: 18px;
            float: left;
            background-position: 0 -148px;
        }

        #cyou_top_gm_select .cyou_top_gm_icon_c {
            width: 18px;
            height: 18px;
            float: left;
            background-position: 0 -167px;
        }

        #cyou_top_gm_select .cyou_top_lists .cyou_top_gm_white {
            background: #fff;
            border-top: solid 1px #bbbbbb;
        }

        .cyou_top_listbox h2 {
            display: block;
            height: 32px;
            border-bottom: 1px solid #dbdbdb;
            border-right: 1px solid #dbdbdb;
            text-indent: 47px;
            background: #f2f2f2 url(http://www.laowaner.com/Tpl/Template_www/Public/gamesitetf/v1/service_tit.png) no-repeat;
            color: #4a4a4a;
            font: bold 12px/32px Tahoma, Geneva, sans-serif;
            text-align: left;
        }

        .cyou_top_lists {
            display: none;
            position: absolute;
            top: 50px;
            right: -1px;
            width: auto;
            background: #f2f2f2;
            border: solid 1px #bbbbbb;
        }

        #cyou_top_games .cyou_top_lists {
            _width: 740px;
            _zoom: 1;
        }

        #cyou_top_service .cyou_top_lists {
            right: -1px;
            width: auto;
        }

        .cyou_top_categroylist a {
            display: block;
            float: left;
            width: 112px;
            height: 42px;
            line-height: 41px;
            color: #4a4a4a;
            font-size: 12px;
            text-align: left;
            text-indent: 15px;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -ms-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        #cyou_top_main .cyou_top_glist a.imp {
            color: #eb5122;
        }

        #cyou_top_main .cyou_top_glist a:hover,
        #cyou_top_main .cyou_top_categroylist a:hover,
        #cyou_top_main .cyou_top_lists_wrap a.cyou_top_games_icon_clicked {
            color: #681683;
        }

        #cyou_top_service .cyou_top_listbox {
            width: 328px;
            *zoom: 1;
            overflow: hidden;
        }

        #cyou_top_service .cyou_top_categroylist {
            float: left;
            width: 336px;
        }

        #cyou_top_service .cyou_service_tit0 {
            background-position: 22px 7px;
        }

        #cyou_top_service .cyou_service_tit1 {
            background-position: 22px -33px;
        }

        #cyou_top_service .cyou_service_tit2 {
            background-position: 22px -73px;
        }

        #cyou_top_service .cyou_service_tit3 {
            background-position: 22px -113px;
        }

        #cyou_top_service .cyou_service_tit4 {
            background-position: 22px -153px;
        }

        #cyou_top_service .cyou_top_categroylist a {
            background-position: 0px -60px;
            height: 34px;
            line-height: 34px;
        }

        #cyou_top_service .cyou_top_categroylist .cyou_service_cate_last a {
            height: 33px;
            line-height: 33px;
        }

        .cyou_top_tips {
            width: 112px;
            padding: 0px;
            border: 1px solid #e1e1e1;
            border-bottom: none;
            border-top: none;
            margin-left: -1px;
        }

        .active_bor {
            border-color: #bbb;
            z-index: 10;
        }

        .cyou_top_li_icon {
            display: inline-block;
            width: 24px;
            height: 24px;
            margin: 11px 5px 0 0;
            *zoom: 1;
            float: left;
            -webkit-transition: -webkit-transform 0.4s ease-out;
            -moz-transition: -moz-transform 0.4s ease-out;
            transition: transform 0.4s ease-out;
        }

        .cyou_top_nav_li a:hover .cyou_top_li_icon {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .cyou_top_login_icon {
            background-position: -89px 0;
        }

        .cyou_top_reg_icon {
            background-position: -139px 0;
        }

        .cyou_top_pay_icon {
            background-position: -189px 0;
        }

        .cyou_top_jia_icon {
            background-position: -164px 0;
        }

        .cyou_top_gm_icon {
            background-position: -164px 0;
        }

        .cyou_top_login_icon {
            background-position: -114px 0;
        }

        .cyou_top_dropshow {
            position: absolute;
            right: 4px;
            top: 5px;
            width: 867px;
            height: 110px;
            border-bottom: solid 1px #bbb;
            background: #bbbbbb 1px 1px no-repeat;
        }

        .cyou_top_gameint {
            position: absolute;
            left: 20px;
            top: 95px;
            width: 200px;
            line-height: 22px;
            color: #ffffff;
            font-size: 12px;
            text-align: left;
            display: none;
        }

        .cyou_top_webgame {
            display: block;
            position: absolute;
            bottom: -27px;
            right: -1px;
            width: 335px;
            height: 25px;
            border: solid 1px #bbb;
            line-height: 25px;
            color: #7256ff;
            font-size: 12px;
            text-align: center;
            text-indent: 15px;
            background-position: -130px -32px;
            background: none;
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .cyou_top_webgame:hover {
            color: #676868;
        }

        #cyou_top_main a {
            color: #333333;
        }

        #cyou_top_main .cyou_top_webgame {
            color: #7256ff;
        }

        #cyou_top_main a:hover {
            color: #681683;
        }

        #cyou_top_main .cyou_top_reg a:hover {
            color: #681683;
        }

        #cyou_top_main .cyou_top_recharge a:hover {
            color: #681683;
        }

        #cyou_top_main .cyou_top_gm a:hover {
            color: #681683;
        }

        .cyou_top_logo a,
        .cyou_bottom_left a {
            background-image: url("/templates/V2015/images/logo-white.png");
            background-repeat: no-repeat;
        }

        #cyou_bottom {
            width: 100%;
            min-width: 980px;
            height: 80px;
            padding: 10px 0;
            zoom: 1;
        }

        #cyou_bottom a {
            text-decoration: none;
        }

        .cyou_bottom_wraper {
            border: none;
            border-collapse: collapse;
            padding: 0;
            margin: 0 auto;
        }

        .cyou_bottom_wraper td {
            height: 77px;
            vertical-align: middle;
        }

        .cyou_bottom_left {
            text-align: right;
        }

        .cyou_bottom_left a,
        .cyou_bottom_right a {
            height: 52px;
            display: inline-block;
            zoom: 1;
            text-align: left;
        }

        .cyou_bottom_cont {
            text-align: left;
            padding: 0 10px;
        }

        .cyou_bottom_cont p {
            white-space: nowrap;
        }

        .cyou_bottom_cont p .uppercase {
            text-transform: uppercase;
            font-size: 11px;
            -webkit-text-size-adjust: none;
        }

        .cyou_bottom_left,
        .cyou_bottom_right {
            padding: 0 5px;
        }

        #cyou_bottom {
            background: #f0f0f0 url(http://www.laowaner.com/Tpl/Template_www/Public/gamesitetf/v1/nav_bg.png) no-repeat center -55px;
            padding-top: 20px;
        }

        #cyou_bottom a {
            color: #8e8e8e;
        }

        #cyou_bottom a:hover {
            color: #484848;
        }

        #cyou_bottom .highlight {
            color: #484848;
        }

        #cyou_bottom,
        .cyou_bottom_cont p {
            font: normal 12px/22px Tahoma, Geneva, sans-serif;
            color: #8e8e8e;
        }

        .cyou_bottom_cont p {
            padding-left: 1px;
        }

        .cyou_bottom_cont p .in {
            display: inline-block;
            *display: inline;
            *zoom: 1;
        }

        .cyou_bottom_cont p .in img {
            float: left;
            margin-right: 4px;
        }

        .cyou_bottom_right a {
            background-image: url(http://www.laowaner.com/Tpl/Template_www/Public/gamesitetf/v1/cyou_copyright_sprite.png);
            background-repeat: no-repeat;
            height: 48px;
        }

        .cyou_top_game_list {
            display: none;
            width: 876px;
            height: 382px;
            position: absolute;
            right: 0px;
            top: 50px;
        }

        .cyou_top_lists_wrap {
            position: absolute;
            top: 0px;
            right: -1px;
            width: 638px;
            height: 255px;
            border: solid 1px #dbdbdb;
            border-left: none;
            background: #fff;
        }

        .tyou_top_gtype {
            width: 638px;
            height: 382px;
            position: relative;
        }

        .cyou_top_tynum {
            width: 290px;
            position: absolute;
        }

        .cyou_top_type1 {
            top: 2px;
            left: 11px;
        }

        .cyou_top_type2 {
            top: 2px;
            left: 335px;
        }

        .cyou_top_type3 {
            top: 97px;
            left: 10px;
        }

        .cyou_top_type4 {
            top: 97px;
            left: 335px;
        }

        .cyou_top_type5 {
            width: 616px;
            top: 170px;
            left: 10px;
        }

        .cyou_top_ty_tit {
            line-height: 30px;
            font-size: 15px;
            text-align: left;
            color: #aaa;
            font-weight: bold;
            border-bottom: dashed 1px #d6d6d6;
        }

        .cyou_top_glist {
            padding-top: 4px;
            height: 50px;
            position: relative;
            text-align: left;
        }

        .cyou_top_glist dd {
            display: inline;
            *zoom: 1;
            position: relative;
            margin-left: 1px;
            vertical-align: top;
            height: 24px;
            font-size: 12px;
            line-height: 24px;
            color: #333333;
            padding: 0px 18px 0px 0px;
        }

        .cyou_top_glist dd a {
            color: #333333;
        }

        .cyou_top_glist dd a:hover {
            color: #e47911;
            text-decoration: underline;
        }

        .tyou_top_three_ad {
            left: 0px;
            top: 0px;
            position: absolute;
            border: solid 1px #d6d6d6;
            border-top: none;
        }

        .tyou_top_three_ad img {
            vertical-align: top;
        }

        .tyou_top_three_ad a {
            display: block;
            border-top: solid 1px #d6d6d6;
        }

        .cyou_top_change {
            position: absolute;
            left: 0px;
            top: 257px;
            width: 875px;
            height: 124px;
            border: solid 1px #ccc;
            border-top: none;
            background: #fff;
        }

        .cyou_top_rec {
            position: absolute;
            width: 877px;
            bottom: -1px;
            left: -1px;
            height: 5px;
            font-size: 0px;
            line-height: 0px;
            background: #ff6300;
        }

        .cyou_top_hot,
        .cyou_top_new {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 41px;
            height: 41px;
        }

        .cyou_top_hot {
            z-index: 2;
            background: url({$Think.config.Site_url}/Tpl/Template_www/Public/gamesitetf/v1/ico_hot_p24.png);
            _background: 0;
            _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://www.laowaner.com/Tpl/Template_www/Public/gamesitetf/v1/ico_hot_p24.png", sizingMethod="scale");
        }

        .cyou_top_new {
            z-index: 2;
            background: url({$Think.config.Site_url}/Tpl/Template_www/Public/gamesitetf/v1/ico_new_p24.png);
            _background: 0;
            _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://www.laowaner.com/Tpl/Template_www/Public/gamesitetf/v1/ico_new_p24.png", sizingMethod="scale");
        }

        .cyou_top_th_ad_item {
            width: 236px;
            height: 128px;
            position: relative;
        }

        .cyou_top_gm_type1,
        .cyou_top_gm_type2 {
            position: absolute;
            right: 6px;
            bottom: 6px;
        }

        .cyou_top_gm_type1 {
            width: 16px;
            height: 16px;
            background: url({$Think.config.Site_url}/Tpl/Template_www/Public/gamesitetf/v1/icon_pc.png);
        }

        .cyou_top_gm_type2 {
            width: 16px;
            height: 18px;
            background: url({$Think.config.Site_url}/Tpl/Template_www/Public/gamesitetf/v1/icon_mob.png);
        }

        .cyou_top_glist em {
            width: 10px;
            height: 11px;
            line-height: 0px;
            overflow: hidden;
            display: block;
            position: absolute;
            top: 0px;
            right: 6px;
        }

        .cyou_top_glist .cyou_top_h {
            background: url({$Think.config.Site_url}/Tpl/Template_www/Public/gamesitetf/v1/icon_h.png);
        }

        .cyou_top_glist .cyou_top_n {
            background: url({$Think.config.Site_url}/Tpl/Template_www/Public/gamesitetf/v1/icon_n.png);
        }

        .cyou_top_jia img {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            bottom: 0;
            z-index: 1;
            width: 132px;
            height: 153px;
        }

        .highzindex {
            z-index: 10;
        }
    </style>

</head>

<body>
    <div class="page clearfix">
        <div class="header">
            <div class="menuNav">
                <a href="/" class="index">Trang Chủ</a>
                @if(!session("id"))
                <a href="/reg" class="tese">Đăng Ký</a>
                <a href="/log" class="down">Đăng Nhập</a>
                @else
                <a href="/show" class="down">Tài Khoản</a>
                <a href="/cash" class="down">Nạp thẻ</a>
                @endif
                <a href="/topic" class="index">Thông Báo</a>
                @if(session("chucvu")==2)
                <a href="/post_detail" class="down">Đăng Bài (Admin)</a>
                @endif
            </div>
        </div>

        <!--页面主体 begin-->
        <div class="bg_content">
            <div class="main_content clearfix">
                <!--页面左侧主体-->

                <div class="leftbar">
                    <div class="con_left download">
                        <a href="https://drive.google.com/file/d/1kmeLWdkBNMh-2lSPUE5VztjchFbeaVs9/view?usp=sharing" class="down_btn" ></a>
                        <div class="down_link">
                            <ul>
                                <li>
                                    <a class="dl01" href="/reg" >
                                        <p>&nbsp;</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="dl02" href="/log" >
                                        <p>&nbsp;</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="nav_btn">
                        <a href="https://www.facebook.com/guogames" target=" _blank" class="guide_btn">Báo Lỗi</a>
                        <a href="/cash"  class="video_btn">Nạp Thẻ</a>
                        <a href="https://www.facebook.com/groups/344758209205636"  class="bbs_btn">Hỏi Đáp</a>
                        <a href="/show"  class="com_btn">Tài Khoản</a>
                        <a href="/topic"  class="ser_btn">Tin Tức</a>
                        <a href="https://www.facebook.com/guogames"  class="safe_btn">Góp Ý</a>
                    </div>
                    <div class="line24"></div>
                </div>

                <!--rightbar-->

                <div class="rightbar">


                    @section('content')

                    @include('flash-message')

                    @show
                </div>
            </div>
        </div>
        <!--页面主体 end-->
    </div>
    <!--小调查弹窗-->
    <div class="surveypop">
        <div class="frame_box_vote">
            <iframe width="440" scrolling="no" frameborder="0" src="" allowtransparency="true" id="survey"></iframe>
        </div>
        <span class="close"></span>
    </div>
    <!--官网找茬弹窗-->
    <div class="surveypop_zc">
        <div class="frame_box_vote_zc">
            <iframe width="440" scrolling="no" height="370" frameborder="0" src="" allowtransparency="true" id="survey_zc"></iframe>
        </div>
        <span class="close"></span>
    </div>
    <div id="cyou_bottom">
        <table class="cyou_bottom_wraper">
            <tbody>
                <tr>
                    <td class="cyou_bottom_left">
                        <a style="width: 200px; background-position: 0 -60px" href="#"  title="老玩儿游戏网"></a>
                    </td>
                    <td class="cyou_bottom_cont">
                        <p>
                            <span class="cp_cn">Chiến Quốc GuoGames - Thất Quốc Giao Tranh – Anh Hùng Tái Xuất</span><span class="cp_en uppercase">

                            </span>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="/templates/V2015/images/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/swfobject.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/popup.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/topicImg.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/global.js"></script>
    <script type="text/javascript" src="/templates/V2015/images/js/collectgift.js"></script>


    <script type="text/javascript">
        $(function() {
            //tab 切换
            var tabs = function(e1, e2, e3) {
                var e1 = $("a", e1);
                var e2 = $(e2);
                e1.mouseover(function() {
                    if (!$(this).hasClass("current")) {
                        e1.removeClass("current");
                        $(this).addClass("current");
                        var idx = e1.index(this);
                        e2.slideUp(0);
                        $(e2[idx]).slideDown(0);
                        $(e3).attr("href", $(this).attr("href"));
                    }
                });
                e1.click(function() {
                    return false;
                });
            };
            tabs(".top_news_tabs li", ".newscont");
            //tab 切换
            var tabs_click = function(e1, e2) {
                var e1 = $("a", e1);
                var e2 = $(e2);
                e1.click(function() {
                    if (!$(this).hasClass("current_t")) {
                        e1.removeClass("current_t");
                        $(this).addClass("current_t");
                        var idx = e1.index(this);
                        e2.slideUp(0);
                        $(e2[idx]).slideDown(0);
                        /*$(e3).attr('href',$(this).attr('href'));*/
                    }
                });
                e1.mouseover(function() {
                    return false;
                });
            };
            tabs_click(".media_tabs li", ".mediacont");
            //职业
            var warp_num = $(".jCarouselLite li").length;
            if (warp_num > 1) {
                //数字取决于你要多于多少个才开始滚动
                circulate = true;
            } else {
                circulate = false;
            }
            $(".jCarouselLite").jCarouselLite({
                auto: 2000, //图片停留时间
                scroll: 1, //每次滚动覆盖的图片个数
                speed: 800, //设置速度，0是不动。其次就是数字越大 ，移动越慢。
                vertical: false, //横向（true），竖向（false）
                visible: 1, //显示的数量
                circular: circulate, //是否循环
                play: true, //停止自动播放，true则是自动播放
                btnNext: ".next", //上一个按钮
                btnPrev: ".prev", //下一个按钮
            });
            //点击搜索
            $(".data_ser a").click(function() {
                var leftkey = $.trim($(".data_ser input").val());
                if (leftkey == "" || leftkey == "Hãy nhập từ khóa …") {
                    alert("Hãy nhập từ khóa tìm kiếm");
                    $(".data_ser input").val("");
                    $(".data_ser input").focus();
                    return false;
                }
                return false;
                window.location.href =
                    "http://chienquoc.guogames.com/search/search.php?lang=cn&searchword=" +
                    leftkey;
            });
            //回车搜索
            $(".data_ser input").focus(function() {
                document.onkeyup = function(e) {
                    if (e == null) {
                        // ie
                        keycode = event.keyCode;
                    } else {
                        // mozilla
                        keycode = e.which;
                    }
                    if (keycode == 13) {
                        $(".data_ser a").click();
                    }
                };
            });
            //监视搜索框
            $(".data_ser input").focus(function() {
                if ($(this).val() == "Hãy nhập từ khóa …") {
                    $(this).val("");
                }
            });
            $(".data_ser input").blur(function() {
                if ($(this).val() == "") {
                    $(this).val("Hãy nhập từ khóa …");
                }
            });
            //flash按钮
            addSWF("templates/V2015/images/down.swf", "flash_btn", "200", "220");
            //官网找茬
            $(".gwzc").bind("click", function() {
                if (!$(".frame_box_vote_zc iframe").attr("src")) {
                    $(".frame_box_vote_zc iframe").attr(
                        "src",
                        "templates/V2015/images/js/surveyNew.html"
                    );
                }
                popup($(".surveypop_zc"));
            });
        });
    </script>
</body>

</html>