<?php
/**
 * The template part for displaying Post
 *
 * @package VW Photography 
 * @subpackage vw_photography
 * @since VW Photography 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box">
    <div class="row">
      <?php if(has_post_thumbnail()) {?>
        <div class="box-image col-lg-6 col-md-6">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php } ?>
      <div class="new-text <?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12"<?php } ?>>
        <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
        <div class="post-info">
          <?php if(get_theme_mod('vw_photography_toggle_postdate',true)==1){ ?>
            <span class="entry-date"><?php echo get_the_date(); ?></span><span>|</span>
          <?php } ?>

          <?php if(get_theme_mod('vw_photography_toggle_author',true)==1){ ?>
            <span class="entry-author"> <?php the_author(); ?></span><span>|</span>
          <?php } ?>

          <?php if(get_theme_mod('vw_photography_toggle_comments',true)==1){ ?>
            <span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-photography'), __('0 Comments', 'vw-photography'), __('% Comments', 'vw-photography') ); ?> </span>
          <?php } ?>
          <hr>
        </div>      
        <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_photography_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_photography_excerpt_number','30')))); ?></p>
        <a class="content-bttn" href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More','vw-photography' ); ?>"><?php esc_html_e('READ MORE','vw-photography'); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','vw-photography' );?></span></a>
      </div>
    </div>
  </div>
</article>