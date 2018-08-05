<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Fixology
 * @since Fixology 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		
		<?php fixology_comment_nav(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 100,
					'callback'    => 'thememount_comment_row_template',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php fixology_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'fixology' ); ?></p>
	<?php endif; ?>
	
	
	
	
	<?php
	
	// To use the variables present in the above code in a custom callback function, you must first set these variables within your callback using:
	$commenter = wp_get_current_commenter();
	
	$req = get_option( 'require_name_email' );
	
	
	$aria_req  = ( $req ? " aria-required='true'" : '' );
	if( !isset($required_text) ){ $required_text = ''; }
	
	
	// Comment form args
	$args = array();
	
	$args['comment_field'] = '<p class="comment-form-comment"><label class="tm-hide" for="comment">' . esc_html_x( 'Comment', 'noun', 'fixology' ) .
    '</label><textarea id="comment" placeholder="' . esc_html_x('Comment', 'noun', 'fixology') . '" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>';
	
	$args['comment_notes_before'] = '<p class="comment-notes">' .
    esc_attr__( 'Your email address will not be published.' , 'fixology' ) . ' ' . ( $req ? $required_text : '' ) .
    '</p>';
	
	$args['comment_notes_after'] = '<p class="form-allowed-tags tm-hide">' .
    sprintf(
		esc_attr__( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'fixology' ),
		' <code>' . allowed_tags() . '</code>'
    ) . '</p>';
	
	// Submit button class
	$args['class_submit'] = 'submit tm-vc_general tm-vc_btn3 tm-vc_btn3-size-sm tm-vc_btn3-shape-square tm-vc_btn3-style-outline tm-vc_btn3-color-black';
	
	
	$args['fields'] = array(

	  'author' =>
		'<p class="comment-form-author"><label class="tm-hide" for="author">' . esc_attr__( 'Name', 'fixology' ) . '</label> ' .
		( $req ? '<span class="required tm-hide">*</span>' : '' ) .
		'<input id="author" placeholder="' . esc_html__('Name','fixology') . ( $req ? ' (required)' : '' ) . '" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' /></p>',

	  'email' =>
		'<p class="comment-form-email"><label class="tm-hide" for="email">' . esc_attr__( 'Email', 'fixology' ) . '</label> ' .
		( $req ? '<span class="required tm-hide">*</span>' : '' ) .
		'<input id="email" placeholder="' . esc_html__('Email','fixology') . ( $req ? ' (required)' : '' ) . '" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' /></p>',

	  'url' =>
		'<p class="comment-form-url"><label class="tm-hide" for="url">' . esc_attr__( 'Website', 'fixology' ) . '</label>' .
		'<input id="url" placeholder="' . esc_html__('Website','fixology') . '" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" /></p>',
	);
	
	
	
	
	
	

	comment_form($args); ?>
	
	
	

</div><!-- .comments-area -->
