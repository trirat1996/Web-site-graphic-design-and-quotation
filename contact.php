<?php include("header.php");?>

<?php include("menu.php");?>
	
<style>
.sel{

box-sizing: border-box;border: 1px;border-block-color: #ccc;appearance: auto;cursor: pointer;border-style: inset;width: 100%;background-color: white;padding: 1.3rem 2.5rem;margin: 0 0 1.5rem 0;
}

</style>
						
									
								
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

<?php $sql = "SELECT * FROM product3 WHERE product_id = 15";
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



				<!-- Color Section -->
			<section class="section-block" style="border-top-width: 0px;">
					<div class="row">
						<div class="column width-6 offset-3 center horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;" data-threshold="1">
							<?php $sql = "SELECT * FROM product3 WHERE product_id = 16";
$result = $connect->query($sql);foreach ($result as $row) { ?>

							<h2 class="mb-30"> <?php echo $row['product_name'];  ?></h2>
							<p> <?php echo $row['text'];  ?></p> <?php } ?>
							<ul class="list-horizontal project-swatch-list center center-on-mobile">

								<?php $sql = "SELECT * FROM product3 WHERE product_id = 17";
$result = $connect->query($sql);foreach ($result as $row) { ?>
								<li>
									<div class="project-swatch center">
									
										 <a href="<?php echo $row['status'];  ?>" >
										<h5><?php echo $row['product_name'];  ?></h5><span class="icon-circled <?php echo $row['html'];  ?> no-margin-right bkg-charcoal color-white" style="font-size: 25px;padding: 20px;"></span> </a>
										
										<p class="no-margin-bottom"><?php echo $row['text'];?></p>
									</div>
								</li>
								
								<?php } ?>
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 18";
$result = $connect->query($sql);foreach ($result as $row) { ?>
								<li>
									<div class="project-swatch center">
									
										 <a href="<?php echo $row['status'];  ?>" >
										<h5><?php echo $row['product_name'];  ?></h5><span class="icon-circled <?php echo $row['html'];  ?> no-margin-right bkg-charcoal color-white" style="font-size: 30px;padding: 15px;"></span> </a>
										
										<p class="no-margin-bottom"><?php echo $row['text'];  ?></p>
									</div>
								</li>
								
								<?php } ?>
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 19";
$result = $connect->query($sql);foreach ($result as $row) { ?>
								<li>
									<div class="project-swatch center">
									
										 <a href="<?php echo $row['status'];  ?>" >
										<h5><?php echo $row['product_name'];  ?></h5><span class="icon-circled <?php echo $row['html'];  ?> no-margin-right bkg-charcoal color-white" style="font-size: 30px;padding: 15px;"></span> </a>
										
										<p class="no-margin-bottom"><?php echo $row['text'];  ?></p>
									</div>
								</li>
								
								<?php } ?>

							</ul>
						</div>
					</div>
				</section>
				<!-- Color Section End -->

				<!--Contact Form -->
				<section class="section-block replicable-content contact-2 no-padding-top">


   <div class="row">
						<div class="column width-8 offset-2 center">
							
							<h2 class="mb-30">ขอใบเสนอราคา</h2>
							<div class="contact-form-container">
								
           <form action="code.php" method="POST">
                        
                            <div class="main-form width-12">
                                <div class="row">
                                	   <div class="column width-6">
                                     <input type="text" name="name1" class="form-control" required placeholder="ชื่อ">
                                    </div>
                                    <div class="column width-6">
                                    <input type="number" name="phone1" class="form-control" required placeholder="เบอร์โทรศัพท์">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column width-12">
                                     <input type="email" name="email" class="form-control" required placeholder="อีเมล">
                                    </div>
                                </div>
                                <div class="row">
                                	<br>

                                	<h3 class="mb-30" style="margin-bottom: 0px;">รายการสั่งซื้อ</h3><div><a href="javascript:void(0)" class="add-more-form float-end btn btn-primary" style="font-weight: 700;float: right;color: #E91E63;margin-right: 20px;">+ เพิ่มรายการ</a></div>
                                	 <br>
                                     <div class="column width-9">
                                      <select class="form-control sel" name="name[]" aria-label="Default select example">
 <?php $sqls="SELECT * from categories where categories_active = 1 ";
$results = $connect->query($sqls); 
foreach ($results as $rows) { ?>
   <option value="<?php echo $rows['categories_id'];?>"><?php echo $rows['categories_name'];?></option>
<?php } ?>
</select></div><div class="column width-3">
                                    <input type="number" name="phone[]" class="form-control" required placeholder="จำนวน" value="1">
                                    </div>
                                </div>
                                <br>
                               <div class="paste-new-forms"></div>
                            </div>
                            <br>
                            <button type="submit" name="save_multiple_data" class="form-submit button medium bkg-black bkg-hover-pink color-white color-hover-white">print</button>
                        </form>


                        </div>
						</div>
					</div>











    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

 <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form"><div class="row">\
<div class="column width-8">\
<select class="form-control sel" name="name[]" aria-label="Default select example">\
 <?php $sqls="SELECT * from categories where categories_active = 1 ";$results = $connect->query($sqls); 
foreach ($results as $rows) { ?>
 <option value="<?php echo $rows['categories_id'];?>"><?php echo $rows['categories_name'];?></option>\
<?php } ?>
</select>\
</div>\
<div class="column width-2">\
<input type="number" name="phone[]" class="form-control" required placeholder="จำนวน" value="1">\
</div>\
<div class="column width-2" style="padding: 0px;">\
<button type="button" class="remove-btn btn btn-danger">ลบ</button>\
</div>\
</div></div>');
            });

        });
    </script>



















					
				</section>
				<!--Contact Form End -->


				<?php include("price.php");?>
		

			</div>
			<!-- Content End -->
			
		<?php 
include("Footer.php");
 ?>