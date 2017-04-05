<?php
/**
 * @package WordPress
 * @subpackage zh2
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<h2><?php the_title(); ?></h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content(__('<p class="serif">Read the rest of this entry &raquo;</p>')); ?>

  <ul>
    <?php wp_get_archives('type=postbypost'); ?>
  </ul>

		<h5><?php edit_post_link(__('Edit'), '<p>', '</p>'); ?></h5>

	
		<?php endwhile; else: ?>

			<p><?php echo __('Sorry, no posts matched your criteria.'); ?></p>

		<?php endif; ?>


<?php get_footer(); ?>