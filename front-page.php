<?php
/**
 * Permet d'avoir une page d'accueil fixe, et d'insérer un diaporama dynamique dans le header.
 */

get_header('homepage'); ?>
<!-- TEMPLATE DE HOMEPAGE CUSTOM-->
<?php get_sidebar(); ?>

		<div id="container" class="two-column-left">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
