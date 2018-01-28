<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Education Park
 */
?>


<?php
$boxedornot = education_park_boxedornot();

?>


	</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">

		
	        <!-- Footer Widgets -->

	        <div class="copyright clearfix">

	        	<?php if ($boxedornot == 'fullwidth') {?>
			    	<div class="container">
			    <?php }?>

			    <div class="container pad0">

				  	<div class="copyright-content">
						<div class="address-content">	
							<p><strong>Adres</strong></p>
							<p>ul. Szpitalna 17</p>
						</div>
						<div class="address-content">						
							<p><strong>Telefon</strong></p>
						<p>665-749-144</p>
						</div>	
						<div class="address-content">	
						<p><strong>E-mail</strong></p>
						<p>architekturawina@gmail.com</p>
						</div>
				  	</div>

			  	</div>

			  	<?php if ($boxedornot == 'fullwidth') {?>
			    	</div>
			    <?php }?>

			</div>
			<!-- End the Copyright -->

		</footer>
	<!-- End the Footer -->
</div>
<!-- End the Page -->

<a href="#0" class="cp-top"><?php esc_html_e('Top', 'education-park');?></a>
<!-- End the scroll to top -->

<?php wp_footer(); ?>
</body>
</html>