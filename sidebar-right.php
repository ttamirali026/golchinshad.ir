<!-- right_sidebar -->
<div id="right_sidebar">
<?php if(is_category()){if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('right_side1')) : endif;}
elseif(is_single()){if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('right_side2')) : endif;}	
else{if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('right_side')) : endif;}	
?>
<div class="clear"></div>
</div>
<!-- right_sidebar -->