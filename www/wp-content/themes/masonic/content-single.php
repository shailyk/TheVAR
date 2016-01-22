<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Masonic
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
   <div class="post-header clear">
      <?php
      if( get_post_format() ) {
         get_template_part( 'inc/post-formats' );
      } elseif( has_post_thumbnail() ) { ?>
         
      <?php } ?>

      <div class="entry-info">
         <?php masonic_posted_on(); ?>
      </div><!-- .entry-info -->
   </div><!-- .entry-header -->

   <div class="entry-content">
      <div class="underline"></div>
      <hr>
      <?php the_content(); ?>
      <?php
      wp_link_pages(array(
          'before' => '<div class="page-links">' . __('Pages:', 'masonic'),
          'after' => '</div>',
      ));
      ?>
   </div><!-- .entry-content -->
</article><!-- #post-## -->

