			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="wrap clearfix">
	<ul class="social">
		<li><a href="https://www.facebook.com/pages/Yoga-Treat/1480466952175295" target="_blank"><i class="icon facebook"></i></a></li>
		<li><a href="http://instagram.com/yogatreat?" target="_blank"><i class="icon instagram"></i></a></li>
		<li><a href="http://twitter.com" target="_blank"><i class="icon twitter"></i></a></li>
	</ul>

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>

				</div> <!-- end #inner-footer -->

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
		<script>
		jQuery(document).ready(function($){
			$('.navbar-toggle').bind( "touchstart", function(e){
          e.preventDefault();
			$('.navbar-collapse').collapse('toggle');
			});
			 

			// Show modal if they are a first time visitor
			if (document.cookie.indexOf("viewed_modal") >= 0) {

			} else {

				window.setTimeout(function(){
          $('#myModal').modal('show');
      	}, 8000);

			}


			// This is the code that sets a cookie once a user closes the modal
			$('#myModal').on('hidden.bs.modal', function (e) {

				// Set cookie to prevent modal from popping up within 30 days
				
				document.cookie="viewed_modal=true; domain=<?php $domain_name =  preg_replace('/^www\./','',$_SERVER['SERVER_NAME']); echo $domain_name; ?>; max-age=64800; path=/;"

				console.log('<?php $domain_name =  preg_replace('/^www\./','',$_SERVER['SERVER_NAME']); echo $domain_name; ?>');

			});

			

		});


				
		jQuery('li.trigger-contact a').attr('id', 'contact-us');
			
		</script>
		<script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>

		
	</body>

</html> <!-- end page. what a ride! -->
