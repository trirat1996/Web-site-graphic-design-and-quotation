<body class="home-page">

	<!-- Overlay Navigation Menu -->
	<div class="overlay-navigation-wrapper" data-no-scrollbar data-animation="scale-in">
		<div class="overlay-navigation-scroll-pane">
			<div class="overlay-navigation-inner">
				<div class="v-align-middle">
					<div class="overlay-navigation-header row collapse full-width">
						<div class="column width-12">
							<div class="navigation-hide overlay-nav-hide">
								<a href="#">
									<span class="icon-cancel"></span>
								</a>
							</div>
						</div>
					</div>
					<div class="row collapse full-width">
						<div class="column width-12">
							<nav class="overlay-navigation pull-left clear-float-on-mobile">
								<span class="menu-title"></span>
								<ul>
											<li>

										<a href="index.php">หน้าแรก</a>
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
										<a href="contact.php" >ข้อมูลติดต่อ</a>
									</li>

								</ul>
							</nav>
				
						</div>
					</div>
					<div class="overlay-navigation-footer row full-width">
						<div class="column width-12 no-padding">
							<p class="copyright no-margin-bottom">&copy; 2022 TOPDESIGN98. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Overlay Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner" style="padding: 0 0 0 0px;">

			<!-- Header -->
			<header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100" style="border-top-width: 0px;" >
				<div class="header-inner">
					<div class="row collapse full-width nav-bar reveal-side-navigation">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="index.php"><img src="images/logo-dark.png" alt="topdesign98 Logo" /></a>
									<a href="index.php"><img src="images/logo.png" alt="topdesign98 Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block secondary-navigation nav-right">
								<ul>
									<li class="aux-navigation hide">
										<!-- Aux Navigation -->
										<a href="#" class="navigation-show overlay-nav-show nav-icon">
											<span class="icon-menu"></span>
										</a>
									</li>
								</ul>
							</nav>
							<nav class="navigation nav-block primary-navigation nav-right">
								<ul>
									<li>
										<a href="index.php">หน้าแรก</a>
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
										<a href="servicerate.php" >วิธีใช้บริการ</a>
									</li>
									<li>
										<a href="contact.php" >ข้อมูลติดต่อ</a>
									</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Header End -->


					<!-- Content -->
			<div class="content clearfix">

				<!-- Back Top -->
				<div class="scroll-to-top">
					<a href="#" style="margin-right: 15px;padding-left: 20px;">Back Up Top</a>
				</div>
				<!-- Back Top End -->




