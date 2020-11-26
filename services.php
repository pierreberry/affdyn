<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/services.css" />
    <link rel="icon" href="img/logo-02" sizes="100x100">
    <title>Nos services</title>
</head>

<body>

<div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <header>
        <?php include("php/menu.php"); ?>
    </header>

    <main>

        <div class="container">
            <div class="row">
                <div class="col l6 m12 s12">
                    <div id="conseil" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Conseil | Audit<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-action">
                            <a href="contact.php">plus d'information</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Conseil | Audit<i class="openclose material-icons right">arrow_drop_down</i></span>
                        </div>
                    </div>
                </div>
                <div class="col l6 m12 s12">
                    <div id="installation" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Installation<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-action">
                            <a href="contact.php">plus d'information</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Installation<i class="openclose material-icons right">arrow_drop_down</i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l6 m12 s12">
                    <div id="formation" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Formation<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-action">
                            <a href="contact.php">plus d'information</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Formation<i class="openclose material-icons right">arrow_drop_down</i></span>
                        </div>
                    </div>
                </div>
                <div class="col l6 m12 s12">
                    <div id="maintenance" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Maintenance<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-action">
                            <a href="contact.php">plus d'information</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Maintenance<i class="openclose material-icons right">arrow_drop_down</i></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="page-footer white">
        <?php include("php/footer.php"); ?>
    </footer>
    <!--JavaScript at end of body for optimized loading-->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
</body>

</html>