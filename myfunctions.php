<?php
add_theme_support( 'post-thumbnails' );
if (function_exists('add_image_size')){
add_image_size( 'thumb1', 169, 169, true);
add_image_size( 'thumb2', 50, 50, true);
add_image_size( 'thumb3', 70, 70, true);
add_image_size( 'thumb4', 120, 120, true);
add_image_size( 'thumb5', 339, 339, true);
}
// index
function rightsides(){
$args = array(
'id'            => 'right_side',
'class'         => 'rightside',
'name'          => 'ابزارک ستون راست ایندکس',
'description'   => 'ابزارک ستون راست ایندکس را در این بخش قرار دهید.',
'before_widget' => '<aside class="aside_box %2$s">',
'before_title'  => '<div class="aside_box_title"><i class="icofont-music"></i><h2>',
'after_title'   => '</h2><div class="clear"></div></div><div class="aside_box_content">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
);
register_sidebar($args);
}
add_action('widgets_init','rightsides');
function leftsides(){
$args = array(
'id'            => 'left_side',
'class'         => 'leftside',
'name'          => 'ابزارک ستون چپ ایندکس',
'description'   => 'ابزارک ستون چپ ایندکس را در این بخش قرار دهید.',
'before_widget' => '<aside class="aside_box %2$s">',
'before_title'  => '<div class="aside_box_title"><i class="icofont-music"></i><h2>',
'after_title'   => '</h2><div class="clear"></div></div><div class="aside_box_content">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
);
register_sidebar($args);
}
add_action('widgets_init','leftsides');
// cat
function rightsides1(){
$args = array(
'id'            => 'right_side1',
'class'         => 'rightside1',
'name'          => 'ابزارک ستون راست دسته بندی',
'description'   => 'ابزارک ستون راست دسته بندی را در این بخش قرار دهید.',
'before_widget' => '<aside class="aside_box %2$s">',
'before_title'  => '<div class="aside_box_title"><i class="icofont-music"></i><h2>',
'after_title'   => '</h2><div class="clear"></div></div><div class="aside_box_content">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
);
register_sidebar($args);
}
add_action('widgets_init','rightsides1');
function leftsides1(){
$args = array(
'id'            => 'left_side1',
'class'         => 'leftside1',
'name'          => 'ابزارک ستون چپ دسته بندی',
'description'   => 'ابزارک ستون چپ دسته بندی را در این بخش قرار دهید.',
'before_widget' => '<aside class="aside_box %2$s">',
'before_title'  => '<div class="aside_box_title"><i class="icofont-music"></i><h2>',
'after_title'   => '</h2><div class="clear"></div></div><div class="aside_box_content">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
);
register_sidebar($args);
}
add_action('widgets_init','leftsides1');
// single
function rightsides2(){
$args = array(
'id'            => 'right_side2',
'class'         => 'rightside2',
'name'          => 'ابزارک ستون راست سینگل',
'description'   => 'ابزارک ستون راست سینگل یا صفحه دانلود آهنگ را در این بخش قرار دهید.',
'before_widget' => '<aside class="aside_box %2$s">',
'before_title'  => '<div class="aside_box_title"><i class="icofont-music"></i><h2>',
'after_title'   => '</h2><div class="clear"></div></div><div class="aside_box_content">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
);
register_sidebar($args);
}
add_action('widgets_init','rightsides2');
function leftsides2(){
$args = array(
'id'            => 'left_side2',
'class'         => 'leftside2',
'name'          => 'ابزارک ستون چپ سینگل',
'description'   => 'ابزارک ستون چپ سینگل یا صفحه دانلود آهنگ را در این بخش قرار دهید.',
'before_widget' => '<aside class="aside_box %2$s">',
'before_title'  => '<div class="aside_box_title"><i class="icofont-music"></i><h2>',
'after_title'   => '</h2><div class="clear"></div></div><div class="aside_box_content">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
);
register_sidebar($args);
}
add_action('widgets_init','leftsides2');
function comment_loop_cd( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p>بازتاب: <?php comment_author_link(); ?><?php edit_comment_link( 'ویرایش', '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="br-com"></div>
				<div class="comment-author vcard">
					<?php
						$avatar_size = 45;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 45;
						echo get_avatar( $comment, $avatar_size );
						/* translators: 1: comment author, 2: date and time */
?>	
<div class="clear"></div></div><!-- .comment-author .vcard -->
</footer>
<div class="comment-content">

<?php printf( '%1$s',
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
						sprintf( '%1$s ، %2$s', get_comment_date("d M Y"), get_comment_time() )
							)
						); ?>

<div class="left_kianoosh_like">
<div class="comment-date">
<?php $d="d F y"; $comment_date = get_comment_date($d,''); echo $comment_date; ?>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<?php edit_comment_link( '(ویرایش)', '<span class="edit-link">', '</span>' ); ?>
<?php comment_text(); ?>
<?php if ( $comment->comment_approved == '0' ) : ?>
<em class="comment-awaiting-moderation">نظر شما بعد از تائید نمایش داده میشود.</em>
<br>
<?php endif; ?>
<div class="clear"></div>	
</div>
<div class="clear comment-replay"><?php echo comment_reply_link(array('depth' => $depth, 'max_depth' => $args['max_depth'])); ?> </div>
			<div class="clear"></div>
		</article><!-- #comment-## -->
<?php
	break;
	endswitch;
}
function comment_form_cd( $args = array(), $post_id = null ) {
	global $id;
	if ( null === $post_id )
		$post_id = $id;
	else
		$id = $post_id;
	$commenter = wp_get_current_commenter();
	$user = wp_get_current_user();
	$user_identity = ! empty( $user->ID ) ? $user->display_name : '';
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$fields =  array(
		'author' => '<div class="right-commentss"><p class="comment-form-author">' . '<input id="author" class="meta" name="author" type="text" placeholder="نام ( مورد نیاز )" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
		'email'  => '<p class="comment-form-email"><input id="email" class="meta" name="email" type="text" placeholder="پست الکترونیکی (مورد نیاز)" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
		'url'    => '<p class="comment-form-url">' . '<input id="url" class="meta" name="url" type="text" placeholder="وب سایت" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p></div>',
	);
	$required_text = sprintf( ' ' . __('Required fields are marked %s'), '<span class="required">*</span>' );
	$defaults = array(
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="11" aria-required="true" placeholder="نظرتان را بنویسید"></textarea></p>',
		'must_log_in'          => '<p class="must-log-in">' .  sprintf( __( 'شما باید <a href="%s">وارد شوید</a> برای ارسال دیدگاه' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
		'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'وارد شده با نام <a href="%1$s">%2$s</a>. <a href="%3$s" title="بیرون رفتن از حساب کاربری">بیرون رفتن؟</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
		'comment_notes_before' => '',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'title_reply'          => __( '' ),
		'title_reply_to'       => __( 'Leave a Reply to %s' ),
		'cancel_reply_link'    => __( 'Cancel reply' ),
		'label_submit'         => 'ارسال دیدگاه',
	);
	//'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>',
$args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );
?>
<?php if ( comments_open() ) : ?>
			<?php do_action( 'comment_form_before' ); ?>
<div id="respond">
<h3 id="reply-title"><?php comment_form_title( $args['title_reply'], $args['title_reply_to'] ); ?> <small><?php cancel_comment_reply_link( $args['cancel_reply_link'] ); ?></small></h3>
				<?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>
					<?php echo $args['must_log_in']; ?>
					<?php do_action( 'comment_form_must_log_in_after' ); ?>
				<?php else : ?>
					<form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>">
<?php do_action( 'comment_form_top' ); ?>
<?php if ( is_user_logged_in() ) : ?>
<?php echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity ); ?>
<?php do_action( 'comment_form_logged_in_after', $commenter, $user_identity ); ?>
<?php else : ?>
<?php echo $args['comment_notes_before']; ?>
<?php
	do_action( 'comment_form_before_fields' );
	foreach ( (array) $args['fields'] as $name => $field ) {
	echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
}
do_action( 'comment_form_after_fields' ); ?>
<?php endif; ?>
<?php echo apply_filters( 'comment_form_field_comment', $args['comment_field'] ); ?>
<?php // echo $args['comment_notes_after']; ?>
<p class="form-submit">
<input name="submit" type="submit" id="<?php echo esc_attr( $args['id_submit'] ); ?>" value="<?php echo esc_attr( $args['label_submit'] ); ?>" />
<?php comment_id_fields( $post_id ); ?>
</p>
<?php do_action( 'comment_form', $post_id ); ?>
</form>
<?php endif; ?>
<div class="clear"></div>
</div><!-- #respond -->
<?php do_action( 'comment_form_after' ); ?>
<?php else : ?>
<?php do_action( 'comment_form_comments_closed' ); ?>
<?php endif; ?>
<?php
}
?>