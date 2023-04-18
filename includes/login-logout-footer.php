    <script>
        // Design By
    // - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

    // Select Upload-Area
    const uploadArea = document.querySelector('#uploadArea')

    // Select Drop-Zoon Area
    const dropZoon = document.querySelector('#dropZoon');

    // Loading Text
    const loadingText = document.querySelector('#loadingText');

    // Slect File Input 
    const fileInput = document.querySelector('#fileInput');

    // Select Preview Image
    const previewImage = document.querySelector('#previewImage');

    // File-Details Area
    const fileDetails = document.querySelector('#fileDetails');

    // Uploaded File
    const uploadedFile = document.querySelector('#uploadedFile');

    // Uploaded File Info
    const uploadedFileInfo = document.querySelector('#uploadedFileInfo');

    // Uploaded File  Name
    const uploadedFileName = document.querySelector('.uploaded-file__name');

    // Uploaded File Icon
    const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');

    // Uploaded File Counter
    const uploadedFileCounter = document.querySelector('.uploaded-file__counter');

    // ToolTip Data
    const toolTipData = document.querySelector('.upload-area__tooltip-data');

    // Images Types
    const imagesTypes = [
    "jpeg",
    "png",
    "svg",
    "gif"
    ];

    // Append Images Types Array Inisde Tooltip Data
    toolTipData.innerHTML = [...imagesTypes].join(', .');

    // When (drop-zoon) has (dragover) Event 
    dropZoon.addEventListener('dragover', function (event) {
    // Prevent Default Behavior 
    event.preventDefault();

    // Add Class (drop-zoon--over) On (drop-zoon)
    dropZoon.classList.add('drop-zoon--over');
    });

    // When (drop-zoon) has (dragleave) Event 
    dropZoon.addEventListener('dragleave', function (event) {
    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon.classList.remove('drop-zoon--over');
    });

    // When (drop-zoon) has (drop) Event 
    dropZoon.addEventListener('drop', function (event) {
    // Prevent Default Behavior 
    event.preventDefault();

    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon.classList.remove('drop-zoon--over');

    // Select The Dropped File
    const file = event.dataTransfer.files[0];

    // Call Function uploadFile(), And Send To Her The Dropped File :)
    uploadFile(file);
    });

    // When (drop-zoon) has (click) Event 
    dropZoon.addEventListener('click', function (event) {
    // Click The (fileInput)
    fileInput.click();
    });

    // When (fileInput) has (change) Event 
    fileInput.addEventListener('change', function (event) {
    // Select The Chosen File
    const file = event.target.files[0];

    // Call Function uploadFile(), And Send To Her The Chosen File :)
    uploadFile(file);
    });

    // Upload File Function
    function uploadFile(file) {
    // FileReader()
    const fileReader = new FileReader();
    // File Type 
    const fileType = file.type;
    // File Size 
    const fileSize = file.size;

    // If File Is Passed from the (File Validation) Function
    if (fileValidate(fileType, fileSize)) {
        // Add Class (drop-zoon--Uploaded) on (drop-zoon)
        dropZoon.classList.add('drop-zoon--Uploaded');

        // Show Loading-text
        loadingText.style.display = "block";
        // Hide Preview Image
        previewImage.style.display = 'none';

        // Remove Class (uploaded-file--open) From (uploadedFile)
        uploadedFile.classList.remove('uploaded-file--open');
        // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
        uploadedFileInfo.classList.remove('uploaded-file__info--active');

        // After File Reader Loaded 
        fileReader.addEventListener('load', function () {
        // After Half Second 
        setTimeout(function () {
            // Add Class (upload-area--open) On (uploadArea)
            uploadArea.classList.add('upload-area--open');

            // Hide Loading-text (please-wait) Element
            loadingText.style.display = "none";
            // Show Preview Image
            previewImage.style.display = 'block';

            // Add Class (file-details--open) On (fileDetails)
            fileDetails.classList.add('file-details--open');
            // Add Class (uploaded-file--open) On (uploadedFile)
            uploadedFile.classList.add('uploaded-file--open');
            // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
            uploadedFileInfo.classList.add('uploaded-file__info--active');
        }, 500); // 0.5s

        // Add The (fileReader) Result Inside (previewImage) Source
        previewImage.setAttribute('src', fileReader.result);

        // Add File Name Inside Uploaded File Name
        uploadedFileName.innerHTML = file.name;

        // Call Function progressMove();
        progressMove();
        });

        // Read (file) As Data Url 
        fileReader.readAsDataURL(file);
    } else { // Else

        this; // (this) Represent The fileValidate(fileType, fileSize) Function

    };
    };

    // Progress Counter Increase Function
    function progressMove() {
    // Counter Start
    let counter = 0;

    // After 600ms 
    setTimeout(() => {
        // Every 100ms
        let counterIncrease = setInterval(() => {
        // If (counter) is equle 100 
        if (counter === 100) {
            // Stop (Counter Increase)
            clearInterval(counterIncrease);
        } else { // Else
            // plus 10 on counter
            counter = counter + 10;
            // add (counter) vlaue inisde (uploadedFileCounter)
            uploadedFileCounter.innerHTML = `${counter}%`
        }
        }, 100);
    }, 600);
    };


    // Simple File Validate Function
    function fileValidate(fileType, fileSize) {
    // File Type Validation
    let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

    // If The Uploaded File Type Is 'jpeg'
    if (isImage[0] === 'jpeg') {
        // Add Inisde (uploadedFileIconText) The (jpg) Value
        uploadedFileIconText.innerHTML = 'jpg';
    } else { // else
        // Add Inisde (uploadedFileIconText) The Uploaded File Type 
        uploadedFileIconText.innerHTML = isImage[0];
    };

    // If The Uploaded File Is An Image
    if (isImage.length !== 0) {
        // Check, If File Size Is 2MB or Less
        if (fileSize <= 2000000) { // 2MB :)
        return true;
        } else { // Else File Size
        return alert('Please Your File Should be 2 Megabytes or Less');
        };
    } else { // Else File Type 
        return alert('Please make sure to upload An Image File Type');
    };
    };

    // :)
    </script>
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script>
            $('.cat').slick({
                slidesToShow: 8,
                slidesToScroll: 3,
                dots: true,
                arrows: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 6000,
                pauseOnHover: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                        slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                        slidesToShow: 3
                        }
                    }
                    ]
            });
    </script>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            } 
        });
        }

     
    </script>

    <!-- For product Zooming Effect-->
    <script src="assets/js/Vendor/jquery/jquery-ui.min.js"></script>
    <script src="assets/js/Vendor/fancybox/jquery.fancybox.js"></script>
    <script src="assets/js/Vendor/elevatezoom/jquery.elevatezoom.js"></script>
    <script src="assets/js/Vendor/panZoom/panZoom.js"></script>
    <script src="assets/js/Vendor/ui-carousel/ui-carousel.js"></script>
    <script src="assets/js/zoom.js"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/custom.js"></script>
  </body>
</html>