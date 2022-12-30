<?php
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?> 
	
<main class="content">
	<div class="container p-0">

		<h1 class="h3 mb-3">Register New Equipment</h1>

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
                                            <button name="addInventoryItem" type="submit" class="button">Register</button>
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


    <section>
        <div class="container-fluid homeCard">
            <div class="row">
            <div class="col col-md-12">
                <h1>Equipment Database</h1>
                    <div id="attendance">
                        <div class="card" style="float: left">
                            <form>
                                <div class="form-group mb-0">
                                    <div class="input-group mb-0">
                                        <input type="text" class="form-control" onkeyup="myFunction()" id="lookDpt" placeholder="Search date..." aria-describedby="project-search-addon"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="button" id="project-search-addon"><i class="fa fa-search search-icon font-12"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="toolbar" class="select" style="display: none">
                            <select class="form-control">
                                <option value="">Export Basic</option>
                                <option value="all">Export All</option>
                                <option value="selected">Export Selected</option>
                            </select>
                        </div>
                        <table id='table' class='table table-striped'
                            data-show-export='true'
                            data-show-print='true'
                            data-pagination='true'
                            data-toggle='table'
                            data-side-pagination='server'
                            data-click-to-select='true'
                            data-toolbar='#toolbar'
                            data-show-toggle='true'
                            data-show-columns='true'
                        >
                            <thead>
                                <tr>
                                    <th scope='col'>#SKU</th>
                                    <th scope='col'>Purchase Date</th>
                                    <th scope='col'>Name</th>
                                    <th scope='col'>Brand</th>
                                    <th scope='col'>Category</th>
                                    <th scope='col'>Image</th>
                                    <th scope='col'>Narration</th>
                                    <th scope='col'>Quantity</th>
                                    <th scope='col'>Cost (CFA)</th>
                                    <th scope='col'>Warranti (Yrs)</th>
                                    <th scope='col'>Action</th>
                                </tr>
                            </thead>    
                            <tbody id='myDepts'>
                                <tr>
                                    <th scope='row'></th>
                                    <td></td>
                                    <td></td>
                                    <td><span class='badge bg-success'></span></td>
                                    <td><span class='badge bg-warning'></span></td>
                                    <td>
                                        <a href='javascript: void(0);' class='team-member' data-toggle='tooltip' data-placement='top' title='' data-original-title='Neil Wing'>
                                            <img src='' class='rounded-circle avatar-xs' alt='' >
                                        </a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href='edit_fixed_assets.php' class='btn btn-primary'><i class="align-middle" data-feather="edit"></i></i></a>
                                        <button onclick='' class='btn btn-danger' id='deletusers'>
                                        <i class="align-middle" data-feather="trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </section>
</main>

<?php
	include "includes/footer.php";
?> 
