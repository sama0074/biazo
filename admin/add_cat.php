<?php
 session_start();

 if (!isset($_SESSION['username'])) {
     header("Location: auth-login.php");
 }
 include "includes/head.php";
 include "includes/sidebar.php";

 include 'database/config2.php';

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Add Product Categories</h1>
		<?php 
		
			if($_GET['result'] == 'success'){
				echo "<div class='alert alert-success'>Success</div> <br>";
			}else{
				if($_GET['result'] == 'failed'){
					echo "<div class='alert alert-danger'>Sorry!! An Error occured</div> <br>";
				}
			}

			if($_GET['result'] == ''){
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
						<div class="container-fluid">
							<div class="row">
								<div class="col col-md-5">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5><i class="fas fa-list"></i> Add Categories</h5></div>
											<div class="card-body">
												<form action="includes/server.php" method="POST">
													<div class="row">
														<div class="col col-sm-12">
															<input type="text" name="cat_name" placeholder="Category Name" required class="form-control">
														</div>
													</div>
													<br>
													<div class="text-center">
														<button name="create_cat" type="submit" class="btn btn-success">Add</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="col col-md-7">
									<div class="homeCard">
										<div class="card-content">
											<div class="card-header"><h5><i class="fas fa-list"></i> All Categories</h5></div>
											<div class="card-body">
												<table id="table" class="table table-bordered table-striped">
													<thead>
														<tr>
															<th scope="col">#</th>
															<th scope="col">Name</th>
															<th scope="col">Items</th>
															<th scope="col" class="text-center">Action</th>
														</tr>
													</thead> 
													<tbody>
													<?php

														$cat_query_select = "SELECT * FROM categories ";
														$cat_stm_select = $conn->prepare($cat_query_select);
														$cat_stm_select->execute();

														


														while($select = $cat_stm_select->fetch(PDO::FETCH_ASSOC)){

															$verify = $select['cat_name'];

															

															$cat_query_counting = "SELECT * FROM products WHERE category = '$verify'";
															$cat_stm_counting = $conn->prepare($cat_query_counting);
															$cat_stm_counting->execute();
															$counting = $cat_stm_counting->rowCount();

															echo "
															
															<tr>
																<td>{$select['id']}</td>
																<td>{$select['cat_name']}</td>
																<td>{$counting}</td>
																<td class='text-center'>
																	<a href='edit_cat.php?id={$select['id']}'>
																		<button type='delete' class='btn btn-primary'>
																			<i class='align-middle' data-feather='edit'></i>
																		</button>
																	</a>
																	<a href='delete_cat.php?id={$select['id']}'>
																		<button type='delete' class='btn btn-danger'>
																			<i class='align-middle' data-feather='trash-2'></i>
																		</button>
																	</a>
																</td>
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
			</div>
		</div>

	</div>
</main>

<?php
	include "includes/footer.php";
?> 
