
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<fieldset class="search-wrapper">
			<button id="toggle-search" class="search-submit">
				<span class="icon-search" aria-hidden="true">
					<i class="fa fa-search"></i>
				</span>
				<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
			</button>
			<label class="search-bar">
				<input type="search" id="search-field" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			</label>
		</fieldset>
	</form>
<!-- </div> -->