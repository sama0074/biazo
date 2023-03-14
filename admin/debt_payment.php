<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: auth-login.php");
    }
    include "includes/head.php";
    include "includes/sidebar.php";

    include 'database/config2.php';

	//To get is there is any outstandig Debtor
	$debtorId = $_GET['id'];

	$debtor_query = "SELECT * FROM debtors WHERE debtor_id = $debtorId";
	$debtor_stm = $conn->prepare($debtor_query);
	$debtor_stm->execute();

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-6 text-center" style="border:3px solid #222e3c0f; border-radius: 10px;">
                                    <img src="img/prds/h3-banner06.png" alt="product name" width="550" height="550">
                                </div>
                                <div class="col col-md-6">
                                    <div class="card_product">
                                        <form action="debt_thankyou.php">
                                            <h1><b>Pink exotic ladies blouse for ladies who are under 30 years</b></h1>
                                            <br>
                                            <p style="font-size:20px"><b>Category:</b> Female Blouse</p>
                                            <p style="font-size:20px"><b>Brand:</b> <span class="badge bg-danger">Addidas</span></p>
                                            <p style="font-size:20px"><b>Stock:</b> <span class="badge bg-success">Instock</span> <span class="badge bg-warning">sku: BSBVAIZkBCXZBU</span><br>
                                            <p style="font-size:20px"><b>Size:</b> <span class="badge bg-primary">XXL</span></p>
											<hr>
											<span style="font-size:13px;"><i>Last payment received by Sama Yanick on 12 Nov 2022. Last payment is expected on 12 Oct 2022</i></span></p>
											<div class="row">
												<div class="col col-md-4">
													<p style="font-size:15px"><b>Price:</b> <span class="badge bg-primary">14,500Frs</span></p>
												</div>
												<div class="col col-md-4">
													<p style="font-size:15px"><b>Bal. Debt:</b> <span class="badge bg-primary">1,500Frs</span></p>
												</div>
												<div class="col col-md-4">
													<p style="font-size:15px"><b>Balance Debt:</b> <span class="badge bg-primary">1,500Frs</span></p>
												</div>
											</div>
                                            
                                            
                                            <p style="font-size:15px">Amount <input type="number" style="border-radius:7px; border:2px solid #222e3c1c"> </p>
                                            <input type="submit" style="font-size:20px" value="Pay" class="btn btn-success" >
                                        </form>
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
