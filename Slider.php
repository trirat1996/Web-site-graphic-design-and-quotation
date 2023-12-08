	<!-- Fullscreen Slider Section -->
				<section class="section-block featured-media window-height tm-slider-parallax-container">

					<!-- Scroll Down -->
					<div class="scroll-down">
						<a href="#about" class="scroll-link" style="margin-right: 15px;padding-left: 20px;">Scroll Down</a>
					</div>
					<!-- Scroll Down End -->

					<div class="tm-slider-container full-width-slider" data-parallax data-external-padding="0" data-animation="slide" data-scale-under="960">
						<ul class="tms-slides">
<?php 
$sql99 = "SELECT * FROM product2 WHERE status = 1";
$result99 = $connect->query($sql99);

foreach ($result99 as $row99) {

 ?>

							<li class="tms-slide" data-image data-force-fit data-animation="slideTopBottom">
								<div class="tms-content">
									<div class="tms-content-inner center">
										<div class="row">
											<div class="column width-12">
												<h1 class="tms-caption title-xlarge color-white lspacing-medium"
													data-animate-in="preset:scaleOut;duration:1000ms;"
													data-no-scale
												style="color: white;text-shadow: #23232330 5px 5px 10px;">
													<?php echo $row99['product_name'] ?>
												</h1>
												<div class="clear"></div>
												<h3 class="tms-caption font-alt-1 color-white lspacing-xlarge"
													data-animate-in="preset:slideInUpShort;duration:600ms;delay:400ms;"
													data-no-scale
												style="color: white;text-shadow: #23232330 5px 5px 10px;">
													<?php echo $row99['rate'] ?>
												</h3>
											</div>
										</div>
									</div>
								</div>
								<img data-src="img/<?php echo $row99['product_image'];?>" data-retina src="images/blank.png" alt="<?php echo $row99['product_name'] ?> <?php echo $row99['rate'] ?>"/>
							</li>


<?php    
}
?>
		
						</ul>
					</div>
				</section>
				<!-- Fullscreen Slider Section End -->
