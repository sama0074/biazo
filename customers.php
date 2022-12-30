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

		<h1 class="h3 mb-3">Customer Database</h1>

        
        <?php 

            if($_GET['registration'] == 'success'){
                echo "<div class='alert alert-success'>Success</div> <br>";
            }else{
                if($_GET['registration'] == 'failed'){
                    echo "<div class='alert alert-danger'>Sorry!! An Error occured</div> <br>";
                }
            }

            if($_GET['registration'] == ''){
                echo "<div></div>";
            }





        ?>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div>
                            <form action="includes/server.php" method="POST">
                                <div class="row">
                                    <h5 style="margin-bottom:15px">Customer Details</h5>

                                    <div class="col col-md-4">
                                        <label for="c_name">Customer Name<span style="color:red"> *</span></label>
                                        <input type="text" name="c_name" class="form-control" placeholder="Name of Customer" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="c_dob">Date of Birth (Optional)<span style="color:red"> </span></label>
                                        <input type="date" name="c_dob" class="form-control" value="" >
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="c_country">Country<span style="color:red"> *</span></label>
                                        <select type="text" id="apphascars" name="c_country" class="form-control" placeholder="apphascars" required>
                                            <?php include 'includes/countryList.php'?>
                                        </select>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="c_gender">Gender<span style="color:red"> *</span></label>
                                        <select id="Region" name="c_gender" class="form-control" placeholder="Select Zone" list="Region" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="c_address">Customer Address<span style="color:red"> *</span></label>
                                        <textarea required name="c_address" id="" cols="30" rows="3" class="form-control" placeholder="Detailed description of where they stay"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h5 style="margin-bottom:15px">Other Details<span class="reqired"> </span></h5>
                                        
                                    <div class="col col-md-3">
                                        <label for="c_telephone">Customer Phone<span style="color:red"> *</span></label>
                                        <input class="form-control" type="number" id="wizards" placeholder="Phone" name="c_telephone" list="wizards-list" required>
                                    </div>
                                    <div class="col col-md-3">
                                        <label for="c_occupation">Occupation<span style="color:red"> *</span></label>
                                        <input class="form-control" type="text" id="wizards" placeholder="Occupation" name="c_occupation" list="wizards-list" required>							
                                    </div>
                                    <div class="col col-md-4">
                                        <label for="c_picture">Upload Customer's Picture<span style="color:red"> </span></label>
                                        <input class="form-control" type="file" id="wizards" placeholder="e.g +237 653 766 939" name="c_picture" list="wizards-list">
                                    </div>
                                </div>
                                <br>
                                <div class="">
                                    <button name="create_customer" type="submit" class="btn btn-success">Create</button>
                                </div>
                            </form>
                        </div>
                        <br><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-5 col-md-6">
                                    <div class="card bg-pattern carding">
                                        <div class="card-body text-center">
                                            <a href="#">
                                                <i class="fas fa-file-signature fa-3x" style="color:#435ebe"></i>
                                                <h4> Quick Report</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-pattern carding">
                                        <div class="card-body text-center">
                                            <i class="fas fa-users fa-3x" style="color:#435ebe"></i>
                                            <h1> <?php echo $memnum;?> Customers</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card carding">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group mb-0">
                                                    <label>Search</label>
                                                    <div class="input-group mb-0">
                                                        <input type="text" class="form-control" id="lookDpt" placeholder="Search for branch..." aria-describedby="project-search-addon" />
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="align-middle" data-feather="search"></i>
                                                            </button> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card carding">
                                        <div class="card-body">
                                            <div class="table-responsive project-list">
                                                <table id='example' class='table project-table table-centered table-nowrap'>
                                                    <thead>
                                                        <tr>
                                                            <th scope='col'>#</th>
                                                            <th scope='col'>Name</th>
                                                            <th scope='col'>D.O.B</th>
                                                            <th scope='col'>Country</th>
                                                            <th scope='col'>Sex</th>
                                                            <th scope='col'>Occupation</th>
                                                            <th scope='col'>Address</th>
                                                            <th scope='col'>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody id='myDepts'>


                                                    <?php
                                                    
                                                        while($info = $memstmt->fetch(PDO::FETCH_ASSOC)){

                                                            echo "
                                                                <tr>
                                                                    <th scope='row'>{$info['id']}</th>
                                                                    <td>{$info['c_name']}</td>
                                                                    <td>{$info['c_dob']}</td>
                                                                    <td>{$info['c_country']}</td>
                                                                    <td>{$info['c_gender']}</td>
                                                                    <td>{$info['c_occupation']}</td>
                                                                    <td>{$info['c_address']}</td>
                                                                    <td>
                                                                        <div class='action'>
                                                                            <a href='view_customer.php?id={$info['id']}'>
                                                                                <button class='btn btn-warning'>
                                                                                    <i class='align-middle' data-feather='eye'></i>
                                                                                </button> 
                                                                            </a>
                                                                            <a href='edit_customer.php?id={$info['id']}'>
                                                                                <button class='btn btn-info'>
                                                                                    <i class='align-middle' data-feather='edit'></i>
                                                                                </button>  
                                                                            </a> 
                                                                            <a href='delete_customer.php?id={$info['id']}' class='btn btn-danger'>
                                                                                <i class='align-middle' data-feather='trash-2'></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            
                                                            ";

                                                        }
                                                    
                                                    ?>
                                                         
                                                    </tbody>
                                                    </table>
                                            
                                            </div>
                                            <!-- end project-list -->

                                            <div class="pt-3">
                                                <!--ul class="pagination justify-content-end mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul -->
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

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
