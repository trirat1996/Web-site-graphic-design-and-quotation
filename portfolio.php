

<?php include("header.php");?>


<?php include("menu.php");?>


<style type="text/css">
	
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 777; /* Sit on top */
  padding-top: 110px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 100%;
  max-width: 500px;
}



@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

</style>

 <?php

$sql3="SELECT * from categories where  categories_id='".$_GET['id']."'";
$result3 = $connect->query($sql3);
foreach ($result3 as $row3) { ?>


				<section class="section-block featured-media tm-slider-parallax-container">
					<div class="tm-slider-container full-width-slider fixed-height" data-parallax data-external-padding="0" data-animation="slide" data-scale-under="1140">
						<ul class="tms-slides">
							<li class="tms-slide" data-image data-force-fit>
								<div class="tms-content">
									<div class="tms-content-inner center">
										<div class="row">
											<div class="column width-12">
												<h1 class="tms-caption title-xlarge color-white "
													data-animate-in="preset:scaleOut;duration:1000ms;"style="color: white;text-shadow: #23232330 5px 5px 10px;">
												<?php echo $row3['categories_name'];?>
												</h1>
											</div>
										</div>
									</div>
								</div>
								<img data-src="img/categories/<?php echo $row3['catimage'];?>" data-retina src="img/categories/<?php echo $row3['catimage'];?>" alt="<?php echo $row3['catalt'];?>"/>
							</li>
						</ul>
					</div>
				</section>
				
 <?php } ?>
				<!-- Portfolio Grid Section -->
				<div class="section-block grid-filter-menu center" style="border-top-width: 0px;">
					<div class="row">
						<div class="column width-12">
							<ul>
								<li>หมวดหมู่:</li>
								<li><a class="active" href="#" data-filter="*">ทั้งหมด ALL</a></li>



 <?php

$sql2="SELECT * from brands";
$result2 = $connect->query($sql2);
foreach ($result2 as $row2) { ?>


<li><a href="#" data-filter=".<?php echo $row2['brand_id'];?>"><?php echo $row2['brand_name'];?></a></li>

 <?php } ?>


							</ul>
						</div>
					</div>
				</div>
				<div class="section-block grid-container full-width fade-in-progressively no-padding-top" data-layout-mode="fitRows" data-animate-filter-duration="700" data-animate-resize data-animate-resize-duration="0">
					<div class="row">
						<div class="column width-12">


 
	


							<div class="row grid content-grid-4">
<?php
$sql="SELECT * from product where  categories_id='".$_GET['id']."' " ;
$result = $connect->query($sql); 
foreach ($result as $row) { ?>



								<div class="grid-item  <?php echo $row['brand_id'];?>">
									<div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.5">
										
											<img src="img/<?php echo $row['product_image'];?>" alt="<?php echo $row['rate'];?>"/>

											<span class="overlay-info" style="position: absolute;">
												<span>
													<span id="myImg<?php echo $row['product_id'];?>" >
														<?php echo $row['product_name'];?>
													</span>
												</span>
											</span>
										</div>
										</div> 
									<?php } ?>
									</div>
								</div>
					</div>
				</div>
	

			</div>
	


<?php 
include("Footer.php");
 ?>

<?php
$sql="SELECT * from product where  categories_id='".$_GET['id']."' " ;
$result = $connect->query($sql); 
foreach ($result as $row) { ?>


	<style type="text/css">


/* The Close Button */
.close<?php echo $row['product_id'];?> {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close<?php echo $row['product_id'];?>:hover,
.close<?php echo $row['product_id'];?>:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}


</style>


<div id="myModal<?php echo $row['product_id'];?>" class="modal">
 <span class="close<?php echo $row['product_id'];?>">&times;</span>
  <img class="modal-content"  src="img/<?php echo $row['product_image'];?>">

</div>
<script>
	var img<?php echo $row['product_id'];?> = document.getElementById("myImg<?php echo $row['product_id'];?>");

var modal<?php echo $row['product_id'];?> = document.getElementById("myModal<?php echo $row['product_id'];?>");

img<?php echo $row['product_id'];?>.onclick = function(){
  modal<?php echo $row['product_id'];?>.style.display = "block";
}


var span<?php echo $row['product_id'];?> = document.getElementsByClassName("close<?php echo $row['product_id'];?>")[0];


span<?php echo $row['product_id'];?>.onclick = function() { 
  modal<?php echo $row['product_id'];?>.style.display = "none";
}
</script>


<?php } ?>
