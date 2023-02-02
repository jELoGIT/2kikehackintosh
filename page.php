<!doctype html><html><head>  <meta charset="utf-8">  <meta name="keywords" content="<?php echo get_post_meta(get_the_ID(), 'keywords', TRUE);?>">  <meta name="description" content="<?php bloginfo('description'); ?>">  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"><meta name="robots" content="index, follow">  <link rel="shortcut icon" type="image/png" href="<?php if (get_option('site_icon')){echo get_site_icon_url();}else{ echo get_template_directory_uri().'/favicon.png';}?>"> <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title><?php wp_head(); ?>  <!-- Analytics --> <!-- Analytics END -->  </head><body class="  <?php echo implode(" ",get_body_class()); ?>"><!-- Main container --><div class="page-container">  <?php get_header(); ?><?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- bloc-6 --><div class="bloc b-parallax l-bloc" id="bloc-6" <?php if (has_post_thumbnail()){echo 'style="background-image:url(\'' . get_the_post_thumbnail_url() . '\')"';}?>><div class="parallax bg-ink"></div><div class="container bloc-xxl"><div class="row"><div class="col"><h1 class="mg-md text-center post-header text-shadow tc-3633"><?php the_title(); ?></h1></div></div><div class="row"><div class="offset-lg-0 col-lg-12"><ul class="list-unstyled justify-content-center d-flex list-horizontal-layout"><li><span class="far fa-user-circle icon-sm icon-3633"></span> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="a-btn text-shadow ltc-3633">By <?php the_author(); ?></a></li><li><span class="far fa-calendar icon-sm icon-3633"></span> <a href="<?php echo get_permalink(); ?>" class="a-btn text-shadow ltc-3633"><?php echo get_the_date(); ?></a></li></ul></div></div></div></div><!-- bloc-6 END --><!-- content-section --><div class="bloc l-bloc" id="content-section"><div class="container bloc-lg"><div class="row"><div class="col"><div><div><?php the_content(); ?></div></div></div></div></div></div><!-- content-section END --><!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"><path class="scroll-to-top-btn-icon" d="M30,22.656l-14-13-14,13"/></svg></a><!-- ScrollToTop Button END--><?php endwhile; ?><?php endif; ?><?php get_footer(); ?></div><!-- Main container END -->  <?php wp_footer(); ?><!-- Additional JS --><script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/lazysizes.min.js" defer></script><script src="<?php echo get_template_directory_uri(); ?>/js/universal-parallax.min.js?3801"></script><!-- Additional JS END --></body></html>