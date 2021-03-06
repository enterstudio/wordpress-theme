<?php
/**
 * @package OKFNWP
 */

	$categories = get_the_category();
?>

	<div class="col-md-6 post--blog post--excerpt">
		<?php
			if(has_post_thumbnail()) :
		?>
			<div class="post__thumb">
			<?php
				echo '<a href="' . get_permalink() . '">' . get_the_post_thumbnail() . '</a>';

				if($categories) :
					echo sprintf('<a href="%1$s" class="post__category">%2$s</a>', get_category_link($categories[0]->term_id), $categories[0]->name);
				endif;
			?>
			</div>
		<?php
			endif;
		?>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<p class="post__meta"><i class="fa fa-calendar"></i> <?php echo sprintf(__('Posted %1$s'), get_the_time('jS F Y')); ?></p>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>"><?php _e('Read more'); ?></a>
	</div>