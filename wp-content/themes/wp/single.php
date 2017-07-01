<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package my_theme
 */

get_header(); ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
          <div class="ptitle">
              <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog_title.gif" />
          </div>
    		  <div id="category">
              <h2>カテゴリー</h2>
              <ul>
                <?php
                  $args = array(
                  'orderby'            => 'ID',
                  'show_count'         => 0,
                  'hide_empty'         => 1,
                  'exclude'            => '1',
                  'title_li'           => __( '' ),
                  'taxonomy'           => 'category',
                  );
                  wp_list_categories( $args );
                ?>
              </ul>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
              <aside class="widget-area">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
              </aside>
            <?php endif; ?>
            </div>
            <div class="blog">
              
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
              <div class="btitle"><?php the_title(); ?></div>
              <p class="cate"><?php the_category(', '); ?></p>
              <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
              <pre><?php the_content(); ?></pre>
              
            <?php endwhile; endif; ?>
              
            </div>
          </div>
            <?php get_sidebar(); ?>
          </div>
    </div>

<?php get_footer(); ?>
