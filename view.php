<?php include("header.php");?>

<?php include("menu.php");?>

 <?php

$sql3="SELECT * from product where  product_id='".$_GET['id']."'";
$result3 = $connect->query($sql3);
foreach ($result3 as $row3) { ?>

							<!-- Intro Title Section 1 -->
				<div class="section-block intro-title-1 bkg-pink color-white">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner center">
									<h1 class="title-xlarge horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
							<?php echo $row3['product_name']?>
									</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Intro Title Section 1 End -->

		<!-- Color Section -->
				<section class="section-block replicable-content no-padding-top">
					<div class="row">
								<img src="img/<?php echo $row3['product_image'];?>" alt="<?php echo $row3['rate'];?>"/>
						<div class="column width-6 offset-3 center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;" data-threshold="1">
							
								<p><?php echo $row3['quantity'];?></p>
							
						</div>
					</div>
				</section>
				<!-- Color Section End  <h2 class="mb-30"><?php echo $row3['product_name']?></h2> -->



				

				 <?php } ?>
			</div>
			<!-- Content End -->

<?php 
include("Footer.php");
 ?>
	