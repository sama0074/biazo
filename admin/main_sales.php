<?php
     session_start();

     if (!isset($_SESSION['username'])) {
         header("Location: auth-login.php");
                }
            include "includes/head.php";
            include "includes/sidebar.php";


    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(-1);

?> 
	
<main class="content">
	<div class="container-fluid p-0">

        <!--div class="row">
            <div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Credit Sales Today</h1>
						<p style="font-weight:700; font-size:50px; color:Red">0Frs</p>
					</div>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Cash Sales Today</h1>
						<p style="font-weight:700; font-size:50px; color:orange">750,700Frs</p>
					</div>
				</div>
			</div>
			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-3">Profit Today</h1>
						<p style="font-weight:700; font-size:50px; color:green">489,500Frs</p>
					</div>
				</div>
			</div>
		</div-->

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
                                        <h5 class="card-title mb-0">Filter by date</h5>
                                        <form action="#" method="GET">
                                            <input name="filter" type="date" style="border-radius:5px; border:1px solid #4d5b6c; width:250px; height:30px">
                                            <button type="submit" class="btn btn-danger">Go</button>
                                        </form>
                                    </div>
                                    <table  id='table_1' class='table table-striped table-ligth'
                                            data-show-export='true'
                                            data-show-print='true'
                                            data-pagination='true'
                                            data-toggle='table'
                                            data-side-pagination='server'
                                            data-click-to-select='true'
                                            data-toolbar='#toolbar'
                                            data-show-toggle='true'
                                            data-show-columns='true'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>image</th>
                                                <th>Name</th>
                                                <th>SKU</th>
                                                <th>Purchase Price</th>
                                                <th>Amount Sold</th>
                                                <th>Profit</th>
                                                <th>Method</th>
                                                <th>Bought On</th>
                                                <th>Sold On</th>
                                                <th>Customer</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        
                                            //To get is there is any outstandig Debtor
                                            if($_GET['filter'] > 0){
                                                $get_date = $_GET['filter'];

                                                $product_query = "SELECT * FROM products WHERE cash_sales_date = '$get_date' OR fist_instalment_date = '$get_date' AND is_sold = 1";
                                                $product_stm = $conn->prepare($product_query);
                                                $product_stm->execute();
                                            }else{

                                                $product_query = "SELECT * FROM products WHERE is_sold = 1";
                                                $product_stm = $conn->prepare($product_query);
                                                $product_stm->execute();
                                                
                                            }
                                            


                                            while($product = $product_stm->fetch(PDO::FETCH_ASSOC)){

                                                    echo"
                                                    
                                                        <tr>
                                                            <td>{$product['id']}</td>
                                                            <td class='d-none d-xl-table-cell'>
                                                                <div class=''>
                                                                    <img src='img/prds/{$product['main_image']}' alt='{$product['name']}' width='50' height='50'>
                                                                </div>
                                                            </td>
                                                            <td class='d-none d-xl-table-cell'>{$product['name']}</td>
                                                            <td><span class='badge bg-warning'>{$product['sku']}</span></td>
                                                            <td class='d-none d-md-table-cell'>{$product['purchase_price']}</span></td>
                                                            <td class='d-none d-md-table-cell'>{$product['sold_amount']}</span></td>
                                                            <td class='d-none d-md-table-cell'>{$product['profit']}</td>
                                                            <td>";
                                                                if($product['is_credit'] == 0){
                                                                    echo "<span class='badge bg-primary'>Cash Sales</span>";
                                                                }else{
                                                                    echo "<span class='badge bg-danger'>Credit Sales</span>";
                                                                }
                                                                

                                                    echo"   </td>
                                                            <td class='d-none d-md-table-cell' style='font-weight:700 !important'>{$product['date_create']}</td>
                                                            <td class='d-none d-md-table-cell' style='font-weight:700 !important'>";
                                                                
                                                            if($product['is_credit'] == 0){

                                                                echo $product['cash_sales_date'];
                                                            }else{
                                                                echo $product['fist_instalment_date'];
                                                            }
                                                                

                                                    echo"   </td>
                                                            <td>";
                                                                $customer_id = $product['debtor_id'];

                                                                $get_cust_info_query = "SELECT * FROM customers WHERE id = $customer_id";
                                                                $get_cust_info_stm = $conn->prepare($get_cust_info_query);
                                                                $get_cust_info_stm->execute();
                                                                $get_cust_info = $get_cust_info_stm->fetch(PDO::FETCH_ASSOC);

                                                                if($product['is_credit'] == 0){
                                                                    echo "<span>Random</span>";
                                                                }else{
                                                                    echo "<a href='view_customer.php?id={$product['debtor_id']}'>{$get_cust_info['c_name']}</a>";
                                                                }
                                                                

                                                    echo"   </td>
                                                            <td><span class='badge bg-success'> </span></td>
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
</main>





<script>
    $(function() {
    var table = $("#table_1").DataTable();

    // Date range vars
    minDateFilter = "";
    maxDateFilter = "";

    $("#daterange").daterangepicker();
    $("#daterange").on("apply.daterangepicker", function(ev, picker) {
    minDateFilter = Date.parse(picker.startDate);
    maxDateFilter = Date.parse(picker.endDate);
    
    $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
    var date = Date.parse(data[1]);

    if (
    (isNaN(minDateFilter) && isNaN(maxDateFilter)) ||
    (isNaN(minDateFilter) && date <= maxDateFilter) ||
    (minDateFilter <= date && isNaN(maxDateFilter)) ||
    (minDateFilter <= date && date <= maxDateFilter)
    ) {
    return true;
    }
    return false;
    });
    table.draw();
    }); 
    

    });
 
 

</script>
<?php
	include "includes/footer.php";
?> 
