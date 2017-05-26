<?php get_header(); ?>
<div class="page-container">
	<div class="page-wrapper">
		<main role="main">
			<?php
				the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php the_meta(); ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>