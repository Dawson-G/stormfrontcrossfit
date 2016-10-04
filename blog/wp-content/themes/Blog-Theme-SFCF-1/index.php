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
							<p><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?>     <?php edit_post_link(); ?></p>
						</div><!--end post footer-->
					  </div><!--end post-->
					<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
					  <div class="navigation index">
						<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
						<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
					  </div><!--end navigation-->
					<?php else : ?>
				<?php endif; ?>
        
        
      </div>
    </div>
</div><!-- main -->

<?php get_footer(); ?>