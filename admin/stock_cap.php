<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: auth-login.php");
	}
	include "includes/head.php";
	include "includes/sidebar.php";

	include 'database/config2.php';


	$memquery = "SELECT * FROM products WHERE is_sold=0 ORDER BY id DESC";
    $memstmt = $conn->prepare($memquery);
    $memstmt->execute();
    $memnum = $memstmt->rowCount();

	$qrys = "SELECT SUM(purchase_price) FROM products WHERE is_sold = 0 ";

	$credit_sales = $conn->prepare($qrys);
	$credit_sales->execute();
	$credit_sales_sum = $credit_sales->fetch(PDO::FETCH_ASSOC);

	$is_today_credit_sales = $credit_sales_sum['SUM(purchase_price)'];

?> 
	
<main class="content">
	<div class="container-fluid p-0">

        <div class="row">
            <!--div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Credit Sales Today</h1>
						<p style="font-weight:700; font-size:50px; color:Red">0Frs</p>
					</div>
				</div>
			</div -->
			<div class="col col-md-4">
				<div class="homeCard">
					<div class="card-header">
						<h1 class="h3 mb-3">Total Available Products</h1>
						<p style="font-weight:700; font-size:50px; color:orange"><?php echo $memnum; ?></p>
					</div>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="homeCard">
					<div class="card-header">
						<h1 class="h3 mb-3">Available Stock Capital</h1>
						<p style="font-weight:700; font-size:50px; color:green"><?php echo $is_today_credit_sales; ?>Frs</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="homeCard">
					<div class="card-header">
						<h5 class="card-title mb-0">PRESENT STOCK CAPITAL</h5>
					</div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                                <div class="card flex-fill">
                                    <table class="table table-hover my-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>image</th>
                                                <th>Name</th>
                                                <th>SKU</th>
                                                <th>Purchase Price</th>
                                                <th>Brand</th>
                                                <th>Category</th>
                                                <th>Size</th>
                                                <th>Bought On</th>
                                                <th>Recorded By</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>

										<?php 
										
											while($somerow = $memstmt->fetch(PDO::FETCH_ASSOC)){

												echo "
												
													<tr>
														<td>{$somerow['id']}</td>
														<td class='d-none d-xl-table-cell'>
															<div class=''>
																<img src='img/prds/{$somerow['main_image']}' alt='{$somerow['name']}' width='50' height='50'>
															</div>
														</td>
														<td class='d-none d-xl-table-cell'>{$somerow['name']}</td>
														<td><span class='badge bg-warning'>{$somerow['sku']}</span></td>
														<td class='d-none d-md-table-cell'>{$somerow['purchase_price']}</span></td>
														<td><span class='badge bg-primary'>{$somerow['brand_id']}</span></td>
														<td><span class='badge bg-primary'>{$somerow['category']}</span></td>
														<td><span class='badge bg-info'>{$somerow['size']}</span></td>
														<td class='d-none d-md-table-cell' style='font-weight:700 !important'>{$somerow['date_create']}</td>
														<td class='d-none d-md-table-cell' style='font-weight:700 !important'>{$somerow['created_by']}</td>
														<td class='d-none d-md-table-cell' style='font-weight:700 !important'>{$somerow['prd_description']}</td>
													</tr>
												
												
												";


											}
										
										
										
										
										?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
