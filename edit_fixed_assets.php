<?php
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?> 
	
<main class="content">
	<div class="container p-0">

		<h1 class="h3 mb-3">Edit Equipments</h1>

		<div class="row">
			<div class="col-12">
				<div class="homeCard">
					<div class="card-body">
                        <div class="container-fluid">
                            <div class="">
                                <div class="card-body">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col col-md-4">
                                                <label for="purchaseDate">Purchase Date <span class="reqired">*</span></label>
                                                <input type="date" name="purchaseDate" max="<?php echo date('Y-m-d'); ?>" class="form-control" required>
                                            </div>
                                            <div class="col col-md-4">
                                                <label for="itemName">Item Name <span class="reqired">*</span></label>
                                                <input type="text" name="itemName" placeholder="Name of equipment" class="form-control" required>
                                            </div>
                                            <div class="col col-md-2">
                                                <label for="itembrand">Item Brand <span class="reqired">*</span></label>
                                                <select type="date" name="itembrand" class="form-control" required>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                            <div class="col col-md-2">
                                                <label for="itembrand">Category <span class="reqired">*</span></label>
                                                <select type="date" name="itemcategory" class="form-control" required>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col col-md-2">
                                                <label for="itemImage">Image</label>
                                                <input type="file" name="itemImage" class="form-control" >
                                            </div>
                                            <div class="col col-md-1">
                                                <label for="itemImage">Quantity <span class="reqired">*</span></label>
                                                <input type="number" name="itemQuantity" class="form-control" required>
                                            </div>
                                            <div class="col col-md-5">
                                                <label for="naration">Describe this item</label>
                                                <textarea cols="30" rows="3" name="itemDescription" class="form-control"></textarea>
                                            </div>
                                            <div class="col col-md-2">
                                                <label for="cost">Oririnal Cost <span class="reqired">*</span></label>
                                                <input type="number" name="itemCost" class="form-control" placeholder="Cost" required>
                                            </div>
                                            <div class="col col-md-2">
                                                <label for="Warranti">Warranti (yrs)<span class="reqired">*</span></label>
                                                <input type="number" name="itemWarranti" class="form-control" placeholder="Warranti" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button name="addInventoryItem" type="submit" class="button">Update</button>
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
</main>

<?php
	include "includes/footer.php";
?> 
