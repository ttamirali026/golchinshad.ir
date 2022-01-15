<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
<title><?php wp_title( ' | ',true,'right'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="dc:creator" content="tarlanweb.ir Design Group - call by 09158856205" />
<meta name="theme-color" content="<?php echo ot_get_option('mob_color'); ?>">
<meta name="google-site-verification" content="_ucjdo5XyNUnqON7hl9qGgnQVrjGYgwbUpX-IOIcwxY" />
<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo ot_get_option('mob_color'); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" href="<?php bloginfo('url'); ?>/feed" type="application/rss+xml" title="RSS 2.0">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo ot_get_option('favicon'); ?>">
<link rel="apple-touch-icon" href="<?php echo ot_get_option('logo'); ?>">
<?php wp_enqueue_script("jquery"); wp_head('');
if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
<style>
.menu_right > ul > li > a:hover,.menu_right ul ul li a:hover,.music_posts:hover .song_names,.music_posts .titlles_rf:hover,.more_posts:hover,.article_box header h2 a:hover,.article_box header h1:hover,.article_box header .icofont-music-alt,.article_box header .icofont-video-alt,.article_box header .icofont-page,
.article_box header .icofont-oage,.article_box header .icofont-exclamation-tringle,.aside_box_title i,.aside_box_content li a:hover,.categories_block > ul > li:hover > a,.categories_block li a:hover,.categories_block li span.grower.OPEN:before,.categories_block li:hover span.grower.CLOSE:before,.categories_block li ul li:hover a,.top_links_box a:hover::after,.top_links_box a:hover,.aside_box_thu li a:hover,.mobile_article header h2 a:hover,.right_copy_right i,.left_copy_right ul li a:hover,.comm_titles p span,.comment-replay a:hover,.night .menu_right ul li a:hover,.night .top_links_box a:hover i,.night .top_links_box a:hover::after,.y_breadcrumb i,.iru-tiny-player .icofont-ui-play:hover,.iru-tiny-player .icofont-ui-pause:hover,.iru-tiny-player .icofont-square:hover,.iru-tiny-player .icofont-volume-up:hover,.iru-tiny-player .icofont-close:hover{color: <?php echo ot_get_option('scolor'); ?>;}
.article_box footer .article_ft_more,.artist_lists li a:hover,.tabs-nav .tab-active a,.tabs-nav2 .tab-active2 a,.tags_box a:hover,.copy_codes_bt,.pagination .current,.pagination li a:hover,.related_links li a:hover,.form-submit #submit:hover,.rkianoosh_txt form input[type="submit"]:hover,.dl_links a:hover,.night .tabs-nav .tab-active a,.night .tabs-nav2 .tab-active2 a,.night .tabs-nav3 .tab-active3 a,.tabs-nav3 .tab-active3 a,.night .tabs-nav4 .tab-active4 a,.tabs-nav4 .tab-active4 a,.night .artist_lists li a:hover,.night .pagination li a:hover,.night .related_links li a:hover,.night .form-submit #submit:hover
,.night .dl_links a:hover,.night .tags_box a:hover,.full_posts_box .pagination li a:hover,.pagination .current,.night .pagination .current,.article_url_more:hover,.night .article_url_more:hover,.wpcf7-form input[type="submit"]{background: <?php echo ot_get_option('scolor'); ?>;}
.categories_block li ul li:hover a{border-right: 2px solid <?php echo ot_get_option('scolor'); ?>;}
</style>
<?php if(wp_is_mobile()){ ?><style>body{padding-top: 60px;}#header{display: none;}#mobiles_header{display: block;}</style><?php } ?>
 <script type="text/javascript">var popupmeid=7428;</script>
<script src="https://popland.info/Scripts/popupme3.js"></script> 
	</head>
<?php $darks = ot_get_option('dark_modes');
if('off' != $darks){ ?><body <?php body_class('night'); ?>><?php } else{ ?><body <?php body_class(''); ?>><?php } ?>
<?php if(!wp_is_mobile()){ ?>
<?php $enablepop = ot_get_option('sun_moon'); if('off' != $enablepop){ ?>
<div class="dark_light_mode<?php $darks = ot_get_option('dark_modes'); if('off' != $darks){echo ' dark_active'; } ?>">
<i class="icofont-moon"></i>
<div class="toggle_modes"></div>
<i class="icofont-sun"></i>
</div>
<?php } ?>

</div>
<div class="bt_menu">
<div class="tarlanweb_center">

<nav class="menu_right">
		<figure style="float:right;margin-left:20px"><a rel="noreferrer noopener" href="<?php bloginfo('url'); ?>"><img src="<?php echo ot_get_option('logo'); ?>" width="50px" height="50px" alt="<?php echo ot_get_option('head_h1'); ?>" title="<?php echo ot_get_option('head_h1'); ?>"></a></figure>
<?php wp_nav_menu(array('theme_location'=>'top_menu','menu_id'=>'rkianoosh_ir','container'=>'')); ?>
<div class="clear"></div>
</nav>
<form role="search" id="searches" method="get" action="<?php bloginfo('url'); ?>">
<label><span>جستجو</span>
<input type="search" id="s" name="s" class="lsds" placeholder="نام خواننده یا آهنگ">
</label>
<button aria-label="search"><i class="icofont-search"></i></button>
</form>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</header>
<?php } ?>
<!-- main -->
<main id="main">