<?php
include '../database/config2.php';


// check if form was submitted
if(isset($_POST['addToCart'])){

    $prdID = $_GET['id'];

    $query5 = "SELECT * FROM products WHERE id = $prdID";
    $stmt5 = $conn->prepare($query5);
    $stmt5->execute();
    $somerow2 = $stmt5->fetch(PDO::FETCH_ASSOC);

    $prdPrice = $somerow2['sales_price'];
    $lastPrice = $somerow2['purchase_price'];
                                                                        
    try{

        $prd_profit = $_POST['sold_amount'] - $lastPrice;

        $query = "UPDATE products SET sold_amount=:sold_amount, profit=$prd_profit, is_cart=1 WHERE id = $prdID";

        // prepare query for execution
        $stmt = $conn->prepare($query);
                                
        // posted values
        $sold_amount=htmlspecialchars(strip_tags($_POST['sold_amount']));

        // bind the parameters
        $stmt->bindParam(':sold_amount', $sold_amount);


        $profit = $sold_amount - $lastPrice;

        // Execute the query
        if($sold_amount >= $prdPrice){

                
                if($stmt->execute()){

                    //echo "<div class='alert alert-danger'>Purchase price: $prdPrice <br> Amount Sold: $sold_amount <br> Profit: $profit <br> successful!!!</div>";
                    header("Location: ../index.php?salesresult=success");

                }
            

        }else{
            header("Location: ../index.php?salesresult=failed");
        }
        

    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}








if(isset($_POST['delete_cart'])){

    try{

        $query = "UPDATE products SET is_cart=0 ";

        // prepare query for execution
         $stmt = $conn->prepare($query);


        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Cart emptied successful!!!</div>";
            header("Location: ../index.php?salesresult=deleted");


        }else{
            header("Location: ../index.php?salesresult=Deletefailed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}




if(isset($_POST['check_out'])){

    try{

        $query = "UPDATE products SET customer_phone=:customer_phone, cash_transaction_id=:cash_transaction_id, cash_sales_date=:cash_sales_date, is_sold=1, is_cart=0 WHERE is_cart=1";

        // prepare query for execution
         $stmt = $conn->prepare($query);

          // posted values
        $customer_phone=htmlspecialchars(strip_tags($_POST['customer_phone']));
        $cash_transaction_id=htmlspecialchars(strip_tags($_POST['cash_transaction_id']));
        $cash_sales_date=htmlspecialchars(strip_tags($_POST['cash_sales_date']));
        $total=htmlspecialchars(strip_tags($_POST['total']));

        // bind the parameters
        $stmt->bindParam(':customer_phone', $customer_phone);
        $stmt->bindParam(':cash_transaction_id', $cash_transaction_id);
        $stmt->bindParam(':cash_sales_date', $cash_sales_date);


        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Cart emptied successful!!!</div>";
           // header("Location: ../thankyou.php?salesresult=success&cnumber=$customer_phone&transID=$cash_transaction_id&date=$cash_sales_date&amount=$total");


        }else{
            header("Location: ../index.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}




if (isset($_POST['create_customer'])) {
    // include database connection
    include '../database/config2.php';
 
    try{
 
        // insert query
        $query2 = "INSERT INTO customers SET c_name=:c_name, c_dob=:c_dob, c_country=:c_country, c_gender=:c_gender, 
        c_address=:c_address, c_telephone=:c_telephone, c_occupation=:c_occupation, c_picture=:c_picture, is_debtor=0 ";
        
        // prepare query for execution
        $stmt = $conn->prepare($query2);
        
        // posted values
        $c_name=htmlspecialchars(strip_tags($_POST['c_name']));
        $c_dob=htmlspecialchars(strip_tags($_POST['c_dob']));
        $c_country=htmlspecialchars(strip_tags($_POST['c_country']));
        $c_gender=htmlspecialchars(strip_tags($_POST['c_gender']));
        $c_address=htmlspecialchars(strip_tags($_POST['c_address']));
        $c_telephone=htmlspecialchars(strip_tags($_POST['c_telephone']));
        $c_occupation=htmlspecialchars(strip_tags($_POST['c_occupation']));

        $c_picture=!empty($_FILES["c_picture"]["name"])
        ? sha1_file($_FILES['c_picture']['tmp_name']) . "-" . basename($_FILES["c_picture"]["name"])
        : "";

        $c_picture=htmlspecialchars(strip_tags($c_picture));

 


        // bind the parameters
        $stmt->bindParam(':c_name', $c_name);
        $stmt->bindParam(':c_dob', $c_dob);
        $stmt->bindParam(':c_country', $c_country);
        $stmt->bindParam(':c_gender', $c_gender);
        $stmt->bindParam(':c_address', $c_address);
        $stmt->bindParam(':c_telephone', $c_telephone);
        $stmt->bindParam(':c_occupation', $c_occupation);
        $stmt->bindParam(':c_picture', $c_picture);
        


        // now, if image is not empty, try to upload the image
        if($stmt->execute()){
            if($c_picture){
            
            // sha1_file() function is used to make a unique file name
            $target_directory = "../img/customers/";
            $target_file = $target_directory . $c_picture;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        
            $file_upload_error_messages="";
                
            if(!is_dir($target_directory)){
                mkdir($target_directory, 0777, true);
            }
        }

            header("Location: ../customers.php?registration=success");
        }
            else{
                 header("Location: ../customers.php?registration=failed");
                }

            }

    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}





if (isset($_POST['update_customer'])) {
    // include database connection
    include '../database/config2.php';

    $id=htmlspecialchars(strip_tags($_POST['id']));
 
    try{

        // insert query
        $query2 = "UPDATE customers SET c_name=:c_name, c_dob=:c_dob, c_country=:c_country, c_gender=:c_gender, 
        c_address=:c_address, c_telephone=:c_telephone, c_occupation=:c_occupation, c_picture=:c_picture, is_debtor=0 WHERE id = $id ";
        
        // prepare query for execution
        $stmt = $conn->prepare($query2);
        
        // posted values
        $c_name=htmlspecialchars(strip_tags($_POST['c_name']));
        $c_dob=htmlspecialchars(strip_tags($_POST['c_dob']));
        $c_country=htmlspecialchars(strip_tags($_POST['c_country']));
        $c_gender=htmlspecialchars(strip_tags($_POST['c_gender']));
        $c_address=htmlspecialchars(strip_tags($_POST['c_address']));
        $c_telephone=htmlspecialchars(strip_tags($_POST['c_telephone']));
        $c_occupation=htmlspecialchars(strip_tags($_POST['c_occupation']));

        $c_picture=!empty($_FILES["c_picture"]["name"])
        ? sha1_file($_FILES['c_picture']['tmp_name']) . "-" . basename($_FILES["c_picture"]["name"])
        : "";

        $c_picture=htmlspecialchars(strip_tags($c_picture));

 


        // bind the parameters
        $stmt->bindParam(':c_name', $c_name);
        $stmt->bindParam(':c_dob', $c_dob);
        $stmt->bindParam(':c_country', $c_country);
        $stmt->bindParam(':c_gender', $c_gender);
        $stmt->bindParam(':c_address', $c_address);
        $stmt->bindParam(':c_telephone', $c_telephone);
        $stmt->bindParam(':c_occupation', $c_occupation);
        $stmt->bindParam(':c_picture', $c_picture);
        


        // now, if image is not empty, try to upload the image
        if($stmt->execute()){
            if($c_picture){
            
            // sha1_file() function is used to make a unique file name
            $target_directory = "../img/customers/";
            $target_file = $target_directory . $c_picture;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        
            $file_upload_error_messages="";
                
            if(!is_dir($target_directory)){
                mkdir($target_directory, 0777, true);
            }
        }
            header("Location: ../customers.php?registration=success");
        }
            else{
                 header("Location: ../customers.php?registration=failed");
                }

            }

    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}







if(isset($_POST['credit_sales'])){

    try{

        $query = "UPDATE products SET debtor_id=:debtor_id, credit_sales_transactionid=:credit_sales_transactionid, 
        fist_instalment_date=:fist_instalment_date, last_instalment_date=:last_instalment_date,
        is_sold=1, is_credit=1, is_cart=0 WHERE is_cart=1";

        // prepare query for execution
         $stmt = $conn->prepare($query);

          // posted values
        $debtor_id=htmlspecialchars(strip_tags($_POST['debtor_id']));
        $credit_sales_transactionid=htmlspecialchars(strip_tags($_POST['credit_sales_transactionid']));
        $fist_instalment_date=htmlspecialchars(strip_tags($_POST['fist_instalment_date']));
        $last_instalment_date=htmlspecialchars(strip_tags($_POST['last_instalment_date']));

        // bind the parameters
        $stmt->bindParam(':debtor_id', $debtor_id);
        $stmt->bindParam(':credit_sales_transactionid', $credit_sales_transactionid);
        $stmt->bindParam(':fist_instalment_date', $fist_instalment_date);
        $stmt->bindParam(':last_instalment_date', $last_instalment_date);


        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            // header("Location: ../index.php?salesresult=success");


        }else{
            header("Location: ../index.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}




if(isset($_POST['credit_sales'])){

    try{

        $query = "INSERT INTO debtors SET debtor_id=:debtor_id, credit_sales_transactionid=:credit_sales_transactionid,
        installment=:installment, fist_instalment_date=:fist_instalment_date, last_instalment_date=:last_instalment_date,
        balance=:balance";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $debtor_id=htmlspecialchars(strip_tags($_POST['debtor_id']));
        $credit_sales_transactionid=htmlspecialchars(strip_tags($_POST['credit_sales_transactionid']));
        $installment=htmlspecialchars(strip_tags($_POST['installment']));
        $fist_instalment_date=htmlspecialchars(strip_tags($_POST['fist_instalment_date']));
        $last_instalment_date=htmlspecialchars(strip_tags($_POST['last_instalment_date']));

        $balance = htmlspecialchars(strip_tags($_POST['total'])) - htmlspecialchars(strip_tags($_POST['installment']));


        // bind the parameters
        $stmt->bindParam(':debtor_id', $debtor_id);
        $stmt->bindParam(':credit_sales_transactionid', $credit_sales_transactionid);
        $stmt->bindParam(':installment', $installment);
        $stmt->bindParam(':fist_instalment_date', $fist_instalment_date);
        $stmt->bindParam(':last_instalment_date', $last_instalment_date);
        $stmt->bindParam(':balance', $balance);


        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
           // header("Location: ../index.php?salesresult=success");


        }else{
            header("Location: ../index.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}





if(isset($_POST['create_expense'])){

    try{

        $query = "INSERT INTO petit_cash SET exp_date=:exp_date, exp_amount=:exp_amount,
        exp_description=:exp_description, is_debit=0, is_credit=1";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $exp_date=htmlspecialchars(strip_tags($_POST['ex_pdate']));
        $exp_amount=htmlspecialchars(strip_tags($_POST['exp_amount']));
        $exp_description=htmlspecialchars(strip_tags($_POST['exp_description']));

        // bind the parameters
        $stmt->bindParam(':exp_date', $exp_date);
        $stmt->bindParam(':exp_amount', $exp_amount);
        $stmt->bindParam(':exp_description', $exp_description);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../petit_cash.php?salesresult=success");


        }else{
            header("Location: ../petit_cash.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}





if(isset($_POST['create_cat'])){

    try{

        $query = "INSERT INTO categories SET cat_name=:cat_name";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $cat_name=htmlspecialchars(strip_tags($_POST['cat_name']));


        // bind the parameters
        $stmt->bindParam(':cat_name', $cat_name);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../add_cat.php?result=success");


        }else{
            header("Location: ../add_cat.php?result=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}





if(isset($_POST['edit_cat'])){

    $cat_id=htmlspecialchars(strip_tags($_POST['cat_id']));

    try{

        $query = "UPDATE categories SET cat_name=:cat_name WHERE id = $cat_id";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $cat_name=htmlspecialchars(strip_tags($_POST['cat_name']));


        // bind the parameters
        $stmt->bindParam(':cat_name', $cat_name);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../add_cat.php?result=success");


        }else{
            header("Location: ../add_cat.php?result=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}




if(isset($_POST['create_brands'])){

    try{

        $query = "INSERT INTO brands SET brand_name=:brand_name";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $brand_name=htmlspecialchars(strip_tags($_POST['brand_name']));


        // bind the parameters
        $stmt->bindParam(':brand_name', $brand_name);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../add_brands.php?result=success");


        }else{
            header("Location: ../add_brands.php?result=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}




if(isset($_POST['edit_brand'])){

    $brand_id=htmlspecialchars(strip_tags($_POST['brand_id']));

    try{

        $query = "UPDATE brands SET brand_name=:brand_name WHERE id = $brand_id";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $brand_name=htmlspecialchars(strip_tags($_POST['brand_name']));


        // bind the parameters
        $stmt->bindParam(':brand_name', $brand_name);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../add_brands.php?result=success");


        }else{
            header("Location: ../add_brands.php?result=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}









if(isset($_POST['pay_debt'])){

    $cust_id=htmlspecialchars(strip_tags($_POST['cust_id']));
    $trans_id=htmlspecialchars(strip_tags($_POST['old_trans_id']));

    $query6 = "SELECT * FROM debtors WHERE debtor_id = $cust_id AND credit_sales_transactionid = '$trans_id' ";
    $stmt6 = $conn->prepare($query6);
    $stmt6->execute();
    $somerow6 = $stmt6->fetch(PDO::FETCH_ASSOC);

    $last_installment = $somerow6['installment'];
    $last_balance = $somerow6['balance'];

    try{

        $query = "UPDATE debtors SET installment=:installment, balance=:balance WHERE debtor_id = $cust_id AND credit_sales_transactionid = '$trans_id' AND balance > 0";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $installment= $last_installment + htmlspecialchars(strip_tags($_POST['installment']));
        $balance= $last_balance - htmlspecialchars(strip_tags($_POST['installment']));


        // bind the parameters
        $stmt->bindParam(':installment', $installment);
        $stmt->bindParam(':balance', $balance);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../debtors.php?id={$cust_id}");


        }else{
            header("Location: ../debtors.php?id=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}






if(isset($_POST['pay_debt'])){

    try{

        $query = "INSERT INTO transactions SET users_id=:users_id, amount=:amount,
        date=:date, type='Repay', trans_id=:trans_id";

        // prepare query for execution
         $stmt = $conn->prepare($query);


        // posted values
        $users_id=htmlspecialchars(strip_tags($_POST['cust_id']));
        $amount=htmlspecialchars(strip_tags($_POST['installment']));
        $date=htmlspecialchars(strip_tags($_POST['date']));
        $trans_id = htmlspecialchars(strip_tags($_POST['old_trans_id']));
        $pr_id = htmlspecialchars(strip_tags($_POST['total']));


        // bind the parameters
        $stmt->bindParam(':users_id', $users_id);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':trans_id', $trans_id);


        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../debtors.php?salesresult=success");


        }else{
            header("Location: ../debtors.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}



if(isset($_POST['check_out'])){

    try{

        $query = "INSERT INTO transactions SET users_id=:users_id, amount=:amount, date=:date, type='Cash Sales', trans_id=:trans_id";
        // prepare query for execution
         $stmt = $conn->prepare($query);

        // posted values
        $customer_phone=htmlspecialchars(strip_tags($_POST['customer_phone']));
        $total=htmlspecialchars(strip_tags($_POST['total']));
        $date=htmlspecialchars(strip_tags($_POST['cash_sales_date']));
        $cash_transaction_id=htmlspecialchars(strip_tags($_POST['cash_transaction_id']));


        // bind the parameters
        $stmt->bindParam(':users_id', $customer_phone);
        $stmt->bindParam(':amount', $total);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':trans_id', $cash_transaction_id);


        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Cart emptied successful!!!</div>";
            header("Location: ../thankyou.php?salesresult=success&cnumber=$customer_phone&transID=$cash_transaction_id&date=$cash_sales_date&amount=$total");


        }else{
            header("Location: ../index.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}




if(isset($_POST['credit_sales'])){

        $trans = htmlspecialchars(strip_tags($_POST['credit_sales_transactionid']));
        $get_users_id=htmlspecialchars(strip_tags($_POST['debtor_id']));

        $sql_query = "SELECT * FROM customers WHERE id = $get_users_id";
        $stmt67 = $conn->prepare($sql_query);
        $stmt67->execute();
        $row67 = $stmt67->fetch(PDO::FETCH_ASSOC);

        $phone = $row67['c_telephone'];


        $get_trans_id_sql_query = "SELECT * FROM debtors WHERE credit_sales_transactionid = '$trans'";
        $get_trans_id_stmt67 = $conn->prepare($get_trans_id_sql_query);
        $get_trans_id_stmt67->execute();
        $get_trans_id_row67 = $get_trans_id_stmt67->fetch(PDO::FETCH_ASSOC);

        $bal = $get_trans_id_row67['balance'];
        $l_pay = $get_trans_id_row67['last_instalment_date'];


    try{

        $query = "INSERT INTO transactions SET users_id=:users_id, amount=:amount, date=:date, type='Credit Sales', trans_id=:trans_id";
        // prepare query for execution
         $stmt = $conn->prepare($query);

        // posted values
        $users_id=htmlspecialchars(strip_tags($_POST['debtor_id']));
        $credit_sales_transactionid=htmlspecialchars(strip_tags($_POST['credit_sales_transactionid']));
        $installment=htmlspecialchars(strip_tags($_POST['installment']));
        $fist_instalment_date=htmlspecialchars(strip_tags($_POST['fist_instalment_date']));


        // bind the parameters
        $stmt->bindParam(':users_id', $users_id);
        $stmt->bindParam(':amount', $installment);
        $stmt->bindParam(':date', $fist_instalment_date);
        $stmt->bindParam(':trans_id', $credit_sales_transactionid);


        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Cart emptied successful!!!</div>";
            header("Location: ../credit_thankyou.php?salesresult=success&cnumber=$phone&transID=$credit_sales_transactionid&date=$cash_sales_dates&amount=$installment&balance=$bal&ldate=$l_pay");


        }else{
            header("Location: ../index.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}










////////Adding debtors

if (isset($_POST['add_creditors'])) {
    // include database connection
    include '../database/config2.php';
 
    try{
 
        // insert query
        $query2 = "INSERT INTO creditors SET name=:name, address=:address, phone=:phone, prd_name=:prd_name, image=:image, date_taken=:date_taken,
         Cost=:Cost, paid=:paid, balance=:balance, description=:description ";
        
        // prepare query for execution
        $stmt = $conn->prepare($query2);
        
        // posted values
        $name=htmlspecialchars(strip_tags($_POST['name']));
        $address=htmlspecialchars(strip_tags($_POST['address']));
        $phone=htmlspecialchars(strip_tags($_POST['phone']));
        $prd_name=htmlspecialchars(strip_tags($_POST['prd_name']));

        $images=!empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"])
        : "";

        $image=htmlspecialchars(strip_tags($images));

        $date_taken=htmlspecialchars(strip_tags($_POST['date_taken']));
        $Cost=htmlspecialchars(strip_tags($_POST['cost']));
        $paid=htmlspecialchars(strip_tags($_POST['paid']));

        $balance= $Cost - $paid;

        $description=htmlspecialchars(strip_tags($_POST['description']));



        // bind the parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':prd_name', $prd_name);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':date_taken', $date_taken);
        $stmt->bindParam(':Cost', $Cost);
        $stmt->bindParam(':paid', $paid);
        $stmt->bindParam(':balance', $balance);
        $stmt->bindParam(':description', $description);
        


        // now, if image is not empty, try to upload the image
        if($stmt->execute()){
            if($image){
            
                // sha1_file() function is used to make a unique file name
                $target_directory = "../img/creditors/";
                $target_file = $target_directory . $image;
                $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            
                $file_upload_error_messages="";

            if(!is_dir($target_directory)){
                mkdir($target_directory, 0777, true);
            }
            
            // if $file_upload_error_messages is still empty
            if(empty($file_upload_error_messages)){
                // it means there are no errors, so try to upload the file
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){

                    // it means photo was uploaded
                    header("Location: ../add_spply.php?result=success");

                }else{
                    header("Location: ../add_spply.php?result=failed");
                }
            }
        }


    }
 

    }

    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}







if(isset($_POST['pay_loan'])){

    $debt_id=htmlspecialchars(strip_tags($_POST['cust_id']));
    $name_id=htmlspecialchars(strip_tags($_POST['old_trans_name']));

    $query11 = "SELECT * FROM creditors WHERE id = $debt_id AND name = '$name_id' ";
    $stmt11 = $conn->prepare($query11);
    $stmt11->execute();
    $somerow11 = $stmt11->fetch(PDO::FETCH_ASSOC);

    $new_installment = $somerow11['paid'];
    $lasts_balance = $somerow11['balance'];

    try{

        $query = "UPDATE creditors SET paid=:paid, balance=:balance WHERE id = $debt_id AND name = '$name_id' ";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $paid= $new_installment + htmlspecialchars(strip_tags($_POST['paid']));
        $balance= $lasts_balance - htmlspecialchars(strip_tags($_POST['paid']));


        // bind the parameters
        $stmt->bindParam(':paid', $paid);
        $stmt->bindParam(':balance', $balance);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../add_spply.php?id={$debt_id}");


        }else{
            header("Location: ../add_spply.php?id=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}







if(isset($_POST['cashout'])){

    try{

        if($_POST['exp_description'] == 'Petit Cash Deposit'){

            $query = "INSERT INTO petit_cash SET exp_date=:exp_date, exp_amount=:exp_amount,
            exp_description=:exp_description, is_debit=1, is_credit=0";

        }else{
            $query = "INSERT INTO cashout SET exp_date=:exp_date, exp_amount=:exp_amount,
            exp_description=:exp_description, is_debit=0, is_credit=1";
        }

        

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values
        $exp_date=htmlspecialchars(strip_tags($_POST['exp_date']));
        $exp_amount=htmlspecialchars(strip_tags($_POST['exp_amount']));
        $exp_description=htmlspecialchars(strip_tags($_POST['exp_description']));

        // bind the parameters
        $stmt->bindParam(':exp_date', $exp_date);
        $stmt->bindParam(':exp_amount', $exp_amount);
        $stmt->bindParam(':exp_description', $exp_description);

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../cashout.php?salesresult=success");


        }else{
            header("Location: ../cashout.php?salesresult=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}









if(isset($_POST['count_stock'])){

    $sku= htmlspecialchars(strip_tags($_POST['sku']));

    /* $get_sku = "SELECT * FROM products WHERE sku = $sku AND is_sold = 0 ";
    $get_sku_stm = $conn->prepare($get_sku);
    $get_sku_stm->execute();
    $get_sku_row = $get_sku_stm->fetch(PDO::FETCH_ASSOC);

    $sku_value = $get_sku_row['sku']; */

    try{

        $query = "UPDATE products SET stock_count= 1 WHERE sku = $sku AND is_sold = 0 ";

        // prepare query for execution
         $stmt = $conn->prepare($query);


          // posted values


        // bind the parameters
        

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../Stock_inventry.php?result={$sku}");


        }else{
            header("Location: ../Stock_inventry.php?result=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}





if(isset($_POST['refresh'])){


    try{

        $query = "UPDATE products SET stock_count= 0 ";

        // prepare query for execution
         $stmt = $conn->prepare($query);

        

        // Execute the query
        if($stmt->execute()){

            //echo "<div class='alert alert-danger'>Successful!!!</div>";
            header("Location: ../Stock_inventry.php?results=refreshed");


        }else{
            header("Location: ../Stock_inventry.php?results=failed");
        }
    }

    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }	
}