<?php 
/*
Use this page if you want to create a custom homepage for 
your site. WordPress will look for home.php before index.php. If
you end up using a custom home.php page you can also use the 
blog.php page to display your blog posts. Simply rename or delete
this page template and the latest blog posts(index.php) will be the
homepage of your website. 
*/
?>
<?php get_header(); ?>

<section id="hero" role="roll with it">
	<p>
		<a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sView=week&sDate=5/10/2014" class="btn btn-primary btn-lg" target="_blank" >View class schedule &raquo;</a>
	</p>
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
				<div id="yoga"></div>
				<div class="class-title-link"><a href="/power-yoga-treat-2/">Yoga</a></div> 
			</div>

			<div class="col-md-4">
				<div id="matPilates"></div>
				<div class="class-title-link"><a href="/mat-pilates-2/">Mat Pilates</a></div> 
			</div>
			
			<div class="col-md-4">
				<div id="trx"></div>
				<div class="class-title-link"><a href="/yoga-trx-fusion-2/">TRX</a></div> 
			</div>
		</div><!-- .row -->

		<div class="row content">
      <div class="col-md-4">
      	<div id="taeboFitness"></div>
      	<div class="class-title-link"><a href="/tae-bo-fitness-2/">Tae Bo® Fitness</a></div> 
      </div>

      <div class="col-md-4">
      	<div id="yogaBarre"></div>
      	<div class="class-title-link"><a href="/barre-treat-2/">Yoga Barre</a></div> 
      </div>

      <div class="col-md-4">
				<div id="kids"></div>
				<div class="class-title-link"> <a href="/total-body-treat-kids-and-teens-2/">Kids and Teens</a></div> 
      </div>
		</div><!-- .row -->
	</div><!-- .container -->
</section>
<section id="social">
	<div class="container content">
		<div class="row">
			
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<script>
	jQuery(document).ready(function($){
		$('.carousel').carousel('pause');
	});
</script>
<?php get_footer(); ?>
