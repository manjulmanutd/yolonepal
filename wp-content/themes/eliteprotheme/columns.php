<?php
/*
    Template Name: Columns
 */
   $image_url = get_post_meta($post->ID, '_ImageURL', true);
?>
<?php get_header(); ?>
<!--Start Content-->
<div class="content">
  <?php if (have_posts()) : the_post(); ?>
  <h1 class="page_title">
    <?php the_title(); ?>
  </h1>
  <?php the_content(); ?>
  <?php endif; ?>
    <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
    "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>
  <div class="one_half">
    <h2>Two Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col2]
	This is content...
[/col2]</pre>
  </div>
  <div class="one_half last">
    <h2>Two Column Last</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col2_last]
	This is content...
[/col2_last]</pre>
  </div>
  <div class="clear"></div>
  <div class="divider clearfix"></div>
  <div class="one_third">
    <h2>Three Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col3]
	This is content...
[/col3]</pre>
  </div>
  <div class="one_third">
    <h2>Three Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col3]
	This is content...
[/col3]</pre>
  </div>
  <div class="one_third last">
    <h2>Three Column Last</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col3_last]
	This is content...
[/col3_last]</pre>
  </div>
  <div class="clear"></div>
  <div class="divider clearfix"></div>
  <div class="one_fourth">
    <h2>Four Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col4]
	This is content...
[/col4]</pre>
  </div>
  <div class="one_fourth">
    <h2>Four Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col4]
	This is content...
[/col4]</pre>
  </div>
  <div class="one_fourth">
    <h2>Four Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col4]
	This is content...
[/col4]</pre>
  </div>
  <div class="one_fourth last">
    <h2>Four Column Last</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col4_last]
	This is Content...
[/col4_last]</pre>
  </div>
  <div class="clear"></div>
  <div class="divider clearfix"></div>
  <div class="two_third">
    <h2>Two Three Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col2_3]
	This is content...
[/col2_3]</pre>
  </div>
  <div class="one_third last">
    <h2>Three Column Last</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col3_last]
	This is content...
[/col3_last]</pre>
  </div>
  <div class="clear"></div>
  <div class="divider clearfix"></div>
  <div class="one_fourth">
    <h2>Four Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum.</p>
    <pre>[col4]
	This is content...
[/col4]</pre>
  </div>
  <div class="three_fourth last">
    <h2>Three Four Column Last</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nisl mauris, dictum at fringilla id, eleifend sed velit. Vivamus vitae sem velit. Donec in nibh purus, a bibendum erat. Suspendisse convallis elit in elit faucibus sed ornare nisl condimentum. Duis sit amet tortor et felis consectetur iaculis. Nunc non lorem nunc, eget malesuada tortor. Nulla vel tempor nibh.</p>
    <pre>[col3_4_last]
	This is content...
[/col3_4_last]</pre>
  </div>
  <div class="clear"></div>
  <div class="one_fourth">
    <h2>Clear Rows</h2>
    <p>This shortcode is used for move to next row from columns</p>
    <pre>[clear]</pre>
  </div>
</div>
<!--End Content-->
<div class="clear"></div>
</div>
<!--End Main Container-->
<?php get_footer(); ?>