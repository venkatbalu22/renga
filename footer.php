<style>
    .footer {
        background-image: url(image/footer/bg7.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 50px;
        color: #fff;
    }

  
    .custom-column {
        width: 25%;
       
    }


    @media (max-width: 768px) {
        .custom-column {
            width: 100%;
            margin-top: 20px;
        
        }
    }


    #myBtn {
       
        position: fixed;
        bottom: 23px;
        right: 111px;
        z-index: 225;
        font-size: 15px;
        border: none;
        outline: none;
        background-color: #25D366;
        color: white;
        cursor: pointer;
        padding: 11px 12px 6px 12px;

        border-radius: 27px;
    }

    
    @media (max-width: 768px) {
        #myBtn {
            margin: 10px;
            bottom: 23px;
            right: 15px;
        }

      
    }
</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <h5>Contacts</h5>
                <ul>
                    <li>SRI RENGA INN LODGE,<br> No.33, Gandhi Rd, Srirangam,<br> Thiruvanaikoil, Tiruchirappalli,
                        <br>Tamil Nadu : 620-005</li> <br>
                    <li><strong> <i class="fa-solid fa-envelope" style="margin-right:10px"></i><a
                                href="mailto:srirengainn33@gmail.com">: srirengainn33@gmail.com</a></strong></li>
                    <li><strong><i class="fa-solid fa-phone" style="margin-right:10px"></i><a
                                href="callto:+91 9042022393">:+91 90420 22393</a></strong></li>
                </ul>
                <div class="social">
                    <ul>
                        <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#0"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#0"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#0"><i class="fa-brands fa-twitter-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Highlighted Amenities</h5>
                <div class="footer_links">
                    <ul>
                        <li>Free Parking</li>
                        <li>Room Service</li>
                        <li>Power Backup</li>
                        <!-- <li>Rooms Details</li> -->
                        <li>Elevator/Lift</li>
                        <!-- <li><a href="">Terms and Conditions</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Explore</h5>
                <div class="footer_links">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="room">Rooms &amp; Suites</a></li>
                        <!-- <li><a href="">News &amp; Events</a></li> -->
                        <!-- <li><a href=".php">Rooms Details</a></li> -->
                        <li><a href="contacts">Contacts</a></li>
                        <!-- <li><a href="">Terms and Conditions</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="newsletter">
                    <h5>About Sri Renga Inn</h5>
                    <p>Looking for an affordable place to stay? This place is just right for you.</p>
                </div>
            </div>

        </div>
        <div class="copy" style="background-color:transparent;">
            <div class="container">
                ©2023 Resever - by <a href="javascript:void(0)">Sri Renga Inn Hotel</a> Designed -by <a
                    href="https://cryptographicsolutions.in">Cryptographic Solution</a>
            </div>
        </div>
    </div>

</footer>
<button onclick="topFunction()" id="myBtn" title="Go to top">
    <a target="_blank" href="https://wa.me/+919042022393">
        <i class="fab fa-whatsapp" style="font-size: 30px; text-align: center; color: #fff;"></i>
    </a>
</button>
<script>
    let mybutton = document.getElementById("myBtn");


    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "block";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>