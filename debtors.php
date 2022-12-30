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
        <div class="row">
			<div class="col col-md-8">
                <div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Pay Debt</h1>
						<form action="includes/server.php" method="POST">
                            <div class="row">

                            <?php

                                $get_id = $_GET['id'];
                                $get_transID = $_GET['transID'];
                            
                            ?>
                                <div class="col col-sm-4">
                                    <label for="cust_id">Customer ID<span class="reqired"> *</span></label>
                                    <input type="text" value="<?php echo $get_id; ?>" name="cust_id" class="form-control" readonly required>
                                </div>
                                <div class="col col-sm-3">
                                    <label for="old_trans_id">Transaction ID <span class="reqired"> *</span></label>
                                    <input type="text" value="<?php echo $get_transID; ?>" name="old_trans_id" class="form-control" required readonly>
                                </div>
                                <div class="col col-sm-3">
                                    <label for="installment">Amount <span class="reqired"> *</span></label>
                                    <input type="text" name="installment" class="form-control" required>

                                    <input type="text" name="date" value="<?php echo date("l d M Y");?>" class="form-control" style="display:none">
                                    <input type="text" name="trans_id" value="LRP<?php echo (rand());?>" class="form-control" style="display:none">
                                </div>
                                <div class="col col-sm-2" style="margin-top: 15px;">  
                                    <button type="submit" name="pay_debt" class="button">Pay</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">


                        <?php
                            ////////////Total Credit Sales Today///////////////////////////
                            $qrys = "SELECT SUM(balance) FROM debtors ";

                            $credit_sales = $conn->prepare($qrys);
                            $credit_sales->execute();
                            $credit_sales_sum = $credit_sales->fetch(PDO::FETCH_ASSOC);

                            
                            $is_today_credit_sales = $credit_sales_sum['SUM(balance)'];
                        ////////////Total Credit Sales Today///////////////////////////
                        
                        
                        ?>
						<h1 class="h3 mb-3">Total Debts</h1>
						<p style="font-weight:700; font-size:50px; color:green"><?php echo $is_today_credit_sales; ?> Frs</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-8">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">List of Debtors</h5>
                                    </div>
                                    <table class="table table-hover my-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Tran. ID</th>
                                                <th>Phone</th>
                                                <th>Balane</th>
                                                <th class="d-none d-xl-table-cell">Start Date</th>
                                                <th class="d-none d-xl-table-cell">End Date</th>
                                                <th class="d-none d-xl-table-cell">Status</th>
                                                <th>View Debt</th>
                                                <th class="d-none d-xl-table-cell">Pay</th>
                                                <th class="d-none d-xl-table-cell">Remind</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php
                                            //To get is there is any outstandig Debtor
                                            $debtor_query = "SELECT * FROM debtors WHERE balance > 0";
                                            $debtor_stm = $conn->prepare($debtor_query);
                                            $debtor_stm->execute();



                                            while($debtor = $debtor_stm->fetch(PDO::FETCH_ASSOC)){
                                            
                                            $debtor_id = $debtor['debtor_id'];
                                            $debt_trand_id = $debtor['credit_sales_transactionid'];

                                            //To get information about customer
                                            $customer_query = "SELECT * FROM customers WHERE id = $debtor_id";
                                            $customer_stm = $conn->prepare($customer_query);
                                            $customer_stm->execute();
                                            $customer = $customer_stm->fetch(PDO::FETCH_ASSOC);

                                            //To get information about product
                                            $product_query = "SELECT * FROM products WHERE credit_sales_transactionid = '$debt_trand_id' AND is_credit = 1";
                                            $product_stm = $conn->prepare($product_query);
                                            $product_stm->execute();
                                            $product = $product_stm->fetch(PDO::FETCH_ASSOC);


                                            $today_date = date("Y-m-d");
                                            $last_date = $debtor['last_instalment_date'];


                                               echo" 
                                                <tr>
                                                        <td>{$debtor['id']}</td>
                                                        <td class='d-none d-xl-table-cell'>{$customer['c_name']}</td>
                                                        <td class='d-none d-xl-table-cell'><span class='badge bg-info'>{$debtor['credit_sales_transactionid']}</span></td>
                                                        <td class='d-none d-xl-table-cell'>{$customer['c_telephone']}</td>
                                                        <!--td class='d-none d-xl-table-cell'>{$product['name']}</td-->
                                                        <!--td class='d-none d-xl-table-cell'>
                                                            <div class=''>
                                                                <img src='img/prds/{$product['main_image']}' alt='product name' width='50' height='50'>
                                                            </div>
                                                        </td-->
                                                        <!--td class='d-none d-md-table-cell'><span class='badge bg-warning'>{$product['sku']}</span></td-->
                                                        <td class='d-none d-md-table-cell'><span class='badge bg-success'>{$debtor['balance']}</span></td>
                                                        <td class='d-none d-md-table-cell'>{$debtor['fist_instalment_date']}</td>
                                                        <td class='d-none d-md-table-cell'>{$debtor['last_instalment_date']}</td>
                                                        <td class='d-none d-md-table-cell'>";
                                                            if($today_date < $last_date){
                                                                echo "<span class='badge bg-success'>Active</span>";
                                                            }else{
                                                                echo "<span class='badge bg-danger'>Bad Debtor</span>";
                                                            }
                                                            
                                                       echo" </td>
                                                        <td class='d-none d-md-table-cell'>
                                                            <a href='debtors.php?id={$debtor['debtor_id']}'>
                                                                <div class='position-relative btn btn-info'>
                                                                    <i class='align-middle' data-feather='eye'></i>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class='d-none d-md-table-cell'>
                                                            <a href='debtors.php?id={$debtor['debtor_id']}&transID={$debtor['credit_sales_transactionid']}'>
                                                                <button class='position-relative btn btn-success'>
                                                                    <i class='align-middle' data-feather='credit-card'></i>
                                                                </button>
                                                            </a>
                                                        </td>";
                                                       if($_GET['id'] == $debtor['debtor_id']){
                                                           echo "
                                                                <td class='d-none d-md-table-cell'>
                                                                    <button onclick='fetch();' class='position-relative btn btn-danger'>
                                                                        <i class='align-middle' data-feather='bell'></i>
                                                                    </button>
                                                                </td>
                                                           ";
                                                       }
                                                   echo" </tr>";

                                            }
                                        
                                        ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="card-footer">
                        <!--Displaying these contents only if purchase history is empty-->
                        <ul class="messages">
                                        
                        </ul>
                    </div>
				</div>
			</div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header"><h1>History </h1></div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>SKU</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                        $creditorsID = $_GET['id'];


                                        //To get info about products
                                        $debtor_history_query = "SELECT * FROM products WHERE debtor_id = $creditorsID";
                                        $debtor_history_stm = $conn->prepare($debtor_history_query);
                                        $debtor_history_stm->execute(); 
                                        $debtor_H = $debtor_history_stm->fetch(PDO::FETCH_ASSOC);
                                        $debtor_H_id = $debtor_H['debtor_id'];

                                        //To get info about debtor
                                        $debtor_history_debt_query = "SELECT * FROM debtors WHERE debtor_id = $debtor_H_id AND balance > 0";
                                        $debtor_history_debt_stm = $conn->prepare($debtor_history_debt_query);
                                        $debtor_history_debt_stm->execute(); 
                                        $debtor_D = $debtor_history_debt_stm->fetch(PDO::FETCH_ASSOC);
                                        $D_trand = $debtor_D['credit_sales_transactionid'];
                                        $D_H = $debtor_D['debtor_id'];

                                        
                                            if($debtor_H_id == $D_H ){
                                                $hh_query = "SELECT * FROM products WHERE debtor_id = $creditorsID AND is_complete=0 AND is_credit=1 AND credit_sales_transactionid = '$D_trand' ";
                                                $dd_stm = $conn->prepare($hh_query);
                                                $dd_stm->execute(); 
                                                

                                                while($h_row = $dd_stm->fetch(PDO::FETCH_ASSOC)){
                                                    echo "
                                                    <tr>
                                                        <td>
                                                            <div class=''>
                                                                <img src='img/prds/{$h_row['main_image']}' alt='product name' width='50' height='50'>
                                                            </div>
                                                        </td>
                                                        <td>{$h_row['name']}</td>
                                                        <td><span class='badge bg-warning'>{$h_row['sku']}</span></td>
                                                    </tr>
                                                
                                                
                                                ";
                                                }
                                                
                                               
                                            }

                                    
                                    ?>
                                    
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                                            
                    </div>
                </div>
            </div>
		</div>

	</div>
</main>






<?php
    $debtorId = $_GET['id'];

    //Getting about Debt
    $owing_query = "SELECT * FROM debtors WHERE debtor_id = $debtorId AND balance > 0";
    $owing_stm = $conn->prepare($owing_query);
    $owing_stm->execute(); 
    $owing_D = $owing_stm->fetch(PDO::FETCH_ASSOC);

    //To get phone number of debtor
    $tel_query = "SELECT * FROM customers WHERE id = $debtorId";
    $tel_stm = $conn->prepare($tel_query);
    $tel_stm->execute();
    $tel_D = $tel_stm->fetch(PDO::FETCH_ASSOC);


    $d_day = $owing_D['last_instalment_date'];
    $p_day = $owing_D['fist_instalment_date'];
    $d_balance = $owing_D['balance'];
    $d_tel = $tel_D['c_telephone'];
    $c_name = $tel_D['c_name'];
    $message = 'Hello ' .$c_name. ', Please this is a reminder of your debt at BIAZO Shopping Center on: ' .$p_day. '. Your balance is: ' .$d_balance. 'frs and latest date to pay is: ' .$d_day. '. Thank you.';



?>


<script>

	function fetch(){
		$.ajax({
			url: "http://api.foseintsms.com/api_bulk.php?username=Ohipopo&password=29036&message=<?php echo $message;?>&telephone=<?php echo $d_tel; ?>",
			type: "GET",
			dataType: "JSON",
			data: JSON.stringify({}),
			success:function(data){
				$('.messages').append("<li class='alert alert-success'>"+JSON.stringify(data)+"</li>")
			}
		});

	}
</script>

<?php
	include "includes/footer.php";
?> 
