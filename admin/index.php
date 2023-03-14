<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: auth-login.php");
    }
    include "includes/head.php";
    include "includes/sidebar.php";

    include 'database/config2.php';
        
    $query5 = "SELECT * FROM products ORDER BY id DESC";
    $stmt5 = $conn->prepare($query5);
    $stmt5->execute();
        
    // this is how to get number of rows returned
    $num5 = $stmt5->rowCount();
    
    $memquery = "SELECT * FROM products WHERE is_sold=1 ORDER BY id DESC";
    $memstmt = $conn->prepare($memquery);
    $memstmt->execute();
    $memnum = $memstmt->rowCount();





?> 
	
<main class="content">
	<div class="container-fluid p-0">
        <?php

            if($_GET['salesresult'] == 'success'){
                echo "<div class='alert alert-success'>Product Successfully added to cart</div> <br>";
            }else{
                if($_GET['salesresult'] == ''){
                    echo "<div></div>";
                }
            }

            if($_GET['salesresult'] == 'failed'){
                echo "<div class='alert alert-danger'>FATAL ERROR!!! Sales price is less than purchase price. Verify Sales Price and try gain</div> <br>";
            }else{
                if($_GET['salesresult'] == ''){
                    echo "<div></div>";
                }

                
                if($_GET['salesresult'] == 'deleted'){
                    echo "<div class='alert alert-success'>Cart Empty!!! Sell New products</div> <br>";
                }else{
                    if($_GET['salesresult'] == ''){
                        echo "<div></div>";
                    }
                }
            }
        
        
        ?>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div class="container">
                            <h1 class="text-center">ENTER PRODUCT CODE</h1>
                            <br>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>?salesresult=" method="POST">
                                <input type="text" name="prd_sku" class="form-control" style="height:50px" required>
                                <br>
                                <div class="text-center">
                                    <input type="submit" name="verify" class="btn btn-success" value="Verify Product">
                                </div>
                            </form>
                            <br><br><br>


                            <?php 

                                if(isset($_POST['verify'])){

                                    $myOption = htmlspecialchars(strip_tags($_POST['prd_sku']));
                                    if($myOption == ""){
                                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                                <strong>Please,</strong> Please Scan Product Bar Code
                                            </div>";
                                    } else {
                                        if($myOption == 0){
                                            $attend = "SELECT * FROM products ORDER BY id DESC";
                                        } else {
                                            $attend = "SELECT * FROM products WHERE sku =  $myOption AND is_sold=0";
                                        }	

                                        $something = $conn->prepare($attend);
                                        $something->execute();



                                }

                                   

                                while($somerow = $something->fetch(PDO::FETCH_ASSOC)){

                                    $studentdbq = "SELECT * FROM products WHERE id=:id";
                                    $statement2 = $conn->prepare($studentdbq);
                                    $statement2->bindParam(':id', $somerow['id']);
                                    $statement2->execute();
                                    $somerow2 = $statement2->fetch(PDO::FETCH_ASSOC);

                                    
                                    $prdID = $somerow2['id'];

                                     

                                echo "
                                <div class='row'>
                                <h1>$prdID</h1>
                                    <div class='col col-md-6'>
                                        <img src='img/prds/{$somerow2['main_image']}' alt='product name' width='500' height='500'>
                                    </div>
                                    <div class='col col-md-6'>
                                        <div class='card_product'>"; 
                                        ?>
                                            <form action="includes/server.php?id=<?php echo $prdID?>" method="POST">
                                        <?php

                                        echo"
                                                <h1><b>{$somerow2['name']}</b></h1>
                                                <br>
                                                <p style='font-size:20px'><b>Category:</b> {$somerow2['category']}</p>
                                                <p style='font-size:20p'><b>Brand:</b> <span class='badge bg-danger'>{$somerow2['brand_id']}</span></p>
                                                <p style='font-size:20p'><b>Stock:</b> <span class='badge bg-success'>Instock</span> <span class='badge bg-warning'>sku: {$somerow2['sku']}</span><br>
                                                <span style='font-size:13px;'><i>Registered by {$somerow2['created_by']} on {$somerow2['date_create']}</i></span></p>
                                                <p style='font-size:20px'><b>Size:</b> <span class='badge bg-primary'>{$somerow2['size']}</span></p>
                                                <img src='img/prds/{$somerow2['sub_imge']}' alt='product name' width='50' height='50'>
                                                <br>
                                                <br>
                                                <p style='font-size:20px'><b>Last Price:</b> <span class='badge bg-info'>{$somerow2['sales_price']}Frs</span></p>
                                                <p style='font-size:20px'>Price <input type='number' name='sold_amount' style='border-radius:7px; border:2px solid #222e3c1c'> </p>
                                                <input type='submit' style='font-size:20px' name='addToCart' value='Add to Cart' class='btn btn-success' >
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        }
                            ?>


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
