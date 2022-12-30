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
    
    $memquery = "SELECT * FROM products WHERE is_sold=0 ORDER BY id DESC";
    $memstmt = $conn->prepare($memquery);
    $memstmt->execute();
    $memnum = $memstmt->rowCount();

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Product Catalogue</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">

                        <?php

                        $cat_query = "SELECT * FROM categories ";
                        $cat_stm = $conn->prepare($cat_query);
                        $cat_stm->execute();

                        ?>

						<h5 class="card-title mb-0">Filter by Category</h5>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
                            <select name="filter" style="border-radius:5px; border:1px solid #222e3c1c; width:250px; height:30px">
                                <option value="0">All</option>
                                <?php 
																	
                                    while($cat = $cat_stm->fetch(PDO::FETCH_ASSOC)){

                                        echo "<option value='{$cat['cat_name']}'>{$cat['cat_name']}</option>";

                                }
                            
                            
                                ?>
                            </select>
                            <button id="clicking" onclick="autoCLick()" type="submit" name="filter_by_brand" class="btn btn-danger">Go</button>
                        </form>
					</div>
                    <br>
					<div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                

                    <?php 

                        if(isset($_POST['filter_by_brand'])){

                            $myOption = htmlspecialchars(strip_tags($_POST['filter']));
                            if($myOption == ""){
                                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        <strong>Please,</strong> Select an option.
                                    </div>";
                            } else {
								if($myOption == 0){
                                    $attend = "SELECT * FROM products WHERE is_sold=0 ORDER BY id DESC";
                                } else {
                                    $attend = "SELECT * FROM products WHERE category =  '$myOption' AND is_sold=0 ORDER BY id DESC";
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
                            
                                echo "
                                
                                <div class='col col-md-3 text-center'>
                                    <div class='card_product'>
                                        <img src='img/prds/{$somerow2['main_image']}' alt='{$somerow2['name']}' width='250' height='250'>
                                        <br><br>
                                        <h4>{$somerow2['name']}</h4>
                                        <p style='font-size:15px'><b>Category:</b> {$somerow2['category']}</p>
                                        <p style='font-size:15px'><b>Brand:</b> <span class='badge bg-primary'>{$somerow2['brand_id']}</span></p>
                                        <p style='font-size:15px'><span class='badge bg-warning'>sku: {$somerow2['sku']}</span><br>
                                        <p style='font-size:20px'><b>Last Price:</b> <span class='badge bg-info'>{$somerow2['sales_price']}Frs</span></p> 
                                        <button class='btn btn-danger'>
                                            <i class='align-middle' data-feather='trash-2'></i>
                                        </button>
                                        <a href='edit_prd.php'>
                                            <button class='btn btn-success'>
                                                <i class='align-middle' data-feather='edit'></i>
                                            </button>  
                                        </a>                                                                      
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

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
