<?php
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?> 
	
<main class="content">
	<div class="container-fluid p-0">
        <div class="row">
			<div class="col col-md-4">
                <h1 class="h3 mb-3">Debtors Database</h1>
			</div>
			<div class="col col-md-4">
				<h1 class="h3 mb-3"></h1>
			</div>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Total Credits</h1>
						<p style="font-weight:700; font-size:50px; color:green">12,500Frs</p>
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
                            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">List of Creditors</h5>
                                    </div>
                                    <table class="table table-hover my-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Picture</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Product</th>
                                                <th>Image</th>
                                                <th>SKU</th>
                                                <th>Amount</th>
                                                <th class="d-none d-xl-table-cell">Start Date</th>
                                                <th class="d-none d-xl-table-cell">End Date</th>
                                                <th class="d-none d-xl-table-cell">Status</th>
                                                <th class="d-none d-xl-table-cell">Remind</th>
                                                <th>Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td class="d-none d-xl-table-cell">Sama Yanick</td>
                                                <td class="d-none d-xl-table-cell">
                                                    <div class="">
                                                        <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                                    </div>
                                                </td>
                                                <td class="d-none d-xl-table-cell">653 766 939</td>
                                                <td class="d-none d-xl-table-cell">Limbe Mile 4</td>
                                                <td class="d-none d-xl-table-cell">Black Mecury Shoe</td>
                                                <td class="d-none d-xl-table-cell">
                                                    <div class="">
                                                        <img src="img/prds/h3-banner06.png" alt="product name" width="50" height="50">
                                                    </div>
                                                </td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-warning">1931576656</span></td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-success">32000</span></td>
                                                <td class="d-none d-md-table-cell">Friday 23 Sep 2022</td>
                                                <td class="d-none d-md-table-cell">Friday 30 Sep 2022</td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-success">Active</span></td>
                                                <td class="d-none d-md-table-cell">
                                                    <a href="debt_remind.php" id="messagesDropdown" data-bs-toggle="dropdown">
                                                        <div class="position-relative btn btn-primary">
                                                            <i class="align-middle" data-feather="bell"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="d-none d-md-table-cell">
                                                    <a href="debt_payment.php" id="">
                                                        <div class="position-relative btn btn-info">
                                                            <i class="align-middle" data-feather="credit-card"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>01</td>
                                                <td class="d-none d-xl-table-cell">Sama Yanick</td>
                                                <td class="d-none d-xl-table-cell">
                                                    <div class="">
                                                        <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                                    </div>
                                                </td>
                                                <td class="d-none d-xl-table-cell">653 766 939</td>
                                                <td class="d-none d-xl-table-cell">Limbe Mile 4</td>
                                                <td class="d-none d-xl-table-cell">Black Mecury Shoe</td>
                                                <td class="d-none d-xl-table-cell">
                                                    <div class="">
                                                        <img src="img/prds/h3-banner06.png" alt="product name" width="50" height="50">
                                                    </div>
                                                </td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-warning">1931576656</span></td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-success">32000</span></td>
                                                <td class="d-none d-md-table-cell">Friday 23 Sep 2022</td>
                                                <td class="d-none d-md-table-cell">Friday 23 Sep 2022</td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-danger">Expired</span></td>
                                                <td class="d-none d-md-table-cell">
                                                    <a href="debt_remind.php" id="messagesDropdown" data-bs-toggle="dropdown">
                                                        <div class="position-relative btn btn-primary">
                                                            <i class="align-middle" data-feather="bell"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="d-none d-md-table-cell">
                                                    <a href="debt_payment.php" id="messagesDropdown" data-bs-toggle="dropdown">
                                                        <div class="position-relative btn btn-info">
                                                            <i class="align-middle" data-feather="credit-card"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>01</td>
                                                <td class="d-none d-xl-table-cell">Sama Yanick</td>
                                                <td class="d-none d-xl-table-cell">
                                                    <div class="">
                                                        <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                                    </div>
                                                </td>
                                                <td class="d-none d-xl-table-cell">653 766 939</td>
                                                <td class="d-none d-xl-table-cell">Limbe Mile 4</td>
                                                <td class="d-none d-xl-table-cell">Black Mecury Shoe</td>
                                                <td class="d-none d-xl-table-cell">
                                                    <div class="">
                                                        <img src="img/prds/h3-banner06.png" alt="product name" width="50" height="50">
                                                    </div>
                                                </td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-warning">1931576656</span></td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-success">32000</span></td>
                                                <td class="d-none d-md-table-cell">Friday 23 Sep 2022</td>
                                                <td class="d-none d-md-table-cell">Saturday 01 Oct 2022</td>
                                                <td class="d-none d-md-table-cell"><span class="badge bg-success">Active</span></td>
                                                <td class="d-none d-md-table-cell">
                                                    <a href="debt_remind.php" id="messagesDropdown" data-bs-toggle="dropdown">
                                                        <div class="position-relative btn btn-primary">
                                                            <i class="align-middle" data-feather="bell"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="d-none d-md-table-cell">
                                                    <a href="debt_payment.php" id="messagesDropdown" data-bs-toggle="dropdown">
                                                        <div class="position-relative btn btn-info">
                                                            <i class="align-middle" data-feather="credit-card"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
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
