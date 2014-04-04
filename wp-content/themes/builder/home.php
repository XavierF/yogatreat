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

<section id="hero">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/yoga1.jpg" alt="">
				<div class="carousel-caption">
					<h4>First Thumbnail label</h4>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/yoga2.jpg" alt="">
				<div class="carousel-caption">
					<h4>First Thumbnail label</h4>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/yoga3.jpg" alt="">
				<div class="carousel-caption">
					<h4>First Thumbnail label</h4>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/yoga4.jpg" alt="">
				<div class="carousel-caption">
					<h4>First Thumbnail label</h4>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/yoga5.jpg" alt="">
				<div class="carousel-caption">
					<h4>First Thumbnail label</h4>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	</div>
</section>
<section id="info">
<div class="container">
	<p>~Treat Yourself~
Choose from a multitude of classes that guarantee a total mind, body and soul transformation. Our classes will leave you feeling toned, energized and empowered.
</p>
</div>

</section>
<section id="services">
	<div class="container">
	Yoga         Mat Pilates         TRX          	Tae Bo® Fitness       Yoga Barre  Kids and Teens 
Pictures (Small blocks with link/click to class schedule)
</div>

	
</section>

<section id="social">
	
</section>


<?php get_footer(); ?>
