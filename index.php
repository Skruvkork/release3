<?php get_header(); ?>
<div class="page-container">
	<div class="page-wrapper">
		<h1><?php wp_title(''); ?></h1>
		<?php get_search_form(); ?>
		<a href="<?php echo home_url('/blogg/arkiv'); ?>">Eller bläddra i arkivet... <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
		<main role="main">
			<div class="content">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article class="post">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
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
				<?php else : ?>
					<h2>Inga inlägg :(</h2>
				<?php endif ?>
			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>
