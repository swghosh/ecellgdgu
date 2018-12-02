<?php
$title = 'Events';
$stylesheets = array('/stylesheets/events.css');
include('header.php');
?>


<div class="heading">
    <h1> Event</h1>
</div>
<div class="Instagram-card">
    <div class="Instagram-card-header">
        <img src="/images/events/Poster - Udyami Bazaar 2016.jpg" class="Instagram-card-user-image">
        <a class="Instagram-card-user-name"> Udyami Bazaar </a>

    </div>

    <div class="Instagram-card-image">
        <img class="mySlides" src="/images/events/Udyami.jpg" height="450px" width:"700px">
        <img class="mySlides" src="/images/events/Udyami1.jpg" height="450px" width:"700px">
        <img class="mySlides" src="/images/events/Udyami2.jpg" height="450px" width:"700px">
        <img class="mySlides" src="/images/events/Udyami3.jpg" height="450px" width:"700px">
        <img class="mySlides" src="/images/events/_DSC0071.jpg" height="450px" width:"700px">
        <img class="mySlides" src="/images/events/_DSC0072.jpg" height="450px" width:"700px">

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
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
    <div class="Instagram-card-content">

        <p>
            October is a month of celebrations. It is a month which fills our hearts and spirit with goodness and joy.
            What
            better than celebrating this month with fun, fervour and creativity?<span id="dots">...</span><span id="more">
                Hence, Udyami Bazaar- an initiative of GD Goenka Technology Business Incubator (GDGTBI) encourages
                students to
                put on their entrepreneurial caps and display their business acumen and creativity in an atmosphere of
                fun and
                frolic. It’s a platform which promotes entrepreneurial attitude amongst students of GDGU. It also aims
                at
                honing their communication, presentation, marketing and managerial skills, giving them a true feel of
                being an
                entrepreneur.
                Udyami Bazaar has been running very successfully since 2013 and recently year has been brought under
                the
                purview of Goenka Technology Business Incubator (GDGTBI). GDTBI envisions being pre-eminent in
                fostering
                entrepreneurship driven initiatives, education and research directed towards the development of
                economies and
                societies. It strives to foster the entrepreneurial ecosystem at GDGU, and Udyami Bazaar is an
                initiative which
                drives this spirit in a festive manner.
                This year’s Udyami Bazaar, scheduled on 3rd November attracted more than 50 stalls including students
                from
                other universities as well. Some of the interesting stuff being offered in stalls were- games,
                eatables, house
                décor, garments, jewellery, self designed products, state ethnic products, cosmetics, stationary etc.
                Certificates, trophies, cash and gift hampers were awarded for most innovative marketing, most popular
                stall
                and most well managed stall. The atmosphere was quite charged up with each stall owner gearing up
                towards big
                earnings. </span></p>
        <button onclick="myFunction()" id="myBtn">Read more</button>
        <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>

        <br><br>
    </div>

    <div class="Instagram-card">
        <div class="Instagram-card-header">
            <img src="/images/events/Invite & Programme Schedule - GDGTBI IDEA 2017 (1) - Copy.jpg" class="Instagram-card-user-image"
                height="450px" width:"700px">
            <a class="Instagram-card-user-name"> IDEA </a>

        </div>

        <div class="Instagram-card-image">
            <img class="card-image" src="Poster - IDEA 2017.jpg">

        </div>

        <div class="Instagram-card-content">

            <p><a class="Instagram-card-content-user">
                    //

                    <span id="dots1">...</span><span id="more1">

                        //
                    </span></p>
            <button onclick="myFunction1()" id="myBtn1">Read more</button>

            <script>
                function myFunction1() {
                    var dots = document.getElementById("dots1");
                    var moreText = document.getElementById("more1");
                    var btnText = document.getElementById("myBtn1");

                    if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        btnText.innerHTML = "Read more";
                        moreText.style.display = "none";
                    } else {
                        dots.style.display = "none";
                        btnText.innerHTML = "Read less";
                        moreText.style.display = "inline";
                    }
                }
            </script>
        </div>
    </div>
</div>

<?php
$scripts = array('');
include('footer.php');
?>