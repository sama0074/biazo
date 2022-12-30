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

	//To get is there is any outstandig Debtor
	if($_GET['filter'] > 0){
		$get_date = $_GET['filter'];

		$memquery = "SELECT * FROM petit_cash WHERE exp_date = '$get_date'";
		$memstmt = $conn->prepare($memquery);
		$memstmt->execute();
		$memnum = $memstmt->rowCount();
	}else{

		$memquery = "SELECT * FROM petit_cash";
		$memstmt = $conn->prepare($memquery);
		$memstmt->execute();
		$memnum = $memstmt->rowCount();
		
	}




	$is_debit_qry = "SELECT SUM(exp_amount) FROM petit_cash WHERE is_debit=1";

	$is_debit = $conn->prepare($is_debit_qry);
	$is_debit->execute();
	$is_debit_sum = $is_debit->fetch(PDO::FETCH_ASSOC);

	//Answer for is_debit
	$is_debit_total = $is_debit_sum['SUM(exp_amount)'];



	$is_credit_qry = "SELECT SUM(exp_amount) FROM petit_cash WHERE is_credit=1";

	$is_credit = $conn->prepare($is_credit_qry);
	$is_credit->execute();
	$is_credit_sum = $is_credit->fetch(PDO::FETCH_ASSOC);

	//Answer for is_debit
	$is_credit_total = $is_credit_sum['SUM(exp_amount)'];

	//Final Total 
	$balance = $is_debit_total - $is_credit_total;



	

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<div class="row">
			<div class="col col-md-4">
				<h1 class="h3 mb-3">Add Expenses</h1>
			</div>
			<div class="col col-md-4">
				<h1 class="h3 mb-3"></h1>
			</div>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Current Petit Cash Balance</h1>
						<p style="font-weight:700; font-size:50px; color:green"><?php echo $balance;?>Frs</p>
					</div>
				</div>
			</div>
		</div>


		<?php 
		
			if($_GET['salesresult'] == 'success'){
				echo "<div class='alert alert-success'>Success</div> <br>";
			}else{
				if($_GET['salesresult'] == 'failed'){
					echo "<div class='alert alert-danger'>Sorry!! An Error occured</div> <br>";
				}
			}

			if($_GET['salesresult'] == ''){
				echo "<div></div>";
			}
		
		
		
		
		?>





		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col col-md-4">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5><i class="fas fa-list"></i> Record Expense</h5></div>
											<div class="card-body">
												<form action="includes/server.php" method="POST">
                                                    <div class="row">
                                                        <div class="col col-md-6">
                                                            <label for="exp_date">Date of Expenses<span style="color:red">*</span></label>
                                                            <input type="date" name="ex_pdate" class="form-control" required>
                                                        </div>
                                                        <div class="col col-md-6">
                                                            <label for="exp_amount">Amount<span style="color:red">*</span></label>
                                                            <input type="number" name="exp_amount" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <br>
													<div class="row">
														<div class="col col-sm-12">
                                                            <label for="exp_description">Expense <span style="color:red">*</span></label>
															<textarea row="" col="" type="text" name="exp_description" placeholder="Detaily eplained whatv the mopney was used for " required class="form-control"></textarea>
														</div>
													</div>
													<br>
													<div class="text-center">
														<button name="create_expense" type="submit" class="btn btn-success">Record</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="col col-md-8">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5>Petit Cash Flow</h5></div>
												<div class="card-header">
													<h5 class="card-title mb-0">Filter by date</h5>
													<form action="#" method="GET">
														<input name="filter" type="date" style="border-radius:5px; border:1px solid #4d5b6c; width:250px; height:30px">
														<button type="submit" class="btn btn-danger">Go</button>
													</form>
												</div>
											<div class="card-body">
												<?php
													if($memnum > 0 ){
														echo "
														
														<table id='table' class='table table-bordered table-striped'>
														<thead>
															<tr>
																<th scope='col'>#</th>
																<th scope='col'>Date</th>
																<th scope='col'>Narration</th>
																<th scope='col'>Debit</th>
																<th scope='col'>Credit</th>
															</tr>
														</thead> 
														<tbody>
														";
													}

													while($memrow = $memstmt->fetch(PDO::FETCH_ASSOC)){
														echo "
															<tr>
																<td>{$memrow['id']}</td>
																<td>{$memrow['exp_date']}</td>
																<td>{$memrow['exp_description']}</td>
																<td>";
																	if($memrow['is_debit'] == 1){
																		echo "<span class='badge bg-success'>{$memrow['exp_amount']}</span>";
																	}
														echo   "</td>
																<td>";
																	if($memrow['is_credit'] == 1){
																		echo "<span class='badge bg-danger'>{$memrow['exp_amount']}</span>";
																	}
														echo	"</td>
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
