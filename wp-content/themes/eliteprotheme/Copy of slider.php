<?php
/**
 * The Slider.
 *
 * Displays the slider 
 *
 */
?>
<div class="flexslider">
        <ul class="slides">
            <li>
                <div class="grid_sub_17 sliders sub_alpha">
                    <?php if (elite_get_option('elite_slideimage1') != '') { ?>
                        <a href="<?php echo elite_get_option('elite_slidelink1'); ?>"><img  src="<?php echo elite_get_option('elite_slideimage1'); ?>" alt=""/></a>
                    <?php } else { ?>
                        <a href="#"><img  src="<?php echo get_template_directory_uri(); ?>/images/img-1.jpg" alt=""/></a>
                    <?php } ?>
                </div>
                <div class="grid_sub_7 sliders sub_omega">
                    <div class="flex-caption">
                         <?php if (elite_get_option('elite_sliderhead1') != '') { ?>
                            <h1><?php echo stripslashes(elite_get_option('elite_sliderhead1')); ?></h1>
                        <?php } else { ?>
                            <h1>Responsive Layout</h1>
                        <?php } ?>
                        <?php if (elite_get_option('elite_sliderdesc1') != '') { ?>
                            <p><?php echo stripslashes(elite_get_option('elite_sliderdesc1')); ?></p>
                        <?php } else { ?>
                            <p>Elite Pro is a Premium WordPress Theme for creating your own website. The design is Responsive created for building your blog website in all type of devices like mobile and tablet. Whether you are in any niche, building professional blog eally</p>
                        <?php } ?>						
                         <?php if (elite_get_option('elite_slidelink_text1') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink1'); ?>"> <span> <?php echo stripslashes(elite_get_option('elite_slidelink_text1')); ?> </span> </a>
                        <?php } else { ?>
                            <a href="#"><span>READ MORE</span></a>
                        <?php } ?>
                    </div>
                </div>
            </li>
            <!--End First Slider-->
            <?php if (elite_get_option('elite_slideimage2') != '') { ?>
                <li>
                    <div class="grid_sub_17 sliders sub_alpha">
                         <?php if (elite_get_option('elite_slideimage2') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink2'); ?>"><img  src="<?php echo elite_get_option('elite_slideimage2'); ?>" alt=""/></a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                    <div class="grid_sub_7 sliders sub_omega">
                        <div class="flex-caption">
                             <?php if (elite_get_option('elite_sliderhead2') != '') { ?>
                                <h1><?php echo stripslashes(elite_get_option('elite_sliderhead2')); ?></h1>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_sliderdesc2') != '') { ?>
                                <p><?php echo stripslashes(elite_get_option('elite_sliderdesc2')); ?></p>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_slidelink_text2') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink2'); ?>"> <span> <?php echo stripslashes(elite_get_option('elite_slidelink_text2')); ?> </span> </a>
                        <?php } else { ?>
                            <a href="#"><span>READ MORE</span></a>
                        <?php } ?>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <!--End Second Slider-->
          <?php if (elite_get_option('elite_slideimage3') != '') { ?>
                <li>
                    <div class="grid_sub_17 sliders sub_alpha">
                         <?php if (elite_get_option('elite_slideimage3') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink3'); ?>"><img  src="<?php echo elite_get_option('elite_slideimage3'); ?>" alt=""/></a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                    <div class="grid_sub_7 sliders sub_omega">
                        <div class="flex-caption">
                             <?php if (elite_get_option('elite_sliderhead3') != '') { ?>
                                <h1><?php echo stripslashes(elite_get_option('elite_sliderhead3')); ?></h1>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_sliderdesc3') != '') { ?>
                                <p><?php echo stripslashes(elite_get_option('elite_sliderdesc3')); ?></p>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_slidelink_text3') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink3'); ?>"> <span> <?php echo stripslashes(elite_get_option('elite_slidelink_text3')); ?> </span> </a>
                        <?php } else { ?>
                            <a href="#"><span>READ MORE</span></a>
                        <?php } ?>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <!--End Third Slider-->
           <?php if (elite_get_option('elite_slideimage4') != '') { ?>
                <li>
                    <div class="grid_sub_17 sliders sub_alpha">
                         <?php if (elite_get_option('elite_slideimage4') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink4'); ?>"><img  src="<?php echo elite_get_option('elite_slideimage4'); ?>" alt=""/></a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                    <div class="grid_sub_7 sliders sub_omega">
                        <div class="flex-caption">
                             <?php if (elite_get_option('elite_sliderhead4') != '') { ?>
                                <h1><?php echo stripslashes(elite_get_option('elite_sliderhead4')); ?></h1>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_sliderdesc4') != '') { ?>
                                <p><?php echo stripslashes(elite_get_option('elite_sliderdesc4')); ?></p>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_slidelink_text4') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink4'); ?>"> <span> <?php echo stripslashes(elite_get_option('elite_slidelink_text4')); ?> </span> </a>
                        <?php } else { ?>
                            <a href="#"><span>READ MORE</span></a>
                        <?php } ?>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <!--End Fourth Slider-->
           <?php if (elite_get_option('elite_slideimage5') != '') { ?>
                <li>
                    <div class="grid_sub_17 sliders sub_alpha">
                         <?php if (elite_get_option('elite_slideimage5') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink5'); ?>"><img  src="<?php echo elite_get_option('elite_slideimage5'); ?>" alt=""/></a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                    <div class="grid_sub_7 sliders sub_omega">
                        <div class="flex-caption">
                             <?php if (elite_get_option('elite_sliderhead5') != '') { ?>
                                <h1><?php echo stripslashes(elite_get_option('elite_sliderhead5')); ?></h1>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_sliderdesc5') != '') { ?>
                                <p><?php echo stripslashes(elite_get_option('elite_sliderdesc5')); ?></p>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_slidelink_text5') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink5'); ?>"> <span> <?php echo stripslashes(elite_get_option('elite_slidelink_text5')); ?> </span> </a>
                        <?php } else { ?>
                            <a href="#"><span>READ MORE</span></a>
                        <?php } ?>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <!--End Fifth Slider-->
            <?php if (elite_get_option('elite_slideimage6') != '') { ?>
                <li>
                    <div class="grid_sub_17 sliders sub_alpha">
                         <?php if (elite_get_option('elite_slideimage6') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink6'); ?>"><img  src="<?php echo elite_get_option('elite_slideimage6'); ?>" alt=""/></a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                    <div class="grid_sub_7 sliders sub_omega">
                        <div class="flex-caption">
                             <?php if (elite_get_option('elite_sliderhead6') != '') { ?>
                                <h1><?php echo stripslashes(elite_get_option('elite_sliderhead6')); ?></h1>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_sliderdesc6') != '') { ?>
                                <p><?php echo stripslashes(elite_get_option('elite_sliderdesc6')); ?></p>
                            <?php } else { ?>
                            <?php } ?>
                            <?php if (elite_get_option('elite_slidelink_text6') != '') { ?>
                            <a href="<?php echo elite_get_option('elite_slidelink6'); ?>"> <span> <?php echo stripslashes(elite_get_option('elite_slidelink_text6')); ?> </span> </a>
                        <?php } else { ?>
                            <a href="#"><span>READ MORE</span></a>
                        <?php } ?>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <!--End Sixth Slider-->
        </ul>
    </div>
</div>
<!--End slider-->
<div class="clear"></div>