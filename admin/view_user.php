<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: auth-login.php");
    }
	include "includes/head.php";
	include "includes/sidebar.php";

    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
    include 'database/config2.php';

    $query = "SELECT * FROM users WHERE id = ? LIMIT 0,1";
    $stmt = $conn->prepare( $query );
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $uid = $row['id'];





      // check if form was submitted
if(isset($_POST['edit_image'])){
 
    try{
 
        $query = "UPDATE users SET image=:image, isUser=1 WHERE id = $uid";
 
        // prepare query for execution
        $stmt = $conn->prepare($query);
								
        // posted values
        $image=!empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"])
        : "";

        $image=htmlspecialchars(strip_tags($image));
 
        // bind the parameters
        $stmt->bindParam(':image', $image);
 
        // Execute the query
        if($stmt->execute()){

           if($image){
								
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
            }

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

		<h1 class="h3 mb-3"></h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Write down your activities for today</h5>
					</div>
					<div class="card-body">

                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">My Profile Details</h5>
                                </div>
                                <div class="card-body text-center">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" enctype="multipart/form-data" method="POST">
                                        <img src="img/employee/<?php echo $row['image'];?>" alt="<?php echo $row['member_name'];?>" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                                        <h5 class="card-title mb-0"><?php echo $row['member_name'];?>
                                            <button type="submit" style="border:none; background-color:none !important" name="edit_image">
                                                <i class='align-middle' data-feather='check' style="color:green"></i>
                                            </button>
                                        </h5>
                                        <div class="text-muted mb-2"><?php echo $row['position'];?></div>
                                        <div>
                                        <a class="btn btn-success btn-sm" href="#">Active</a>
                                        <a class="btn btn-primary btn-sm" href="edit_user.php?id=<?php echo "{$id}";?>"> Edit</a>
                                        <div class="avatar-container">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required />
                                                    <label for="imageUpload">
                                                        <i class='align-middle' data-feather='edit-2' style="width: 14px; margin-top: 5px; color:white"></i>
                                                    </label>
                                                </div>
                                                <div class="avatar-previews">
                                                    <div id="imagePreview" style="background-image: ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                        
                                        <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                            <div class="position-relative btn btn-warning btn-sm">
                                                <i class="align-middle" data-feather="message-square"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                            <div class="dropdown-menu-header">
                                                <div class="position-relative">
                                                    Send <?php echo $row['member_name'];?> an SMS
                                                </div>
                                            </div>
                                            <form action="" method="GET">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <div class="row g-0 align-items-center">
                                                            <div class="col-2">
                                                                <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                                            </div>
                                                            <div class="col-10 ps-2">
                                                                <div class="text-dark"><i><small>Typing...</small></i></div>
                                                                <textarea name="activity" id="" cols="30" rows="3" class="form-control" required></textarea>
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
                                    <h5 class="h6 card-title">Hobbies</h5>
                                    <a href="#" class="badge bg-primary me-1 my-1"><?php echo $row['hobbies'];?></a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">About <?php echo $row['member_name'];?></h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#"><?php echo $row['address'];?></a></li>
                                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">Biazo</a></li>
                                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Nationality <a href="#"><?php echo $row['country'];?></a></li>
                                        <li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> Phone <a href="#"><?php echo $row['phone'];?></a></li>
                                    </ul>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <h5 class="h6 card-title">About Surety</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1"><span data-feather="at-sign" class="feather-sm me-1"></span> Name <a href="#"><?php echo $row['surety_name'];?></a></li>
                                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#"><?php echo $row['surety_address'];?></a></li>
                                        <li class="mb-1"><span data-feather="phone-call" class="feather-sm me-1"></span> Phone <a href="#"><?php echo $row['surety_phone'];?></a></li>
                                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Occuption <a href="#"><?php echo $row['surety_occupation'];?></a></li>
                                        <li class="mb-1"><span data-feather="user-check" class="feather-sm me-1"></span> ID No. <a href="#"><?php echo $row['surety_id'];?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-xl-9">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Activities</h5>
                                </div>
                                <div class="card-body h-100">

                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Vanessa Tucker">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">5m ago</small>
                                            <strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br />
                                            <small class="text-muted">Today 7:51 pm</small><br />

                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">30m ago</small>
                                            <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br />
                                            <small class="text-muted">Today 7:21 pm</small>

                                            <div class="border text-sm text-muted p-2 mt-1">
                                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                                                pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                                            </div>

                                            <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">1h ago</small>
                                            <strong>Christina Mason</strong> posted a new blog<br />

                                            <small class="text-muted">Today 6:35 pm</small>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">3h ago</small>
                                            <strong>William Harris</strong> posted two photos on <strong>Christina Mason</strong>'s timeline<br />
                                            <small class="text-muted">Today 5:12 pm</small>

                                            <div class="row g-0 mt-1">
                                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                                    <img src="img/photos/unsplash-1.jpg" class="img-fluid pe-2" alt="Unsplash">
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                                    <img src="img/photos/unsplash-2.jpg" class="img-fluid pe-2" alt="Unsplash">
                                                </div>
                                            </div>

                                            <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">1d ago</small>
                                            <strong>William Harris</strong> started following <strong>Christina Mason</strong><br />
                                            <small class="text-muted">Yesterday 3:12 pm</small>

                                            <div class="d-flex align-items-start mt-1">
                                                <a class="pe-3" href="#">
                                                    <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                                                </a>
                                                <div class="flex-grow-1">
                                                    <div class="border text-sm text-muted p-2 mt-1">
                                                        Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">1d ago</small>
                                            <strong>Christina Mason</strong> posted a new blog<br />
                                            <small class="text-muted">Yesterday 2:43 pm</small>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start">
                                        <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
                                        <div class="flex-grow-1">
                                            <small class="float-end text-navy">1d ago</small>
                                            <strong>Charles Hall</strong> started following <strong>Christina Mason</strong><br />
                                            <small class="text-muted">Yesterdag 1:51 pm</small>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-primary">Load more</a>
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
