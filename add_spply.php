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

?>
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Add Credit Purchase</h1>
		
		<div class='row'>

		<?php


			if($_GET['result'] == 'success'){
				echo "<div class='alert alert-success'>Credit purchase successfully registered</div> <br>";
			}else{
				if($_GET['result'] == ''){
					echo "<div></div>";
				}
			}



			if($_GET['id'] > 0){
				$paying_ID = $_GET['id'];
			}else{
				$paying_ID = 0;
			}

			$paying_query = "SELECT * FROM creditors WHERE id = $paying_ID";
			$paying_stm = $conn->prepare($paying_query);
			$paying_stm->execute();
			$paying = $paying_stm->fetch(PDO::FETCH_ASSOC);

			if($_GET['id'] > 0){

				echo"
						<div class='col col-md-8'>
							<div class='card'>
								<div class='card-header'>
									<form action='includes/server.php' method='POST'>
										<div class='row'>

											<div class='col col-sm-4'>
												<label for='cust_id'>Customer ID<span class='reqired'> *</span></label>
												<input type='text' value='{$paying['id']}' name='cust_id' class='form-control' readonly required>
											</div>
											<div class='col col-sm-3'>
												<label for='old_trans_id'>Customer Name <span class='reqired'> *</span></label>
												<input type='text' value='{$paying['name']}' name='old_trans_name' class='form-control' required readonly>
											</div>
											<div class='col col-sm-3'>
												<label for='installment'>Amount <span class='reqired'> *</span></label>
												<input type='text' name='paid' class='form-control' required>

												<input type='text' name='date' value='{date('l d M Y')}' class='form-control' style='display:none'>
												<input type='text' name='trans_id' value='' class='form-control' style='display:none'>
											</div>
											<div class='col col-sm-2' style='margin-top: 15px;'>  
												<button type='submit' name='pay_loan' class='button'>Pay</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
				
				
					";
			}else{
				echo"";
			}
			

		?>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">


                        <?php
                            ////////////Total Credit Sales Today///////////////////////////
                            $qrys = "SELECT SUM(balance) FROM creditors ";

                            $credit_sales = $conn->prepare($qrys);
                            $credit_sales->execute();
                            $credit_sales_sum = $credit_sales->fetch(PDO::FETCH_ASSOC);

                            
                            $is_today_credit_sales = $credit_sales_sum['SUM(balance)'];
                        ////////////Total Credit Sales Today///////////////////////////
                        
                        
                        ?>
						<h1 class="h3 mb-3">Total Credit Purchase</h1>
						<p style="font-weight:700; font-size:50px; color:green"><?php echo $is_today_credit_sales; ?> Frs</p>
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
						<div class="container-fluid">
							<div class="row">
								<div class="col col-md-4">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5><i class="fas fa-list"></i> Add Credit Purchase</h5></div>
											<div class="card-body">
												<form action="includes/server.php" method="POST" enctype="multipart/form-data">
													<div class="row">
														<div class="col col-sm-6">
                                                            <label for="name">Creditor's Name<span style="color: red"> *</span></label>
															<input type="text" name="name" placeholder="Name" required class="form-control">
                                                                
														</div>
                                                        <div class="col col-sm-6">
                                                            <label for="Cost">Purchase Cost <span style="color: red">*</span></label>
                                                            <input type="number" class="form-control" name="cost" placeholder="e.g 2,150" required>
                                                        </div>
													</div>
													<br>
													<div class="row">
														<div class="col col-sm-6">
                                                            <label for="prd_name">Product Name<span style="color: red"> *</span></label>
															<input type="text" name="prd_name" placeholder="Name" required class="form-control">
                                                                
														</div>
                                                        <div class="col col-sm-6">
                                                            <label for="image">Image <span style="color: red">*</span></label>
                                                            <input type="file" class="form-control" name="image" placeholder="e.g 2,150" multiple required>
                                                        </div>
													</div>
													<br>
													<div class="row">
														<div class="col col-sm-3">
                                                            <label for="paid">Advanced<span style="color: red"> *</span></label>
															<input type="number" class="form-control" name="paid" placeholder="e.g 1,150" required>
														</div>
                                                        <div class="col col-sm-3">
                                                            <label for="date_taken">Today's Date<span style="color: red"> *</span></label>
                                                            <input type="text" class="form-control" name="date_taken" value="<?php echo date("l d M Y");?>" readonly required>
                                                        </div>
														<div class="col col-sm-3">
                                                            <label for="address">Address<span style="color: red">*</span></label>
                                                            <input type="address" class="form-control" name="address" value="" required>
                                                        </div>
														<div class="col col-sm-3">
                                                            <label for="phone">Phone<span style="color: red">*</span></label>
                                                            <input type="number" class="form-control" name="phone" value="" required>
                                                        </div>
													</div>
													<br>
													<div class="row">
														<div class="col col-md-12">
															<label for="description">Description of Goods<span style="color: red"> *</span></label>
															<textarea name="description" id="" cols="30" rows="5" required class="form-control"></textarea>
														</div>
													</div>
													<br>
													<div class="text-center">
														<button name="add_creditors" type="submit" class="btn btn-success">Add</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="col col-md-8">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5><i class="fas fa-list"></i> All Credits</h5></div>
											<div class="card-body">

												<table id="table" class="table table-bordered table-striped">
													<thead>
														<tr>
															<th scope="col">#</th>
															<th scope="col">Creditor</th>
															<th scope="col">Prd Image</th>
															<th scope="col">Prd Name</th>
															<th scope="col">Cost</th>
															<th scope="col">Paid</th>
															<th scope="col">Balance</th>
															<th scope="col">Latest</th>
															<th scope="col">Status</th>
															<th scope="col" class="text-center">Action</th>
														</tr>
													</thead> 
													<tbody>

													<?php
														//To get is there is any outstandig Debtor
														$creditor_query = "SELECT * FROM creditors WHERE balance > 0";
														$creditor_stm = $conn->prepare($creditor_query);
														$creditor_stm->execute();


														while($creditor = $creditor_stm->fetch(PDO::FETCH_ASSOC)){


															echo "

																	<tr>
																		<td>{$creditor['id']}</td>
																		<td>{$creditor['name']}</td>
																		<td>
																			<div class=''>
																				<img src='img/creditors/{$creditor['image']}' class='avatar img-fluid rounded-circle' alt='{$creditor['name']}'>
																			</div>
																		</td>
																		<td>{$creditor['prd_name']}</td>
																		<td>{$creditor['Cost']}Frs</td>
																		<td>{$creditor['paid']}Frs</td>
																		<td>{$creditor['balance']}Frs</td>
																		<td>Monday 26 Oct 2022</td>
																		<td><span class='badge bg-success'>Active</span></td>
																		<td class='text-center'>
																			<a href='add_spply.php?id={$creditor['id']}'>
																				<button type='delete' class='btn btn-danger'>
																					<i class='align-middle' data-feather='credit-card'></i>
																				</button>
																			</a>
																		</td>
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
