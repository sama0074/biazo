<?php 

    include "includes/header.php";
    include "includes/menu.php";
    include "includes/sub_menu.php";

?>

<section>
    <div class="container" style="margin-top:15px">
        <div class="thread">
            Store / Seasonal Grocery / Gametime Food
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col col-md-2">
                <div class="pdp-image-gallery-block">
                    <!-- Gallery  Thumbnail Images-->
                    <div class="gallery_pdp_container">
                        <div id="gallery_pdp">
                            <a href="#" data-image="assets/images/small/image1.png" data-zoom-image="assets/images/large/image1.jpg">
                                <img id="" src="assets/images/thumb/image1.jpg" />
                            </a>
                            <a href="#" data-image="assets/images/small/image2.png" data-zoom-image="assets/images/large/image2.jpg">
                                <img id="" src="assets/images/thumb/image2.jpg" />
                            </a>
                            <a href="#" data-image="assets/images/small/image3.png" data-zoom-image="assets/images/large/image3.jpg">
                                <img id="" src="assets/images/thumb/image3.jpg" />
                            </a>
                            <a href="#" data-image="assets/images/small/image4.png" data-zoom-image="assets/images/large/image4.jpg">
                                <img id="" src="assets/images/thumb/image4.jpg" />
                            </a>
                            <a href="#" data-image="assets/images/small/image1.png" data-zoom-image="assets/images/large/image1.jpg">
                                <img id="" src="assets/images/thumb/image1.jpg" />
                            </a>
                            <a href="#" data-image="assets/images/small/image2.png" data-zoom-image="assets/images/large/image2.jpg">
                                <img id="" src="assets/images/thumb/image2.jpg" />
                            </a>
                            <a href="#" data-image="assets/images/small/image3.png" data-zoom-image="assets/images/large/image3.jpg">
                                <img id="" src="assets/images/thumb/image3.jpg" />
                            </a>
                            <a href="#" data-image="assets/images/small/image4.png" data-zoom-image="assets/images/large/image4.jpg">
                                <img id="" src="assets/images/thumb/image4.jpg" />
                            </a>
                        </div>
                        <!-- Up and down button for vertical carousel -->
                        <a href="#" id="ui-carousel-next" style="display: inline;"></a>
                        <a href="#" id="ui-carousel-prev" style="display: inline;"></a>
                    </div>

                    <!-- Gallery -->

                    <!-- gallery Viewer -->
                </div>
            </div>


            <div class="col col-md-7">
                <!-- gallery Viewer medium image -->
                <div class="gallery-viewer">
                    <img id="zoom_10" style="min-width: 650px; margin-top: 0px;" src="assets/images/small/image1.png" data-zoom-image="assets/images/large/image1.jpg" />
                </div>

                <div id="enlarge_gallery_pdp">
                    <div class="enl_butt">
                        <a class="enl_but enl_fclose" title="Close"></a>
                        <a class="enl_but enl_fright" title="Next"></a>
                        <a class="enl_but enl_fleft" title="Prev"></a>
                    </div>
                    <div class="mega_enl"></div>
                </div>
            </div>


            <div class="col col-md-3">
                <div class="prd-short-describtion">
                    <div class="card" style="box-shadow: 5px 10px 18px #dfffde; border-radius: 10px;">
                        <div class="card-content slideshow-container">
                            <div class="card-body">
                                <div class="head-desc" style="line-height: 2.2; ">
                                    <a href="#" style="color:gray">Vegetables</a>
                                    <div class="prd-title">
                                        <h4>Fresh Green Organic Pepper</h4>
                                    </div>
                                    <div class="ratings">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="ratingCnt">(4.0) <a href="#reviews" style="font-size:11px; text-decoration: underline; color: gray">20 Reviews</a></span>
                                    </div>
                                    <div class="prdShortDesc" style="color: #666666; margin-top:10px">
                                        <i class="fas fa-truck-moving"></i> Standard Delivary: Arrives Tomorrow
                                    </div>
                                </div>
                                <em>
                                    <p style="font-size: 15px; color: gray">
                                     The mild-flavoured unripe fruit of a sweet pepper, which may be eaten raw or cooked.
                                     Alternate Names: Green pepper, red pepper, sweet bell pepper, capsicum.
                                    </p>
                                </em>
                                <hr>
                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                </div>

                                <div class="addTobasketBtn">
                                    <input class="prcInput" type="number" minlength="1" size="50" style="width: 75%; border-radius: 20px; padding-left: 15px" placeholder="How much?">
                                    <br> <br>
                                    <a href="basket.php">
                                        <button class="texts text-center" type="submit" style="border-radius: 20px !important; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 10px">
                                         <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<section>


<section>
    <div class="container" style="">
        <h5 style="margin-top: 25px">Similar items you might like</h5>
        <div class="row">
            <div class="col col-md-12">
                <div class="row">
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

        </div>
        
    </div>
</section>

<section>
    <div class="container" style="margin-top: 40px; ">
        <div class="row">
            <div class="col col-md-9">
                <div class="prd_info">
                    <div class="prd_info_title">
                        <h3>About this item</h3>
                    </div>
                    <hr>
                    <button class="accordion">Nutrition information</button>
                    <div class="panel">
                    <div class="card" style="margin:18px; border-radius: 10px; box-shadow: 0px 10px 13px #bbbbbb">
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    <h2>Nutrition facts</h2>
                                    Refer to the product label for full dietary information, which may be available as an alternative product image.
                                        <br>
                                    1 servings per container
                                        <br>
                                    Serving Size
                                    12
                                        <br>
                                    Amount per serving <br>
                                    Calories <br>
                                    70 <br>
                                    Amount per serving	% Daily Value* <br>
                                    Total Fat 0g	0% <br>
                                    Sodium 0.0mg	0% <br>
                                    Total Carbohydrate 16g	6% <br>
                                    Sugars16g	31% <br>
                                    Protein 0g	 <br>
                                    * The % Daily Value (DV) tells you how much a nutrient in a serving of food contributes to a daily diet. <br>

                                    Calories per gram: <br>

                                    Fat 9 • Carbohydrate 4 • Protein 4
                                    </p>
                            </div>
                        </div>
                    </div>
                    </div>

                    <button class="accordion">Product details</button>
                    <div class="panel">
                        <div class="card" style="margin:18px; border-radius: 10px; box-shadow: 0px 10px 13px #bbbbbb">
                            <div class="card-content">
                                <div class="card-body">
                                    <p>
                                    Product details

                                    Following our Passion to discover the most refreshing iced tea led us straight to a lush, tropical paradise in this vibrant herbal infusion of hibiscus, orange peel and cinnamon. Pour your Passion over ice for a cool, refreshing escape.
                                    A vibrant herbal infusion of hibiscus, orange peel and cinnamon
                                    Caffeine free
                                    USDA Certified Organic
                                    100% recycled bottle
                                    We aim to show you accurate product information. Manufacturers, suppliers and others provide what you see here, and we have not verified it.  See our disclaimer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion">Specifications</button>
                    <div class="panel">
                        <div class="card" style="margin:18px; border-radius: 10px; box-shadow: 0px 10px 13px #bbbbbb">
                            <div class="card-content">
                                <div class="card-body">
                                    <p>
                                        Brand <br>
                                        TAZO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion">Ingredients</button>
                    <div class="panel">
                        <div class="card" style="margin:18px; border-radius: 10px; box-shadow: 0px 10px 13px #bbbbbb">
                            <div class="card-content">
                                <div class="card-body">
                                    <p>
                                    Ingredients
                                        <br>
                                    Ingredients
                                    TEA INFUSION (WATER, ORGANIC HIBISCUS FLOWERS, ORGANIC ORANGE PEEL, ORGANIC CINNAMON), ORGANIC CANE SUGAR, ORGANIC NATURAL FLAVOR, CITRIC ACID.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                
                </div>

                <div class="report" style="margin-top:18px">
                    <a href="#" style="color: gray; text-decoration: underline"><i class="far fa-flag"></i> Report incorrect product information</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col col-md-9">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="heading" style="margin-bottom: 30px">
                            <h3>Customer Reviews & ratings</h3>
                        </div>
                        <div class="main_rating">
                            <p><span class="rate">4.1</span><span style="font-weight: 700; font-size:1.5rem">out of</span><span class="rate">5</span> </p>
                        </div>
                        <div class="ratings">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="ratingCnt"><a href="#reviews" style="font-size:11px; text-decoration: underline; color: gray">20 Reviews</a></span>
                        </div>
                        
                        <div class="reviewActions">
                            <a href="#" class="view_reviews">
                                See all reviews
                            </a>
                            <a href="#" class="write_reviews">
                                Write a reviews
                            </a>
                        </div>

                    </div>
                    <div class="col col-md-6">
                        <div class="rating_progress" style="margin-top: 70px">
                            <h4>Leave your review</h4>
                            <form action="#review" method="POST">
                                <select name="" id="" class="form-control" required>
                                    <option value="" selected disabled>Select a rating</option>
                                    <option value="5">5 Star</option>
                                    <option value="4">4 Star</option>
                                    <option value="3">3 Star</option>
                                    <option value="2">2 Star</option>
                                    <option value="1">1 Star</option>
                                </select>
                                <input type="text" style="margin-top:20px;" placeholder="Heading" class="form-control" required>
                                <textarea required style="margin-top:20px; margin-bottom:5px" class="form-control" name="" id="" cols="30" rows="3" placeholder="Please write your review here!!"></textarea>
                                <input type="submit" class="btn btn-warning" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            <hr>
            </div>
            <div class="col col-md-3"></div>

            <!--List of All reviews-->
            
            <div class="row">
                <div class="col col-md-9">
                    <div class="row">
                        <div class="col col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="ratings" style="margin-bottom:15px">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                         </div>
                                        <div class="rate_heading">
                                            <h5>Very good product</h5>
                                        </div>
                                        <div class="rate_body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus est ipsa perferendis, ullam labore laudantium voluptas harum repudiandae debitis amet incidunt laborum quam atque. Quia inventore assumenda incidunt voluptatum tenetur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="ratings" style="margin-bottom:15px">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                         </div>
                                        <div class="rate_heading">
                                            <h5>Very good product</h5>
                                        </div>
                                        <div class="rate_body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus est ipsa perferendis, ullam labore laudantium voluptas harum repudiandae debitis amet incidunt laborum quam atque. Quia inventore assumenda incidunt voluptatum tenetur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="ratings" style="margin-bottom:15px">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                         </div>
                                        <div class="rate_heading">
                                            <h5>Very good product</h5>
                                        </div>
                                        <div class="rate_body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus est ipsa perferendis, ullam labore laudantium voluptas harum repudiandae debitis amet incidunt laborum quam atque. Quia inventore assumenda incidunt voluptatum tenetur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3"></div>
            </div>
            <!--List of All reviews ENDS-->
        </div>
    </div>
</section>



<section>
    <div class="container" style="">
        <h5 style="margin-top: 25px">More items to consider</h5>
        <div class="row">
            <div class="col col-md-12">
                <div class="row">
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

        </div>
        
    </div>
</section>




<?php
    include "includes/footer.php" ;
?>