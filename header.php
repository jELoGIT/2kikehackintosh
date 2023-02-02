
<!-- bloc-0 -->
<div class="bloc l-bloc" id="bloc-0">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-light row navbar-expand-md " role="navigation">
					<a class="navbar-brand ltc-3379" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
					<button id="nav-toggle" type="button" class="ml-auto ui-navbar-toggler navbar-toggler border-0 p-0" data-toggle="collapse" data-target=".navbar-49604" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><svg height="32" viewBox="0 0 32 32" width="32"><path class="svg-menu-icon menu-icon-thin-bars" d="m2 9h28m-28 7h28m-28 7h28"></path></svg></span>
					</button><?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse navbar-49604', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'site-navigation nav navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker(), ) ); ?>
					<div class="navbar-content-area col-lg-3 col-md-3">
							<form template-path="<?php echo get_template_directory_uri(); ?>/" id="search-form" data-form-type="blocs-form" action="/" method="GET">
								<input class="form-control" placeholder="Search Posts..." name="s" value="<?php echo get_search_query(); ?>">
							</form>
						</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- bloc-0 END -->
