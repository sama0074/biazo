
<?php 

include "includes/header.php";
include "includes/menu.php";

?>


<section style="margin-top: 90px">
    <div class="container">
        <div class="row">
            <div class="col col-md-12 acc_header">
                <h2 style="margin-bottom:50px"></h2>
                <!--Displaying these contents only if purchase history is empty-->
                <div class="contents text-center" style="margin-top: -60px">
                    <img src="assets/images/img/shppingbskimg.png" style="width: 250px; margin-bottom: 20px" alt="basket">
                    <h2>You can upload your list here!</h2>
                    <small>Sama, please make sure your market list is clear enough both in writing and brightness.</small><br>
                    <small>
                        <a href="account.php" style="text-decoration:underline">Click</a> here to see a good example or 
                        <a style="text-decoration:underline" href="index.php">Click</a> here to see a bad example.
                    </small>
                </div>
                <!--Displaying these contents only if purchase history is empty-->
            </div>
        </div>
    </div>
</section>

<br><br><br>

<section class="container">
    <!-- Upload Area -->
    <div id="uploadArea" class="upload-area">
        <!-- Header -->
        <div class="upload-area__header">
            <h1 class="upload-area__title">Upload your list</h1>
            <p class="upload-area__paragraph">
            File should be an image
            <strong class="upload-area__tooltip">
                Like
                <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
            </strong>
            </p>
        </div>
        <!-- End Header -->

        <!-- Drop Zoon -->
        <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
            <span class="drop-zoon__icon">
            <i class='bx bxs-file-image'></i>
            </span>
            <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
            <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
            <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
            <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
        </div>
        <!-- End Drop Zoon -->

        <!-- File Details -->
        <div id="fileDetails" class="upload-area__file-details file-details">
            <h3 class="file-details__title">Uploaded File</h3>

            <div id="uploadedFile" class="uploaded-file">
            <div class="uploaded-file__icon-container">
                <i class='bx bxs-file-blank uploaded-file__icon'></i>
                <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
            </div>

            <div id="uploadedFileInfo" class="uploaded-file__info">
                <span class="uploaded-file__name">Proejct 1</span>
                <span class="uploaded-file__counter">0%</span>
            </div>
            </div>
        </div>
        <!-- End File Details -->
        <br><br>
        <button class="btn btn-success"><i class="far fa-paper-plane"></i> Send</button>
    </div>
    <!-- End Upload Area -->

</section>




<?php
    include "includes/login-logout-footer.php" ;
?>