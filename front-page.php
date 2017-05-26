<?php get_header(); ?>
<div class="page-container">
	<div class="page-wrapper">
		<main role="main">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<h1>Hem</h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php else : ?>
			<?php endif ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>