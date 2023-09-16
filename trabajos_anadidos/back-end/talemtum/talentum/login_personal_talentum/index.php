<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Login</title>
</head>

<body>



    <section class="form-02-main">
        <div class="container">
            <div class="row">

                <form action="config/logincheck.php" method="post">
                    <div class="col-md-12">
                        <div class="_lk_de">
                            <div class="form-03-main">
                                <div class="logo">
                                    <img src="assets/images/user.png">
                                </div>
                                <!-- ------zona errores---------- -->

                                <?php if (isset($_GET['error'])): ?>

                                <div class=" alert alert-danger text-center" role="alert">

                                    <?php echo $_GET['error'] ?>


                                </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control _ge_de_ol" type="text"
                                        placeholder="Enter Email"  aria-required="true">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control _ge_de_ol" type="text"
                                        placeholder="Enter Password" aria-required="true">
                                </div>

                                <div class="checkbox form-group">

                                    <a href="../../index.php">
                                        <h5 style=""> Tornar a la pagina de inici</h5>
                                    </a>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="_btn_04 btn ">Entrar</button>
                                </div>



                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>