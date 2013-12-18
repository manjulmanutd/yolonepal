
<div class="grid_sub_custom sub_alpha box_type" >
  <div class="footer_widget">
    <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
    <?php dynamic_sidebar('first-footer-widget-area'); ?>
    <?php else : ?>
    <h4>Upcoming Events</h4>
    <hr/>
    <p>All upcoming Events here</p>
    <?php endif; ?>
  </div>
</div>
<div class="grid_sub_custom sub_omega box_type">
  <div class="footer_widget ">
    <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
    <?php dynamic_sidebar('secpnd-footer-widget-area'); ?>
    <?php else : ?>
    <h4>Latest News</h4>
    <hr/>
    <p>All the latest News here</p>
    
    <?php endif; ?>
  </div>
</div>

