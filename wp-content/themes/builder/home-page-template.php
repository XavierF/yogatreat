<?php 
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>
<?php get_header(); ?>

<section id="hero" role="roll with it">
	<!--<p>
		<a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sTG=22&sVT=6&sView=week&sDate=6/2/2014" class="btn btn-primary btn-lg" target="_blank" >View class schedule &raquo;</a>
	</p> -->
	<!-- dynamic custom post url button code starts here -->
	
  <p>	
	 <a href="<?php the_field('class_url_link'); ?>" class="btn btn-primary btn-lg" target="_blank" ><?php the_field('class_url_text'); ?></a>
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
<section id="classes">
	<div class="container">
<!-- <a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sView=week&sDate=5/10/2014" class="btn btn-primary btn-lg" target="_blank" >View available classes</a> -->
		<div class="row content">
			
			<div class="col-md-4">
				<a href="<?php the_field('class_1_url'); ?>" class="class-container">
					<div class="class-thumb" style="background: url('<?php the_field('class_1_img');?>') center center no-repeat; background-size: cover;"></div>
					<p class="class-text"><?php the_field('class_1_title'); ?></p>
				</a> 
			</div><!-- end .col-md-4 -->

			<div class="col-md-4">
				<a href="<?php the_field('class_2_url'); ?>" class="class-container">
					<div class="class-thumb" style="background: url('<?php the_field('class_2_img');?>') center center no-repeat; background-size: cover;"></div>
					<p class="class-text"><?php the_field('class_2_title'); ?></p>
				</a> 
			</div><!-- end .col-md-4 -->
			
			<div class="col-md-4">	
				<a href="<?php the_field('class_3_url'); ?>" class="class-container">
					<div class="class-thumb" style="background: url('<?php the_field('class_3_img');?>') center center no-repeat; background-size: cover;"></div>
					<p class="class-text"><?php the_field('class_3_title'); ?></p>
				</a> 
			</div><!-- end .col-md-4 -->
	
      <div class="col-md-4">
     		<a href="<?php the_field('class_4_url'); ?>" class="class-container">
     			<div class="class-thumb" style="background: url('<?php the_field('class_4_img');?>') center center no-repeat; background-size: cover;"></div>
      		<p class="class-text"><?php the_field('class_4_title'); ?></p>
      	</a> 
      </div>

      <div class="col-md-4">
      	<a href="<?php the_field('class_5_url'); ?>" class="class-container">
      		<div class="class-thumb" style="background: url('<?php the_field('class_5_img');?>') center center no-repeat; background-size: cover;"></div>
      		<p class="class-text"><?php the_field('class_5_title'); ?></p>
      	</a>  
      </div><!-- end .col-md-4 -->

      <div class="col-md-4">
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

<?php get_footer(); ?>
