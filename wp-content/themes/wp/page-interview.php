<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img.jpg" />
                </div>
                <div class="in01">
                    <div class="in01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img01.jpg" />
                        <div class="in02">
                            <p>◯◯◯◯◯◯◯◯◯◯◯◯◯の家。</p>
                            <p>施主様：M様</p>
                            <p>地域：◯◯市◯区</p>
                        </div>
                        <a href="/interview01/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" /></a>
                    </div>
                    <div class="in01r">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img01.jpg" />
                        <div class="in02">
                            <p>◯◯◯◯◯◯◯◯◯◯◯◯◯の家。</p>
                            <p>施主様：H様</p>
                            <p>地域：◯◯市◯区</p>
                        </div>
                        <a href="/interview02/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" /></a>
                    </div>
                </div>
                <div class="in01">
                    <div class="in01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img01.jpg" />
                        <div class="in02">
                            <p>◯◯◯◯◯◯◯◯◯◯◯◯◯の家。</p>
                            <p>施主様：H様</p>
                            <p>地域：◯◯市◯区</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" />
                    </div>
                    <div class="in01r">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img01.jpg" />
                        <div class="in02">
                            <p>◯◯◯◯◯◯◯◯◯◯◯◯◯の家。</p>
                            <p>施主様：H様</p>
                            <p>地域：◯◯市◯区</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" />
                    </div>
                </div>
                <div class="in01">
                    <div class="in01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img01.jpg" />
                        <div class="in02">
                            <p>◯◯◯◯◯◯◯◯◯◯◯◯◯の家。</p>
                            <p>施主様：H様</p>
                            <p>地域：◯◯市◯区</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" />
                    </div>
                    <div class="in01r">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_img01.jpg" />
                        <div class="in02">
                            <p>◯◯◯◯◯◯◯◯◯◯◯◯◯の家。</p>
                            <p>施主様：H様</p>
                            <p>地域：◯◯市◯区</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/interview_btn.jpg" />
                    </div>
                </div>
                <div class="in03">
                    <div id="contact"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
