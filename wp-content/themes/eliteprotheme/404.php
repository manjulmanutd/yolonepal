<?php/** * The template for displaying 404 pages (Not Found). * * @package WordPress */?><?php get_header(); ?><div class="page-content">  <div class="grid_sub_16 sub_alpha">    <div class="content-bar">      <?php the_content(); ?>      <header class="entry-header">        <h1 class="entry-title page-title">          <?php _e('This is somewhat embarrassing, isn&rsquo;t it?', 'elite'); ?>        </h1>      </header>      <p>        <?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'elite'); ?>      </p>      <?php get_search_form(); ?>      <?php the_widget('WP_Widget_Recent_Posts', array('number' => 10), array('widget_id' => '404')); ?>      <div class="widget">        <h2 class="widgettitle">          <?php _e('Most Used Categories', 'elite'); ?>        </h2>        <ul>          <?php wp_list_categories(array('orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10)); ?>        </ul>      </div>      <?php                        /* translators: %1$s: smilie */                        $archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'elite'), convert_smilies(':)')) . '</p>';                        the_widget('WP_Widget_Archives', array('count' => 0, 'dropdown' => 1), array('after_title' => '</h2>' . $archive_content));                        ?>      <?php the_widget('WP_Widget_Tag_Cloud'); ?>    </div>  </div>  <div class="grid_sub_8 sub_omega">    <?php get_sidebar(); ?>  </div></div></div><?php get_footer(); ?>