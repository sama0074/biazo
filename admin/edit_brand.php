<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: auth-login.php");
	}
	include "includes/head.php";
	include "includes/sidebar.php";

	include 'database/config2.php';

	$get_id = $_GET['id'];
	$cat_query_select = "SELECT * FROM brands WHERE id = $get_id";
	$cat_stm_select = $conn->prepare($cat_query_select);
	$cat_stm_select->execute();
	$select = $cat_stm_select->fetch(PDO::FETCH_ASSOC);

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Editing <b><?php echo $select['brand_name']?></b> Brand</h1>

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
											<div class="card-header"><h5><i class="fas fa-list"></i> Edit Brand</h5></div>
											<div class="card-body">
												<form action="includes/server.php" method="POST">
													<div class="row">
														<div class="col col-sm-12">
															<input type="text" name="brand_name" value="<?php echo htmlspecialchars($select['brand_name'], ENT_QUOTES);  ?>" placeholder="Brand Name" required class="form-control">
															<input type="text" name="brand_id" placeholder="Brand Name" value="<?php echo $_GET['id']?>" required class="form-control" style="display:none">
														</div>
													</div>
													<br>
													<div class="text-center">
														<button name="edit_brand" type="submit" class="btn btn-success">Update</button>
													</div>
												</form>
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
