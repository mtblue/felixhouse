<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="title">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="contact"> 
            		<?php the_content(); ?>
            	</div>
            		<?php endwhile; ?>
            		<?php else : ?>
            　　　　　		記事はありません
            		<?php endif; ?>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
