0<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Chi Siamo - ICPN</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <?php include 'partials/head-style.php'; ?>
</head>

<body>

    <!-- ======= Header Navbar ======= -->
    <?php include 'partials/header.php'; ?>

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Chi Siamo</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Chi Siamo</li>
                    </ol>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= About Section ======= -->
        <section class="about" data-aos="fade-up">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/about.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>CHI SIAMO E LE NOSTRE ATTIVITÀ</h3>
                        <br>
                        <p class="text-justify">
                            ICPN è un’organizzazione no-profit, con la missione di creare una comunità di persone con
                            forte interesse
                            e senso di appartenenza alla Cina e all’Italia e con forte credo nell’importanza
                            dell’educazione, della
                            cultura, dello studio, della diversità e del rispetto. Il network ha l’obbiettivo di
                            promuovere il dialogo
                            attivo fungendo da punto di contatto tra studenti, professionisti e aziende. Seguendo questi
                            principi,
                            assieme alle competenze specifiche e alla conoscenza delle lingue italiana, cinese ed
                            inglese ci poniamo
                            sul mondo professionale e imprenditoriale in Italia, Cina e nel resto del mondo.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section class="facts section-bg" data-aos="fade-up">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg col text-center">
                        <p>Più di</p>
                        <span id="count" data-toggle="counter-up">2000</span>
                        <p>membri nella nostra Community</p>
                    </div>
                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- Service Details Section -->
        <section class="service-details">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-1.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">MISSIONE</a></h5>
                                <p class="card-text text-justify">La nostra missione è creare una comunità di persone,
                                    accomunate da un forte interesse
                                    e senso di appartenenza alla Cina e all’Italia, che siano interessate alla creazione
                                    di opportunità e sviluppo dei rapporti commerciali fra professionisti ed
                                    imprenditori Italia-Cina.
                                    <br>
                                    Il network promuove il dialogo attivo e funge da punto di contatto tra studenti,
                                    professionisti e aziende
                                    per la condivisione di opportunità.
                                    <br>
                                    Crediamo fortemente nell’importanza dell’educazione, della cultura, dello studio,
                                    della diversità e del
                                    rispetto. Seguendo questi principi, assieme alle competenze specifiche e alla
                                    padronanza delle lingue
                                    italiana, cinese ed inglese ci poniamo inoltre sul mondo del lavoro in Italia, Cina
                                    e nel resto del mondo. ​
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-3.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">VISIONE</a></h5>
                                <p class="card-text text-justify">
                                    La visione delinea quelli che sono i valori, gli ideali e le aspirazioni che ICPN
                                    s'impegna a raggiungere e a trasmettere alla comunità.
                                    <br>
                                    Egli rappresenta il ruolo che la nostra associazione intende avere nel contesto
                                    economico sociale.
                                    <br>
                                    ICPN da forma al futuro ispirando ogni persona a credere nell'educazione, nella
                                    diversità e nel confronto.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'partials/footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <?php include 'partials/foot-script.php'; ?>
    <script>
        var timer=setTimeout(function () {
            document.getElementById("count").innerHTML="1500+";
            document.getElementById("count2").innerHTML="20";
            clearTimeout(timer);
        },1200);
    </script>
</body>

</html>