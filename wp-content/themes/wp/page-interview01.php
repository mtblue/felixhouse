<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_img.jpg" />
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_profile.jpg" />
                </div>
                <div class="in04">
                    <div class="in01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_img02.jpg" />
                    </div>
                    <div class="in01r">
                        <p>フェリックスハウスを知ったきっかけは知人からの紹介でした。もともと地元で2世帯で住むことが可能な大きな土地を探していたんです。そこでフェリックスハウスに相談し、条件にあった土地を探していただきました。条件にバッチし合った土地はもちろん、地主さんとの交渉も社長がスムーズに行っていただけて大変助かりました。</p>
                    </div>
                </div>
                <div class="in05">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_img03.jpg" />
                    <p>2世帯住宅を建てるにあたって、希望は洗面・トイレ等を朝の忙しい時間に対応できることと部屋の間取を大きく取ることでした。家族みんなで過ごせる広いリビングも叶えてもらい賑やかに楽しく過ごせています。</p>
                </div>
                <div class="in04">
                    <div class="in01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_img04.jpg" />
                    </div>
                    <div class="in01r">
                        <p>子どももいるのでウッドデッキをつけてもらいました。ウッドデッキでは、夏はボールプール・BBQなど楽しんでいます。それとガーデニング。玄関前のアプローチには、色々なお花や植物など飾って遊び心のある雰囲気にしています。外観は特にこだわっていて、タイルなども好みのものにしています。デザインが色々選べるので思い通りの外観デザインができました。</p>
                    </div>
                </div>
                <div class="in04">
                    <div class="in01l">
                        <p>2世帯住宅は色々と難しいと建てる前は思いましたが、フェリックスハウスで建てることで、2世帯みんなが快適に過ごせる家を実現することができました。</p>
                    </div>
                    <div class="in01r">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_img05.jpg" />
                    </div>
                </div>
                <div class="in05">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview01_img06.jpg" />
                </div>
                <div class="in03">
                    <div id="contact"><a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></a></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
