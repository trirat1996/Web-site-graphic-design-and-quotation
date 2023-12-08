<?php include("header.php");?>

<?php include("menu.php");?>
			

			<?php include("Slider.php");?>

				<!-- About Intro -->
				<div id="about" class="section-block " style="border-top-width: 0px;">
					<div class="row">
						<div class="column width-8 offset-2 center horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="0.5">
							
							<p class="lead text-xlarge weight-bold color-charcoal">
<?php $sql = "SELECT * FROM product3 WHERE product_id = 1";
$result = $connect->query($sql);
foreach ($result as $row) {  ?>
<?php echo $row['product_name'];  ?></p>
<p class="text-line-vertical"><?php echo $row['text']; ?></p>
											
							<?php } ?>
						</div>
					</div>
				</div>
				<!-- About Intro End -->


					<!-- Portfolio Grid Section -->
				<div class="section-block grid-filter-menu no-padding-top center">
										<div class="row">
					
						<div class="column width-12 ">
							<div class="row">
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 2";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-4">
									<div class="feature-column center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;" data-threshold="1">
										<span class="feature-icon <?php echo $row['html']; ?> icon-circled medium color-pink"></span>
										<div class="feature-text">
											<h5><?php echo $row['product_name'];  ?></h5>
											<p><?php echo $row['text']; ?></p>
										</div>
									</div>
								</div> <?php } ?>

								<?php $sql = "SELECT * FROM product3 WHERE product_id = 3";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-4">
									<div class="feature-column center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;" data-threshold="1">
										<span class="feature-icon <?php echo $row['html']; ?> icon-circled medium color-pink"></span>
										<div class="feature-text">
											<h5><?php echo $row['product_name'];  ?></h5>
											<p><?php echo $row['text']; ?></p>
										</div>
									</div>
								</div> <?php } ?>

								<?php $sql = "SELECT * FROM product3 WHERE product_id = 4";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-4">
									<div class="feature-column center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;" data-threshold="1">
										<span class="feature-icon <?php echo $row['html']; ?> icon-circled medium color-pink"></span>
										<div class="feature-text">
											<h5><?php echo $row['product_name'];  ?></h5>
											<p><?php echo $row['text']; ?></p>
										</div>
									</div>
								</div> <?php } ?>
							</div>
							<div class="row">
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 5";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-6">
									<div class="feature-column center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:400ms;" data-threshold="1">
										<span class="feature-icon <?php echo $row['html']; ?> icon-circled medium color-pink"></span>
										<div class="feature-text">
											<h5><?php echo $row['product_name'];  ?></h5>
											<p><?php echo $row['text']; ?></p>
										</div>
									</div>
								</div>
								 <?php } ?>
								 <?php $sql = "SELECT * FROM product3 WHERE product_id = 6";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
								<div class="column width-6">
									<div class="feature-column center horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:600ms;" data-threshold="1">
										<span class="feature-icon <?php echo $row['html']; ?> icon-circled medium color-pink"></span>
										<div class="feature-text">
											<h5><?php echo $row['product_name'];  ?></h5>
											<p><?php echo $row['text']; ?></p>
										</div>
									</div>
								</div>
								 <?php } ?>
							</div>
						</div>
					</div>
				</div>
				<!-- Portfolio Grid Section -->

	<!-- Hero Section 5 -->
	 <?php $sql = "SELECT * FROM product3 WHERE product_id = 7";
								$result = $connect->query($sql);foreach ($result as $row) { ?>
				<section id="about" class="section-block window-height right hero-5 hero-5-about-1 show-media-column-on-mobile bkg-pink color-white">
					<div class="media-column width-6" style="background-image: url(img/<?php echo $row['product_image'];?>);"></div>
					<div class="row">
						<div class="column width-6">
							<div class="hero-content split-hero-content">
								<div class="hero-content-inner left horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;" data-threshold="0.5">

									<h2 class="mb-30"><?php echo $row['product_name'];  ?></h2>
									<p class="lead"><?php echo $row['text']; ?></p>
									<?php echo $row['html']; ?>
								</div>
							</div>
						</div>
					</div>

				</section>
				 <?php } ?>
				<!-- Hero Section 5 End -->






					<div class="section-block grid-filter-menu center">
					<div class="row">
						<div class="column width-12">
							<h2 class="mb-30" style="margin-top: 30px;">ตัวอย่างผลงาน</h2>
							<ul>
								

							</ul>
						</div>
					</div>
				</div>
				
					
			
				<div class="section-block grid-container full-width fade-in-progressively no-padding-top" data-layout-mode="fitRows" data-animate-filter-duration="700" data-animate-resize data-animate-resize-duration="0">
					<div class="row">
						<div class="column width-12">
							<div class="row grid content-grid-4">
<?php $sqls="SELECT * from categories where categories_active = 1 ";
$results = $connect->query($sqls); 
foreach ($results as $rows) { ?>
								<div class="grid-item design  <?php echo $rows['categories_id'];?>">
									<div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.5">
										<a class="overlay-link" href="portfolio.php?id=<?php echo $rows['categories_id']?>">
											<img src="img/categories/<?php echo $rows['catimage'];?>" alt=""/>
											<span class="overlay-info" style="opacity: 100;transition-duration: 700ms;background-color: rgb(255 255 255 / 50%);">
												<span>
													<span>
														<span class="project-title"><?php echo $rows['categories_name'];?></span>
													</span>
												</span>
											</span>
										</a>
									</div>
								</div>




							<?php } ?>

						
							</div>
						</div>
					</div>
				</div>
				<!-- Portfolio Grid Section End -->



						
				<!-- Portfolio Grid Section End -->

	<?php include("price.php");?>



			</div>
			<!-- Content End -->
<?php 
include("Footer.php");
 ?>
