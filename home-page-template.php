<?php 
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>
<?php get_header(); ?>

<section id="hero" role="site-information">
	<!--<p>
		<a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sTG=22&sVT=6&sView=week&sDate=6/2/2014" class="btn btn-primary btn-lg" target="_blank" >View class schedule &raquo;</a>
	</p> -->
	<!-- dynamic custom post url button code starts here -->
	
  <p>	
	 <!--<a href=" " class="btn btn-primary btn-lg" target="_blank" ><?php the_field('class_url_text'); ?></a> -->
	 <a href="<?php the_field('class_url_link'); ?>" class="btn btn-primary btn-lg" target="_blank" ><?php the_field('class_url_text'); ?></a>
	</p>
	<!-- and ends here -->

	<div class="container site">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<section class="entry-content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
							</section> <!-- end article section -->
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
												<p><?php _e( 'This is the error message in the home-page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<section id="video">
	<div class="container video">
		<div class="ifrm-outer">
		<div class="ifrm-inner">
		<iframe src="https://fast.wistia.net/embed/iframe/40sapf523u?controlsVisibleOnLoad=true&playerColor=333333&plugin%5Bsocialbar-v1%5D%5BbadgeImage%5D=http%3A%2F%2Fembed.wistia.com%2Fdeliveries%2F3574f7f1910ee97739ad806a18fc577d0475301f.jpg%3Fimage_resize%3D100&plugin%5Bsocialbar-v1%5D%5BbadgeUrl%5D=http%3A%2F%2Fdatasphere.com%3Futm_source%3Dembedvideo%3Futm_source%3Dembedvideo&plugin%5Bsocialbar-v1%5D%5Bbuttons%5D=facebook-twitter&plugin%5Bsocialbar-v1%5D%5Blogo%5D=true&plugin%5Bsocialbar-v1%5D%5BpageUrl%5D=https%3A%2F%2Fmy.datasphere.com%2Fnode%2F7623904%3Futm_source%3Dembedvideo&version=v1&videoHeight=360&videoWidth=640&volumeControl=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" width="1000" height="auto"></iframe>
		</div>
		</div>
		<a href="https://itunes.apple.com/us/app/yoga-treat/id1144108657?mt=8" class="btn btn-primary btn-lg" title="Check out our latest schedule in real-time and sign up for classes on the go" target="_blank">Get the Yoga Treat app!</a>
	</div><!-- .container -->
	
</section>

<section id="classes">
	<div class="container">
		
<!-- <a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sView=week&sDate=5/10/2014" class="btn btn-primary btn-lg" target="_blank" >View available classes</a> -->
		<div class="row">

			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="http://www.diablomag.com/Best-of-the-East-Bay-Voting-2016/" target="_blank"><img class="img-responsive diablo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/bestofbay.png" /></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="http://sf.cityvoter.com/wbiz/694261" target="_blank" class="cv-wlink" data-type="winnersbadge" data-eid="1035001" data-bid="694261" data-year="2016" data-rank="2">
					<img class="img-responsive diablo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/VotingLogo.png" />
        	<h2 class="vote-title">BEST YOGA STUDIO</h2>
    		</a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="http://www.diablomag.com/January-2016/The-Best-Fitness-Classes-for-2016/" target="_blank"><img class="img-responsive diablo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/diablo-cover.png" /></a>
			</div>
		</div><!-- .row -->
		<div class="row content">
			
			<div class="col-md-4 col-sm-6">
				<a href="<?php the_field('class_1_url'); ?>" class="class-container">
					<div class="class-thumb" style="background: url('<?php the_field('class_1_img');?>') center center no-repeat; background-size: cover;"></div>
					<p class="class-text"><?php the_field('class_1_title'); ?></p>
				</a> 
			</div><!-- end .col-md-4 -->

			<div class="col-md-4 col-sm-6">
				<a href="<?php the_field('class_2_url'); ?>" class="class-container">
					<div class="class-thumb" style="background: url('<?php the_field('class_2_img');?>') center center no-repeat; background-size: cover;"></div>
					<p class="class-text"><?php the_field('class_2_title'); ?></p>
				</a> 
			</div><!-- end .col-md-4 -->
			
			<div class="col-md-4 col-sm-6">	
				<a href="<?php the_field('class_3_url'); ?>" class="class-container">
					<div class="class-thumb" style="background: url('<?php the_field('class_3_img');?>') center center no-repeat; background-size: cover;"></div>
					<p class="class-text"><?php the_field('class_3_title'); ?></p>
				</a> 
			</div><!-- end .col-md-4 -->
	
      <div class="col-md-4 col-sm-6">
     		<a href="<?php the_field('class_4_url'); ?>" class="class-container">
     			<div class="class-thumb" style="background: url('<?php the_field('class_4_img');?>') center center no-repeat; background-size: cover;"></div>
      		<p class="class-text"><?php the_field('class_4_title'); ?></p>
      	</a> 
      </div>

      <div class="col-md-4 col-sm-6">
      	<a href="<?php the_field('class_5_url'); ?>" class="class-container">
      		<div class="class-thumb" style="background: url('<?php the_field('class_5_img');?>') center center no-repeat; background-size: cover;"></div>
      		<p class="class-text"><?php the_field('class_5_title'); ?></p>
      	</a>  
      </div><!-- end .col-md-4 -->

      <div class="col-md-4 col-sm-6">
				<a href="<?php the_field('class_6_url'); ?>" class="class-container">
					<div class="class-thumb" style="background: url('<?php the_field('class_6_img');?>') center center no-repeat; background-size: cover;"></div>
					<p class="class-text"><?php the_field('class_6_title'); ?></p>
				</a> 
      </div><!-- end .col-md-4 -->

		</div><!-- .row -->
	</div><!-- .container -->
</section>
<section id="social">
	<div class="container content">
		<div class="row">
			
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php the_field('modal-title'); ?></h4>
            </div>
            <div class="modal-body">
              <?php the_field('modal-info'); ?>
			<div class="click"><a href="<?php the_field('modal-link'); ?>" class="btn btn-primary btn-lg" target="_blank" ><?php the_field('modal-link-text'); ?></a></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
