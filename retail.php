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
    <link rel="stylesheet" href="css/activite.css" />
    <link rel="icon" href="img/logo-02" sizes="100x100">
    <title>Activité - Retail</title>
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
            <div class="col l12 s12 m12">
                <h2 class="header">Retail</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="bgretail banniere_activite col l12 m12 s12"></div>
                </div>
                <div class="mescards row">
                    <div class="col l3">
                        <div class="transparent card hoverable">
                            <div class="img_card card-image">
                                <img src="img/activity/inactivity/innovez.png">
                            </div>
                            <div class="macarte content-activity card-content">
                                <h5>Innovez</h5>
                                <p>Affichez sur un bandeau d'écran ou en mur d'image des visuels de vos plats, menus, créations pour activer les papilles. </p>
                                <?php
                                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Mur d'affichage" href="doc\Mur Images.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                } else {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Mur d'affichage" href="#ùodal_mur_images" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col l3">
                        <div class="transparent card hoverable">
                            <div class="img_card card-image">
                                <img src="img/activity/inactivity/communiquez.png">
                            </div>
                            <div class="macarte content-activity card-content">
                                <h5>Communiquez</h5>
                                <p>Diffusez vos suggestions, offres spéciales, menu, afterworks, …
                                    Générez du revenu en diffusant des offres de vos partenaires.
                                </p>
                                <?php
                                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Ecran d'affichage dynamique" href="doc\Affichage Dynamique.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                } else {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Ecran d'affichage dynamique" href="#modal_affichage_dynamique" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col l3">
                        <div class="transparent card hoverable">
                            <div class="img_card card-image">
                                <img src="img/activity/inactivity/fidelisez.png">
                            </div>
                            <div class="macarte content-activity card-content">
                                <h5>Fidélisez</h5>
                                <p>Faites découvrir vos offres de fidélisation : carte, site web, réseaux sociaux, …</p>
                                <?php
                                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Questionnaire" href="doc\Questionnaire.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                } else {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Questionnaire" href="#modal_questionnaire" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col l3">
                        <div class="transparent card hoverable">
                            <div class="img_card card-image">
                                <img src="img/activity/inactivity/informez.png">
                            </div>
                            <div class="macarte content-activity card-content">
                                <h5>Informez</h5>
                                <p>Captez l’attention de vos clients en informant des actualités locale, prévisions météorologiques, conditions de circulation, …</p>
                                <?php
                                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="TVTools" href="doc\TVTools.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                } else {
                                ?>
                                    <a class="btn-floating btn-small waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="TVTools" href="#modal_tvtools" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div>
                    <a href="contact.php?id=Retail" class="col l4 offset-l4 s12 button_contact">
                        <span class="away">Une question ?</span>
                        <span class="over">Une réponse !</span>
                    </a>
                </div>
            </div>
        </div>

        <div id="modal_mur_images" class="modal">
            <div class="modal-content">
                <iframe src="doc\Mur Images.pdf"></iframe>
            </div>
        </div>

        <div id="modal_affichage_dynamique" class="modal">
            <div class="modal-content">
                <iframe src="doc\Affichage Dynamique.pdf"></iframe>
            </div>
        </div>

        <div id="modal_questionnaire" class="modal">
            <div class="modal-content">
                <iframe src="doc\Questionnaire.pdf"></iframe>
            </div>
        </div>

        <div id="modal_tvtools" class="modal">
            <div class="modal-content">
                <iframe src="doc\TVTools.pdf"></iframe>
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