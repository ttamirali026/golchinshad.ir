<?php get_header(''); ?>
<?php get_template_part('inc/vip_posts'); ?>

<!-- center_boxes -->
<div class="tarlanweb_center">
<div id="center_boxes">

<?php get_sidebar('right'); ?>

<!-- center_content -->
<div id="center_content">
<?php get_template_part('inc/breadcrumbs'); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php $post_id=get_the_ID();  global $post_id; 
$artist=get_post_meta($post_id,'artist',true); $artist2=get_post_meta($post_id,'artist2',true);
$music_txt=get_post_meta($post_id,'music_txt',true); $online=get_post_meta($post_id,'online',true);
$dlm128=get_post_meta($post_id,'music128',true); $dlm320=get_post_meta($post_id,'music320',true);
$album128=get_post_meta($post_id,'album128',true); $album320=get_post_meta($post_id,'album320',true);
$albumt128=get_post_meta($post_id,'albumt128',true); $albumt320=get_post_meta($post_id,'albumt320',true);
$video1080=get_post_meta($post_id,'video1080',true); $video720=get_post_meta($post_id,'video720',true);
$video480=get_post_meta($post_id,'video480',true); $film1080=get_post_meta($post_id,'film1080',true);
$film720=get_post_meta($post_id,'film720',true); $film480=get_post_meta($post_id,'film480',true);
?>
<article class="article_box">
<header>
<?php get_template_part('inc/article_icon'); ?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
<?php if(function_exists('the_views')){ ?>
<div class="view_box"><i class="icofont-eye-alt"></i> <?php the_views(); ?></div><?php } ?>
<div class="clear"></div>
</header>
<div class="article_txt">
<?php the_content(''); ?>
<?php $timgi2 = ot_get_option('timgi2'); if('off' != $timgi2){ if(has_post_thumbnail()){
the_post_thumbnail('full',array('alt'=>''.get_the_title(),'title'=>''.get_the_title().'')); } else { ?>
<img src="<?php bloginfo('template_url');?>/images/music.jpg" width="500" height="500" alt="تصویر پیدا نشد" title="تصویر پیدا نشد"><?php } } ?>		
<?php if(isset($music_txt) && !empty($music_txt)){ ?>
<div class="txt_blocks_tt">
<?php echo nl2br($music_txt); ?>
<div class="clear"></div>
</div>
<?php } ?>
<div class="clear"></div>
</div>
<?php $insteleg = ot_get_option('insteleg'); if('off' != $insteleg){ ?>
<div class="insta_tel_box">
<?php if(ot_get_option('teleg') !=""){ ?>
<a target="_blank" class="telegram_u_link" rel="nofollow" href="<?php echo ot_get_option('teleg'); ?>"><i class="icofont-paper-plane"></i> <?php echo ot_get_option('teleg_tx'); ?></a><?php } if(ot_get_option('insta') !=""){ ?>
<a target="_blank" class="insta_u_link" rel="nofollow" href="<?php echo ot_get_option('insta'); ?>"><i class="icofont-instagram"></i> <?php echo ot_get_option('insta_tx'); ?></a><?php } ?>
<div class="clear"></div>
</div>
<?php } ?>
<div class="singlles_box_cv">
<?php 
if( (isset($online) && !empty($online)) || (isset($dlm128) && !empty($dlm128)) ){ ?>
<audio preload="none" src="<?php if(isset($online) && !empty($online)){echo $online;} else{echo $dlm128;} ?>" controls="controls">مرورگر شما از پخش کننده آنلاین پشتیبانی نمی کند.</audio>
<?php } ?>

<?php
if( (isset($video1080) && !empty($video1080)) || (isset($video720) && !empty($video720)) || (isset($video480) && !empty($video480)) ){ ?>
<video width="529" height="264" controls preload="none">
<source src="<?php if( (isset($video1080) && !empty($video1080)) || (isset($video720) && !empty($video720)) || (isset($video480) && !empty($video480)) ){echo $video720; } else{echo $video480;} ?>" type="video/mp4">
مرورگر شما از پخش کننده آنلاین پشتیبانی نمی کند.
</video>
<?php } ?>

<?php
if( (isset($film1080) && !empty($film1080)) || (isset($film720) && !empty($film720)) || (isset($film480) && !empty($film480)) ){ ?>
<video width="529" height="264" controls preload="none">
<source src="<?php if( (isset($film1080) && !empty($film1080)) || (isset($film720) && !empty($film720)) || (isset($film480) && !empty($film480)) ){echo $film720; } else{echo $film480;} ?>" type="video/mp4">
مرورگر شما از پخش کننده آنلاین پشتیبانی نمی کند.
</video>
<?php } ?>
	
<?php echo ot_get_option('ads_sg'); ?>	
<div class="dl_links">
<?php if(isset($dlm128) && !empty($dlm128)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $dlm128; ?>">دانلود آهنگ با کیفیت 128 kbps <i class="icofont-music-alt"></i></a>
<?php } ?>
<?php if(isset($dlm320) && !empty($dlm320)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $dlm320; ?>">دانلود آهنگ با کیفیت 320 kbps <i class="icofont-music-alt"></i></a>
<?php } ?>
<?php if(isset($album128) && !empty($album128)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $album128; ?>">دانلود آلبوم با کیفیت 128 kbps <i class="icofont-music-alt"></i></a>
<?php } ?>
<?php if(isset($album320) && !empty($album320)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $album320; ?>">دانلود آلبوم با کیفیت 320 kbps <i class="icofont-music-alt"></i></a>
<?php } ?>
<?php if(isset($albumt128) && !empty($albumt128)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $albumt128; ?>">دانلود آلبوم تکی با کیفیت 128 kbps <i class="icofont-music-alt"></i></a>
<?php } ?>
<?php if(isset($albumt320) && !empty($albumt320)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $albumt320; ?>">دانلود آلبوم تکی با کیفیت 320 kbps <i class="icofont-music-alt"></i></a>
<?php } ?>
<?php if(isset($video1080) && !empty($video1080)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $video1080; ?>">دانلود موزیک ویدیو با کیفیت [Full HD 1080P] <i class="icofont-video-alt"></i></a>
<?php } ?>
<?php if(isset($video720) && !empty($video720)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $video720; ?>">دانلود موزیک ویدیو با کیفیت [HD 720P] <i class="icofont-video-alt"></i></a>
<?php } ?>
<?php if(isset($video480) && !empty($video480)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $video480; ?>">دانلود موزیک ویدیو با کیفیت [HQ 480P] <i class="icofont-video-alt"></i></a>
<?php } ?>
<?php if(isset($film1080) && !empty($film1080)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $film1080; ?>">دانلود فیلم با کیفیت [Full HD 1080P] <i class="icofont-video-alt"></i></a>
<?php } ?>
<?php if(isset($film720) && !empty($film720)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $film720; ?>">دانلود فیلم با کیفیت [HD 720P] <i class="icofont-video-alt"></i></a>
<?php } ?>
<?php if(isset($film480) && !empty($film480)){ ?>
<a target="_blank" rel="noreferrer noopener nofollow" href="<?php echo $film480; ?>">دانلود فیلم با کیفیت [HQ 480P] <i class="icofont-video-alt"></i></a>
<?php } ?>	

<?php if(isset($artist) && !empty($artist)){ $post_tags = get_the_tags(); foreach( $post_tags as $tag) :
if ( $tag->name === $artist ){ ?>
<a href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>"> دانلود همه آهنگهای <?php print_r($tag->name); ?> <i class="icofont-music-alt"></i></a>
<?php } if ( $tag->name === $artist2 ){ ?>
<a href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>"> دانلود همه آهنگهای <?php print_r($tag->name); ?> <i class="icofont-music-alt"></i></a>
<?php } endforeach; } ?>
	
<div class="clear"></div>
</div>
</div>

<footer>
<div class="article_ft_box"> <i class="icofont-clock-time"></i> <?php the_time('j F Y'); ?> </div>
<div class="article_ft_box"> <i class="icofont-comment"></i> <?php comments_number('0','1','%'); ?> </div>
<div class="article_ft_box"> <i class="icofont-archive"></i> <?php the_category(' , '); ?> </div>
<div class="socials_post">
<a rel="nofollow" target="_blank" href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink(); ?>"><i class="icofont-facebook"></i></a>
<a rel="nofollow" target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><i class="icofont-paper-plane"></i></a>
<a rel="nofollow" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>"><i class="icofont-twitter"></i></a>
<a target="_blank" href="https://api.whatsapp.com/send?text=<?php the_title(); bloginfo('url'); ?>/?p=<?php the_id(''); ?>"><i aria-label="whatsapp" class="icofont-whatsapp"></i></a>
<div class="clear"></div>
</div>
<div class="clear"></div>
</footer>
<div class="clear"></div>
</article>

<?php $nextPost = get_next_post(true); if(!empty($nextPost)) { ?>
<div class="newxts_posts"><div class="link_kis">《</div>
<div class="fix_linkks">
<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(80,80) ); ?>
<?php next_post_link('%link',"$nextthumbnail %title", TRUE); ?>
</div>
<div class="clear"></div>
</div>
<?php } ?>

<?php $prevPost = get_previous_post(true); if(!empty($prevPost)) { ?>
<div class="preview_posts"><div class="link_kis">》</div>
<div class="fix_linkks">
<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(80,80) );?>
<?php previous_post_link('%link',"$prevthumbnail %title", TRUE); ?>
</div>
<div class="clear"></div>
</div>
<?php } ?>
	
<?php endwhile; endif; ?>

<?php include_once(ABSPATH .'wp-admin/includes/plugin.php'); if(is_plugin_active('thumbs-rating/thumbs-rating.php')){ ?>
<div class="article_box like_box_single">
<div class="article_like_t">مورد پسند شما بود ؟</div> 
<div class="article_like_box"><?php echo do_shortcode('[thumbs-rating-buttons]');?></div> 
<div class="clear"></div>
</div>	
<?php } ?>	
	
<?php if (has_tag()){ ?>
<div class="article_box">
<div class="aside_box_title">
<i class="icofont-tag"></i> <h4>برچسب ها</h4>
<div class="clear"></div>
</div>
<div class="singlles_box_cv tags_box">
<?php the_tags('','',''); ?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<?php } ?>

<?php $my_custom_query= new WP_Query(
array('post_type'=>'post','post_status'=>'publish','posts_per_page'=> 10,'post__not_in' => array( $post->ID ),
'meta_query'=>array(array('key'=>'artist','value'=>$artist,'compare'=>'LIKE')), ));
if($my_custom_query->have_posts()) : ?>
<div class="article_box">
<div class="aside_box_title">
<i class="icofont-music-alt"></i> <h4>سایر آهنگهای <?php echo $artist; ?></h4>
<div class="clear"></div>
</div>
<div class="singlles_box_cv related_links">
<ul>
<?php while($my_custom_query->have_posts()) : $my_custom_query->the_post(); ?>
<li><a target="_blank" href="<?php the_permalink(); ?>">
<?php $post_id=get_the_ID(); 
$artist=get_post_meta($post_id,'artist',true); $track=get_post_meta($post_id,'song',true);
if(isset($artist) && !empty($artist)){echo $artist; ?> - <?php echo $track;} else{the_title(''); } ?> 
</a></li>
<?php endwhile; ?>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<?php endif; wp_reset_query(); ?>

<?php $post_id=get_the_ID(); 
$dlm128=get_post_meta($post_id,'music128',true); $online=get_post_meta($post_id,'online',true);
if( (isset($online) && !empty($online)) || (isset($dlm128) && !empty($dlm128)) ){ ?>
<div class="article_box">
<div class="aside_box_title">
<i class="icofont-code"></i> <h4>کد آهنگ برای وبلاگ</h4>
<div class="clear"></div>
</div>
<div class="singlles_box_cv">
<div class="code_copies">
<textarea onclick="this.setSelectionRange(0, this.value.length)" readonly="">
<audio controls><source src='<?php if(isset($online) && !empty($online)){echo $online;} else{echo $dlm128;} ?>' type='audio/mpeg'> مرورگر شما بسیار قدیمی است و از پلیر انلاین پشتیبانی نمیکند. </audio> <a target='_blank' href='<?php bloginfo('url'); ?>'>دانلود آهنگ جدید</a>
</textarea>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<?php } ?>
	
	

	
<?php $post_id=get_the_ID(); 
$video1080=get_post_meta($post_id,'video1080',true); $video720=get_post_meta($post_id,'video720',true);
$video480=get_post_meta($post_id,'video480',true);
if( (isset($video480) && !empty($video480)) || (isset($video720) && !empty($video720)) || (isset($video1080) && !empty($video1080)) ){ ?>
<div class="article_box">
<div class="aside_box_title">
<i class="icofont-code"></i> <h4>کد موزیک ویدیو برای وبلاگ</h4>
<div class="clear"></div>
</div>
<div class="singlles_box_cv">
<div class="code_copies">
<textarea onclick="this.setSelectionRange(0, this.value.length)" readonly="">
<video width="854" height="480" controls preload="none"><source src='<?php if(isset($video720) && !empty($video720)){echo $video720;} else{echo $video1080;} ?>' type='video/mp4'> مرورگر شما بسیار قدیمی است و از پلیر آنلاین پشتیبانی نمیکند. </video> <a target='_blank' href='<?php bloginfo('url'); ?>'>دانلود آهنگ جدید</a>
</textarea>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<?php } ?>
	

<!-- comments -->
<div class="article_box">
<div class="aside_box_title">
<i class="icofont-comment"></i> <h4>دیدگاه ها</h4>
<div class="clear"></div>
</div>
<div class="singlles_box_cv">
<?php comments_template(); ?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!-- comments -->


<div class="clear"></div>
</div>
<!-- center_content -->


<?php get_sidebar('left'); ?>


<div class="clear"></div>
</div>
</div>
<!-- center_boxes -->

<?php get_footer(''); ?>