<div class="grid_sub_custom_home sub_alpha box_type box_type_custom widget_with_list" >
    <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
    <?php dynamic_sidebar('first-footer-widget-area'); ?>
    <a href="#" class="viewall">view all</a>
    <?php else : ?>
    <h4>Latest News</h4>
    	<p>
						No News added
					</p>
    	
    <?php endif; ?>
</div>


<div class="grid_sub_custom_home sub_alpha box_type box_type_custom widget_with_list">
    <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
    <?php dynamic_sidebar('secpnd-footer-widget-area'); ?>
    <?php else : ?>
    <h4 class="wd-h4">Latest Events</h4>
					<p>
						No Events added
					</p>
    <?php endif; ?>
</div>

