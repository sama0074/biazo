<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: auth-login.php");
	}
	include "includes/head.php";
	include "includes/sidebar.php";

	include 'database/config2.php';

////////////Total Credit Sales Today///////////////////////////
    $date = date("l d M Y");
    $qrys = "SELECT SUM(installment) FROM debtors WHERE fist_instalment_date = '$date'";

	$credit_sales = $conn->prepare($qrys);
	$credit_sales->execute();
	$credit_sales_sum = $credit_sales->fetch(PDO::FETCH_ASSOC);

	
	$is_today_credit_sales = $credit_sales_sum['SUM(installment)'];
////////////Total Credit Sales Today///////////////////////////


////////////Total Cash Sales Today///////////////////////////
$qrys_cash_sales = "SELECT SUM(sold_amount) FROM products WHERE cash_sales_date = '$date' AND is_credit=0 AND is_sold=1";

$cash_sales = $conn->prepare($qrys_cash_sales);
$cash_sales->execute();
$cash_sales_sum = $cash_sales->fetch(PDO::FETCH_ASSOC);


$is_today_cash_sales = $cash_sales_sum['SUM(sold_amount)'];
////////////Total Cash Sales Today///////////////////////////


////////////Profit Today///////////////////////////
$profit_sales = "SELECT SUM(profit) FROM products WHERE fist_instalment_date = '$date' OR cash_sales_date = '$date' AND is_sold=1";

$profit_sales = $conn->prepare($profit_sales);
$profit_sales->execute();
$profit_sum = $profit_sales->fetch(PDO::FETCH_ASSOC);


$profit_total_sales = $profit_sum['SUM(profit)'];
////////////Profit Today///////////////////////////




$memquery = "SELECT * FROM products WHERE fist_instalment_date = '$date' OR cash_sales_date = '$date'";
$memstmt = $conn->prepare($memquery);
$memstmt->execute();
$memnum = $memstmt->rowCount();




?> 
	
<main class="content">
	<div class="container-fluid p-0">

        <div class="row">
            <div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Credit Sales Today</h1>
						<p style="font-weight:700; font-size:50px; color:Red"><?php echo $is_today_credit_sales; ?> Frs</p>
					</div>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Cash Sales Today</h1>
						<p style="font-weight:700; font-size:50px; color:orange"><?php echo $is_today_cash_sales; ?> Frs</p>
					</div>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Profit Today</h1>
						<p style="font-weight:700; font-size:50px; color:green"><?php echo $profit_total_sales; ?> Frs</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Products Sold Today <span style="color:black !important"><?php echo date("l d M Y");?></span></h5>
                                    </div>
                                    <table class="table table-hover my-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>image</th>
                                                <th>Name</th>
                                                <th>Trans ID.</th>
                                                <th>SKU</th>
                                                <th>Amount Sold</th>
                                                <th>Profit</th>
                                                <th>Method</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        
                                            while($info = $memstmt->fetch(PDO::FETCH_ASSOC)){

                                                echo "
                                                
                                                    <tr>
                                                        <td>{$info['id']}</td>
                                                        <td class='d-none d-xl-table-cell'>
                                                            <div class=''>
                                                                <img src='img/prds/{$info['main_image']}' alt='{$info['name']}' width='50' height='50'>
                                                            </div>
                                                        </td>
                                                        <td class='d-none d-xl-table-cell'>{$info['name']}</td>
                                                        <td class='d-none d-xl-table-cell'>";
                                                            if($info['credit_sales_transactionid'] == 0){
                                                                echo"{$info['cash_transaction_id']}";
                                                            }else{
                                                                echo"{$info['credit_sales_transactionid']}";
                                                            }
                                                        
                                                echo   "</td>
                                                        <td><span class='badge bg-info'>{$info['sku']}</span></td>
                                                        <td class='d-none d-md-table-cell'>{$info['sold_amount']}</span></td>
                                                        <td class='d-none d-md-table-cell'>{$info['profit']}</td>
                                                        <td>";
                                                            if($info['is_credit'] == 0 ){
                                                                echo"<span class='badge bg-success'>Cash</span>";
                                                            }else{
                                                                echo"<span class='badge bg-warning'>Credit</span>";
                                                            }
                                                echo    "</td>
                                                        <td class='d-none d-md-table-cell' style='font-weight:700 !important'>";
                                                            if($info['is_credit'] == 1){
                                                                echo $info['fist_instalment_date'];
                                                            }else{
                                                                echo $info['cash_sales_date'];
                                                            }
                                                            

                                                echo"        </td>
                                                        <td>";
                                                            if($info['is_credit'] == 0 ){
                                                                echo "<span class='badge bg-success'>Fully Paid</span>";
                                                            }else{
                                                                echo "<span class='badge bg-danger'>Part Payment</span>";
                                                            }
                                                echo    "</td>
                                                    </tr>
                                                
                                                
                                                
                                                ";





                                            }
                                        
                                        
                                        
                                        
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                                <div class="card flex-fill w-100">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Monthly Sales</h5>
                                    </div>
                                    <div class="card-body d-flex w-100">
                                        <div class="align-self-center chart chart-lg">
                                            <canvas id="chartjs-dashboard-bar"></canvas>
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
