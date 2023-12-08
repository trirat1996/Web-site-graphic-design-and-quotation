<!-- Footer -->
			<footer class="footer">
				<div class="footer-top" style="padding-top: 5rem;padding-bottom: 0px;">
					<div class="row flex">
						<div class="column width-3">
							<div class="widget">
								
								<img src="images/logo.png" alt="topdesign98 Logo" style="height: 40px;"/>
							</br></br>
								<p>รับงานออกแบบทุกชนิด
ออกแบบโลโก้ ออกแบบบรรจุภัณฑ์ ออกแบบสื่อสิ่งพิมท์ และอื่นๆ
แก้ไขได้ไม่จำกัดจนกว่าลูกค้าจะพอใจ</p>
								
						
							</div>
						</div>
						<div class="column width-3">
							<div class="widget">
							
								<ul class="list-group large">	
								<li>
										<a href="index.php">หน้าแรก</a>
									</li>
									<li>
										<a href="about.php" >เกี่ยวกับเรา</a>
									</li>
								
									<li>
										<a href="portfolio.php?id=3" >ผลงานและบริการ</a>
									
									</li>
									<li>
										<a href="servicerate.php" >อัตราค่าบริการ</a>
									</li>
									<li>
										<a href="#" >ข้อมูลติดต่อ</a>
									</li>
		
								</ul>
							</div>
						</div>
						<div class="column width-3">
							<div class="widget">
								<h4>บริการออกแบบ</h4>
								<ul class="list-group large">
<?php $sql = "SELECT * FROM categories ";
$result = $connect->query($sql);
foreach ($result as $row) { ?>

<a style="font-weight: 200;font-size: 1.3rem;" href="portfolio.php?id=<?php echo $row['categories_id']?>"><?php echo $row['categories_name'];?>&nbsp;,</a> 
 <?php  }?>
			
								</ul>
							</div>
						</div>
						<div class="column width-3">
							<h4>ติดต่อสอบถามได้ที่</h4>
							<div class="widget">
							
								<ul class="list-group large">
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 17";
										$result = $connect->query($sql);foreach ($result as $row) { ?><li>
										<a href="<?php echo $row['status'];?>" target="_blank"><i class=" <?php echo $row['html'];?> "></i>&nbsp; <?php echo $row['text'];?> </a>
									</li>
								<?php } ?>
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 18";
										$result = $connect->query($sql);foreach ($result as $row) { ?><li>
										<a href="<?php echo $row['status'];?>" target="_blank"><i class=" <?php echo $row['html'];?> "></i>&nbsp; <?php echo $row['text'];?> </a>
									</li>
								<?php } ?>	
								<?php $sql = "SELECT * FROM product3 WHERE product_id = 19";
										$result = $connect->query($sql);foreach ($result as $row) { ?><li>
										<a href="<?php echo $row['status'];?>" target="_blank"><i class=" <?php echo $row['html'];?> "></i>&nbsp; <?php echo $row['text'];?> </a>
									</li>
								<?php } ?>		

								
							
			
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End -->
				

		</div>
	</div>

	<!-- Js -->
	<script src="js/jquery-1.11.2.min.js"></script>


	<script src="js/timber.master.min.js"></script>

	<?php include("popup.php");?>
</body>
</html>

