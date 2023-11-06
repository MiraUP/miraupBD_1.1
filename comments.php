
<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage MiraUP_BD
 * @since MiraUP Banco de Design 1.0
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

<div class="offcanvas-header">
  <h2 class="offcanvas-title h4 fw-semibold" id="offcanvasCommentsLabel">Comentários</h2>
  <button type="button" class="button-close icon-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>


<div id="comments" class="offcanvas-body comments-area">

	<?php if ( have_comments() ) : ?>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 42,
					)
				);
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'miraupbd' ); ?></p>
	<?php endif; ?>

</div><!-- .comments-area -->


<div class="offcanvas-footer">
  <?php
		comment_form(
			array(
				'title_reply_before' => '<h3 id="reply-title" class="h4 fw-semibold d-none">',
				'title_reply_after'  => '</h3>',
        'author' => '',
        'url' => '',
        'class_submit' => 'btn btn-primary waves-effect waves-light w-100 btn-submit-comment',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'comment_field' => '<div class="form-floating">
          <textarea class="form-control" name="comment" cols="45" rows="8" maxlength="65525" placeholder="Escreva seu comentário aqui" id="comment" required="required"></textarea>
          <label for="comment">Escreva um comentário</label>
        </div>',
        //'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn btn-primary waves-effect waves-light" value="%4$s" />',
        'label_submit' => 'Publicar'
			)
		);
  ?>
</div>