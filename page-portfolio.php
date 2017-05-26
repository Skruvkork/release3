<?php // Template Name: Portfolio ?>
<?php get_header(); ?>
<div class="page-container">
	<div class="page-wrapper">
		<main role="main">
			<h1>Portfolio</h1>
			<div id="portfolio">
				<div class="spinner-container">
					<i class="spinner fa fa-circle-o-notch fa-spin fa-3x fa-fw" aria-hidden="true"></i>
					<span class="sr-only">Laddar...</span>
				</div>
			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>

<script>
fetch('/wp-json/wp/v2/projects')
	.then(response => response.json())
	.then(response => {
		const portfolio = document.querySelector('#portfolio');
		let divs = [];
		response.forEach(project => {
			const div = `<div class="post">
							<h3>${project.title.rendered}</h3>
							${project.content.rendered}
						</div>`
			divs.push(div);
		})
		portfolio.innerHTML = divs.join('');
	});
</script>