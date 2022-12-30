<?php
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?> 
	
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Editing <i>Pink exotic ladies blouse for ladies who are under 30 years</i></h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div>
					<div class="card-body">
						<form action="products.php" method="GET">
							<div class="container-fluid">
								<div class="main-checkout-div">
									<div class="row">
										<div class="col col-md-8">
											<div class="card" style="border-radius: 20px; border: none;">
												<div class="card-content">
													<div class="card-body">
														<div class="cdk-p-heading">
															<h2>Edit Product Details</h2>
														</div>
														<div class="row" style="margin-bottom: 30px">
															<div class="col col-md-6">
																<label for="pname">Full Name of Product <span style="color: red">*</span></label>
																<input type="text" name="pname" class="form-control" placeholder="e.g Pink exotic ladies blouse for ladies who are under 30 years" required>
															</div>
															<div class="col col-md-6">
																<label for="catName">Product Category <span style="color: red">*</span></label>
																<select type="text" name="catName" class="form-control" required>
																	<option selected disabled >Select Category</option>
																	<option value="Female Blouse">Female Blouse</option>
																	<option value="Men Shoe">Men Shoe</option>
																	<option value="Baby's Dress">Baby's Dress</option>
																</select>
															</div>
														</div>
														<div class="row" style="margin-bottom: 30px">
															<div class="col col-md-3">
																<label for="brand">Brand Name<span style="color: red">*</span></label>
																<Select type="text" name="brand" class="form-control" required>
																	<option selected disabled >Select Brand</option>
																	<option value="Female Blouse">Gucci</option>
																	<option value="Men Shoe">D&G</option>
																	<option value="Baby's Dress">Luis Vuitton</option>
																</select>
															</div>
															<div class="col col-md-5">
																<label for="date">Date Created<span style="color: red"> *</span></label>
																<input type="text" name="date" class="form-control" value="<?php echo date("l d M Y");?>" Readonly>
															</div>
															<div class="col col-md-4">
																<label for="date">Size<span style="color: red"> *</span></label>
																<input type="text" name="date" class="form-control" placeholder="e.g XXL" required>
															</div>
														</div>

														<div class="row" style="margin-bottom: 30px">
															<div class="col col-md-6">
																<label for="pPrice">Purchase Price</label>
																<input type="number" name="pPrice" class="form-control" placeholder="e.g 20000" required>
															</div>
															<div class="col col-md-6">
																<label for="sPrice">Sales Price<span style="color: red"> *</span></label>
																<input type="number" name="sPrice" class="form-control" placeholder="e.g 25000" required>
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
																<label for="prodDescr">Product Description<span style="color: red"></span></label>
																<textarea name="prodDescr" id=""  cols="30" rows="3" placeholder="Give a short descripton about this product" class="form-control"></textarea>
															</div>
															<div class="col col-md-6">
																<label for="expDate">Expiry Date (Optional)<span style="color: red"> </span></label>
																<input type="date" name="expDate" class="form-control" placeholder="">
															</div>
															<div class="note" style="text-indent: 20px; color: red">
																<small>Please verify that all information entered above are correct.</small>
															</div>
														</div>

														<div class="row" style="margin-bottom: 30px">
															<div class="col col-md-6">
																<label for="fname">Upload other images. You can select more than one</label>
																<input type="file" multiple >
															</div>
														</div>
													</div>
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
																	<div class="avatar-container">
																		<div class="avatar-upload">
																			<div class="avatar-edit">
																				<input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required />
																				<label for="imageUpload"></label>
																			</div>
																			<div class="avatar-preview">
																				<div id="imagePreview" style="background-image: ">
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
										<div class="text-center">
											<input type="submit" class="btn btn-success" value="Update">
										</div>
									</div>
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
