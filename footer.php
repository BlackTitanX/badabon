<?php
require_once "manager.php";
?>

<div id="cookieNotice">
Este sitio web utiliza cookies para asegurarse de obtener la mejor experiencia en nuestro sitio web.<a href="privacy-policy.php">Learn more</a>
    <button onclick="acceptCookies()">Accept</button>
</div>

<footer class="kilimanjaro_area mt-5">
    <!-- Top Footer Area Start -->
    <div class="foo_top_header_one section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-10">
                    <div class="kilimanjaro_part">
                        <h5>About Us</h5>
                        <p class="text-light">Mision</p>
                        <p>El Equipo de Comunicación Amado Click, orienta, educa, informa y entretiene dentro de un marco ético, independiente y profesional, al servicio de los interesados y leyentes.</p>
                        <p class="text-light">Vision</p>
                        <p>Ser una de la paginas de comunicación más informativas, asegurando productos y servicios de calidad con rentabilidad insuperable.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="kilimanjaro_part">
                        <h5>Contacto</h5>
                        <div class="kilimanjaro_single_contact_info">
                            <h5>Email:</h5>
                            <p>clickamado@gmail.com</p>
                        </div>
                        <div class="kilimanjaro_part mt-3">
                            <h5>Social Links</h5>
                            <ul class="kilimanjaro_social_links">
                                <li><a href="https://www.facebook.com/share/2rTvv2HyaTANv1CX/?mibextid=LQQJ4d" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area Start -->
    <div class="kilimanjaro_bottom_header_one section_padding_50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© All Rights Reserved by <a href="#">AMADOCLICK<i class="fa fa-love"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Bootstrap core JavaScript -->

 


    <script>

    // Function to set cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Function to get cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Function to check if user has accepted the cookie notice
    function hasAcceptedCookies() {
        return getCookie("cookieNoticeAccepted") === "true";
    }

    // Function to accept cookies
    function acceptCookies() {
        setCookie("cookieNoticeAccepted", "true", 365);
        document.getElementById("cookieNotice").style.display = "none";
    }

    // Show the cookie notice if the user has not accepted it yet
    window.addEventListener("load", function() {
        if (!hasAcceptedCookies()) {
            document.getElementById("cookieNotice").style.display = "block";
        }
    });
</script>


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7372068813923393"
     crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

