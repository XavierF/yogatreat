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
	<h3 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h3> 
</section>
<section id="info">
<div class="container content info">
	<p>~Treat Yourself~</p>
<p>Choose from a multitude of classes that guarantee a total mind, body and soul transformation. Our classes will leave you feeling toned, energized and empowered.
</p>
</div>
</section>
<section id="classes">
	<div class="container">
	<div class="sub-head">
<h3 class="sec-hdr-h3">Classes</h3><a href="http://clients.mindbodyonline.com/ws.asp?studioid=150291&stype=-7&sView=week&sDate=5/10/2014" class="btn btn-primary btn-lg register" role="button" target="new" >Sign Up Now!</a>
</div>
		<div class="row content">
			
			
			<div class="col-md-4">
				<div id="yoga"></div>
				<p class="class-title">Yoga</p>
			</div>

			<div class="col-md-4">
				<div id="matPilates"></div>
				<p class="class-title">Mat Pilates</p>
			</div>
			
			<div class="col-md-4">
				<div id="trx"></div>
				<p class="class-title">TRX</p>
			</div>
		</div><!-- .row -->

		<div class="row content">
      <div class="col-md-4">
      	<div id="taeboFitness"></div>
      	<p class="class-title">Tae Bo® Fitness</p>
      </div>

      <div class="col-md-4">
      	<div id="yogaBarre"></div>
      	<p class="class-title">Yoga Barre</p>
      </div>

      <div class="col-md-4">
				<div id="kids"></div>
				<p class="class-title">Kids and Teens</p>
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
