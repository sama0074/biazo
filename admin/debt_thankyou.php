<?php
	include "includes/head.php";
	include "includes/sidebar.php";
	include "includes/header.php";

?> 
	
<main class="content">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						
					</div>
					<div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-12 acc_header">
                                    <h2 style="margin-bottom:50px"></h2>
                                    <!--Displaying these contents only if purchase history is empty-->
                                    <div class="contents text-center" style="margin-top: -60px">
                                        <img src="img/img/bigbaske.png" style="width: 200px; margin-bottom: 20px" alt="basket">
                                        <h1 class="text-success" style="font-size:60px">Success!!</h1>
                                        <P style="font-size:20px">Debt No <b>#29247</b> has been successfuly processed at the amount <b>30250frs</b>.</P>
                                        <P style="font-size:20px"><a href="#" style="text-decoration:underline">Click</a> here to go to message customer or 
                                            <a style="text-decoration:underline" href="sales.php">Click</a> here to sell.
                                        </P>
                                    </div>
                                    <!--Displaying these contents only if purchase history is empty-->
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
