<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
		<div class="post">
        <h4><?php echo __('by'); ?> <?php echo get_the_author(); ?></h4>

			<?php the_content(__('&raquo; More &raquo;')); ?>

		</div> <!-- /end .post -->

		<br />
		
		<?php endwhile; ?>

		<?php else : ?>

		<h2 class="center"><?php echo __('Not Found'); ?></h2>
		<p class="center"><?php echo __('Sorry, but you are looking for something that isn\'t here.'); ?></p>

		<?php endif; ?>

<?php get_footer(); ?>