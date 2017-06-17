<?php get_header(); ?>

	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
                <div class="t03">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="content"> 
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <span>カテゴリ：<?php the_category(', ') ?></span>
                    <span>投稿日：<?php echo get_the_date(); ?></span>
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
