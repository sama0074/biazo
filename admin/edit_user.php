<?php

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: auth-login.php");
    }
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";



    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
    include 'database/config2.php';
    
    try {
        $query = "SELECT * FROM users WHERE id = ? LIMIT 0,1";
        $stmt = $conn->prepare( $query );
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }


    // check if form was submitted
if(isset($_POST['edit_user'])){
 
    try{
 
        $query = "UPDATE users
                    SET member_name=:member_name, position=:position, dob=:dob, country=:country, gender=:gender, address=:address, 
                    hobbies=:hobbies, id_no=:id_no, start_date=:start_date, code=:code, phone=:phone, surety_name=:surety_name, 
                    surety_occupation=:surety_occupation, surety_phone=:surety_phone, surety_relationship=:surety_relationship, surety_address=:surety_address,
                     surety_id=:surety_id, username=:username, password=:password, isUser=1 WHERE id = :id";
 
        // prepare query for execution
        $stmt = $conn->prepare($query);
								
        // posted values
        $member_name=htmlspecialchars(strip_tags($_POST['member_name']));
        $position=htmlspecialchars(strip_tags($_POST['position']));
        $dob=htmlspecialchars(strip_tags($_POST['dob']));
        $country=htmlspecialchars(strip_tags($_POST['country']));
        $gender=htmlspecialchars(strip_tags($_POST['gender']));
        $address=htmlspecialchars(strip_tags($_POST['address']));
        $hobbies=htmlspecialchars(strip_tags($_POST['hobbies']));
        $id_no=htmlspecialchars(strip_tags($_POST['id_no']));
        $start_date=date("Y-m-d");
        $code=htmlspecialchars(strip_tags($_POST['code']));
        $phone=htmlspecialchars(strip_tags($_POST['phone']));
        $surety_name=htmlspecialchars(strip_tags($_POST['surety_name']));
        $surety_occupation=htmlspecialchars(strip_tags($_POST['surety_occupation']));
        $surety_phone=htmlspecialchars(strip_tags($_POST['surety_phone']));
        $surety_relationship=htmlspecialchars(strip_tags($_POST['surety_relationship']));
        $surety_address=htmlspecialchars(strip_tags($_POST['surety_address']));
        $surety_id=htmlspecialchars(strip_tags($_POST['surety_id']));
        $username=htmlspecialchars(strip_tags($_POST['username']));
        $password=md5(htmlspecialchars(strip_tags($_POST['password'])));
        $repeat_password=md5(htmlspecialchars(strip_tags($_POST['repeat_password'])));
 
        // bind the parameters
        $stmt->bindParam(':member_name', $member_name);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':hobbies', $hobbies);
        $stmt->bindParam(':id_no', $id_no);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':surety_name', $surety_name);
        $stmt->bindParam(':surety_occupation', $surety_occupation);
        $stmt->bindParam(':surety_phone', $surety_phone);
        $stmt->bindParam(':surety_relationship', $surety_relationship);
        $stmt->bindParam(':surety_address', $surety_address);
        $stmt->bindParam(':surety_id', $surety_id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $id);
 
        // Execute the query
        if($stmt->execute()){

           /* if($image){
								
                // sha1_file() function is used to make a unique file name
                $target_directory = "img/employee/";
                $target_file = $target_directory . $image;
                $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            
                $file_upload_error_messages="";
                // make sure file does not exist
            if(file_exists($target_file)){
                $file_upload_error_messages.="<div>File already exists. Try to change file name.</div>";
            }
                
                // make sure submitted file is not too large, can't be larger than 1 MB
            if($_FILES['image']['size'] > (5120000)){
                $file_upload_error_messages.="<div>File must be less than 5 MB in size.</div>";
            }
                
            if(!is_dir($target_directory)){
                mkdir($target_directory, 0777, true);
            }
                
            
            
            // if $file_upload_error_messages is still empty
            if(empty($file_upload_error_messages)){
                // it means there are no errors, so try to upload the file
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                    // it means photo was uploaded
                }else{
                    echo "<div class='alert alert-danger'>
                        <div>Unable to upload file.</div>
                        <div>Update the record to upload file.</div>
                    </div>";
                }
            }
            } */

            echo "<div class='alert alert-success text-center'>Update was successful. 
                        <a href='users.php'>
                            <div class='position-relative btn btn-success'>
                                <i class='align-middle' data-feather='corner-down-left'></i>
                            </div>
                        </a>
                    </div>";

        }else{
            echo "<div class='alert alert-danger'>Error occured. Update was unsuccessful!!!</div>";
        }
        
 
    }
 
    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}

?> 
	
<main class="content">
	<div class="container-fluid p-0">
        <div class="row">
			<div class="col col-md-4">
                <h1 class="h3 mb-3">Edit System User</h1>
			</div>
			
		</div>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <h5 style="margin-bottom:15px">Edit User Details</h5>
                                        
                                    <div class="col col-md-2">
                                        <label for="member_name">Member Name<span style="color:red"> *</span></label>
                                        <input type="text" name="member_name" class="form-control" value="<?php echo htmlspecialchars($row['member_name'], ENT_QUOTES);  ?>" placeholder="Name of Customer" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="position">Possition<span style="color:red"> *</span></label>
                                        <select id="Region" name="position" class="form-control" placeholder="Select Zone" list="Region" value="<?php echo htmlspecialchars($row['position'], ENT_QUOTES);  ?>">
                                            <option value="Sales Person">Sales</option>
                                            <option value="Owner">Owner</option>
                                            <option value="Manager" disabled>Manager</option>
                                            <option value="Accountant" disabled>Accountant</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="dob">Date of Birth (Optional)<span style="color:red"> </span></label>
                                        <input type="date" name="dob" class="form-control" value="<?php echo htmlspecialchars($row['dob'], ENT_QUOTES);  ?>" >
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="country">Country<span style="color:red"> *</span></label>
                                        <select type="text" id="apphascars" name="country" value="" class="form-control" value="<?php echo htmlspecialchars($row['country'], ENT_QUOTES);  ?>" placeholder="apphascars" required>
                                            <option value="Cameroon">Cameroon</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="gender">Gender<span style="color:red"> *</span></label>
                                        <select id="Region" name="gender" value="<?php echo htmlspecialchars($row['gender'], ENT_QUOTES);  ?>" class="form-control" placeholder="Select Zone" list="Region" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="address">User Address<span style="color:red"> *</span></label>
                                        <input required name="address" value="<?php echo htmlspecialchars($row['address'], ENT_QUOTES);  ?>" id="" cols="30" rows="3" class="form-control" placeholder="Detailed description of where they stay">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <label for="hobbies">Hobbies<span style="color:red"> *</span></label>
                                        <input type="text" name="hobbies" value="<?php echo htmlspecialchars($row['hobbies'], ENT_QUOTES);  ?>" class="form-control" placeholder="Name of Customer" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="id_no">ID No.<span style="color:red"> *</span></label>
                                        <input type="text" name="id_no" value="<?php echo htmlspecialchars($row['id_no'], ENT_QUOTES);  ?>" placeholder="ID number" class="form-control" value="" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="start_date">Start Date<span style="color:red"> *</span></label>
                                        <input type="date" id="apphascars" name="start_date"value="<?php echo htmlspecialchars($row['start_date'], ENT_QUOTES);  ?>" class="form-control" placeholder="apphascars" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="code">Code<span style="color:red"> *</span></label>
                                        <input type="text" readonly id="apphascars" name="code"value="<?php echo htmlspecialchars($row['code'], ENT_QUOTES);  ?>" class="form-control" value="#U<?php echo (rand(1000, 10000)) ;?>" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="phone">Phone<span style="color:red"> *</span></label>
                                        <input type="number" id="apphascars" name="phone" value="<?php echo htmlspecialchars($row['phone'], ENT_QUOTES);  ?>" class="form-control" placeholder="e.g 653 799 669" required>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="row">
                                    <h5 style="margin-bottom:15px">Surety Details<span class="reqired"> </span></h5>
                                        
                                    <div class="col col-md-3">
                                        <label for="surety_name">Name<span style="color:red"> *</span></label>
                                        <input class="form-control" type="text" value="<?php echo htmlspecialchars($row['surety_name'], ENT_QUOTES);  ?>" id="wizards" placeholder="Name" name="surety_name" list="wizards-list" required>
                                    </div>
                                    <div class="col col-md-3">
                                        <label for="surety_occupation">Occupation<span style="color:red"> *</span></label>
                                        <input class="form-control" type="text" id="wizards" placeholder="Occupation" name="surety_occupation" value="<?php echo htmlspecialchars($row['surety_occupation'], ENT_QUOTES);  ?>" list="wizards-list" required>							
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="surety_phone">Number<span style="color:red"> *</span></label>
                                        <input class="form-control" type="number" value="<?php echo htmlspecialchars($row['surety_phone'], ENT_QUOTES);  ?>" id="wizards" placeholder="telephone" name="surety_phone" list="wizards-list" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="surety_relationship">Relationship<span style="color:red"> *</span></label>
                                        <input class="form-control" value="<?php echo htmlspecialchars($row['surety_relationship'], ENT_QUOTES);  ?>" type="text" id="wizards" placeholder="e.g Father" name="surety_relationship" list="wizards-list" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="surety_address">Address<span style="color:red"> *</span></label>
                                        <input class="form-control" value="<?php echo htmlspecialchars($row['surety_address'], ENT_QUOTES);  ?>" type="text" id="wizards" placeholder="e.g Mokundange Limbe" name="surety_address" list="wizards-list" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <label for="surety_id">ID Card<span style="color:red"> *</span></label>
                                        <input class="form-control" value="<?php echo htmlspecialchars($row['surety_id'], ENT_QUOTES);  ?>" type="text" id="wizards"  name="surety_id" list="wizards-list">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h5 style="margin-bottom:15px">User Logins<span class="reqired"> </span></h5>
                                        
                                    <div class="col col-md-4">
                                        <label for="username">Username<span style="color:red"> *</span></label>
                                        <input class="form-control" type="text" value="<?php echo htmlspecialchars($row['username'], ENT_QUOTES);  ?>" id="wizards" placeholder="Name" name="username" list="wizards-list">
                                    </div>
                                    <div class="col col-md-4">
                                        <label for="password">Password<span style="color:red"> </span></label>
                                        <input class="form-control" type="password" id="wizards" value="" placeholder="Occupation" name="password" list="wizards-list" >							
                                    </div>
                                    <div class="col col-md-4">
                                        <label for="repeat_password">Password<span style="color:red"> </span></label>
                                        <input class="form-control" type="password" id="wizards" placeholder="telephone" name="repeat_password" list="wizards-list">
                                    </div>
                                </div>
                                <br>
                                <div class="">
                                    <button name="edit_user" type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                        <br>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
