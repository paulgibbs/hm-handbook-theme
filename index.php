<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hm-handbook
 */

namespace HM_Handbook;

get_header();

?>

<div class="site-container">

	<?php echo get_sidebar(); ?>

	<main class="site-content-container">

		<div class="site-content">

			<?php if ( ! is_singular() ) : ?>
				<?php get_template_part( 'parts/site-content-heading' ); ?>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'parts/article' ); ?>
			<?php endwhile; ?>

			<?php if ( ! is_singular() ) : ?>
				<?php get_template_part( 'parts/pagination' ); ?>
			<?php endif; ?>

		</div>

		<div class="site-content-sidebar"></div>

	</main>

</div>

<?php get_footer(); ?>
