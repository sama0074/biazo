<?php

	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: auth-login.php");
	}

	include "includes/head.php";
	include "includes/sidebar.php";



	include '../database/config2.php';
        
    $query5 = "SELECT * FROM users ORDER BY id DESC";
    $stmt5 = $conn->prepare($query5);
    $stmt5->execute();
        
    // this is how to get number of rows returned
    $num5 = $stmt5->rowCount();
    
    $memquery = "SELECT * FROM users ORDER BY id DESC";
    $memstmt = $conn->prepare($memquery);
    $memstmt->execute();
    $memnum = $memstmt->rowCount();


    if (isset($_POST['add_product'])) {
        // include database connection
        include 'database/config2.php';
     
        try{
     
            // insert query
            $query2 = "INSERT INTO products SET name=:name, category=:category, created_by=:created_by, brand_id=:brand_id, date_create=:date_create, size=:size, 
			purchase_price=:purchase_price, sales_price=:sales_price, supplier=:supplier, sku=:sku, prd_description=:prd_description, exp_date=:exp_date, 
			sub_imge=:sub_imge, main_image=:main_image, is_cart=0, is_sold=0 ";
            
            // prepare query for execution
            $stmt = $conn->prepare($query2);
            
            // posted values
            $name=htmlspecialchars(strip_tags($_POST['name']));
            $category=htmlspecialchars(strip_tags($_POST['category']));
            $created_by=htmlspecialchars(strip_tags($_POST['created_by']));
            $brand_id=htmlspecialchars(strip_tags($_POST['brand_id']));
            $date_create=date("Y-m-d");
            $size=htmlspecialchars(strip_tags($_POST['size']));
            $purchase_price=htmlspecialchars(strip_tags($_POST['purchase_price']));
            $sales_price=htmlspecialchars(strip_tags($_POST['sales_price']));
            $supplier=htmlspecialchars(strip_tags($_POST['supplier']));
            $sku=htmlspecialchars(strip_tags($_POST['sku']));
            $prd_description=htmlspecialchars(strip_tags($_POST['prd_description']));
            $exp_date=date("Y-m-d");

            $sub_imge=!empty($_FILES["sub_imge"]["name"])
            ? sha1_file($_FILES['sub_imge']['tmp_name']) . "-" . basename($_FILES["sub_imge"]["name"])
            : "";

            $sub_imge=htmlspecialchars(strip_tags($sub_imge));


			$main_image=!empty($_FILES["main_image"]["name"])
            ? sha1_file($_FILES['main_image']['tmp_name']) . "-" . basename($_FILES["sub_imge"]["name"])
            : "";

            $main_image=htmlspecialchars(strip_tags($main_image));
     


            // bind the parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':created_by', $created_by);
            $stmt->bindParam(':brand_id', $brand_id);
            $stmt->bindParam(':date_create', $date_create);
            $stmt->bindParam(':size', $size);
            $stmt->bindParam(':purchase_price', $purchase_price);
            $stmt->bindParam(':sales_price', $sales_price);
            $stmt->bindParam(':supplier', $supplier);
            $stmt->bindParam(':sku', $sku);
            $stmt->bindParam(':prd_description', $prd_description);
            $stmt->bindParam(':exp_date', $exp_date);
            $stmt->bindParam(':sub_imge', $sub_imge);
            $stmt->bindParam(':main_image', $main_image);
            


            // now, if image is not empty, try to upload the image
            if($stmt->execute()){
				if($sub_imge){
				
					// sha1_file() function is used to make a unique file name
					$target_directory = "../img/prds/";
					$target_file = $target_directory . $sub_imge;
					$file_type = pathinfo($target_file, PATHINFO_EXTENSION);
				
					$file_upload_error_messages="";
					// make sure file does not exist
				if(file_exists($target_file)){
					$file_upload_error_messages.="<div>File already exists. Try to change file name.</div>";
				}
					
					// make sure submitted file is not too large, can't be larger than 1 MB
				if($_FILES['sub_imge']['size'] > (5120000)){
					$file_upload_error_messages.="<div>File must be less than 5 MB in size.</div>";
				}
					
				if(!is_dir($target_directory)){
					mkdir($target_directory, 0777, true);
				}
					
				
				
				// if $file_upload_error_messages is still empty
				if(empty($file_upload_error_messages)){
					// it means there are no errors, so try to upload the file
					if(move_uploaded_file($_FILES["sub_imge"]["tmp_name"], $target_file)){
						// it means photo was uploaded
					}else{
						echo "<div class='alert alert-danger'>
							<div>Unable to upload file.</div>
							<div>Update the record to upload file.</div>
						</div>";
					}
				}
			}

			if($main_image){
				
				// sha1_file() function is used to make a unique file name
				$target_directory = "../img/prds/";
				$target_file = $target_directory . $main_image;
				$file_type = pathinfo($target_file, PATHINFO_EXTENSION);
			
				$file_upload_error_messages="";
				// make sure file does not exist
			if(file_exists($target_file)){
				$file_upload_error_messages.="<div>File already exists. Try to change file name.</div>";
			}
				
				// make sure submitted file is not too large, can't be larger than 1 MB
			if($_FILES['main_image']['size'] > (5120000)){
				$file_upload_error_messages.="<div>File must be less than 5 MB in size.</div>";
			}
				
			if(!is_dir($target_directory)){
				mkdir($target_directory, 0777, true);
			}
				
			
			
			// if $file_upload_error_messages is still empty
			if(empty($file_upload_error_messages)){
				// it means there are no errors, so try to upload the file
				if(move_uploaded_file($_FILES["main_image"]["tmp_name"], $target_file)){
					// it means photo was uploaded
				}else{
					echo "<div class='alert alert-danger'>
						<div>Unable to upload file.</div>
						<div>Update the record to upload file.</div>
					</div>";
				}
			}
			}


        }
            
            
        if($name) //this block is to check if the password and confirm password matches
        {
             
                    
                if($num5 > 0) // this block is to see if the username already exists
                {
                    //echo '<p class="alert alert-light-danger color-danger">Username Already Existing</p>';
                    echo "<div class='alert alert-success text-center'>Registration was successful</div>";
                    
                }else{
                    
                    if($num5 > 0) // this block is to see if the telephone number already exists
                    {
                        //echo '<p class="alert alert-light-danger color-danger">Phone Number already exist</p>';
                        echo "<div class='alert alert-warning text-center'>Phone Number already exist</div>";
                    }else{
                        // Execute the query
                        if($stmt->execute()){
                            
                            echo "<div class='alert alert-success text-center'>Registration was successful. 
                                        <a href='users.php'>
                                            <div class='position-relative btn btn-success'>
                                                <i class='align-middle' data-feather='rotate-cw'></i>
                                            </div>
                                        </a>
                                    </div>";
                            
                        }else{
                            echo "<div class='alert alert-warning text-center'>Registration Failed.</div>";
                        }
                    }
                      
            }
        
        }else{
            header("Location: ../password_mismatch.php");
        }
    
        }
    
        // show error
        catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
    }

?> 
	
<main class="content">
	<div class="">

		<h1 class="h3 mb-3">Add Products</h1>

		<div class="row">
			<div class="col-12">
				<div class="">
					<div class="card-body">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
							<div class="container-fluid">
								<div class="main-checkout-div">
                                    <div class="row" style="margin-bottom: 30px">
                                        <label for="name">Full Name of Product <span style="color: red">*</span></label>
                                        <input style="margin-bottom:20px" type="text" name="name" class="form-control" placeholder="e.g Pink exotic ladies blouse for ladies who are under 30 years" required>
                                       
                                        <?php

                                            $cat_query = "SELECT * FROM categories ";
                                            $cat_stm = $conn->prepare($cat_query);
                                            $cat_stm->execute();
                                        
                                        ?>
                                        <label for="category">Product Category <span style="color: red">*</span></label>
                                        <select style="margin-bottom:20px" type="text" name="category" class="form-control" required>
                                            <option selected disabled >Select Category</option>

                                            <?php 
                                            
                                                while($cat = $cat_stm->fetch(PDO::FETCH_ASSOC)){

                                                    echo "<option value='{$cat['cat_name']}'>{$cat['cat_name']}</option>";

                                                }
                                            
                                            
                                            ?>
                                        </select>
                                        <label for="created_by">Registered By <span style="color: red">*</span></label>
                                        <input style="margin-bottom:20px" type="text" name="created_by" readonly class="form-control" value="<?php echo $row['member_name']?>" required>
                                    
                                    </div>

                                    <div class="row" style="margin-bottom: 30px">

                                            <?php

                                                $brand_query = "SELECT * FROM brands ";
                                                $brand_stm = $conn->prepare($brand_query);
                                                $brand_stm->execute();
                                            
                                            ?>
                                        <div class="col col-md-3">
                                            <label for="brand_id">Brand Name<span style="color: red">*</span></label>
                                            <Select type="text" name="brand_id" class="form-control" required>
                                                <option selected disabled >Select Brand</option>

                                                <?php 
                                                
                                                    while($brand = $brand_stm->fetch(PDO::FETCH_ASSOC)){

                                                        echo "<option value='{$brand['brand_name']}'>{$brand['brand_name']}</option>";

                                                    }
                                                
                                                
                                                ?>
                                                <option value="Female Blouse">Gucci</option>
                                            </select>
                                        </div>
                                        <div class="col col-md-5">
                                            <label for="date_create">Date Created<span style="color: red"> *</span></label>
                                            <input type="text" name="date_create" class="form-control" value="<?php echo date("l d M Y");?>" Readonly>
                                        </div>
                                        <div class="col col-md-4">
                                            <label for="size">Size<span style="color: red"> *</span></label>
                                            <input type="text" name="size" class="form-control" placeholder="e.g XXL" required>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-6">
                                            <label for="purchase_price">Purchase Price</label>
                                            <input type="number" name="purchase_price" class="form-control" placeholder="e.g 20000" required>
                                        </div>
                                        <div class="col col-md-6">
                                            <label for="sales_price">Sales Price<span style="color: red"> *</span></label>
                                            <input type="number" name="sales_price" class="form-control" placeholder="e.g 25000" required>
                                        </div>
                                    </div>

                                    <div class="password">
                                        <div class="row" style="margin-bottom: 30px">
                                            <div class="col col-md-6">
                                                <label for="supplier">Supplier <span class="requiredField"></span></label>
                                                <input class="form-control" type="text" id="" placeholder="Select Supplier" name="supplier" list="supplier">
                                                <datalist id="supplier" >
                                                    <option value="Sama Yanick">Douala | 653 766 939</option>
                                                    <option value="Omotola Jalade">Nigeria | 004 548 7778</option>
                                                    <option value="St Miguel Dollar">Buea | 675 247 838</option>
                                                    <option value="Afor Nanova">Limbe | 677 650 948</option>
                                                </datalist>
                                            </div>
                                            <div class="col col-md-6">
                                                <label for="sku">SKU<span style="color: red"> *</span></label>
                                                <input type="text" name="sku" class="form-control" value="<?php echo (rand());?>" required readonly> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-6">
                                            <label for="prd_description">Product Description<span style="color: red"></span></label>
                                            <textarea name="prd_description" id=""  cols="30" rows="3" placeholder="Give a short descripton about this product" class="form-control"></textarea>
                                        </div>
                                        <div class="col col-md-6">
                                            <label for="exp_date">Expiry Date (Optional)<span style="color: red"> </span></label>
                                            <input type="date" name="exp_date" class="form-control" placeholder="">
                                        </div>
                                        <div class="note" style="text-indent: 20px; color: red">
                                            <small>Please verify that all information entered above are correct.</small>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-6">
                                            <label for="sub_imge">Upload other images. You can select more than one</label>
                                            <input type="file" name="sub_imge" multiple >
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-md-4">
                                    <div class="row" style="margin-bottom: 25px">
                                        <div class="col col-lg-12">
                                            <div class="card" style="border-radius: 20px; border: none;">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="cdk-p-heading">
                                                            <h2>Main Image Upload</h2>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="avatar-upload">
                                                                <div class="">
                                                                    <input type='file' name="main_image" accept=".png, .jpg, .jpeg" required />
                                                                    <label for="imageUpload"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="add_product" class="btn btn-success" value="Add Product">
                                </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

















<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>

<?php
	include "includes/footer.php";
?> 
