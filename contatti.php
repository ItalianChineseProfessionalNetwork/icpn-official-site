<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contatti - ICPN</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <?php include 'partials/head-style.php'; ?>
</head>

<body>

    <!-- ======= Header Navbar ======= -->
    <?php include 'partials/header.php'; ?>

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contatti</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contatti</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Contact Section ======= -->
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email</h3>
                                    <p>contact@icpn.it</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="info-box">
                                    <a href="assets/img/icpnwechat.jpg" data-gall="portfolioGallery" class="venobox"><i class="bx bx-message"></i>
                                        <h3>WeChat</h3>
                                        <div class="portfolio-info">
                                            <h3><a href="assets/img/icpnwechat.jpg" data-gall="portfolioGallery" class="venobox"></a></h3>
                                            <p>Clicca per QR Code</p>
                                        </div>

                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form id="contactIcpn" action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            
                            <div class="text-center">
                                <button class="g-recaptcha" 
        data-sitekey="6LfUphkqAAAAADDndTd3XKQ-AtqFDfIkPIgJ8LZs" 
        data-callback='onSubmit' 
        data-action='submit' type="submit">Submit</button>
                                <!--<button type="submit">Invia</button> -->
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
        
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
            document.getElementById("contactIcpn").submit();
            }
        </script>

        <!-- ======= Map Section ======= -->
        <!--
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Via%20Egadi,%2010+(ICPN)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section> End Map Section 

        <script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
        <script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
        <script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>
        <div id="mapdiv" style="width: 100%; height: 450px;"></div>
        <script type="text/javascript">
            var map = AmCharts.makeChart("mapdiv", {
                type: "map",
                theme: "dark",
                projection: "equirectangular",
                panEventsEnabled: true,
                backgroundColor: "#9EC2F7",
                backgroundAlpha: 1,
                zoomControl: {
                    zoomControlEnabled: true
                },
                dataProvider: {
                    map: "worldHigh",
                    getAreasFromMap: true,
                    areas: [{
                            "id": "IT",
                            "showAsSelected": true
                        },
                        {
                            "id": "CN",
                            "showAsSelected": true
                        }
                    ]
                },
                areasSettings: {
                    autoZoom: true,
                    color: "#FFFFFF",
                    colorSolid: "#233168",
                    selectedColor: "#233168",
                    outlineColor: "#666666",
                    rollOverColor: "#233168",
                    rollOverOutlineColor: "#000000"
                }
            });
        </script>-->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'partials/footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <?php include 'partials/foot-script.php'; ?>

</body>

</html>