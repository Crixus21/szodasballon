<?php
    require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ALM Kft.</title>
</head>
<body>
    <!-- Banner -->
    <div class="top-banner">
        <img src="img/logo.png" id="logo" alt="logo">
    </div>
    <div class="container-fluid border-top" style="border-color:cadetblue !important; height: .3rem; background-color: darkslategray;">
    </div>
    <!-- Navigation -->
    <div class="w-100">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="justify-content-center collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav display-5 d-flex flex-wrap">
                        <li class="nav-item">
                            <a href="#containerCegunk" class="nav-link text-light py-4 px-5">Cégünk</a>
                        </li>
                        <li class="nav-item">
                            <a href="#containerTermekek" class="nav-link text-light py-4 px-5">Termékek</a>
                        </li>
                        <li class="nav-item">
                            <a href="#containerKapcsolat" class="nav-link text-light py-4 px-5">Kapcsolat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div class="container-fluid" style="height: .3rem; background-color: darkslategray;">
    </div>

<!-- Back to top -->
    <button id="backToTop" class="btn btn-primary position-fixed d-none" style="z-index:1000; bottom: 20%; left: 1%;" onclick="scrollToTop()"> <i class="fa fa-angle-up" style="font-size: 48px;"></i>
    </button>

<!-- Cégünk -->
    <div class="container-fluid py-5 d-flex flex-column" id="containerCegunk">
        <div class="container d-flex justify-content-center">
            <section class="d-flex flex-column justify-content-center align-content-center">
                <div class="row w-100">
                    <h1 class="col text-center mb-5">Cégünk</h1>
                </div>
                <div class="row">
                    <p class="mainpar mx-auto">Cégünk 2000 óta gyárt 25 literes rozsdamentes szódás ballonokat.
    Az évek során a megrendelők visszajelzéseit figyelembe véve folyamatosan fejlesztettük technológiánkat. Igyekszünk maximálisan kielégíteni vevőink igényeit. 2009-ben a megszünt golyóscsap-, és felvezető-gyártást saját fejlesztésű saválló golyóscsappal és felvezetővel váltottuk ki.
    A szikvizes termékeken kívül foglalkozunk még szerszámgyártással, forgácsolással, acélszerkezet-gyártással, kapuk, kerítések, lépcsők, korlátok kivitelezésével.
                    </p>
                </div>
            </section>
        </div>
    </div>

<!-- Termékek -->
    <div class="container-fluid py-5 d-flex flex-column" id="containerTermekek">
        <div class="container d-flex justify-content-center">
            <div class="w-100 d-flex flex-column justify-content-center align-content-center">
                <div class="w-100 mb-5">
                    <h1 class="text-center">Termékek</h1>
                </div>
<!-- Productok beöltésének helye -->
                <div id="products"></div>

                <div class="d-flex justify-content-center">
                <section class="text-center"><p>Az árváltozás jogát fenntartjuk!
A ballonokat első használat előtt ki kell mosni!!!
</p></section></div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 d-flex flex-column" id="containerGalleria">
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center">
                <div class="mb-5">
                    <h1 class="text-center">Lóistállók, acélszerkezetek, egyéb</h1>
                </div>
                <div id="galleria" class="d-flex flex-wrap justify-content-center">
                    <img src="img/001.jpg" alt="001" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/002.jpg" alt="002" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/003.jpg" alt="003" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/004.jpg" alt="004" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/egyeb0001.jpg" alt="egyeb0001" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/egyeb0002.jpg" alt="egyeb0002" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/egyeb0003.jpg" alt="egyeb0003" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/egyeb0004.jpg" alt="egyeb0004" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="img/egyeb0005.jpg" alt="egyeb0005" class="img-thumbnail open-modal" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal">
                </div>
            </div>
        </div>
    </div>

<!-- Új szolgáltatás -->
    <div class="container-fluid py-5 d-flex flex-column" id="containerUjSzolg">
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center">
                <div class="mb-5">
                    <img src="img/uj_szolgaltatas.png" alt="uj_szolgaltatas" style="max-width:100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

<!-- Kapcsolat -->
    <div class="container-fluid py-5 d-flex flex-column" id="containerKapcsolat">
        <div class="container">
            <div class="w-100 d-flex flex-wrap justify-content-center">
                <div class="w-100 text-center mb-5"><h1>Kapcsolat</h1></div>
                <div class="w-100 d-flex flex-wrap justify-content-evenly">
                    <div>
                        <p>ALM Ipari és Javító Szolgáltató Kft.<br>
                        2072 Zsámbék, Bicskei u.14. <br>
                        Tel/fax: 06-23-342-151<br>
                        Mobil: 06-30-9605-392<br>
                        <br><br>
                        E-mail: alm.kft@t-online.hu
                        </p>
                    </div>
                    <div id="map" class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2693.266646340804!2d18.71521391971867!3d47.54313886172433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476a726434998ea9%3A0xa638e3ca2e91d872!2zWnPDoW1iw6lrLCBCaWNza2VpIHUuIDE0LCAyMDcy!5e0!3m2!1shu!2shu!4v1740172041202!5m2!1shu!2shu" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </div>
    
</body>


<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts.js"></script>
<script>
createProductSection("25 literes ballon", "img/25lures_ballon.jpg", "Árak: <br> Nettó: 35.000 Ft <br>Bruttó: 44.450 Ft");
createProductSection("25L ballon, golyóscsappal, felvezetővel", "img/25LiteresSzereltBallon.jpg", "Árak:<br> Nettó: 44.000 Ft <br> Bruttó: 55.880 Ft");
createProductSection("Golyóscsap", "img/golyoscsap.jpg", "Árak:<br> Nettó: 14.000 Ft<br> Bruttó: 17.780 Ft");
createProductSection("Felvezető szár", "img/Felvezeto.jpg", "Árak:<br> Nettó: 5.000 Ft<br>Bruttó: 6.350 Ft");
createProductSection("Golyóscsap javítókészlet saválló golyóval", "img/a0304j.jpg", "Árak:<br>Nettó: 1.800 Ft <br>Bruttó: 2.286 Ft");
createProductSection("Saválló csapgolyó", "img/savallocsap_golyo.jpg", "Árak:<br>Nettó: 1.450 Ft<br>Bruttó: 1.840 Ft");
createProductSection("Biztonsági szelep rozsdamentes szárral<br>a régi golyóscsaphoz is használható", "img/a0301j.jpg", "Árak:<br>Nettó: 450 Ft<br>Bruttó: 508 Ft");
createProductSection("Rozsdamentes szeleprugó", "img/a0302j.jpg", "Árak:<br>Nettó: 180 Ft<br>Bruttó: 228 Ft");
createProductSection("Szelep rugóval", "img/a0303j.jpg", "Árak:<br>Nettó: 630Ft<br>Bruttó: 800Ft");
createProductSection("5 literes szifon", "img/5literesszifon.jpg", "Árak:<br>Nettó: 14.000 Ft<br>Bruttó: 17.780 Ft");
createProductSection("Mosószeres, vegyszeres, tartály nyomásmérővel, levegő csatlakozással", "img/072.jpg", "Árak:<br>Nettó: 60.000 Ft<br>Bruttó: 76.200 Ft");

document.addEventListener("DOMContentLoaded", function () {
    const modalImage = document.getElementById("modalImage");

    document.querySelectorAll(".open-modal").forEach(img => {
        img.addEventListener("click", function () {
            modalImage.src = this.src; 
            modalImage.alt = this.alt; 
            const myModal = new bootstrap.Modal(document.getElementById("imageModal"));
            myModal.show();
        });
    });
});
</script>
</html>