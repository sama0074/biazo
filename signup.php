
<?php 

include "includes/header.php";

?>

<section class="text-center" style="margin-top: 20px">
    <div class="container" style="max-width: 445px;">
        <img src="assets/images/logo/logo.png" style="width: 100px" alt="">

        
        <div class="heading-text" style="margin-top:20px">
            <p style="font-weight: 600; font-size: 18px">Create your OHIPSfesh account</p >
        </div>
        <div class="fields">
            <input type="text" placeholder="First name" name="fname" class="signfields">
        </div>
        <div class="fields">
            <input type="text" placeholder="Last name" name="lname" class="signfields">
        </div>
        <div class="fields">
            <input type="number" placeholder="Phone number" name="lname" class="signfields">
        </div>
        <div class="fields">
            <input type="password" placeholder="Password" name="" class="signfields">
        </div>
        <div class="fields">
            <input type="password" placeholder="Repeat password" name="" class="signfields">
        </div>
        
        <div class="form-check" style="float: left">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                <b>Keep me signed in</b>
            </label>
        </div><br>
        <p style="float: left; font-weight: 300">Uncheck if using a public device.</p>
        <br><br>

        <p style="float: left; font-weight: 400">
            By clicking Create Account, you acknowledge you have read and agreed to our <a href="" style="text-decoration: underline">Terms of Use</a> and <a href="" style="text-decoration: underline">Privacy Policy</a>.
        </p>

        <input type="submit" class="signinbtn" name="" value="Creat account">
        <hr>
        <p>Already have an account?</p>
        <a href="login.php"><input type="submit" class="signupbtn" name="" value="Sign in"></a>
    </div>
    <br><br><br>
</section>


<?php
    include "includes/login-logout-footer.php" ;
?>