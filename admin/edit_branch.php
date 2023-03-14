<?php
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Editing Branches</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col col-md-5">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5><i class="fas fa-list"></i> Edit Branch</h5></div>
											<div class="card-body">
												<form action="#0" method="POST">
													<div class="row">
														<div class="col col-sm-4">
															<label for="branchcountry">Select Country<span style="color:red"> *</span></label>
                                                            <select name="branchcountry" class="form-control" required id="">
                                                                <?php include 'includes/countryList.php'?>
                                                            </select>
														</div>
                                                        <div class="col col-sm-4">
                                                            <label for="branchname">Branch Name<span style="color:red"> *</span></label>
                                                            <input type="text" class="form-control" name="branchname" placeholder="Name of Branch" required >
                                                        </div>
                                                        <div class="col col-sm-2">
                                                            <label for="branchname">Code<span style="color:red"> *</span></label>
                                                            <input type="text" class="form-control" name="branchname" value="<?php echo (rand(1000, 10000));?>" required readonly>
                                                        </div>
                                                        <div class="col col-sm-2">
                                                            <label for="branchname">City<span style="color:red"> *</span></label>
                                                            <input type="text" class="form-control" name="branchname" value="Limbe" required readonly>
                                                        </div>
													</div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col col-sm-12">
                                                            <label for="branchname">Location of branch<span style="color:red"> *</span></label>
                                                            <textarea name="" id="" cols="30" rows="3"  placeholde="Detailed Location of branch" class="form-control" required></textarea>
                                                        </div>
                                                    </div>
													<br>
													<div class="text-center">
														<button name="create_department" type="submit" class="btn btn-success">Update Info</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="col col-md-7">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5><i class="fas fa-list"></i> All Brands</h5></div>
											<div class="card-body">
												<table id="table" class="table table-bordered table-striped">
													<thead>
														<tr>
															<th scope="col">#Code</th>
															<th scope="col">Name</th>
															<th scope="col">Country</th>
															<th scope="col">Address</th>
															<th scope="col">Location</th>
															<th scope="col" class="text-center">Action</th>
														</tr>
													</thead> 
													<tbody>
														<tr>
															<td>1766</td>
															<td>Biazo Annex Motowo</td>
															<td>Cameroon</td>
															<td>Limbe New Town Motowoh</td>
															<td>Located just befor the motowoh Tolgate by the left</td>
															<td class="text-center">
																<a href="edit_branch.php">
																	<button type="delete" class="btn btn-primary">
																		<i class="align-middle" data-feather="edit"></i>
																	</button>
																</a>
																<button type="delete" class="btn btn-danger">
																	<i class="align-middle" data-feather="trash-2"></i>
																</button>
															</td>
														</tr>
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
			</div>
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
