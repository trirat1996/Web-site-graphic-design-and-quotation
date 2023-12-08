<!-- Service Section -->
				<section class="section-block replicable-content" style="
    padding-top: 10px;text-align: center;
">
					<div class="row">
						<div class="column width-4">
							<h2 class="weight-bold mb-30" ">ค่าบริการ<br></h2>
						</div>
						<div class="column width-8">
							<div class="row flex">
<?php $sqlsz="SELECT * from categories where categories_active = 1 ";
$resultsz = $connect->query($sqlsz); 
foreach ($resultsz as $rowsz) { ?>
								<div class="column width-6" style="margin-block: 10px;text-align: center;float: center;">
									<div class="horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="1">
										<h5 class="mb-30" style="margin-bottom: 5px;"><?php echo $rowsz['categories_name'];?>  </h5>
									<span class="currency color-grey-light">ราคาเริ่มต้น</span>
									<span style="font-weight: 600;color: #ff4556;font-size: 1.5rem;"><?php echo $rowsz['catalt'];?></span>
									<span class="currency color-grey-light">บาท</span>
									</div>
								</div>
						<?php } ?>
							</div>
						</div>
					</div>
				</section>
				<!-- Service Section End -->






		
