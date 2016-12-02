<?php
/*
Template Name: Team Page
*/
?>

<?php get_header(); ?>

<div class="container">

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>


								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?></p>

								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
	
								<div class="team clearfix">
											<?php if( have_rows('team') ): ?>
									<div class="row">
											 <?php 	// loop through the rows of data
											    while( have_rows('team') ) : the_row();
											    //vars
											    $image = get_sub_field('image'); 
											    $title = get_sub_field('title'); 
											    $link = get_sub_field('page-link'); 
									    	?>

									    	<div class="col-md-5 col-sm-4 team-thumb">
						
								<div class="team-img" style="background: url('<?php echo $image; ?>') center top no-repeat; background-size: cover;"></div>
								<a href="<?php echo $link; ?>" class="btn btn-primary btn-lg"><?php echo $title; ?></a>
							
      						</div><!-- end .col-md-5 col-sm-6-->

									
					 			<?php endwhile;?>
						</div><!-- .row -->
							 	<?php endif; ?>
				</div> <!-- end gallery End Masonry Layout-->
		</section>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			</div> <!-- end .container -->

<?php get_footer(); ?>
