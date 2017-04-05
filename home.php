<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header(); ?>

		<h2><?php the_title(); ?></h2>


		<div id="leo">
        <dl class="dl-horizontal">
			<?php wp_nav_menu( array('theme_location'  => 'primary', 'container_class' => 'nav', 'menu_id' => 'nav', 'walker' => new description_walker() ) ); ?>
        </dl>               
		</div> <!-- /end #leo -->

<?php get_footer(); ?>