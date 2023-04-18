<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- For Product Zoom-->
	<link rel="stylesheet" href="assets/js/Vendor/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="assets/js/Vendor/fancybox/helpers/jquery.fancybox-thumbs.css" />
	<link href="assets/zoom.css" rel="stylesheet" />
    <script src="assets/js/Vendor/jquery/jquery-1.8.3.min.js"></script>

    <!--Slider Slick-->
    <link rel="stylesheet" type="text/css" href="assets/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/slick-theme.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/app.css" rel="stylesheet">

    <!--Font Awesome-->
    <script src="assets/2ced7dcf7e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/custom.css">
    <title>Biazo.com. Spend Less. Look Good</title>





    <script src="assets/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script>
  </head>
  <body style="background-color: #f9f9f9">

