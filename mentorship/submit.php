<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mentorship Program ICPN 2021</title>
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
                    <h2>Mentorship Program Ed. II</h2>

                    <ol>
                        <li><a href="../index.php">Home</a></li>
                        <li>Mentorship Program Ed. II</li>
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
                                <img src="img/banner.png" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">Mentorship Program Ed. II</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="../team.php">ICPN</a></li>
                                </ul>
                            </div>

                            <?php
                            $target_dir = "cv/";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                            /* Check file size
                            if ($_FILES["fileToUpload"]["size"] > 99999) 
                            {
                                echo "Sorry, your file is too large. ";
                                $uploadOk = 0;
                            }*/

                            // Allow certain file formats
                            if ( $imageFileType != "pdf" && $imageFileType != "docx") 
                            {
                                echo "Sorry, only PDF, DOCX are allowed. ";
                                $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) 
                            {
                                echo "Sorry, your file was not uploaded. ";
                                // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
                                {
                                    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded. ";
                                } else {
                                    echo "Sorry, there was an error uploading your file. ";
                                }
                            }

                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $uni = $_POST['uni'];
                            $facolta = $_POST['facolta'];
                            $anno = $_POST['anno'];
                            $linkedin = $_POST['linkedin'];
                            $wechat = $_POST['wechat'];
                            $email = $_POST['email'];
                            $tel = $_POST['tel'];
                            $cv = $uploadOk;
                            $mentor1 = $_POST['mentor1'];
                            $mentor2 = $_POST['mentor2'];
                            $mentor3 = $_POST['mentor3'];
                            $motivation = $_POST['motivation'];
                            $consenso = $_POST['consenso'];
                            $myfile = fopen("iscritti.csv", "a+") or die("Unable to open file!");
                            fwrite($myfile, $firstname . ";");
                            fwrite($myfile, $lastname . ";");
                            fwrite($myfile, $uni . ";");
                            fwrite($myfile, $facolta . ";");
                            fwrite($myfile, $anno . ";");
                            fwrite($myfile, $linkedin . ";");
                            fwrite($myfile, $wechat . ";");
                            fwrite($myfile, $email . ";");
                            fwrite($myfile, $tel . ";");
                            fwrite($myfile, $cv . ";");
                            fwrite($myfile, $mentor1 . ";");
                            fwrite($myfile, $mentor2 . ";");
                            fwrite($myfile, $mentor3 . ";");
                            fwrite($myfile, $motivation . ";");
                            fwrite($myfile, $consenso . ";\n");
                            fclose($myfile);
                            echo "<br/><h4>La registrazione è stata completata.</h4>";
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