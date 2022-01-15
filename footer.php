<div class="clear"></div>
</main>
<!-- main -->
<?php $upbs = ot_get_option('upb'); if('off' != $upbs){ ?>
<div class="top_page"><i class="icofont-thin-up"></i></div>
<?php } $fixbtns = ot_get_option('fixbtn'); if('off' != $fixbtns){ ?>
<div class="fix_bottom_right_box">
<?php if(ot_get_option('teleg') !=""){ ?>
<a class="telegrams_ch" target="_blank" rel="noreferrer noopener nofollow" href="<?php echo ot_get_option('teleg'); ?>"><?php echo ot_get_option('teleg_tx'); ?></a><?php } if(ot_get_option('insta') !=""){ ?>
<a class="instagrms_ch" target="_blank" rel="noreferrer noopener nofollow" href="<?php echo ot_get_option('insta'); ?>"><?php echo ot_get_option('insta_tx'); ?></a><?php } ?>
</div>
<?php } ?>
<footer id="footer">
<div class="tarlanweb_center">
<div class="right_copy_right">
<i class="icofont-music"></i>
<?php echo ot_get_option('copy_right'); ?>
<div class="clear"></div>
</div>
<div class="left_copy_right">
<nav>
<?php wp_nav_menu(array('theme_location'=>'ft_menu','menu_id'=>'rkianosh_ir','container'=>'')); ?>
</nav>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</footer>
<?php if(wp_is_mobile()){ get_template_part('inc/mobile_header'); } ?>
<?php wp_footer(''); ?>
</body>
</html>