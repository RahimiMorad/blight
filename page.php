<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BLight
 */

get_header();
?>

    <div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-<?php

		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			echo "12";
		} else {
			echo "8";
		}


		?>">
            <div class="container">
                <div class="row">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                </div>
            </div>
		</main><!-- #main -->
	    <?php get_sidebar(); ?>

    </div><!-- #primary -->
    </div>

<?php
get_footer();
