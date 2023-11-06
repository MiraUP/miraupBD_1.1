<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
				<?php
				/* translators: %s: Search query. */
				printf( __( 'Search Results for: %s', 'miraupbd' ), get_search_query() );
				?>
				</h1>
			</header><!-- .page-header -->

				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the post format-specific template for the content. If you want
					 * to use this in a child theme, then include a file called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
				?>	
          


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
	<?php
	// Output the featured image.
	if ( has_post_thumbnail() ) :
		if ( 'grid' === get_theme_mod( 'featured_content_layout' ) ) {
			//the_post_thumbnail();
		} else {
		}
		endif;
	?>
	</a>

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ), true ) ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->



        <?php
					endwhile;

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
				?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();
