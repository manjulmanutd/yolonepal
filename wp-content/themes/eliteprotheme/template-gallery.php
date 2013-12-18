<?php
/*
  Template Name: Gallery Page
 */
?>
<?php get_header(); ?>
<script>
    jQuery(document).ready(function(){
        jQuery(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
    });
</script>
<div class="clear"></div>
<!--Start gallery Wrapper-->
<div class="gallery">
    <h1 class="page-title"><a href="#">
            <?php the_title(); ?>
        </a></h1>
    <ul class="thumbnail">
        <?php
        if ($wp_query->have_posts()) : while (have_posts()) : the_post();
                the_content();
                $attachment_args = array(
                    'post_type' => 'attachment',
                    'numberposts' => -1,
                    'post_status' => null,
                    'post_parent' => $post->ID,
                    'orderby' => 'menu_order ID'
                );
                $attachments = get_posts($attachment_args);
                if ($attachments) {
                    foreach ($attachments as $gallery_image) {
                        $attachment_img = wp_get_attachment_url($gallery_image->ID);
                        $img_source = elite_image_resize($attachment_img, 260, 180);
                        echo ' <div class="gallery_entry">
									<div class="item_image"><li><a alt="' . $gallery_image->post_title . '" href="' . $attachment_img . '" rel="prettyPhoto[gallery2]"> <span class="overlay">';
                        echo '<img class="portfolio" src="' . $img_source[url] . '" alt=""$img_source[url]"/>';
                        echo '</div></div></li></a></span>';
                    }
                }
                ?>
            <?php endwhile;
        endif; ?>
    </ul>
</div>
</div>
<?php get_footer(); ?>
