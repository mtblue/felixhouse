<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                    <div class="mobileHidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_img.jpg" />
                    </div>
                    <div class="pcHidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/<?php echo $slug; ?>/<?php echo $slug; ?>_img_sp.jpg" />
                    </div>
                </div>
                <div class="in01">
                    <div class="in01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img01.jpg" />
                        <div class="in02">
                            <p class="bold">3世代二世帯の家。</p>
                            <p>施主様：M様</p>
                        </div>
                        <a href="/interview01/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" /></a>
                    </div>
                    <div class="in01r">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img02.jpg" />
                        <div class="in02">
                            <p class="bold">広々LDKの開放的な家。</p>
                            <p>施主様：H様</p>
                        </div>
                        <a href="/interview02/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" /></a>
                    </div>
                </div>
                 <div class="in03">
                    <div id="contact"><a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></a></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>