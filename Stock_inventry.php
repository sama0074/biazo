<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: auth-login.php");
	}
	include "includes/head.php";
	include "includes/sidebar.php";

	include 'database/config2.php';

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(-1);

    //To get all available products
    $memquery = "SELECT * FROM products WHERE is_sold=0 AND stock_count = 0 ORDER BY id DESC";
    $memstmt = $conn->prepare($memquery);
    $memstmt->execute();
    $memnum = $memstmt->rowCount();


    //To get all available product counts
    $memquery1 = "SELECT * FROM products WHERE is_sold=0";
    $memstmt1 = $conn->prepare($memquery1);
    $memstmt1->execute();
    $memnum1 = $memstmt1->rowCount();

    //To get all missing products
    $memquery2 = "SELECT * FROM products WHERE is_sold=0 AND stock_count = 1";
    $memstmt2 = $conn->prepare($memquery2);
    $memstmt2->execute();
    $memnum2 = $memstmt2->rowCount();

?> 
	
<main class="content">
	<div class="container-fluid p-0">
    
    <?php 
		
        if($_GET['results'] == 'refreshed'){
            echo "<div class='alert alert-warning'>All count refreshed</div> <br>";
        }else{
            echo "<div></div>";
        }


        if($_GET['result']){
            echo "<div class='alert alert-success'>Counted</div> <br>";
        }else{
            echo "<div></div>";
        }
    
    
    ?>
    <div class="row">
			<div class="col col-md-2">
				<div class="homeCard">
					<div class="card-header">
						<h1 class="h3 mb-3">Total Products</h1>
						<p style="font-weight:700; font-size:50px; color:green"><?php echo $memnum1; ?></p>
					</div>
				</div>
			</div>
            <div class="col col-md-3">
				<div class="homeCard">
					<div class="card-header">
						<h1 class="h3 mb-3">Image Preview</h1>
						<?php
                        
                             //To get all available products

                             if($_GET['result']){

                                $sku_v = $_GET['result'];
                                $sku_query = "SELECT * FROM products WHERE sku= $sku_v";
                                $sku_stmt = $conn->prepare($sku_query);
                                $sku_stmt->execute();
                                $sku_num = $sku_stmt->fetch(PDO::FETCH_ASSOC);


                                echo "<img src='img/prds/{$sku_num['main_image']}' alt='{$sku_num['name']}' width='250' height='250'>";
                             }else{
                                 echo "No product to Preview!! Please scan the product code.";
                             }
                            
                        
                        
                        
                        ?>
					</div>
				</div>
			</div>
            <div class="col col-md-3">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Product Counted</h1>
						<p style="font-weight:700; font-size:50px; color:orange"><?php echo $memnum2; ?></p>
					</div>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="homeCard">
					<div class="card-header">
						<h1 class="h3 mb-3">Missing Product</h1>
						<p style="font-weight:700; font-size:50px; color:red"><?php echo $memnum; ?></p>
					</div>
				</div>
			</div>
		</div>

        <form action="includes/server.php" method="POST">
            <div class="">
                <button type="submit" name="refresh" class="btn btn-danger">
                    <i class='align-middle' data-feather='refresh-cw'></i> Restart
                </button>
            </div>
        </form>
        <br>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div class="container">
                            <h1 class="text-center">ENTER PRODUCT CODE</h1>
                            <br>
                            <form action="includes/server.php" method="POST">
                                <input type="text" name="sku" class="form-control" style="height:50px" required>
                                <br>
                                <div class="text-center">
                                    <input type="submit" name="count_stock" class="btn btn-success" value="Count">
                                </div>
                            </form>
                            <br><br>
                        </div>
					</div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">PRESENT STOCK</h5>
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
                                                <th>Purchase Price</th>
                                                <th>Brand</th>
                                                <th>Category</th>
                                                <th>Size</th>
                                                <th>Bought On</th>
                                                <th>Recorded By</th>
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
														<td class='d-none d-md-table-cell'>{$somerow['purchase_price']}</span></td>
														<td><span class='badge bg-primary'>{$somerow['brand_id']}</span></td>
														<td><span class='badge bg-primary'>{$somerow['category']}</span></td>
														<td><span class='badge bg-info'>{$somerow['size']}</span></td>
														<td class='d-none d-md-table-cell' style='font-weight:700 !important'>{$somerow['date_create']}</td>
														<td class='d-none d-md-table-cell' style='font-weight:700 !important'>{$somerow['created_by']}</td>
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
			</div>
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
