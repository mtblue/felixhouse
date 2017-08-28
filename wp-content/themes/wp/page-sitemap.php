<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif"/>
                </div>
                <div class="sm01">
                    <dl>
                         <dt><a href="http://sankoujyuken.jp">▶トップ</a></dt>                     
                        <dt><a href="/felixhouse/">▶フェリックスハウス</a></dt>
                        <dd><a href="/felixhouse/#img02">・未来を見据えた家。</a></dd>
                        <dd><a href="/felixhouse/#img03">・目には見えない住まいのこだわり。</a></dd>
                        <dd><a href="/felixhouse/#img04">・一般企業との比較。</a></dd>
                       <dd><a href="/felixhouse/#img05">・FELIXHOUSE6つの基準。</a></dd>
                         <dt><a href="/lineup/">▶商品ラインナップ</a></dt>
                        <dt><a href="/works/">▶施工事例</a></dt>
                         <dt><a href="/company/">▶会社案内</a></dt>
                        <dd><a href="/company/#outline_title">・会社概要</a></dd>
                        <dd><a href="/company/#president_title">・代表挨拶</a></dd>
                        <dd><a href="/company/#staff_title">・スタッフ紹介</a></dd>
                        <dt><a href="/interview/">▶お客様の声</a></dt>
                        <dt><a href="/showroom/">▶ショールーム</a></dt>
                        <dt><a href="/felixestate/">▶フェリックスエステート</a></dt>
                        <dt><a href="/felixlife/">▶フェリックスライフサポート</a></dt>
                         <dt>▶豊中の歴史</dt>
                        <dt><a href="/category/blog/">▶現場ブログ</a></dt>
                        <dt><a href="/category/zyuzu/">▶数珠つなぎ</a></dt>
                        <dt><a href="/contact/">▶お問い合わせ</a></dt>
                        <dt><a href="/privacy/">▶プライバシーポリシー</a></dt>
                    </dl>
                </div>
                <div class="cm01">
                    <div id="contact">
                        <div class="mobileHidden">
                            <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></a>
                        </div>
                        <div class="pcHidden">
                            <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/contact_btn_sp.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>