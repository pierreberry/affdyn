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
    <link rel="stylesheet" href="css/produits.css" />
    <link rel="icon" href="img/logo-02" sizes="100x100">
    <title>Nos produits</title>
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
                <!-- CARD ECRANS -->
                <div class="col l6 m12 s12">
                    <div id="ecran" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img\Carte Ecran Moniteur Panneau LED v2.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Ecrans | Moniteurs | Panneaux LED<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Ecrans | Moniteurs | Panneaux LED<i class="openclose material-icons right">arrow_drop_down</i></span>
                            <ul class="collapsible popout">
                                <!---------- INDOOR ------------->
                                <li>
                                    <div class="collapsible-header hoverable">Moniteur Indoor</div>
                                    <div class="collapsible-body">
                                        <span>
                                            <div class="row">
                                                <!-- PHILIPS -->
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_philips_indoor" src="img\logo_produits\philips.jpg">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_philips_indoor"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_philips_indoor">Gamme Philips Professionnal</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- IIYAMA -->
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_iiyama_indoor" src="img\logo_produits\IIYama.png">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_iiyama_indoor"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_iiyama_indoor">Gamme IIyama</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- HYUNDAI -->
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_hyundai_indoor" src="img\logo_produits\Hyundai.png">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_hyundai_indoor"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_hyundai_indoor">Gamme Hyundai IT</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ALLSEE -->
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_allsee_indoor" src="img\logo_produits\Allsee.png">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_allsee_indoor"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_allsee_indoor">Gamme Allsee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </li>
                                <!---------- OUTDOOR ------------->
                                <li>
                                    <div class="collapsible-header hoverable">Moniteur Outdoor</div>
                                    <div class="collapsible-body">
                                        <span>
                                            <div class="row">
                                                <!-- HYUNDAI -->
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_hyundai_outdoor" src="img\logo_produits\Hyundai.png">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_hyundai_outdoor"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_hyundai_outdoor">Gamme Hyundai IT</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ALLSEE -->
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_allsee_outdoor" src="img\logo_produits\Allsee.png">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red" data-target="modal_allsee_outdoor"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_allsee_outdoor">Gamme Allsee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </li>
                                <!---------- LED ------------->
                                <li>
                                    <div class="collapsible-header hoverable">Panneaux LED</div>
                                    <div class="collapsible-body">
                                        <span>
                                            <div class="row">
                                                <!-- PHILIPS -->
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_philips_led" src="img\logo_produits\philips.jpg">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_philips_led"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_philips_led">Gamme Philips Professionnal</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col l6 m6 s6">
                                                    <div class="card card_ecrans hoverable">
                                                        <div class="card-image">
                                                            <img class="modal-trigger" data-target="modal_allsee_led" src="img\logo_produits\Allsee.png">
                                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_allsee_led"><i class="material-icons">add</i></a>
                                                        </div>
                                                        <div class="card-content">
                                                            <p class="modal-trigger" data-target="modal_allsee_led">Gamme Allsee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header hoverable">LCD Player</div>
                                    <div class="collapsible-body"></div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <!-- CARD PLAYERS -->
                <div class="col l6 m12 s12">
                    <div id="player" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/Carte Players.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Players<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <div class="row">
                                <span class="card-title">Players<i class="openclose material-icons right">arrow_drop_down</i></span>
                            </div>
                            <div class="row">
                                <!-- PLAYER ANDROID -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_android" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20Android">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_android"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_android">Player
                                                Android</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- PLAYER TVT HD5 -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_HD5" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVT%20HD5">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_HD5"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_HD5">Player TVT
                                                HD5</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- PLAYER TVT HD10 -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_HD10" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVT%20HD10">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_HD10"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_HD10">Player TVT
                                                HD10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- PLAYER TVT UHD10X -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_UHD10X" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVT%20UHD10X">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_UHD10X"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_UHD10X">Player TVT
                                                UHD10X</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- PLAYER TVTWALL 4 -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_Wall4" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%204">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_Wall4"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_Wall4">Player
                                                TVTWall 4</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- PLAYER TVTWALL 5 -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_Wall5" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%205">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_Wall5"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_Wall5">Player
                                                TVTWall 5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- PLAYER TVTWALL 9 -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_Wall9" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%209">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_Wall9"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_Wall9">Player
                                                TVTWall 9</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- PLAYER TVTWALL 16 -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_Wall16" src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%2016">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_Wall16"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_Wall16">Player
                                                TVTWall 16</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- PLAYER TVT AIRCAST -->
                                <div class="col l4 m6 s6">
                                    <div class="card card_player">
                                        <div class="card-image">
                                            <img class="modal-trigger" data-target="modal_aircast" src="http://placehold.jp/99ccff/003366/150x150.png?text=TVT%20Aircast">
                                            <a class="btn-floating modal-trigger halfway-fab waves-effect waves-light red hoverable" data-target="modal_aircast"><i class="material-icons">add</i></a>
                                        </div>
                                        <div class="card-content">
                                            <span class="modal-trigger card-title" data-target="modal_aircast">TVT
                                                Aircast</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- CARD TOTEMS -->
                <div class="col l6 m12 s12">
                    <div id="totem" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Totems<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Totems<i class="openclose material-icons right">arrow_drop_down</i></span>
                        </div>
                    </div>
                </div>
                <!-- CARD BORNES -->
                <div class="col l6 m12 s12">
                    <div id="borne" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Bornes<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Bornes<i class="openclose material-icons right">arrow_drop_down</i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- CARD TRANSPORT SIGNAL -->
                <div class="col l6 m12 s12">
                    <div id="transport" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Transport du signal<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Transport du signal<i class="openclose material-icons right">arrow_drop_down</i></span>
                        </div>
                    </div>
                </div>
                <!-- CARD SUPPORT -->
                <div class="col l6 m12 s12">
                    <div id="supports" class="card sticky-action scrollspy hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/image_presentation.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator">Supports<i class="openclose material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">Supports<i class="openclose material-icons right">arrow_drop_down</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-------------------------------------------------------------------------- MODAL ------------------------------------------------------------------------------------------>
        <!--------------------------------------------------------- MODAL ECRANS | MONITEURS | PANNEAUX LED ------------------------------------------------------------------------->
        <!--MODAL PHILIPS-->
        <div id="modal_philips_indoor" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>Philips Professionnal Display Solutions</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\philips.jpg">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>Découvrez la gamme de Solutions d'Affichage de Philips Professionnal Displays Solutions.
                                Quelque soit votre secteur d'activité, vous trouverez le moniteur le mieux adapté du 10" au 98", tactile, haute luminosité, 18/7 ou 24/7, mur d'images.
                                Les écrans équipés nativement d'Android accueilleront nativement TVTools, en accès direct sur l'AppStore Philips !
                                Installez votre solution de communication dynamique directement avec la télécommande !</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme Philips.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=Philips%20Indoor"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_philips_led" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>Philips Professionnal Display Solutions</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\philips.jpg">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>Les modules LED Philips vous permettent de créer des murs vidéo sans cadre de n'importe quelle forme, taille ou résolution dans un environnement Indoor.
                                Les LED des modules Philips sont connectées par fil d'or offrant une faible consommation d'énergie, une luminosité plus importante et une durée de vie augmentée.
                                Profitez d'un service haut de gamme, d'une maintenance en façade et d'une garantie constructeur 3 ans.
                                TVTools vous permettra de gérer la diffusion quelle que soit la résolution de l'écran.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme Philips LED.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=Gamme%20Philips%20LED"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MODAL IIYAMA-->
        <div id="modal_iiyama_indoor" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>IIyama</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\IIYama.png">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>iiyama est l'une des références parmi les fabricants de moniteurs dans le monde.
                                iiyama poursuit une ambition majeure : fournir des solutions d'affichage professionnelles pour l'univers informatique, offrant le meilleur niveau de performances et répondant aux critères de qualité les plus exigeants tout en conservant des prix parmi les plus compétitifs du marché.
                                Vous trouverez une gamme étendue du 10" au 98", tactile, haute luminosité, du 12/7 au 24/7, mur d'images, open frame. Les écrans équipés d'Android accueilleront nativement TVTools.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme IIYama.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=IIYama%20Indoor"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MODAL HYUNDAI-->
        <div id="modal_hyundai_indoor" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>Huyndai IT</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\Hyundai.png">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>Equipée de la meilleure technologie d'affichage numérique extérieure, la gamme Hyundai Outdoor est devenue une référence internationale pour la diffusion dynamique de message en haute résolution.
                                Les moniteurs Hyundai peuvent être utilisés au format portait ou paysage et peuvent, en option, disposer d'une interface tactile.
                                La maintenance par l'avant permet une maintenance aisée.
                                Quel que soit l'environnement de diffusion, grâce à leurs dalles haute luminosité, vous pourrez offrir une qualité de diffusion constante.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme Hyundai.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=Gamme%20Hyundai"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_hyundai_outdoor" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>Huyndai IT</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\Hyundai.png">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>Hyundai IT Digital Signage dispose d'une large gamme d'écrans qui peuvent être installés dans des environnements hétérogènes, avec une orientation paysage ou portrait, Mur d'Image, derrière une vitrine, … </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme Hyundai.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=Gamme%20Hyundai"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MODAL ALLSEE-->
        <div id="modal_allsee_indoor" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>Allsee Technologies</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\Allsee.png">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>Fondée en 2007, Allsee Technologies est un fabricant OEM d'écrans LCD et LED numériques et d'écrans tactiles.
                                Doté d'une expertise issue de 10 années Allsee produit actuellement des solutions pour approvisionner les marchés asiatique, africain, britannique, américain et européen.
                                Grâce à Allsee, nous vous proposons une très large gamme de solutions du LCD 10" au mur d'image 10x10 avec toutes les tailles d'écrans avec une plage de diffusion jusqu'à 24/7.
                                Notre solution de d'Affichage Dynamique TVTools peut s'installer directement sur les écrans équipés d'Android.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme Allsee.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=Gamme%20Allsee%20Indoor"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_allsee_outdoor" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>Allsee Technologies</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\Allsee.png">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>Fondée en 2007, Allsee Technologies est un fabricant OEM d'écrans LCD et LED numériques et d'écrans tactiles.
                                Doté d'une expertise issue de 10 années Allsee produit actuellement des solutions pour approvisionner les marchés asiatique, africain, britannique, américain et européen.
                                Grâce à Allsee, nous vous proposons une très large gamme de solutions du LCD 10" au mur d'image 10x10 avec toutes les tailles d'écrans avec une plage de diffusion jusqu'à 24/7.
                                Notre solution de d'Affichage Dynamique TVTools peut s'installer directement sur les écrans équipés d'Android.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme Allsee.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=Gamme%20Allsee%20Outdoor"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_allsee_led" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h2>Allsee Technologies</h2>
                </div>
                <div class="container-fluid">
                    <div class="row valign-wrapper">
                        <div class="col l4">
                            <img class="responsive-img" src="img\logo_produits\Allsee.png">
                        </div>
                        <div class="col l6 offset-l1">
                            <h3>Descriptif</h3>
                            <p>Fondée en 2007, Allsee Technologies est un fabricant OEM d'écrans LCD et LED numériques et d'écrans tactiles.
                                Doté d'une expertise issue de 10 années Allsee produit actuellement des solutions pour approvisionner les marchés asiatique, africain, britannique, américain et européen.
                                Grâce à Allsee, nous vous proposons une très large gamme de solutions du LCD 10" au mur d'image 10x10 avec toutes les tailles d'écrans avec une plage de diffusion jusqu'à 24/7.
                                Notre solution de d'Affichage Dynamique TVTools peut s'installer directement sur les écrans équipés d'Android.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" href="doc\Gamme Allsee.pdf" target="_blank" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php?id=Gamme%20Allsee%20LED"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL ANDROID -->
        <div id="modal_android" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player Android</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20Android">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris, sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL TVT HD5 -->
        <div id="modal_HD5" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVT HD5</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVT%20HD5">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris, sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL TVT HD10 -->
        <div id="modal_HD10" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVT HD10</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVT%20HD10">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris,
                                sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL TVT UHD10X -->
        <div id="modal_UHD10X" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVT UHD10X</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVT%20UHD10X">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris,
                                sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL TVTWALL 4 -->
        <div id="modal_Wall4" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVTWall 4</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%204">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris,
                                sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL TVTWALL 5 -->
        <div id="modal_Wall5" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVTWall 5</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%205">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris,
                                sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL TVTWALL 9 -->
        <div id="modal_Wall9" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVTWall 9</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%209">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris,
                                sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL TVTWALL 16 -->
        <div id="modal_Wall16" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVTWall 16</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=Player%20TVTWall%2016">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris,
                                sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL TVT AIRCAST -->
        <div id="modal_aircast" class="modal">
            <div class="modal-content">
                <div class="title_pages col l12 m12 s12">
                    <h1>Player TVT Aircast</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col l2">
                            <img src="http://placehold.jp/99ccff/003366/150x150.png?text=TVT%20Aircast">
                        </div>
                        <div class="col l7 offset-l3">
                            <h3>Descriptif</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel maximus mauris,
                                sit
                                amet tristique velit. Proin quis feugiat sapien. Phasellus purus sapien, dapibus vel
                                diam et, efficitur tincidunt neque. Sed maximus quis arcu a aliquam. Nam mi lorem,
                                facilisis aliquam massa a, commodo auctor mauris.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2 offset-l4">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Fiche produits"><i class="material-icons">attachment</i></a>
                        </div>
                        <div class="col l2">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Besoin d'informations ?" href="contact.php"><i class="material-icons">contacts</i></a>
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