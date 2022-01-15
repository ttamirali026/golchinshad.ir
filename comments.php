<div id="comments">
<?php if ( post_password_required() ) : ?>
<p class="nopassword"> این مطلب محافظت شده است. برای نمایش نظرات رمز عبور را وارد نمائید.</p>
</div>
<?php return; endif; ?>
<?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>
<p class="nopassword">لطفاً براي ارسال دیدگاه، ابتدا وارد حساب كاربري خود بشويد</p>
</div>
<?php return; endif; ?>
<?php comment_form_cd(); ?>
<?php if ( have_comments() ) : ?>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<nav id="comment-nav-above">
<div class="nav-previous"><?php previous_comments_link( 'دیدگاه‌های قبلی' ); ?></div>
<div class="nav-next"><?php next_comments_link( 'دیدگاه‌های جدید' ); ?></div>
</nav>
<?php endif; ?>
<ol class="commentlist"><?php wp_list_comments( array( 'callback' => 'comment_loop_cd' ) ); ?></ol>
<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
<p class="nocomments">مجوز ارسال دیدگاه داده نشده است!</p>
<?php endif; ?>
<div class="clear"></div>
</div>