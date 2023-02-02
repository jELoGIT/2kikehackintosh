<div class="col-md-3">
	<a href="<?php echo get_permalink(); ?>"><img src="<?php if (empty(get_the_post_thumbnail_url())){echo get_template_asset_path("/img/placeholder-image.png");}else{echo get_the_post_thumbnail_url();} ?>" class="img-fluid mx-auto d-block lazyload" alt="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" width="263" height="184" /></a>
	<h4 class="mg-md tc-3379 text-center">
		<?php the_title(); ?>
	</h4>
</div>