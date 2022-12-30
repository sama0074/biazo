<?php
	    session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: auth-login.php");
        }
        include "includes/head.php";
        include "includes/sidebar.php";
    
        include 'database/config2.php';

        $trans_id = $_GET['transID'];
        $customer_number = $_GET['cnumber'];
        $date = $_GET['date'];
        $total_amount = $_GET['amount'];
        $message = "Thanks for your purchase today $date at Biazo. Your order No is $trans_id and total amount is $total_amount Frs. Paid in full";

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
                                        <P style="font-size:20px">Transaction No <b><?php echo $trans_id;?></b> has been successfuly processed at the amount <b><?php echo $total_amount;?>frs</b>.</P>
                                        <P style="font-size:20px"><button class="button" onclick="fetch();">Click</button> here to go to message customer or 
                                            <a style="text-decoration:underline" href="index.php?salesresult=">Click</a> here to sell again.
                                        </P>
                                    </div>
                                    <!--Displaying these contents only if purchase history is empty-->
                                    <ul class="messages">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>





<script>

	function fetch(){
		$.ajax({
			url: "http://api.foseintsms.com/api_bulk.php?username=Ohipopo&password=29036&message=<?php echo $message;?>&telephone=<?php echo $customer_number; ?>",
			type: "GET",
			dataType: "JSON",
			data: JSON.stringify({}),
			success:function(data){
				$('.messages').append("<li class='alert alert-success'>"+JSON.stringify(data)+"</li>")
			}
		});

	}
</script>
<?php
	include "includes/footer.php";
?> 
