<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<div>
		<label class="sr-only" for="s">Sök efter inlägg</label>
		<input type="search" class="search-field"
			placeholder="Sök efter inlägg..."
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<input type="submit" class="search-submit" value="Sök" />
	</div>
</form>