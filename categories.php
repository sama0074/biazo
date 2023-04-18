<?php 

    include "includes/header.php";
    include "includes/menu.php";
    include "includes/sub_menu.php";

?>
    <section>
        <div class="container-fluid">
            <div class="head-departments">
                <ul class="deItems" style="list-style: none">
                    <li><a href="#"><i class="fas fa-drumstick-bite"></i> Fast Food</a></li>
                    <li><a href="#"><i class="fas fa-dumpster-fire"></i> Order a Pot of Soup</a></li>
                    <li><a href="#"><i class="fas fa-plane-departure"></i> Export Food</a></li>
                    <li><a href="#"><i class="fas fa-utensils"></i> Recipe</a></li>
                    <li><a href="#"><i class="fas fa-store"></i> Whole Sale Store</a></li>
                    
                </ul>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="head-category ">
            <div class="cat">
                 <a href="categories.php">Fruits</a>
                 <a href="categories.php">Vegetables</a>
                 <a href="categories.php">Fish</a>
                 <a href="categories.php">Meat</a>
                 <a href="categories.php">Paultry</a>
                 <a href="categories.php">Beverages</a>
                 <a href="categories.php">Food Stuff</a>
                 <a href="categories.php">Drinks</a>
                 <a href="categories.php">Snacks</a>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid">
            <div class="row">
                <!--Section for Categories Filter Starts -->
                <div class="col col-md-3">
                    <p style="position: absolute; padding: 20px; color: black; font-size: 13px; font-weight: 100;">Ads</p>
                    <div class="framing text-center slideshow-container ">
                        <div class="mySlides fade">
                            <img src="assets/images/img/banner.jpg" style="width: 100%" alt="">
                        </div>

                        <div class="mySlides fade">
                            <img src="assets/images/img/banner2.jpg" style="width: 100%" alt="">
                        </div>

                        <div class="mySlides fade">
                             <img src="assets/images/img/banner3.jpg" style="width: 100%" alt="">
                        </div>

                        <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                        </div>
                    </div>
                </div>
                <!--Section for Categories Filter Ends -->

                <!--Section for Categories Products Starts -->
                <div class="col col-md-9">
                        <div class="cat_info">
                            <div class="cat_name">
                                <h3>Fresh Vegetables (153)</h3>
                            </div>
                            <div class="cat_sorting" style="float: right; margin-top: -45px;">
                                <form action="#search" method="GET" style="color: black; font-weight: 700;">
                                    <b>Sort by</b> | 
                                    <select class="sortby" name="" id="">
                                        <option value="All">All</option>
                                        <option value="Most Sold">Most Sold</option>
                                        <option value="Price: High to Low">Price: High to Low</option>
                                        <option value="Price: Low to High">Price: Low to High</option>
                                    </select>
                                    <input type="submit" value="Go" class="filter">
                                </form>
                            </div>
                        </div>
                    <div class="row" style="margin-bottom: 18px">
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/greenpepper.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Organic fresh green peppers</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/redonions.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Red Organic Onions</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/ginger.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>African Ginger Root</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>25frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/meat.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Cow Meat (Vain)</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Product Sold in Kilo <strong>1500frs/K</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" min="1" size="50" placeholder="How many?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row" style="margin-bottom: 18px">
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/greenpepper.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Organic fresh green peppers</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/redonions.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Red Organic Onions</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/ginger.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>African Ginger Root</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>25frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/meat.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Cow Meat (Vain)</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Product Sold in Kilo <strong>1500frs/K</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" min="1" size="50" placeholder="How many?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row" style="margin-bottom: 18px">
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/greenpepper.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Organic fresh green peppers</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/redonions.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Red Organic Onions</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/ginger.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>African Ginger Root</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>25frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/meat.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Cow Meat (Vain)</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Product Sold in Kilo <strong>1500frs/K</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" min="1" size="50" placeholder="How many?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row" style="margin-bottom: 18px">
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/greenpepper.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Organic fresh green peppers</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/redonions.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Red Organic Onions</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/ginger.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>African Ginger Root</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>25frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/meat.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Cow Meat (Vain)</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Product Sold in Kilo <strong>1500frs/K</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" min="1" size="50" placeholder="How many?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row" style="margin-bottom: 18px">
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/greenpepper.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Organic fresh green peppers</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/redonions.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Red Organic Onions</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/ginger.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>African Ginger Root</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>25frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/meat.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Cow Meat (Vain)</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Product Sold in Kilo <strong>1500frs/K</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" min="1" size="50" placeholder="How many?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row" style="margin-bottom: 18px">
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/greenpepper.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Organic fresh green peppers</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/redonions.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Red Organic Onions</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/ginger.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>African Ginger Root</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>25frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/meat.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Cow Meat (Vain)</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Product Sold in Kilo <strong>1500frs/K</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" min="1" size="50" placeholder="How many?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row" style="margin-bottom: 18px">
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/greenpepper.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Organic fresh green peppers</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/redonions.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Red Organic Onions</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(56)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/ginger.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>African Ginger Root</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Min. Price per product <strong>25frs</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col col-sm-3">
                            <div class="itemCard">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#AddToCasket" methos="GET">
                                            <a class="prd" href="product.php">

                                                <div class="prdImg">
                                                    <img src="assets/images/products/meat.png" style="max-width: 100%; margin: auto" alt="green pepper">
                                                </div>
                                                <div class="prdName">
                                                    <p>Cow Meat (Vain)</p>
                                                    <div class="ratings">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="ratingCnt">(14505)</span>
                                                    </div>
                                                </div>

                                                <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                                    <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                                </div>

                                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                                    <em>Product Sold in Kilo <strong>1500frs/K</strong></em> 
                                                </div>

                                                <div class="addTobasketBtn">
                                                    <input class="prcInput" type="number" minlength="1" min="1" size="50" placeholder="How many?">
                                                    <button class="texts" type="submit">
                                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Section for Categories Products Ends -->

            </div>
        </div>
    </section>

<?php
    include "includes/footer.php" ;
?>