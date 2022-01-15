<?php get_header(''); ?>
<?php get_template_part('inc/vip_posts'); ?>
<!-- center_boxes -->
<div class="tarlanweb_center">
<div id="center_boxes">
<?php get_sidebar('right'); ?>

<!-- center_content -->
<div id="center_content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<article class="article_box">
<header>
<i class="icofont-page"></i>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
<?php if(function_exists('the_views')){ ?>
<div class="view_box"><i class="icofont-eye-alt"></i> <?php the_views(); ?></div><?php } ?>
<div class="clear"></div>
</header>
<div class="article_txt">
<?php the_content(''); ?>
<div class="clear"></div>
</div>
<footer>
<div class="article_ft_box"> <i class="icofont-clock-time"></i> <?php the_time('j F Y'); ?> </div>
<div class="socials_post">
<a rel="nofollow" target="_blank" href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink(); ?>"><i class="icofont-facebook"></i></a>
<a rel="nofollow" target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><i class="icofont-paper-plane"></i></a>
<a rel="nofollow" target="_blank" href="http://twitter.com/home?status=<?php the_permalink(); ?>"><i class="icofont-twitter"></i></a>
<div class="clear"></div>
</div>
<div class="clear"></div>
</footer>
<div class="clear"></div>
</article>
<?php endwhile; endif; ?>
<div class="clear"></div>
</div>
<!-- center_content -->
<?php get_sidebar('left'); ?>
<div class="clear"></div>
</div>
</div>
<!-- center_boxes -->
<?php get_footer(''); ?>