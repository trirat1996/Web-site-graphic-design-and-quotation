
<?php include('./admin/constant/connect.php'); ?>
<body onload="window.print()">

	<style type="text/css">
	body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;

}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    background: white;
    margin: 0;
    box-shadow: 0;
  }
}
</style>



	




		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
			
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>


<page size="A4" id="printTable">
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="4">
						<table>
							<tr>
								<td class="title">
									<img src="./images/logo-dark.png" alt="Company logo" style="width: 100%; max-width: 150px" />
								</td>
<?php
$sqls="SELECT * from orders where oderlog ='".$_GET['id']."'  limit  1 ";
$results = $connect->query($sqls); 
foreach ($results as $rows) { ?>
								<td>
									Invoice #: <?php echo $rows['oderlog'];?><br />
									วันที่ <?php 
$date=date_create($rows['order_date'] );
echo date_format($date,"d-m-Y");?><br />
									
								</td>
								<?php } ?>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="4">
						<table>
							<tr>
							
	 <?php $sqlq = "SELECT * FROM product3 WHERE product_id = 21";
								$resultq = $connect->query($sqlq);foreach ($resultq as $rowq) { ?>
								<td>
								<?php echo $rowq['html'];?>
								</td>
								<?php } ?>
<?php
$sqls="SELECT * from orders where oderlog ='".$_GET['id']."'  limit  1 ";
$results = $connect->query($sqls); 
foreach ($results as $rows) { ?>
								<td>
									<?php echo $rows['name'];?><br />
									<?php echo $rows['tel'];?><br />
									<?php echo $rows['email'];?>
								</td>
								<?php } ?>
							</tr>
						</table>
					</td>
				</tr>
<?php

$sql = "SELECT * from orders 
join categories on orders.productid = categories.categories_id
where  oderlog ='".$_GET['id']."' ";

$result = $connect->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {?>


			
				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
					<td style="text-align: center;">Quantity</td>
					<td style="text-align: center;">Total</td>
				</tr>

				

<?php

$sql = "SELECT * from orders 
join categories on orders.productid = categories.categories_id
where  oderlog ='".$_GET['id']."' ";

$result = $connect->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
				<tr class="item">
					<td><?php echo $row['categories_name'];?></td>
					<td><?php echo $row['pces'];?></td>
					<td style="text-align: center;"><?php echo $row['price'];?></td>
					<td style="text-align: center;"><?php $sumu[] = $row['price']*$row['pces']; echo $row['price']*$row['pces']; ?></td>
				</tr>

<?php
 
  }
} else {
  echo "0 results";
}



	?>
			

					
				
			</table>
<P class="total" style="font-weight: 600;text-align: right;margin-right: 20px;"><span style="color: #9E9E9E;">Total:  </span><?php
 $sux = array_sum($sumu); 
 echo number_format( $sux, 0 ); 
 ?> <span style="color: #9E9E9E;"> บาท</span>
</p>
<P class="total" style="font-weight: 600;text-align: right;margin-right: 20px;"><span style="color: #9E9E9E;">Vat:  </span><?php 
$vat = ($sux*7)/100;
echo number_format( $vat, 0 );  
?> <span style="color: #9E9E9E;"> บาท</span></p>
<P class="total" style="font-size: 20px;font-weight: 700;text-align: right;margin-right: 20px;"><span style="color: #9E9E9E;">Total+Vat:  </span><?php
 $sumw = $sux+$vat;
 echo number_format( $sumw, 0 );
  ?> <span style="color: #9E9E9E;"> บาท</span></p>
		</div>

<?php
 
  }
} else {
  echo "0 results";
}

	?>


</page>





<!--<page size="A4"></page>
<page size="A4" layout="landscape"></page>
<page size="A5"></page>
<page size="A5" layout="landscape"></page>
<page size="A3"></page>
<page size="A3" layout="landscape"></page> -->
