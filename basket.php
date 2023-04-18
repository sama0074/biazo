<?php 

    include "includes/header.php";
    include "includes/menu.php";
    include "includes/sub_menu.php";

?>

<section>
        <div class="container-fluid">
            <div class="head-departments">
                <ul class="deItems" style="list-style: none">
                    <li><a href="#"><i class="fas fa-drumstick-bite"></i> Order Daily Food</a></li>
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
        <div class="container">
            <div class="basket_items_count">
                <h3>Shopping basket (4 items)</h3>
                <p>OHIPSfresh Express items in your basket will be delivered for free (Limbe Town only, excluding large items)</p>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="basket_header">
                <div class="row">
                    <div class="col col-md-6" style="font-weight: 600; color: gray">ITEM</div>
                    <div class="col col-md-2 text-center" style="font-weight: 600; color: gray">QUANTITY</div>
                    <div class="col col-md-2 text-center" style="font-weight: 600; color: gray">UNIT PRICE</div>
                    <div class="col col-md-2 text-center" style="font-weight: 600; color: gray">SUBTOTAL</div>
                </div>
            </div>
            <div class="baskket_items_list">
                <div class="card" style="margin-bottom:10px">
                    <div class="card-content">
                        <div class="card-body" style="padding: 0px !important">
                            <div class="row" >
                                <div class="col col-md-6 basket_item_right_border">
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <img src="assets/images/products/greenpepper.png" style="max-width: 50px" alt="greenpepper">
                                        </div>
                                        <div class="col col-md-10">
                                            <h5>Fresh Green Organic Pepper</h5>
                                            <p>OHIPSfresh Express items in your basket will be delivered for free (Limbe Town only, excluding large items)</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-2"></div>
                                        <div class="col col-md-10">
                                            <button type="submit" class="delet_basket_item" name=""><i class="fas fa-trash-alt"></i> REMOVE</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-2 basket_item_right_border">
                                    <h6 class="text-center">1</h6>
                                </div>
                                <div class="col col-md-2 basket_item_right_border">
                                    <h6 class="text-center">75 XAF</h6>
                                </div>
                                <div class="col col-md-2" style="padding: 1.2rem">
                                    <h5 class="text-center" style="color: green">29,650 XAF</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card" style="margin-bottom:10px">
                    <div class="card-content">
                        <div class="card-body" style="padding: 0px !important">
                            <div class="row" >
                                <div class="col col-md-6 basket_item_right_border">
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <img src="assets/images/products/greenpepper.png" style="max-width: 50px" alt="greenpepper">
                                        </div>
                                        <div class="col col-md-10">
                                            <h5>Fresh Green Organic Pepper</h5>
                                            <p>OHIPSfresh Express items in your basket will be delivered for free (Limbe Town only, excluding large items)</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-2"></div>
                                        <div class="col col-md-10">
                                            <button type="submit" class="delet_basket_item" name=""><i class="fas fa-trash-alt"></i> REMOVE</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-2 basket_item_right_border">
                                    <h6 class="text-center">1</h6>
                                </div>
                                <div class="col col-md-2 basket_item_right_border">
                                    <h6 class="text-center">75 XAF</h6>
                                </div>
                                <div class="col col-md-2" style="padding: 1.2rem">
                                    <h5 class="text-center" style="color: green">29,650 XAF</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col col-md-7"></div>
                <div class="col col-md-5">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-md-3"> <strong>Subtotal</strong> </div>
                                    <div class="col col-md-6"></div>
                                    <div class="col col-md-3">29,650</div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-3"> <strong>Delivery</strong> </div>
                                    <div class="col col-md-6">
                                        <select class="" name="" id="3" style="border: none">
                                            <option selected disabled >Select Location</option>
                                            <option value="lbezn1">Limbe Town</option>
                                            <option value="lbezn2">Limbe Mile 4</option>
                                            <option value="lbezn3">Limbe Isokolo</option>
                                            <option value="lbezn4">Limbe Batoke</option>
                                            <option value="lbezn5">Limbe Man O'war Bay</option>
                                            <option value="lbezn6">Limbe Mabeta</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-3">600frs</div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-3"> <strong>Discount</strong> </div>
                                    <div class="col col-md-6"></div>
                                    <div class="col col-md-3">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gTotal">
                        <p><span class="gTotal_amt">30,250 Frs</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="checkout_call2action">
            <div class="container">
                <div class="row">
                    <div class="col col-md-7"></div>
                    <div class="col col-md-5">
                        <a href="checkout.php" class="continue_buying">Continue Buying</a>
                        <input type="submit" class="checkout_btn" value="Pay for your goods">
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php
    include "includes/footer.php" ;
?>