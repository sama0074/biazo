<?php
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Supplier's Database</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
                        <div>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                <div class="row">
                                    <h5 style="margin-bottom:15px">Supplier Details</h5>
                                        
                                    <div class="col col-md-4">
                                        <label for="cName">Supplier Name<span style="color:red"> *</span></label>
                                        <input type="text" name="cName" class="form-control" placeholder="Name of Supplier" required>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="DOB">Date of Birth (Optional)<span style="color:red"> </span></label>
                                        <input type="date" name="DOB" class="form-control" value="" >
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="country">Country<span style="color:red"> *</span></label>
                                        <select type="text" id="apphascars" name="country" class="form-control" placeholder="apphascars" required>
                                            <?php include 'includes/countryList.php'?>
                                        </select>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="gender">Gender<span style="color:red"> *</span></label>
                                        <select id="Region" name="gender" class="form-control" placeholder="Select Zone" list="Region" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="address">Supplier Address<span style="color:red"> *</span></label>
                                        <textarea required name="address" id="" cols="30" rows="3" class="form-control" placeholder="Detailed description of where they stay"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h5 style="margin-bottom:15px">Other Details<span class="reqired"> </span></h5>
                                        
                                    <div class="col col-md-3">
                                        <label for="telephone">Supplier Phone<span style="color:red"> *</span></label>
                                        <input class="form-control" type="number" id="wizards" placeholder="Phone" name="telephone" list="wizards-list" required>
                                    </div>
                                    <div class="col col-md-3">
                                        <label for="occupation">Business Name<span style="color:red"> *</span></label>
                                        <input class="form-control" type="text" id="wizards" placeholder="Occupation" name="occupation" list="wizards-list" required>							
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="correspondantName">Correspondant Name<span style="color:red"> </span></label>
                                        <input class="form-control" type="test" id="wizards" placeholder="e.g Mr. John" name="correspondantName" list="wizards-list">
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="relationship">Relationship<span style="color:red"> </span></label>
                                        <input class="form-control" type="text" id="wizards" placeholder="Brother" name="relationship" list="wizards-list">
                                    </div>
                                    <div class="col col-md-2">
                                        <label for="correspondantphone">Correspondant Phone<span style="color:red"> </span></label>
                                        <input class="form-control" type="number" id="wizards" placeholder="e.g +237 653 766 939" name="correspondantphone" list="wizards-list">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col col-md-12">
                                        <label for="shopDetails">Details of Supplier's products<span style="color:red"> *</span></label>
                                        <textarea name="shopDetails" id="" cols="30" rows="5" class="form-control" placeholder="Here, you are expected to input the details of the suplie's business such as, product sold, location etc..." required></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <label for="correspondantphone">Upload Supplier's Picture of business picture<span style="color:red"> </span></label>
                                        <input class="form-control" type="file" id="wizards" name="correspondantphone" list="wizards-list">
                                    </div>
                                    <br>
                                    <div class="col col-md-4">
                                        <label for="correspondantphone">Other business documents e.g M.O.U etc...<span style="color:red"> </span></label>
                                        <input class="form-control" type="file" id="wizards" name="correspondantphone" list="wizards-list" multiple>
                                    </div>
                                </div>
                                <br>
                                <div class="">
                                    <button name="create_branch" type="submit" class="btn btn-success">Create</button>
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
                                            <h1> 1204 Suppliers</h1>
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
                                                            <th scope='col'>Business</th>
                                                            <th scope='col'>Address</th>
                                                            <th scope='col'>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id='myDepts'>
                                                         <tr>
                                                            <th scope='row'>001</th>
                                                            <td>Sama Yanick</td>
                                                            <td>28 May 1994</td>
                                                            <td>Cameroon</td>
                                                            <td>Males</td>
                                                            <td>Senior DevOps Engineer</td>
                                                            <td>Address</td>
                                                            <td>
                                                                <div class='action'>
                                                                    <a href="edit_supplier.php">
                                                                        <button class="btn btn-info">
                                                                            <i class="align-middle" data-feather="edit"></i>
                                                                        </button>  
                                                                    </a> 
                                                                    <button class="btn btn-danger">
                                                                        <i class="align-middle" data-feather="trash-2"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
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
