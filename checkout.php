<?php 

    include "includes/header.php";
    include "includes/menu.php";
    include "includes/sub_menu.php";

?>
    <section>
        <div class="checkout_page_call2action">
            <div class="container">
                <div class="row">
                    <div class="col col-md-7"></div>
                    <div class="col col-md-5">
                        <a href="checkout.php" class="continue_buying">Continue Buying</a>
                        <a href="basket.php" class="checkout_btn">Update Shopping Basket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container" style="max-width: 1300px">
            <div class="main-checkout-div" style="margin-top: 70px">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="card" style="border-radius: 20px; border: none;">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="cdk-p-heading">
                                        <h2>Personal Information    </h2>
                                    </div>
                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-6">
                                            <label for="fname">First Name <span style="color: red">*</span></label>
                                            <input type="text" name="fname" class="form-control" placeholder="e.g Sama" required>
                                        </div>
                                        <div class="col col-md-6">
                                            <label for="lname">Last Name <span style="color: red">*</span></label>
                                            <input type="text" name="lname" class="form-control" placeholder="e.g Yanick" required>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-2">
                                            <label for="fname">Phone<span style="color: red">*</span></label>
                                            <input type="text" name="fname" class="form-control" placeholder="+237" readonly>
                                        </div>
                                        <div class="col col-md-10">
                                            <label for="lname"><span style="color: white">*</span></label>
                                            <input type="number" name="lname" class="form-control" placeholder="e.g 653 766 939" required>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-2">
                                            <label for="fname">Phone 2</label>
                                            <input type="text" name="fname" class="form-control" placeholder="+237" readonly>
                                        </div>
                                        <div class="col col-md-10">
                                            <label for="lname"><span style="color: white">*</span></label>
                                            <input type="number" name="lname" class="form-control" placeholder="e.g 653 766 939">
                                        </div>
                                    </div>

                                    <div class="password">
                                        <div class="row" style="margin-bottom: 30px">
                                            <div class="col col-md-6">
                                                <label for="fname">Password<span style="color: red">*</span></label>
                                                <input type="password" name="fname" class="form-control" placeholder="" required> 
                                            </div>
                                            <div class="col col-md-6">
                                                <label for="lname">Repeat Password<span style="color: red">*</span></label>
                                                <input type="password" name="lname" class="form-control" placeholder="" required>
                                            </div>
                                            <div class="note" style="text-indent: 20px; color: red">
                                                <small>Your <b>phone number</b> and <b>password</b> will be your login details when shopping the next time!</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-6">
                                            <label for="fname">Main Address<span style="color: red">*</span></label>
                                            <textarea name="" id="" required cols="30" rows="3" placeholder="Street Name / Building / Apartment No / Floor etc" class="form-control"></textarea>
                                        </div>
                                        <div class="col col-md-6">
                                            <label for="lname">More Description<span style="color: red">*</span></label>
                                            <textarea name="" id="" required cols="30" rows="3" placeholder="Popular Name Around / Direction / More Details / House Color etc" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col col-md-6">
                                            <label for="fname">Upload image of house, compound etc..</label>
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
                                                <h2>Order Summary</h2>
                                            </div>
                                            <hr>
                                            <div class="row">
                                            <div class="col col-md-3"> <strong>Subtotal</strong></div>
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
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 25px">
                            <div class="col col-lg-12">
                                <div class="card" style="border-radius: 20px; border: none;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="cdk-p-heading">
                                                <h4>Place Order</h4>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col col-md-6">
                                                    <div>
                                                        <h3>30,250 Frs</h3>
                                                    </div>
                                                </div>
                                                <div class="col col-md-6">
                                                    <a href="thankyou.php">
                                                        <button class="texts text-center" type="submit" style="border-radius: 20px !important; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 10px">
                                                            <strong>PLACE ORDER</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 25px">
                            <div class="col col-lg-12">
                                <p style="position: absolute; padding: 20px; color: black; font-size: 13px; font-weight: 100;">Ads</p>
                                <div class="text-center slideshow-container">
                                    <div class="mySlides fade">
                                        <img src="assets/images/img/banner.jpg" style="width: 100%; border-radius:20px; max-height:400px" alt="">
                                    </div>

                                    <div class="mySlides fade">
                                        <img src="assets/images/img/banner2.jpg" style="width: 100%; border-radius:20px; max-height:400px" alt="">
                                    </div>

                                    <div class="mySlides fade">
                                        <img src="assets/images/img/banner3.jpg" style="width: 100%; border-radius:20px; max-height:400px" alt="">
                                    </div>

                                    <div style="text-align:center">
                                        <span class="dot"></span> 
                                        <span class="dot"></span> 
                                        <span class="dot"></span> 
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