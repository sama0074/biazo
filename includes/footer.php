    
<?php     include "includes/footer_menu.php"; ?>
    


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


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
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
    <script src="assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/custom.js"></script>
  </body>
</html>