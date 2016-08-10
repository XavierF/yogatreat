<?php 
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>
<?php get_header(); ?>

<section id="hero" role="promo">
	<!--<p>
		<a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sTG=22&sVT=6&sView=week&sDate=6/2/2014" class="btn btn-primary btn-lg" target="_blank" >View class schedule &raquo;</a>
	</p> -->
	<!-- dynamic custom post url button code starts here -->
	
  <p>	
	 <!--<a href=" " class="btn btn-primary btn-lg" target="_blank" ><?php the_field('class_url_text'); ?></a> -->
	 <a href="<?php the_field('class_url_link'); ?>" class="btn btn-primary btn-lg" target="_blank" ><?php the_field('class_url_text'); ?></a>sup?
	</p>
	<!-- and ends here -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
				<h2>Choose from a multitude of classes that guarantee a total mind, body and soul transformation. <br class="visible-lg"/>Our classes will leave you feeling toned, energized and empowered.</h2>
			</div>
		</div>
	</div>
</section>

<section id="schedule">
	<div class="container">
		<healcode-widget data-type="schedules" data-widget-partner="mb" data-widget-id="ba30874bf96" data-widget-version="0.1"></healcode-widget>
	</div>
</section>

<section id="classes">
	<div class="container">
<!-- <a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sView=week&sDate=5/10/2014" class="btn btn-primary btn-lg" target="_blank" >View available classes</a> -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="https://lessons.com" title="Lessons" target="_blank"><img src="https://cdn.lessons.com/assets/images/desktop/lessons-2016.png" class="img-responsive" height="200" alt="Barre" /></a>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="http://www.diablomag.com/Best-of-the-East-Bay-Voting-2016/" target="_blank"><img class="img-responsive diablo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/bestofbay.png" /></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="http://sf.cityvoter.com/wbiz/694261" target="_blank" class="cv-wlink" data-type="winnersbadge" data-eid="1035001" data-bid="694261" data-year="2016" data-rank="2">
					<img class="img-responsive diablo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/VotingLogo.png" />
        	<h2 class="vote-title">BEST YOGA STUDIO</h2>
    		</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
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


<div class="modal" id="signUp">
	<div class="modal-dialog">
		
		<div class="modal-content">
			<div class="modal-header">
			<h3>Class Schedule</h3>	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
			<?php the_field('overlay_content') ?>
			</div>
	 <div class="modal-footer">
	 <a href="<?php the_field('class_url_link'); ?>" class="btn btn-primary btn-lg" target="_blank" ><?php the_field('class_url_text'); ?>#</a>
	 </div>
	 </div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- .modal -->
<?php get_footer(); ?>
