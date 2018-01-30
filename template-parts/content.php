<?php
/**
 * The template for displaying Stardard post formats
 *
 * @package Education Park
 */
?>
<?php
global $post;
$post_format = get_post_format($post->ID);
$featured_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$class = '';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
    <div class="post-content entry-content">
    
    <div class="entry-content">
        <?php

        if(is_archive() || is_home()):
            echo '<h2><a href="'.esc_url(get_the_permalink()).'">'.get_the_title().'</a></h2>';
            echo '<h2><a href="'.esc_url(get_the_permalink()).'">';
			education_park_blog_post_format($post_format, $post->ID);
            echo '</a></h2>';
			
    
        else:
            the_content( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'education-park' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );
        endif;
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'education-park' ),
            'after'  => '</div>',
        ) );
		
        ?>
    </div><!-- .entry-content -->
    
    </div>
    
</article><!-- #post-<?php the_ID(); ?> -->
