
<?php
/*
Template Name: Archives
*/
get_header();

?>

<div class="page-container">
	<div class="page-wrapper">
		<?php get_search_form(); ?>
		<main role="main">
			<h1><?php the_archive_title(); ?></h1>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php if ( is_page( the_title() ) ) { continue; } ?>
					<article class="post">
						<a href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>
						<div class="info">
							<span class="author"><em><?php the_author(); ?></em></span>
							<span class="timestamp">
								<em>
									<?php
										echo get_the_date();
										echo " ";
										echo get_the_time(); ?>
								</em>
							</span>
						</div>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>

			<h2>Per månad:</h2>
			<?php wp_get_archives('type=monthly'); ?>
			<h2>Per kategori:</h2>
			<?php wp_list_categories(); ?>

		</main><!-- #content -->
	</div>
</div><!-- #container -->

<?php get_footer(); ?>