
								<li>

										<a href="index.php">หน้าแรก</a>
									</li>
									<li>
										<a href="about.php" >เกี่ยวกับเรา</a>
									</li>
								
									<li>
										<a href="#" class="contains-sub-menu">ผลงานและบริการ</a>
										<ul class="sub-menu">
<?php $sql = "SELECT * FROM categories";$result = $connect->query($sql);
foreach ($result as $row) { ?>
<li><a href="portfolio.php?id=<?php echo $row['categories_id']?>"><?php echo $row['categories_name'];?></a></li>
 <?php  }?>
											
										</ul>
									</li>
									<li>
										<a href="servicerate.php">อัตราค่าบริการ</a>
									</li>
									<li>
										<a href="#" >ข้อมูลติดต่อ</a>
									</li>



