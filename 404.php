<?php get_header(''); ?>
<?php get_template_part('inc/vip_posts'); ?>
<!-- center_boxes -->
<div class="tarlanweb_center">
<div id="center_boxes">
<?php get_sidebar('right'); ?>
<!-- center_content -->
<div id="center_content">
<?php get_template_part('inc/error-content'); ?>
<div class="clear"></div>
</div>
<!-- center_content -->
<?php get_sidebar('left'); ?>
<div class="clear"></div>
</div>
</div>
<!-- center_boxes -->
<?php get_footer(''); ?>