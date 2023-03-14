<?php
	    session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: auth-login.php");
        }
        include "includes/head.php";
        include "includes/sidebar.php";
    
        include 'database/config2.php';

        $to_number = htmlspecialchars(strip_tags($_POST['c_number']));
        $to_name = htmlspecialchars(strip_tags($_POST['c_name']));
        $message = htmlspecialchars(strip_tags($_POST['message']));

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
                                        <img src="img/icons/question_mark_serious_thinker_300_wht.gif" style="width: 200px; margin-bottom: 20px" alt="basket">
                                        <h1 class="text-warning" style="font-size:60px">CONFIRMATION!!!</h1>
                                        <P style="font-size:20px">Are you sure you want to send the message "<b><?php echo $message;?></b>" to <b><?php echo $to_name;?></b>?</P>
                                        <button class="button" onclick="fetch();">Send</button>
                                        <button class="button"onclick="history.back()">Go Back</button>
                                          
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
			url: "http://api.foseintsms.com/api_bulk.php?username=Ohipopo&password=29036&message=<?php echo $message;?>&telephone=<?php echo $to_number; ?>",
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
