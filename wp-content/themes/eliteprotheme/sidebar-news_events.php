<div class="grid_sub_custom_home sub_alpha box_type box_type_custom widget_with_list" >
    <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
    <?php dynamic_sidebar('first-footer-widget-area'); ?>
    <?php else : ?>
    <h4>Upcoming Events</h4>
    	<ul>
    		<?php for($i = 1; $i < 4; $i++):?>
				<li>
					<img src="<?php echo site_url().'/wp-content/themes/eliteprotheme/images/img-'.$i.'.jpg' ?>" />	
					<p>
						Lorem ipsum dolar signo leytmis lura. Vengaro testaro eventure glyarina 20 menasum
					</p>
					<a href="#" class="readmore">read more</a>			
				</li>    
	    	<?php endfor; ?>
    	</ul>
    	
    	<a href="#" class="viewall">view all</a>
    <?php endif; ?>
</div>


<div class="grid_sub_custom_home sub_alpha box_type box_type_custom widget_with_list">
    <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
    <?php dynamic_sidebar('secpnd-footer-widget-area'); ?>
    <?php else : ?>
    <h4 class="wd-h4">Latest News</h4>
    	<ul>
    		<?php for($i = 1; $i < 4; $i++):?>
				<li>
					<img src="<?php echo site_url().'/wp-content/themes/eliteprotheme/images/img-'.$i.'.jpg' ?>" />	
					<p>
						Lorem ipsum dolar signo leytmis lura. Vengaro testaro eventure glyarina 20 menasum
					</p>
					<a href="#" class="readmore">read more</a>			
				</li>    
	    	<?php endfor; ?>
    	</ul>
    	<a href="#" class="viewall">view all</a>
    <?php endif; ?>
</div>

