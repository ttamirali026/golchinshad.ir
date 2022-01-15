<!-- left_sidebar -->
<div id="left_sidebar">
<?php if(is_category()){if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('left_side1')) : endif;}
elseif(is_single()){if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('left_side2')) : endif;}	
else{if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('left_side')) : endif;} ?>
<?php $txt_ad = ot_get_option('txt_ads',array()); if( $txt_ad !=""){ ?>
<div class="text_ads_box">
<ul>
<?php foreach($txt_ad as $txt_ade){ ?>
<li><a rel="noreferrer noopener" target="_blank" href="<?php echo $txt_ade['tads_url']; ?>"><?php echo $txt_ade['title']; ?> </a></li>
<?php } ?>
</ul>
<div class="clear"></div>
</div>
<?php } ?>
<div class="clear"></div>
</div>
<!-- left_sidebar -->