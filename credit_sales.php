<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: auth-login.php");
    }
    include "includes/head.php";
    include "includes/sidebar.php";

    include 'database/config2.php';
						
    $memquery = "SELECT * FROM customers ORDER BY id ";
    $memstmt = $conn->prepare($memquery);
    $memstmt->execute();
    $memnum = $memstmt->rowCount();
?> 

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Credit Sales Check Out</h1>

        <?php

            $query5 = "SELECT * FROM products WHERE is_cart = 1";
            $stmt5 = $conn->prepare($query5);
            $stmt5->execute();

            

        ?>

        <div class="row">
			<form action="includes/server.php" method="POST">
            <div class="col-6">
				<div class="card">
					<div class="card-header">

					</div>
					<div class="card-body">
                        <div class="row">
                            <div class="col col-md-12">
                                <div class="card" style="border-radius: 20px; border: none;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="cdk-p-heading">
                                                <h2>Installmental Payment</h2>
                                            </div>
                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col col-md-3">
                                                    <label for="debtor_id">Customer's Name <span style="color: red">*</span></label>
                                                    <select type="text" name="debtor_id" class="form-control" placeholder="e.g Sama" required>
                                                        <option selected disabled>Select Customer</option>

                                                        <?php

                                                            $sql_qry = "SELECT SUM(sold_amount) FROM products WHERE is_cart=1";

                                                            $duration = $conn->prepare($sql_qry);
                                                            $duration->execute();
                                                            $sum = $duration->fetch(PDO::FETCH_ASSOC);

                                                            $total = $sum['SUM(sold_amount)'];




                                                            while($info = $memstmt->fetch(PDO::FETCH_ASSOC)){
                                                                
                                                                echo "<option value='{$info['id']}'>{$info['c_name']}</option>";

                                                            }
                                                        
                                                        
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                                <div class="col col-md-3">
                                                    <label for="credit_sales_transactionid">Transaction ID<span style="color: red">*</span></label>
                                                    <input type="text" name="credit_sales_transactionid" class="form-control" value="CR<?php echo (rand(800000, 500));?>" required readonly>
                                                </div>
                                                <div class="col col-md-6">
                                                    <label for="installment">First Instalment<span style="color: red">*</span></label>
                                                    <input type="number" name="installment" class="form-control" placeholder="Amount" required>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col col-md-6">
                                                    <label for="fist_instalment_date">Today's Date <span style="color: red">*</span></label>
                                                    <input type="text" name="fist_instalment_date" class="form-control" value="<?php echo date("l d M Y");?>" required>
                                                </div>
                                                <div class="col col-md-6">
                                                    <label for="last_instalment_date">Last Payment Date<span style="color: red"> *</span></label>
                                                    <input type="date" name="last_instalment_date" class="form-control" required>
                                                    <input type="text" name="total" value="<?php echo $total;?>" class="form-control" style="display:none">
                                                </div>
                                            </div>


                                            

                                            <!--div class="row">
                                                <div class="col col-lg-12">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="cdk-p-heading">
                                                                <h4>Select Payment Method</h4>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col col-md-3">
                                                                    <label class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="">
                                                                        <img src="img/img/momo.png" width="90" height="auto" alt="">
                                                                    </label>
                                                                </div>

                                                                <div class="col col-md-3">
                                                                    <label class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="">
                                                                        <img src="img/img/cash.png" width="100" height="auto" alt="">
                                                                    </label>
                                                                </div>

                                                                <div class="col col-md-3">
                                                                    <label class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="">
                                                                        <img src="img/img/orangemoney.png" width="100" height="auto" alt="">
                                                                    </label>
                                                                </div>

                                                                <div class="col col-md-3">
                                                                    <label class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="">
                                                                        <img src="img/img/ochange.png" width="100" height="auto" alt="">
                                                                    </label>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div-->
                                            <br>
                                            <div class="row" style="margin-bottom: 25px">
                                                <div class="col col-lg-12 text-center">
                                                    <button class="button text-center" type="submit" name="credit_sales">
                                                        <strong>CONFIRM</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
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
            </form>
           
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 