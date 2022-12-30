<?php 

	include 'database/config.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: auth-login.php");
    }

	$previous = "javascript:history.go(-2)";
	if(isset($_SERVER['HTTP_REFERER'])) {
		$previous = $_SERVER['HTTP_REFERER'];
	}
    include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?>


<main class="content">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<div class="">
					<div class="card-header">
					</div>
					<div class="card-body">
                        <div id="loader"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-3"></div>
                                <div class="col col-md-6">
                                    <div class="homeCard" >
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="img/ok.gif" alt="Success" width="250">
                                                </div>
                                            </div>
                                            <div>
                                                <p class="successHeader text-center">Congratulations!!!</p>
                                                <p class="successText text-center">It was a success</p>
                                                <div style="width: 15%; margin: auto;">
                                                    <a href="<?= $previous ?>"><input type="button" class="btn btn-success successBtn" value="Go back"></a>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-3"></div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<script>
    var myVars;

    function myFunctioning() {
    myVars = setTimeout(showPage, 3000);
    }

    function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDivs").style.display = "block";
    }
</script>


<?php
	include "includes/footer.php";
?> 