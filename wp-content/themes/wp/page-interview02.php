<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_title.gif" />
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview02_img.jpg" />
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview02_profile.jpg" />
                </div>
                <div class="in05">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview02_img02.jpg" />
                    <p>住んでいるマンションを、フルリノベーションしてもらおうとフェリックスハウスに依頼しました。もともと社長とは知り合いで、私たちのこだわりにも対応してもらえると信頼して頼みました。フルリノベーションしようと思ったのは、間取を変えたかったからです。元は3LDKだったのですが、思い切って2LDKに。家族でいる時間を増やしたくて、リビングを広くとれる間取にしました。</p>
                </div>
                <div class="in04">
                    <div class="in01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview02_img03.jpg" />
                    </div>
                    <div class="in01r">
                        <p>もともとリノベーションにこだわり派でしたが、フェリックスハウスは柔軟に対応していただけました。まずこだわったのは床の素材です。子どももいるので素材は天然素材にしたかったんです。使っているのは無垢素材のアカシアフローリングで、色味も気に入っています。デザイン性と健康面を考えて壁も漆喰にしました。</p>
                    </div>
                </div>
                <div class="in04">
                    <div class="in01l">
                        <p>さらに扉も別注で頼みました。こちらも床に合わせて木の素材にしています。ガラス部分の質感やデザインもリビングのアクセントにちょうどいいと思い選びました。またシューズラックもオーダーで頼みました。靴はコレクションしていて数も多いので。眺めていて楽しくなるので、集めがいもあります。</p>
                    </div>
                    <div class="in01r">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview02_img04.jpg" />
                    </div>
                </div>
                <div class="in05">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview02_img05.jpg" />
                    <p>その他にもこだわって作っているところはたくさんあります。キッチンはシルバー調で統一していますし、カウンターや洗面所にニッチをつけて便利に収納できるように設計してもらいました。部屋に遊びもところどころ入れていて、リビングに黒板もつけてもらいました。子どものことも考えた設計も全て思い通りになっているので満足しています。何よりリビングを広くとることでみんながリビングにいる時間も増えましたし、一家団欒の時間が以前よりも断然増えたのが嬉しいです。</p>
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
