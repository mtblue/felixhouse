<?php get_header(); ?>

    <div id="top">
        <div id="thumb-h" class="slider-pro">
            <div class="sp-slides">
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider01.jpg" />
                </div>
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider02_01.jpg" />
                </div>
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider03.jpg" />
                </div>
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider04.jpg" />
                </div>
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider05.jpg" />
                </div>
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider06.jpg" />
                </div>
              <!--/ sp-slides--></div>
              <div class="sp-thumbnails">
                <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi01.jpg"/>
                <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi02.jpg"/>
                <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi03.jpg"/>
                <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi04.jpg"/>
                <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi05.jpg"/>
                <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi06.jpg"/>
              </div>
        <!--/ thumb-h--></div>
    </div>
    
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/news_title.gif" width="660" height="25" alt="WHAT'S NEW 新着情報" />
                    <ul id="news">
                        <?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 7 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <li><?php the_time('Y.m.d'); ?><span>&nbsp;&nbsp;</span>
                            <?php if(get_post_meta($post->ID,'URL',true)): ?>
                            <a href="<?php echo get_post_meta($post->ID,"URL",true); ?>" target="_self"><?php the_title(); ?></a>
                            <?php else: the_title(); endif; ?>
                            <?php if(get_post_meta($post->ID,'新着情報',true)): ?>
                            <br /><span style="margin-left:80px;"><?php echo get_post_meta($post->ID,"新着情報",true); ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/flier_title.gif" width="180" height="20" alt="WEB FLIER WEBチラシ" />
                    <ul>
                        <?php $loop = new WP_Query( array( 'post_type' => 'web', 'posts_per_page' => 1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php if(get_post_meta($post->ID,'PDF',true)): ?>
                        <?php $pdfsrc1 = wp_get_attachment_url(get_post_meta($post->ID,"PDF",true)); ?>
                        <li><a href="<?php echo $pdfsrc1; ?>" target="_blank"><img src="/images/web_btn_off.png" width="230" height="105" alt="Webチラシ｜三幸住研のWebチラシをチェック" /></a></li>
                        <?php endif; endwhile; ?>
                    </ul>
                </div>
                <div class="t03">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/flier_btn.gif" width="660" height="30" alt="WEBチラシ一覧" /></a>
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hl_img.jpg" width="660" height="615" alt="HOUSE LINEUP" />
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/topics_title.gif" width="660" height="26" alt="TOPICS トピックス" />
                    <div class="ts01">
                        <ul>
                            <li>
                              <img src="<?php echo get_template_directory_uri(); ?>/images/topics_01.jpg" width="200" height="230" alt="FELIX HOUSE" />
                                <p>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics_02.jpg" width="200" height="230" alt="数珠つなぎ" />
                                <p>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics_03.jpg" width="200" height="230" alt="TOWN COMMUNITY" />
                                <p>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○</p>
                            </li>
                        </ul>
                    </div>
                    <div class="ts01">
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics_04.jpg" width="200" height="230" alt="FELIX LIFE SUPPORT 24" />
                                <p>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics_05.jpg" width="200" height="230" alt="STAFF" />
                                <p>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics_06.jpg" width="200" height="230" alt="BLOG" />
                                <p>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○</p>
                            </li>
                        </ul>
                    </div>
                </div>
   	    	</div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
