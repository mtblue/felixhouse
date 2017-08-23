<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package my_theme
 */

?>

<?php if ( is_archive() || is_home() ): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'topics_i' ); ?>>
  <h2 class="m-t05"><span class="__time"><?php the_time( 'Y.n.j' ); ?></span>
  <a href="<?php the_permalink(); ?>"><?php the_title( '<span class="__tx">', '</span>' ); ?></a></h2>
  <div class="topics_tag">
    <?php echo get_the_term_list( $post->ID, 'category', '', '', '' ); ?>
  </div>
  <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail( array( 660,495 ), array( 'class' => 'aligncenter' ) );
    }
  ?>
  <div class="topics_i_tx">
  <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">続きを読む</a>
  </div>
</article>
<?php endif; ?>

<?php if ( is_singular() ): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'topics_i __single' ); ?>>
  <h2 class="m-t05"><span class="__time"><?php the_time( 'Y.n.j' ); ?></span>
  <?php the_title( '<span class="__tx">', '</span>' ); ?></h2>
  <div class="topics_tag">
    <?php echo get_the_term_list( $post->ID, 'category', '', '', '' ); ?>
  </div>
  <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail( array( 660,495 ), array( 'class' => 'aligncenter' ) );
    }
  ?>
  <?php the_content(); ?>
</article>
<?php endif; ?>
