<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Evento ICPN 2021</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <?php include '../news/partials/head-style.php'; ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include '../news/partials/header.php'; ?>

    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Evento ICPN 2021</h2>

                    <ol>
                        <li><a href="../index.php">Home</a></li>
                        <li>Evento ICPN 2021</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Section ======= -->
        <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 entries">

                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="img/ape.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">Evento ICPN 2021</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="../team.php">ICPN</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="#">15 July 2021</a></li>
                                </ul>
                            </div>

                            <?php 
                                $name = $_POST['name'];
                                $hobby = $_POST['hobby'];
                                $contact = $_POST['contact'];
                                $consenso = $_POST['consenso'];
                                $myfile = fopen("iscritti.csv", "a+") or die("Unable to open file!");
                                fwrite($myfile, $name.";");
                                fwrite($myfile, $hobby.";");
                                fwrite($myfile, $contact.";");
                                fwrite($myfile, $consenso.";\n");
                                fclose($myfile);
                                echo "<h4>La registrazione è stata completata</h4>";
                            ?>

                        </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->

                </div><!-- End row -->

            </div><!-- End container -->

        </section><!-- End Blog Section -->
        
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include '../news/partials/footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <?php include '../news/partials/foot-script.php'; ?>

</body>

</html>