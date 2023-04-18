<?php 

    include "includes/header.php";
    include "includes/menu.php";
    include "includes/sub_menu.php";

?>


<section>
    <div class="container">
        <div class="row">
            <div class="col col-md-12 acc_header">
                <h2 style="margin-bottom:50px"></h2>
                <!--Displaying these contents only if purchase history is empty-->
                <div class="contents text-center" style="margin-top: -60px">
                    <img src="assets/images/img/thanksbigbasket.png" style="width: 200px; margin-bottom: 20px" alt="basket">
                    <h2>Sama thank you!!</h2>
                    <small>Your order No <b>#29247</b> has been received! it is being processed to be delivered to you.</small><br>
                    <small><a href="account.php" style="text-decoration:underline">Click</a> here to go to your dashboard or 
                        <a style="text-decoration:underline" href="index.php">Click</a> here to shop again.
                    </small>
                </div>
                <!--Displaying these contents only if purchase history is empty-->
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 70px">
    <div class="container text-center">
        <h3 style="font-weight: 300">Help us do better</h3>
        <small>Please tell us about your shopping experience so we can serve you better.</small>

        <div class="row" style="margin-top: 40px">
            <div class="col col-md-6">
                <div class="heading">
                    <h3>Overall customer reviews & ratings</h3>
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
                </div>

            </div>
            <div class="col col-md-6">
                <div class="rating_progress">
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
    </div>
    
</section>


<?php
    include "includes/footer.php" ;
?>