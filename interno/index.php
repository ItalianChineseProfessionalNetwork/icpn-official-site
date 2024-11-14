<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Modulo Interno</title>
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
                    <h2>Modulo Interno</h2>

                    <ol>
                        <li><a href="../index.php">Home</a></li>
                        <li>Modulo Interno</li>
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
                           
                            
                            <h2 class="entry-title">
                                <a href="#">Registrazione Networking Event 2022</a>
                            </h2>




                            <form action="submit.php" method="post" role="form">
                                <div class="form-group">
                                    <label for="">Nome & Cognome</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Andrea Rossi" data-rule="minlen:5" data-msg="" />
                                    <div class="validate"></div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="">E-Mail</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="mario.rossi@gmail.com" data-rule="minlen:5" data-msg="" />
                                    <div class="validate"></div>
                                </div>

                                 <div class="form-group">
                                    <label for="">Descrizione</label>
                                    <textarea type="text" class="form-control" name="description" id="description" rows="5" placeholder="Descrizione personale" data-rule="minlen:50" data-msg="" ></textarea>
                                    <div class="validate"></div>
                                </div>

                                <div class="text-center"><button type="submit" class="btn btn-dark">Invia</button></div>
                            </form>
                          

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