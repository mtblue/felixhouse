<?php get_header(); ?>

    <div id="top">
        <div class="mobileHidden">
            <div id="thumb-h" class="slider-pro">
                <div class="sp-slides">
                    <div class="sp-slide">
                        <a href="/felixhouse/"><img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider01.jpg" /></a>
                    </div>
                    <div class="sp-slide">
                      <a href="/category/event/"><img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider02_01.jpg" /></a>
                    </div>
                    <div class="sp-slide">
                      <a href="/felixestate/"><img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider03.jpg" /></a>
                    </div>
                    <div class="sp-slide">
                      <a href="http://sumica100.com" target="new"><img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider04.jpg" /></a>
                    </div>
                    <div class="sp-slide">
                      <a href="/lineup/"><img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider05.jpg" /></a>
                    </div>
                    <div class="sp-slide">
                      <a href="/felixlife/"><img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider06.jpg" /></a>
                    </div>
                  <!--/ sp-slides--></div>
                  <div class="sp-thumbnails">
                    <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi01.jpg"/>
                    <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi02.jpg"/>
                    <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi03.jpg"/>
                    <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi04.jpg"/>
                    <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi06.jpg"/>
                    <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/sliderNavi05.jpg"/>
                  </div>
            <!--/ thumb-h--></div>
        </div>
    </div>
    <div class="pcHidden">
        <div id="simple" class="slider-pro">
            <div class="sp-slides">
                <div class="sp-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/slider01_sp.jpg" /></div>
                <div class="sp-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/slider02_sp.jpg" /></div>
                <div class="sp-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/slider03_sp.jpg" /></div>
                <div class="sp-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/slider04_sp.jpg" /></div>
                <div class="sp-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/slider05_sp.jpg" /></div>
                <div class="sp-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/slider06_sp.jpg" /></div>
            </div>
        </div>
    </div>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
                <div class="t03">
                    <div class="mobileHidden">
                        <img class="title" src="<?php echo get_template_directory_uri(); ?>/images/news_title.gif" alt="WHAT'S NEW 新着情報" />
                    </div>
                    <div class="pcHidden">
                        <img class="title" src="<?php echo get_template_directory_uri(); ?>/images/news_title.gif" alt="WHAT'S NEW 新着情報" />
                    </div>
                    <ul id="news">
                        <?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 7 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <li><?php the_time('Y.m.d'); ?>
                            <?php if(get_post_meta($post->ID,'URL',true)): ?>
                            <a href="<?php echo get_post_meta($post->ID,"URL",true); ?>" target="_self">
                            <?php endif; ?>
                            <?php if(get_post_meta($post->ID,'新着情報',true)): ?>
                            <span style="margin-left:80px;"><?php the_title(); ?><!--<?php echo get_post_meta($post->ID,"新着情報",true); ?>--></span>
                            <?php endif; ?>
                            <?php if(get_post_meta($post->ID,'URL',true)): ?>
                            </a>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="t03">
                    <img class="title" src="<?php echo get_template_directory_uri(); ?>/images/flier_title.gif" alt="WEB FLIER WEBチラシ" />
                    <ul id="wf">
                        <?php $i=0; $loop = new WP_Query( array( 'post_type' => 'web', 'posts_per_page' => 3 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php if(get_post_meta($post->ID,'PDF',true)): ?>
                        <?php $pdfsrc1 = wp_get_attachment_url(get_post_meta($post->ID,"PDF",true)); ?>
                        <?php $pdfsrc2 = wp_get_attachment_url(get_post_meta($post->ID,"サムネイル",true)); ?>
                        <li <?php if($i!=0) echo 'class="mobileHidden"' ; $i++; ?>>
                            <div class="pcHidden">
                                <p><?php the_time('Y.m.d'); ?></p>
                            </div>
                            <a href="<?php echo $pdfsrc1; ?>" target="_blank"><img src="<?php echo $pdfsrc2 ?>"  /></a>
                        </li>
                        <?php endif; endwhile; ?>
                    </ul>
                </div>
                <div class="t03">
                    <a href="/webflier/"><img class="mobileHidden" src="<?php echo get_template_directory_uri(); ?>/images/flier_btn.gif" width="660" height="30" alt="WEBチラシ一覧" /></a>
                    <a href="/webflier/"><img class="pcHidden" src="<?php echo get_template_directory_uri(); ?>/images/sp/flier_btn_sp.jpg" alt="WEBチラシ一覧" /></a>
                </div>
                <div class="t03">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/no-1.jpg" alt="商品ラインナップ数No.1" />
                </div>
                <div class="pcHidden">
                    <div class="t04">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/hl_img_sp.jpg" />
                    </div>
                    <div class="t04">
                        <a href="/lineup/">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sp/hl_btn_sp.jpg" />
                        </a>
                    </div>
                    <div class="t04">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/uservoice_img_sp.jpg" />
                    </div>
                    <div class="t04">
                        <a href="/interview/">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sp/uservoice_btn_sp.jpg" />
                        </a>
                    </div>
                </div>
                
                <div class="mobileHidden">
                    <div class="t03">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/hl_img.jpg" width="660" height="845" alt="HOUSE LINEUP" />
                    </div>
                    <div class="t03">
                    <a href="/lineup/"><img class="mobileHidden" src="<?php echo get_template_directory_uri(); ?>/images/hl_btn.gif" width="660" height="30" alt="さらに詳しい商品ラインナップへ" /></a>
                    </div>
                </div>
                <div class="mobileHidden">
                    <div class="t03">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/uservoice_img.jpg" width="660" height=“300” alt="uservoice" />
                    </div>
                    <div class="t03">
                    <a href="/interview/"><img class="mobileHidden" src="<?php echo get_template_directory_uri(); ?>/images/uservoice_btn.gif" width="660" height="30" alt="お客様の声へ" /></a>
                    </div>
                </div>

                <div class="t03">
                    <img class="title" src="<?php echo get_template_directory_uri(); ?>/images/topics_title.gif" alt="TOPICS トピックス" />
                    <div class="ts01">
                        <ul>
                            <li class="left">
                                <a href="/felixhouse/"><img src="<?php echo get_template_directory_uri(); ?>/images/topics_01.jpg" alt="FELIX HOUSE" /></a>
                                <p class="mobileHidden">より快適な住まいを長く住んでもらうための家づくりのこだわりをご覧ください。フェリックスハウスでしか実現しない唯一無二の住まいがここにあります。</p>
                            </li>
                            <li class="right">
                                <a href="/category/zyuzu/"><img src="<?php echo get_template_directory_uri(); ?>/images/topics_02.jpg" alt="数珠つなぎ" /></a>
                                <p class="mobileHidden">フェリックスハウスが地域と一体となって地元の美味しいお店をご紹介する「数珠つなぎ」。ぜひオススメのお店巡りを楽しんでください。</p>
                            </li>
                            <li class="left">
                                <a href="/felixestate/"><img src="<?php echo get_template_directory_uri(); ?>/images/topics_03.jpg" alt="フェリックスエステート" /></a>
                                <p class="mobileHidden">売地の最新情報提供や現地のご案内、現地調査まで行います。物件を探しているけどなかなか見つからないという方、物件探しのことなら何でもおまかせ下さい！</p>
                            </li>
                        </ul>
                    </div>
                    <div class="ts01">
                        <ul>
                            <li class="right">
                                <a href="/felixlife/"><img src="<?php echo get_template_directory_uri(); ?>/images/topics_04.jpg" alt="FELIX LIFE SUPPORT 24" /></a>
                                <p class="mobileHidden">お住いのトラブルに24時間体制でサポートいたします。もしものことがあった場合は、すぐに「フェリックスサポート24」へご相談ください。</p>
                            </li>
                            <li class="left">
                                <a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/images/topics_05.jpg" alt="STAFF" /></a>
                                <p class="mobileHidden">住まいのことに精通した「不動産のプロ」である専門スタッフをご紹介。不動産のことなら、信頼できる当社のスタッフにお任せください！</p>
                            </li>
                            <li class="right">
                                <a href="/category/blog/"><img src="<?php echo get_template_directory_uri(); ?>/images/topics_06.jpg" alt="BLOG" /></a>
                                <p class="mobileHidden">スタッフの日常の出来事や、社内イベント、建築業界の専門的なお話などについてご紹介していきます。様々な役立つ情報が満載です。 </p>
                            </li>
                        </ul>
                    </div>
                </div>
   	    	</div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>