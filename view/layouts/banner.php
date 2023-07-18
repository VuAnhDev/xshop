<!--------------------banner-------------------->
<div class="banner">
    <div class="tile">
    Giày Thể Thao Số 1 Hà Nội
    </div>
    <div class="main">
        <div class="slide">
            <img class="mySlides" src="public/img/banner1.jpg">
            <img class="mySlides" src="public/img/banner2.jpg">
            <img class="mySlides" src="public/img/banner3.jpg">
        </div>

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) { myIndex = 1 }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 3000); // Change image every 2 seconds
            }
        </script>
    </div>

</div>
<!--------------------banner-------------------->