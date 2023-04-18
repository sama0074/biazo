
<?php 

include "includes/header.php";

?>

<section class="text-center" style="margin-top: 20px">
    <div class="container" style="max-width: 445px;">
        <img src="assets/images/logo/logo.png" style="width: 100px" alt="">

        
        <div class="heading-text" style="margin-top:20px">
            <p style="font-weight: 600; font-size: 18px">Sign in to your OHIPSfesh account</p >
        </div>
        <div class="fields">
            <input type="number" placeholder="Phone number" name="" class="signfields">
        </div>
        <div class="fields">
            <input type="password" placeholder="Password" name="" class="signfields">
        </div>
        <div class="pwforget">
            <a style="text-decoration: underline; color: black" href="#forgetPW ">Forgot password?</a>
        </div>
        <br><br>
        <div class="form-check" style="float: left">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                <b>Keep me signed in</b>
            </label>
        </div><br>
        <p style="float: left; font-weight: 300">Uncheck if using a public device.</p>
        <br><br>
        <input type="submit" class="signinbtn" name="" value="Sign in">
        <hr>
        <p>Don't have an account?</p>
        <a href="signup.php"><input type="submit" class="signupbtn" name="" value="Creat account"></a>
    </div>
</section>




<?php
    include "includes/login-logout-footer.php" ;
?>