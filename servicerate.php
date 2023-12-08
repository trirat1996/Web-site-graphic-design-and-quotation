<?php include("header.php");?>

<?php include("menu.php");?>


				<!-- Fullscreen Slider Section -->
				<section class="section-block featured-media tm-slider-parallax-container">
					<div class="tm-slider-container full-width-slider fixed-height" data-parallax data-external-padding="0" data-animation="slide" data-scale-under="1140">
						<ul class="tms-slides">
							<li class="tms-slide" data-image data-force-fit>
								<div class="tms-content">
									<div class="tms-content-inner center">
										<div class="row">
											<div class="column width-12">
												<h1 class="tms-caption title-xlarge color-white "
													data-animate-in="preset:scaleOut;duration:1000ms;" style="color: white;text-shadow: #23232330 5px 5px 10px;">

<?php $sql = "SELECT * FROM product3 WHERE product_id = 9";
$result = $connect->query($sql);foreach ($result as $row) { ?>
 <?php echo $row['product_name'];  ?>

												</h1>
											</div>
										</div>
									</div>
								</div>
									<img data-src="img/<?php echo $row['product_image'];  ?>" data-retina src="img/<?php echo $row['product_image'];  ?>" alt="<?php echo $row['product_name'];  ?>"/>
							</li>
						</ul>
					</div>
				</section>
				<!-- Fullscreen Slider Section End -->
 <?php } ?>
				<!-- About Intro -->
				<div class="section-block" style="border-top-width: 0px;">
					<div class="row">
						<div class="column width-8 offset-2 center horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="0.5">
							<p class="lead text-xlarge weight-bold color-charcoal text-line-vertical">
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 10";
$result = $connect->query($sql);foreach ($result as $row) { ?>

 <?php echo $row['product_name'];  ?>

 <?php } ?>
							</p>
						</div>
					</div>
				</div>
				<!-- About Intro End -->

	


						<!-- Service Section -->
				<section class="section-block replicable-content" style="padding-top: 0px;">
					<div class="row"><?php $sql = "SELECT * FROM product3 WHERE product_id = 10";
$result = $connect->query($sql);foreach ($result as $row) { ?>

						<div class="column width-4">
							<h2 class="weight-bold mb-30" style="margin-top: 20px;"><?php echo $row['product_name'];  ?></h2>
						<?php echo $row['html']; ?> 	
						</div>

						 <?php } ?>
						<div class="column width-8">
							<div class="row flex">

								<?php $sql = "SELECT * FROM product3 WHERE product_id = 11";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-6">
									<div class="horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="1">
										<span class="feature-icon  <?php echo $row['html'];  ?> medium color-pink"></span> <h5 class="mb-30"> <?php echo $row['product_name'];  ?></h5>
										<p> <?php echo $row['text'];  ?></p>
									</div>
								</div>
								 <?php } ?>
								 	<?php $sql = "SELECT * FROM product3 WHERE product_id = 12";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-6">
									<div class="horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="1">
										<span class="feature-icon  <?php echo $row['html'];  ?> medium color-pink"></span> <h5 class="mb-30"> <?php echo $row['product_name'];  ?></h5>
										<p> <?php echo $row['text'];  ?></p>
									</div>
								</div>
								 <?php } ?>
								 	<?php $sql = "SELECT * FROM product3 WHERE product_id = 13";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-6">
									<div class="horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="1">
										<span class="feature-icon  <?php echo $row['html'];  ?> medium color-pink"></span> <h5 class="mb-30"> <?php echo $row['product_name'];  ?></h5>
										<p> <?php echo $row['text'];  ?></p>
									</div>
								</div>
								 <?php } ?>
								 	<?php $sql = "SELECT * FROM product3 WHERE product_id = 14";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-6">
									<div class="horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="1">
										<span class="feature-icon  <?php echo $row['html'];  ?> medium color-pink"></span> <h5 class="mb-30"> <?php echo $row['product_name'];  ?></h5>
										<p> <?php echo $row['text'];  ?></p>
									</div>
								</div>
								 <?php } ?>
					
							</div>
						</div>
					</div>
				</section>
				<!-- Service Section End -->

				<?php include("price.php");?>
		

			</div>
			<!-- Content End -->
			
		<?php 
include("Footer.php");
 ?>