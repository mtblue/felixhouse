<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="wf01">
                    <?php $loop = new WP_Query( array( 'post_type' => 'web', 'posts_per_page' => 4 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
        		    <ul id="wf">
        		        <?php if(get_post_meta($post->ID,'サムネイル',true)): ?>
                            <?php if(get_post_meta($post->ID,'PDF',true)): ?>
                                <?php $thumsrc1 = wp_get_attachment_url(get_post_meta($post->ID,"サムネイル",true)); ?>
                                <?php $pdfsrc1 = wp_get_attachment_url(get_post_meta($post->ID,"PDF",true)); ?>
                                <li class="wfl"><a href="<?php echo $pdfsrc1; ?>" target="_blank"><img src="<?php echo $thumsrc1; ?>" /></a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(get_post_meta($post->ID,'コメント',true)): ?>
                            <?php $comsrc1 = nl2br(get_post_meta($post->ID,"コメント",true)); ?>
                            <li class="wfr">
                                <p><?php echo $comsrc1; ?></p>
                            </li>
                    </ul>
                    <?php endif; endwhile; ?>
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
