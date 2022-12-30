<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: auth-login.php");
    }
    include "includes/head.php";
    include "includes/sidebar.php";

    include 'database/config2.php';


    $c_id = $_GET['id'];

    $memquery = "SELECT * FROM customers WHERE id = $c_id";
    $memstmt = $conn->prepare($memquery);
    $memstmt->execute();
    $memnum = $memstmt->rowCount();

    $info = $memstmt->fetch(PDO::FETCH_ASSOC)

?> 


	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Customer <b><?php  echo $info['c_name'];?></b></h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">

                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Customer Profile Details</h5>
                                </div>
                                <div class="card-body text-center">
                                    <img src="img/avatars/avatar-4.jpg" alt="<?php  echo $info['c_name'];?>" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                                    <h5 class="card-title mb-0"><?php  echo $info['c_name'];?></h5>
                                    <div class="text-muted mb-2">Customer</div>

                                    <div>
                                        <a class="btn btn-success btn-sm" href="#">Active</a>
                                        <a class="btn btn-primary btn-sm" href="edit-customer.php"><span data-feather="edit-3"></span> Edit</a>
                                        
                                        <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                            <div class="position-relative btn btn-warning btn-sm">
                                                <i class="align-middle" data-feather="message-square"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                            <div class="dropdown-menu-header">
                                                <div class="position-relative">
                                                    Send a message to <?php  echo $info['c_name'];?>
                                                </div>
                                            </div>
                                            <form action="send_message.php" method="POST">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <div class="row g-0 align-items-center">
                                                            <div class="col-2">
                                                                <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                                            </div>
                                                            <div class="col-10 ps-2">
                                                                <div class="text-dark"><i><small>Typing...</small></i></div>
                                                                <input type="text" style="display:none" value="<?php  echo $info['c_telephone'];?>" name="c_number">
                                                                <input type="text" style="display:none" value="<?php  echo $info['c_name'];?>" name="c_name" style="display:none">
                                                                <textarea name="message" id="" cols="30" rows="3" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-menu-footer">
                                                    <button type="submit" class="btn btn-success"><span data-feather="send"></span> Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">About</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#"><?php  echo $info['c_address'];?></a></li>

                                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Occupation <a href="#"><?php  echo $info['c_occupation'];?></a></li>
                                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Country <a href="#"><?php  echo $info['c_country'];?></a></li>
                                        <li class="mb-1"><span data-feather="user-check" class="feather-sm me-1"></span> Gender <a href="#"><?php  echo $info['c_gender'];?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-xl-9">
                            <div class="card">
                                <div class="card-body h-100">   
                                    <div class="row">
                                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                                            <div class="card flex-fill">
                                                <div class="card-header">

                                                    <h5 class="card-title mb-0">Purchase History of Sama Yanick</h5>
                                                </div>
                                                <table class="table table-hover my-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>SKU</th>
                                                            <th>Name</th>
                                                            <th class="d-none d-xl-table-cell">Tran. ID</th>
                                                            <th class="d-none d-xl-table-cell">Date</th>
                                                            <th class="d-none d-xl-table-cell">Amount</th>
                                                            <th>Balance</th>
                                                            <th class="d-none d-md-table-cell">Status</th>
                                                            <th class="d-none d-md-table-cell">Tracking</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>1161845367</td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <a href="products.php">Sky Blue Blouse</a>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">CR756218</td>
                                                            <td class="d-none d-xl-table-cell">Friday 23 Sep 2022 06:01:54</td>
                                                            <td class="d-none d-xl-table-cell">25000</td>
                                                            <td class="d-none d-xl-table-cell">250</td>
                                                            <td><span class="badge bg-warning">In progress</span></td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                                                    <div class="position-relative">
                                                                        <i class="align-middle" data-feather="settings"></i>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                                                    <div class="dropdown-menu-header">
                                                                        <div class="position-relative">
                                                                            Payment Tracking (03)
                                                                        </div>
                                                                    </div>
                                                                    <table class="table table-hover my-0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Date</th>
                                                                                <th>Amount</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>01</td>
                                                                                <td>Friday 23 Sep 2022</td>
                                                                                <td>2500</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02</td>
                                                                                <td>Friday 25 Sep 2022</td>
                                                                                <td>17500</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02</td>
                                                                                <td>Friday 25 Oct 2022</td>
                                                                                <td>500</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>1161845367</td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <a href="products.php">mango Blue Blouse</a>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">CR756218</td>
                                                            <td class="d-none d-xl-table-cell">Friday 23 Sep 2022 06:01:54</td>
                                                            <td class="d-none d-xl-table-cell">0</td>
                                                            <td class="d-none d-xl-table-cell">7500</td>
                                                            <td><span class="badge bg-danger">Nothing</span></td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                                                    <div class="position-relative">
                                                                        <i class="align-middle" data-feather="settings"></i>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                                                    <div class="dropdown-menu-header">
                                                                        <div class="position-relative">
                                                                            Payment Tracking (03)
                                                                        </div>
                                                                    </div>
                                                                    <table class="table table-hover my-0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Date</th>
                                                                                <th>Amount</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>01</td>
                                                                                <td>Friday 23 Sep 2022</td>
                                                                                <td>2500</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02</td>
                                                                                <td>Friday 25 Sep 2022</td>
                                                                                <td>17500</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02</td>
                                                                                <td>Friday 25 Oct 2022</td>
                                                                                <td>500</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>1161845367</td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <a href="products.php">Gold Clutch</a>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">CR756218</td>
                                                            <td class="d-none d-xl-table-cell">Friday 23 Sep 2022 06:01:54</td>
                                                            <td class="d-none d-xl-table-cell">15000</td>
                                                            <td class="d-none d-xl-table-cell">0</td>
                                                            <td><span class="badge bg-success">Complete</span></td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                                                    <div class="position-relative">
                                                                        <i class="align-middle" data-feather="settings"></i>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                                                    <div class="dropdown-menu-header">
                                                                        <div class="position-relative">
                                                                            Payment Tracking (03)
                                                                        </div>
                                                                    </div>
                                                                    <table class="table table-hover my-0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Date</th>
                                                                                <th>Amount</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>01</td>
                                                                                <td>Friday 23 Sep 2022</td>
                                                                                <td>2500</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02</td>
                                                                                <td>Friday 25 Sep 2022</td>
                                                                                <td>17500</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02</td>
                                                                                <td>Friday 25 Oct 2022</td>
                                                                                <td>500</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
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
				</div>
			</div>
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
