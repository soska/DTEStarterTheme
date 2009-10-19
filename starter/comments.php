<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}

	global $blog; //ugly hack, I know!	
?>

		<div id="comments" class="<?php echo $post->comment_status ?>">
			<?php if ( have_comments() ) : ?>
				<h3 class="comments-section-title">
					<?php comments_number(__('No Responses',$_e), __('One Response',$_e), __('% Responses',$_e) );?>
				</h3>
				
				<ol class="commentlist">
					<?php wp_list_comments("avatar_size="); ?>
				</ol>

				<div class="navigation">
					<?php paginate_comments_links() ?>
				</div>
			 <?php else : // this is displayed if there are no comments so far ?>

				<?php if ('open' == $post->comment_status) : ?>
					<!-- If comments are open, but there are no comments. -->

				 <?php else : // comments are closed ?>
					<!-- If comments are closed. -->
					<p class="nocomments"><?php _e('Sorry. Comments are Closed',$_e) ?></p>

				<?php endif; ?>
			<?php endif; ?>


			<?php if ('open' == $post->comment_status) : ?>


			<div id="respond">

				<h3><?php comment_form_title( __('Leave a Reply',$_e), __('Reply to %s',$_e) ); ?></h3>

				<div class="cancel-comment-reply">
					<small><?php cancel_comment_reply_link(); ?></small>
				</div>

				<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
					<p>
						<?php
							$url = get_option('siteurl').'/wp-login.php?redirect_to='.urlencode(get_permalink());
							$link = HtmlHelper::link(__('Logged In',$_e),$url);
							echo sprintf(__('You must be %s to post a comment',$_e),$link);
						?>
					</p>
				<?php else : ?>

					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

					<?php if ( $user_ID ) : ?>

					<p class="logged-as">
						<?php _e('Logged in as',$_e) ?> 
						<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
						<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account',$_e) ?>">
							<?php _e('Log out &raquo;',$_e) ?>
						</a>
					</p>

			<?php else : ?>
				
				<?php $reqClass = ($req)?'required':'' ?>

				<p class="input text <?php echo $reqClass ?>" id="comment-form-author">
					<label for="author">
						<?php _e('Name ',$_e); if ($req) _e('(required)',$_e); ?>
						<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
					</label>					
				</p>

				<p class="input text <?php echo $reqClass ?>" id="comment-form-mail">
					<label for="email">
						<?php _e('Mail (will not be published) ',$_e); if ($req) _e('(required)',$_e); ?>						
						<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
					</label>					
				</p>

				<p class="input text" id="comment-form-url">
					<label for="url">
						<?php _e('Website',$_e); ?>												
						<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					</label>
				</p>

			<?php endif; ?>


			<p class="input textarea">
				<label for='comment'><?php _e('Your comment',$_e) ?></label>
				<textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea>
			</p>

			<p class="submit"><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
			<?php comment_id_fields(); ?>
			</p>
			<?php do_action('comment_form', $post->ID); ?>

			</form>

			<?php endif; // If registration required and not logged in ?>
			</div>

			<?php endif; // if you delete this the sky will fall on your head ?>

		</div>