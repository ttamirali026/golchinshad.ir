<?php get_header(''); ?>
<?php get_template_part('inc/vip_posts'); ?>
<?php $lay=ot_get_option('s_layout'); if($lay == 'sidebars'){get_template_part('inc/sidebars');} else{get_template_part('inc/fullside');} ?>
<?php get_footer(''); ?>