<?php the_tags("<p class='tags'>".__('Tags ',$_e), ', ', '</p>'); ?> 

<?php wp_link_pages(); ?>
<p class="entry-utility">
<span class="author"><?php _e('By',$_e);?> <?php the_author() ?> 
	<?php _e('on ',$_e) ?> <?php the_category(', ') ?> </span>                                  
<span class="entry-comments-link">
	<?php comments_popup_link(__('No Responses',$_e), __('One Response',$_e), __('% Responses',$_e)); ?>
</span>
<?php edit_post_link(__('Edit ',$_e), "<span class='edit-link'>", '</span>'); ?>  
</p>

