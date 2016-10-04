<?php get_header(); ?>
  <div class="carousel fade" data-ride="carousel" id="featured">

    <ol class="carousel-indicators">
    </ol>

    <div class="carousel-inner fullheight">
      <div class="item"><img src="/images/joella.jpg" alt="..."></div>
      <div class="item"><img src="/images/inside1.jpg" alt="..."></div>
    </div><!-- carousel-inner -->

    <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control" href="#featured" role="button" data-slide="next">
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </a>
  </div><!-- featured carousel -->
</header>

<div class="main">
    <div class="page" id="blog">
      <div class="content container">
        <h2 class="pageHeader">BLOG</h2>
        
        <?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					  <div id="post post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post-header">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="green"><?php the_time( 'M j y' ); ?> / By: <?php the_author(); ?></p>
						</div><!--end post header-->
						<div class="entry clear">
							<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
							<p><?php the_content(); ?></p>
							<?php wp_link_pages(); ?>
						</div><!--end entry-->
						<div class="post-footer">
							<p><?php edit_post_link(); ?></p>
						</div><!--end post footer-->
					  </div><!--end post-->
					<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
					  <div class="navigation index">
						<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
						<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
					  </div><!--end navigation-->
					<?php else : ?>
				<?php endif; ?>
        
        
            <div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

        
      </div>
    </div>
</div><!-- main -->
<?php get_footer(); ?>