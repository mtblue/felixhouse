<?php
/*
    FELIX HOUSE
*/
?><!doctype html>
<html lang="ja">
<head>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="keywords" content="FELIX HOUSE,住まいのパイオニアだからできること" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sliderPro.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slimmenu.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/slider-pro.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/slimmenu.min.css" rel="stylesheet" />
<script type="text/javascript">
    /* global $ */
    $( document ).ready(function( $ ) {
        $('#thumb-h').sliderPro({
            width:960,//横幅
            height:380,
            buttons: false,//ナビゲーションボタン
            shuffle: true,//スライドのシャッフル
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
        $('.slimmenu').slimmenu(
        {
            resizeWidth: '960',
            collapserTitle: '',
            animSpeed:'medium',
            indentChildren: true,
            childrenIndenter: '&raquo;'
        });
    });
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="header">
    	<div id="headerR">
    		<div id="headerRL">
    			<h1>豊中市の新築一戸建・リフォーム・賃貸住宅のことなら三幸住研にお任せ下さい。</h1>
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
        <ul>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi01_off.jpg" width="192" height="50" alt="フェリックスハウス" /></a></li>
            <li><a href="/lineup/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi02_off.jpg" width="192" height="50" alt="商品ラインナップ" /></a></li>
            <li><a href="/works/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi03_off.jpg" width="192" height="50" alt="施工事例" /></a></li>
            <li><a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi04_off.jpg" width="192" height="50" alt="会社案内" /></a></li>
            <li><a href="/interview/"><img src="<?php echo get_template_directory_uri(); ?>/common/globalNavi05_off.jpg" width="192" height="50" alt="お客様の声" /></a></li>
        </ul>
    </div>
    <ul class="slimmenu">
        <li><a href="#">フェリックスハウス</a></li>
        <li><a href="#">商品ラインナップ</a></li>
        <li><a href="#">施工事例</a></li>
        <li><a href="#">会社案内</a></li>
        <li><a href="#">お客様の声</a></li>
    </ul>
    <span class="mobileHidden"><?php breadcrumb(); ?></span>