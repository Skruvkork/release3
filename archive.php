
<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="page-container">
	<div class="page-wrapper">
		<?php get_search_form(); ?>
		<main role="main">
			<?php the_post(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<h2>Per månad:</h2>
			<?php wp_get_archives('type=monthly'); ?>
			<h2>Per kategori:</h2>
			<?php wp_list_categories(); ?>

		</main><!-- #content -->
	</div>
</div><!-- #container -->

<?php get_footer(); ?>