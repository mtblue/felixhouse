<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
        		<div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.jpg" />
                </div>
                <div class="ts03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img.jpg" />
                </div>
                <div class="cm01">
                    <p>【サムネイルをクリックすると大きな写真がご覧いただけます】</p>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img01.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img02.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img03.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img04.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img05.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img06.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img07.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img08.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img09.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img10.jpg" width="200"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img11.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img12.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img13.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img14.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img15.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img16.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img17.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img18.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img19.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img20.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img21.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img22.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img23.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img24.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img25.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img26.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img27.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img28.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img29.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img30.jpg" /></li>
                    </ul>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img31.jpg" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/works_img32.jpg" /></li>
                        <li></li>
                    </ul>
                </div>
                <div class="cm01">
                    <div id="contact"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
