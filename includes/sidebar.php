<?php

include 'database/config.php';
$user = $_SESSION['username'];
$query = "SELECT * from users WHERE username = '$user' LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$user_role = $row['position'];
$full_name = $row['member_name'];


?>
<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
					<span class="align-middle">Biazo Management</span>
				</a>
				
				<ul class="sidebar-nav">
					<!------------------- SALES PERSONS VIEW STARTS----------------------------------------------------->
					<li class="sidebar-header">
						Sales Person
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="index.php?salesresult=">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Sales</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="petit_cash.php?salesresult=">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Petit Cash</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="today_sales.php">
							<i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Today's Sales</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="todays_task.php">
							<i class="align-middle" data-feather="edit"></i> <span class="align-middle">Today's Task</span>
						</a>
					</li>
					<!------------------- SALES PERSONS VIEW ENDS----------------------------------------------------->

					<!------------------- STOCK MANAGEMENT VIEW STARTS----------------------------------------------------->
					<li class="sidebar-header">
						Stock Management
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="products.php">
							<i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Products</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="add_prd.php">
							<i class="align-middle" data-feather="repeat"></i> <span class="align-middle">Add Products</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="add_cat.php?result=">
							<i class="align-middle" data-feather="tag"></i> <span class="align-middle">Categories</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="add_brands.php?result=">
							<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Brands</span>
						</a>
					</li>

					<!--li class="sidebar-item">
						<a class="sidebar-link" href="">
							<i class="align-middle" data-feather="align-justify"></i> <span class="align-middle">Product Codes</span>
						</a>
					</li-->
					<!------------------- STOCK MANAGEMENT VIEW ENDS----------------------------------------------------->

					<!------------------- CUSTOMER MANAGEMENT VIEW STARTS----------------------------------------------------->
					<li class="sidebar-header">
						Customers Management
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="customers.php?registration">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Customers</span>
						</a>
					</li>

					<!--li class="sidebar-item">
						<a class="sidebar-link" href="add_customer.php">
							<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Customers</span>
						</a>
					</li-->

					<?php

						 //To get info about products
						 include 'database/config2.php';
						 $id_query = "SELECT * FROM debtors";
						 $id_stm = $conn->prepare($id_query);
						 $id_stm->execute(); 
						 $id_D = $id_stm->fetch(PDO::FETCH_ASSOC);
						 $D_H = $id_D['debtor_id'];
					
					
					?>

					<li class="sidebar-item">
						<a class="sidebar-link" style="color:red" href="debtors.php?id=<?php echo $D_H;?>">
							<i class="align-middle" data-feather="user-x"></i> <span class="align-middle">Debtors</span>
						</a>
					</li>
					<!------------------- CUSTOMER MANAGEMENT VIEW ENDS----------------------------------------------------->

					<!------------------- SUPPLIERS MANAGEMENT VIEW STARTS----------------------------------------------------->
					<li class="sidebar-header">
						Supplier Management
					</li>

					<li class="sidebar-item">
						<?php 
						
						$mm = "SELECT * FROM creditors WHERE balance > 0";
						$aa = $conn->prepare($mm);
						$aa->execute();
						$aacount = $aa->rowCount();
						
						
						
						?>
						<a class="sidebar-link" href="add_spply.php">
							<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Creditors (<?php echo $aacount; ?>)</span>
						</a>
					</li>
					<!------------------- SUPPLIERS MANAGEMENT VIEW ENDS----------------------------------------------------->


					<!------------------- USER MANAGEMENT VIEW STARTS----------------------------------------------------->
					<li class="sidebar-header">
						User Management
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="users.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
						</a>
					</li>

					<!------------------- USER MANAGEMENT VIEW ENDS----------------------------------------------------->


					<!------------------- ACCOUNTING VIEW STARTS----------------------------------------------------->
					<li class="sidebar-header">
						Accounting
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="main_sales.php">
							<i class="align-middle" data-feather="trending-up"></i> <span class="align-middle">Sales</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="cashout.php">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Cashout</span>
						</a>
					</li>

					<!--li class="sidebar-item">
						<a class="sidebar-link" href="add_fixed_assets.php">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Fixed Assets</span>
						</a>
					</li-->

					<li class="sidebar-item">
						<a class="sidebar-link" href="stock_cap.php">
							<i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Present Stock Capital</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Stock_inventry.php">
							<i class="align-middle" data-feather="copy"></i> <span class="align-middle">Stock Inventry</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="quick_report.php">
							<i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Income Statement</span>
						</a>
					</li>

					<!------------------- ACCOUNTING VIEW ENDS----------------------------------------------------->

					<!------------------- Njangi VIEW STARTS----------------------------------------------------->
					<li class="sidebar-header">
						Njangi
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="">
							<i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Create Njangi</span>
						</a>
					</li>
					

					
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Log Out</strong>
						<div class="mb-3 text-sm">
							Please make sure you exit when not infront of your computer.
						</div>
						<div class="d-grid">
							<a href="logout.php" class="btn btn-danger">Exit</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>




						<?php
						include 'database/config2.php';
						
						$studentdbq = "SELECT * FROM products WHERE is_cart = 1";
						$statement2 = $conn->prepare($studentdbq);
						$statement2->execute();
						$carcount = $statement2->rowCount();

						

						$sql_qry = "SELECT SUM(sold_amount) FROM products WHERE is_cart=1";

						$duration = $conn->prepare($sql_qry);
						$duration->execute();
						$sum = $duration->fetch(PDO::FETCH_ASSOC);

						$total = $sum['SUM(sold_amount)'];

						
						
						?>

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="shopping-cart"></i>
									<span class="indicator"><?php echo $carcount; ?></span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									<div class="row">
										<div class="col col-md-6">
											<?php echo $carcount; ?> Item(s)
										</div>
										<div class="col col-md-6 text-success">
											Total: <?php echo $total; ?> Frs
										</div>
									</div>
								</div>
								<form action="includes/server.php" method="POST">


									<?php
									
										while($somerow2 = $statement2->fetch(PDO::FETCH_ASSOC)){

											echo "
													<div class='list-group'>
														<a href='#' class='list-group-item'>
															<div class='row g-0 align-items-center'>
																<div class='col-4'>
																	<img src='img/prds/{$somerow2['main_image']}' alt='{$somerow2['name']}' width='60' height='60'>
																</div>
																<div class='col-8'>
																	<div class='text-dark'>{$somerow2['name']}</div>
																	<div class='text-muted small mt-1'>{$somerow2['sold_amount']}Frs</div>
																	<div class='text-muted small mt-1'>Size: {$somerow2['size']}</div>
																</div>
															</div>
														</a>
													</div>
												";


										}

									
									?>
										

									<div class="dropdown-menu-footer">
										<?php 
											$cashtransaction_id = rand(800000, 500);
											$date = date("l d M Y");

											if($carcount > 0){
												echo "
													
													
													<input type='number' name='customer_phone' class='form-control' placeholder='Customers Phone Number' aria-label='phone' aria-describedby='button-addon2'><br>
													<input type='text' name='cash_transaction_id' class='form-control' value='DR$cashtransaction_id' style='display:none'>
													<input type='text' name='cash_sales_date' class='form-control' value='$date' style='display:none'>
													<input type='text' name='total' class='form-control' value='$total' style='display:none'>
													<button type='delete' class='btn btn-danger' name='delete_cart'>
														<i class='align-middle' data-feather='trash-2'></i>
													</button>
													<a href='credit_sales.php' class='btn btn-warning' name='borrow'>Borrow</a>
													<input type='submit' class='btn btn-success' value='Cash' name='check_out'>
													
												";
											}
										
										?>
										
									</div>
								</form>
							</div>
						</li>






						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="row">
										<div class="col col-sm-6">
											<a href="message.php">
												<button type="delete" class="btn btn-warning">
													<i class="align-middle" data-feather="trash-2"></i> Compose
												</button>
											</a>
										</div>
										<div class="col col-md-6" style="margin-top:7px">
											<div class="position-relative">
												4 New Messages
											</div>
										</div>
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="img/employee/<?php echo $row['image']?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo $row['member_name']?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.php"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
				
			</nav>