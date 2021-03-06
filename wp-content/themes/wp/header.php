<?php
/*
    FELIX HOUSE
*/
?><!doctype html>
<html lang="ja">
<head>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="keywords" content="豊中の工務店、フェリックスハウス、注文住宅、建築、新築一戸建、土地探し、セルロースファイバー（断熱材）、ホウ酸、制振ダンパー" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sliderPro.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slimmenu.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lity.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/slider-pro.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/slimmenu.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/lity.min.css" rel="stylesheet">
<script type="text/javascript">
    /* global $ */
    $( document ).ready(function( $ ) {
        $('#thumb-h').sliderPro({
            width:960,//横幅
            height:380,
            buttons: false,//ナビゲーションボタン
            shuffle: false,//スライドのシャッフル
            thumbnailWidth: 150,//サムネイルの横幅
            thumbnailHeight: 40,//サムネイルの縦幅
            thumbnailsPosition: 'bottom',//サムネイルの位置
            thumbnailPointer: true,
            slideDistance:20,//スライド同士の距離
            arrows:true,
            slideDistance:20,//スライド同士の距離
            visibleSize: '100%',//前後のスライドを表示
            breakpoints: {
                960: {//表示方法を変えるサイズ
                    thumbnailWidth: 110,
                    thumbnailHeight: 40
                }
            }
        });
        $('#simple').sliderPro({
            width: "80%",//横幅
            height: 500,
            arrows: true,//左右の矢印
            buttons: true,//ナビゲーションボタン
            slideDistance:0,//スライド同士の距離
        });
        $('.slimmenu').slimmenu(
        {
            resizeWidth: '960',
            collapserTitle: '',
            animSpeed:'medium',
            indentChildren: true,
            childrenIndenter: '&raquo;'
        });
        $('#menu li').hover(function(){
            $("ul:not(:animated)", this).slideDown();
        }, function(){
                $("ul.child",this).slideUp();
        });
        if($(window).width() > 10) { // ウインドウサイズの幅が767ピクセルよりも大きい場合
            $("#my-slider .sp-slide a").each(function(){
                $(this).addClass("sp-selectable").css("cursor","pointer");
            });
        }
    });
</script>
<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45273377-1', 'auto');
  ga('send', 'pageview');

  ga('create', 'UA-56013916-1', 'auto', {'name': 'myTracker'});
  ga('myTracker.send', 'pageview');
</script>

</head>

<body <?php body_class(); ?>>
	<div id="header">
    	<div id="headerR">
    		<div id="headerRL">
    		    <div class="mobileHidden">
    			    <h1>豊中の工務店、注文住宅・建築・新築一戸建・土地探し・セルロースファイバー（断熱材）・<br>ホウ酸・制振ダンパーのことならフェリックスハウスにお任せ下さい。</h1>
    		    </div>
    		    <div class="pcHidden">
    		        <h1>豊中市の新築一戸建・リフォーム・賃貸住宅のことなら三幸住研にお任せ下さい。</h1>
    		    </div>
    		</div>
    		<div id="headerRR">
    			<p id="headercontact">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/common/header_tel.jpg" width="250" height="50" alt="TEL 06-4867-3000" /></span>
                    <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/common/header_contact.jpg" width="190" height="50" alt="資料請求・お問い合わせ" /></a>
                </p>
    		</div>
        </div>
    	<h2><a href="/" ><img src="<?php echo get_template_directory_uri(); ?>/common/header_logo.jpg" width="250" height="80" alt="FELIX HOUSE｜住まいのパイオニアだからできること" /></a></h2>
    </div>
	<div id="nav">
        <ul id="menu">
            <li>
                <a href="/felixhouse/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi01_off.jpg" width="192" height="50" alt="フェリックスハウス" /></a>
                <ul class="child">
                    <li><a href="/felixhouse/#img02"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi01_01.gif" /></a></li>
                    <li><a href="/felixhouse/#img03"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi01_02.gif" /></a></li>
                    <li><a href="/felixhouse/#img04"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi01_03.gif" /></a></li>
                    <li><a href="/felixhouse/#img05"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi01_04.gif" /></a></li>
                </ul>
            </li>
            <li><a href="/lineup/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi02_off.jpg" width="192" height="50" alt="商品ラインナップ" /></a></li>
            <li><a href="/works/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi03_off.jpg" width="192" height="50" alt="施工事例" /></a></li>
            <li><a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi04_off.jpg" width="192" height="50" alt="会社案内" /></a></li>
            <li><a href="/interview/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi05_off.jpg" width="192" height="50" alt="お客様の声" /></a></li>
        </ul>
    </div>
    <ul class="slimmenu">
        <li><a href="/felixhouse/">フェリックスハウス</a></li>
        <li><a href="/lineup/">商品ラインナップ</a></li>
        <li><a href="/works/">施工事例</a></li>
        <li><a href="/company/">会社案内</a></li>
        <li><a href="/interview/">お客様の声</a></li>
    </ul>
    <span class="mobileHidden"><?php breadcrumb(); ?></span>