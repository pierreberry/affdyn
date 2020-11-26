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
  <link rel="stylesheet" href="css/solutions.css" />
  <link rel="icon" href="img/logo-02" sizes="100x100">
  <title>Nos Solutions</title>
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
          <div id="affichage" class="card sticky-action scrollspy hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/image_presentation.jpg" />
            </div>
            <div class="card-content">
              <span class="card-title activator">Affichage dynamique<i class="openclose material-icons right">more_vert</i></span>
            </div>
            <div class="card-action">
              <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Plus d'information" href="contact.php?id=Solutions%20Affichage%20Dynamique" target="_blank"><i class="material-icons">contact_support</i></a>
              <?php
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Fiche Produit" href="doc\TVTools.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              } else {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Fiche Produit" href="#modal_tvtools" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              }
              ?>
            </div>
            <div class="card-reveal">
              <span class="card-title">Affichage dynamique<i class="openclose material-icons right">arrow_drop_down</i></span>
              <h5>Fonctionnalités polyvalentes - Automatisations centralisées</h5>
              <div class="video_container">
                <div class="box">
                  <div>
                    <span><video src="img\tvtools-affichage-dynamique.mp4" autoplay="" muted="" loop=""></video></span>
                  </div>
                </div>
              </div>
              <ul>
                <li>Glissez-déposez vos contenus dans les emplacements souhaités</li>
                <li>Dirigez des présentations fluides et engageantes</li>
                <li>Augmentez la productivité de vos collaborateurs.</li>
              </ul>
              <p>
                TVTools Présentation dynamique vous permet de créer des
                présentations engageantes pour vos collaborateurs.
                Glissez-déposez et affichez simultanément en temps réel des
                contenus de formats différents. Présentez un Powerpoint,
                appuyez vos propos avec des analyses Excel, présentez une
                vidéo promotionnelle et créez un document collaboratif sur
                Google Drive en quelques secondes.
              </p>
            </div>
          </div>
        </div>

        <div class="col l6 m12 s12">
          <div id="roombooking" class="card sticky-action scrollspy hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/image_roombooking.jpg" />
            </div>
            <div class="card-content">
              <span class="card-title activator ">RoomBooking<i class="openclose material-icons right">more_vert</i></span>
            </div>
            <div class="card-action">
              <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Plus d'information" href="contact.php?id=Solutions%20RoomBooking" target="_blank"><i class="material-icons">contact_support</i></a>
              <?php
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Fiche Produit" href="doc\RoomBooking.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              } else {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Fiche Produit" href="#modal_roombooking" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              }
              ?>
            </div>
            <div class="card-reveal">
              <img src="" />
              <span class="card-title ">Roombooking<i class="openclose material-icons right">arrow_drop_down</i></span>
              <h5>Réservation de salle</h5>
              <ul>
                <li>Supervisez les plannings de vos salles de réunion</li>
                <li>Réservez votre salle en quelques secondes</li>
              </ul>
              <p>
                Fonctionnel avec les agendas Microsoft Exchange, Google
                Calendar, Lotus Domino (fichiers ICS), GRR, bases SQL, Excel,
                Requea, FarmersWife et Zimbra. Personnalisation graphique.
              </p>
              <p>
                <b>Le principe :</b> Une tablette est installée près de chaque
                salle de réunion pour en afficher le planning et les
                disponibilités de réservations de la journée. Les lumières LED
                sur les côtés de la tablette permettent de connaitre l’état de
                réservation de la salle d’un coup d’œil.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col l6 m12 s12">
          <div id="IPTV" class="card sticky-action scrollspy hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/image_iptv_02.jpg" />
            </div>
            <div class="card-content">
              <span class="card-title activator ">IPTV<i class="openclose material-icons right">more_vert</i></span>
            </div>
            <div class="card-action">
              <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Plus d'information" href="contact.php?id=Solutions%20IPTV" target="_blank"><i class="material-icons">contact_support</i></a>
              <?php
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Fiche Produit" href="doc\TVTools-EHPAD.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              } else {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Fiche Produit" href="#modal_ehpad" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              }
              ?>
            </div>
            <div class="card-reveal">
              <span class="card-title ">IPTV<i class="openclose material-icons right">arrow_drop_down</i></span>
              <h5>La solution IPTV Hybride pour hôtels, camping et Ehpad</h5>
              <ul>
                <li>Télévision, radio et presse</li>
                <li>Evènements dans les établissements.</li>
                <li>
                  Météo, actualités, menus, calendrier, réseaux sociaux,
                  etc...
                </li>
              </ul>
              <p>
                L’IPTV est une technologie qui regroupe la télévision en
                direct, la vidéo à la demande, le TV Replay et auxquels
                s’ajoutent d’autres fonctions telles que l’actualité, la
                météo, les réseaux sociaux, les jeux, les messageries et bien
                plus encore.
              </p>
              <p>
                Particulièrement dédié aux besoins de communication des hôtels
                et des établissements de santé, TVTools IPTV est la solution
                interactive idéale pour animer le séjour de vos résidents.
                L’accès à toutes les fonctionnalités se fait rapidement et
                facilement depuis n’importe quelle télévision, ordinateur,
                tablette et smartphone.
              </p>
            </div>
          </div>
        </div>
        <div class="col l6 m12 s12">
          <div id="scoring" class="card sticky-action scrollspy hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/image_tvt_scoring.png" />
            </div>
            <div class="card-content">
              <span class="card-title activator ">Scoring<i class="openclose material-icons right">more_vert</i></span>
            </div>

            <div class="card-action">
              <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Plus d'information" href="contact.php?id=Solutions%20Scoring" target="_blank"><i class="material-icons">contact_support</i></a>
              <?php
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Fiche Produit" href="doc\Scoring.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              } else {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Fiche Produit" href="#modal_scoring" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              }
              ?>
            </div>
            <div class="card-reveal">
              <span class="card-title ">Scoring<i class="openclose material-icons right">arrow_drop_down</i></span>
              <h5>Solution d'affichage pour stades - Tour de stades</h5>
              <ul>
                <li>Divertissez votre public</li>
                <li>
                  Elaborez des rapports d’activités sur la diffusion
                  d’annonces
                </li>
                <li>Communiquez sur vos offres promotionnelles</li>
              </ul>
              <p>
                Animations des événements et actions de la rencontre sportive.
                Gestion du public. Promotion des sponsors. élaboration de
                rapports d’activité. Personnalisation graphique. Compatible
                avec l’affichage dynamique TVTools.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col l6 m12 s12">
          <div id="questionnaire" class="card sticky-action scrollspy hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/image_questionnaire.jpg" />
            </div>
            <div class="card-content">
              <span class="card-title activator ">Questionnaire de satisfaction<i class="openclose material-icons right">more_vert</i></span>
            </div>
            <div class="card-action">
              <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Plus d'information" href="contact.php?id=Solutions%20Questionnaire" target="_blank"><i class="material-icons">contact_support</i></a>
              <?php
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Fiche Produit" href="doc\Questionnaire.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              } else {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Fiche Produit" href="#modal_questionnaire" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              }
              ?>
            </div>
            <div class="card-reveal">
              <span class="card-title ">Questionnaire de satisfaction<i class="openclose material-icons right">arrow_drop_down</i></span>
              <h5>
                Fonctionnalités polyvalentes - Automatisations centralisées
              </h5>
              <ul>
                <li>Construisez vos questions</li>
                <li>Centralisez les réponses obtenues</li>
                <li>Analysez les résultats</li>
              </ul>
              <p>
                Créez vos enquêtes en quelques secondes, affichez-les dans vos
                zones d’affluence et obtenez immédiatement les premiers
                résultats. Construisez un profil client fidèle à votre cible
                et améliorez votre expérience client.
              </p>
              <p>
                Propreté des locaux, numéro de commande, qualité de l’accueil,
                nom de réservation, adresse mail, âge, CSP… Programmez des
                questionnaires différents dans votre hall d’accueil, votre
                boutique et votre service réclamation.
              </p>
            </div>
          </div>
        </div>
        <div class="col l6 m12 s12">
          <div id="plan" class="card sticky-action scrollspy hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/image_plan_interactif.png" />
            </div>
            <div class="card-content">
              <span class="card-title activator ">Plan Interactif<i class="openclose material-icons right">more_vert</i></span>
            </div>
            <div class="card-action">
              <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="left" data-tooltip="Plus d'information" href="contact.php?id=Solutions%20WayFinding" target="_blank"><i class="material-icons">contact_support</i></a>
              <?php
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable" data-position="right" data-tooltip="Fiche Produit" href="doc\WayFinding.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              } else {
              ?>
                <a class="btn-floating waves-effect waves-light red tooltipped hoverable modal-trigger" data-position="right" data-tooltip="Fiche Produit" href="#modal_wayfinding" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
              <?php
              }
              ?>
            </div>
            <div class="card-reveal">
              <span class="card-title ">Plan intéractif<i class="openclose material-icons right">arrow_drop_down</i></span>
              <h5>- WayFinding -</h5>
              <ul>
                <li>Automatisez les modifications de vos locaux</li>
                <li>Automatisez l’animation des trajets</li>
                <li>Guidez vos visiteurs sans intervention humaine</li>
              </ul>
              <p>
                Modifications automatiques des locaux depuis votre
                gestionnaire de location d’espace. Animation automatique du
                plan par routage. Option "Personnes à mobilité réduite".
                Intégration de zones tactiles. Personnalisation graphique.
              </p>
              <img src="img/image_wayfinding.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="modal_tvtools" class="modal">
      <div class="modal-content">
        <iframe src="doc\TVTools.pdf"></iframe>
      </div>
    </div>

    <div id="modal_roombooking" class="modal">
      <div class="modal-content">
        <iframe src="doc\RoomBooking.pdf"></iframe>
      </div>
    </div>

    <div id="modal_ehpad" class="modal">
      <div class="modal-content">
        <iframe src="doc\TVTools-EHPAD.pdf"></iframe>
      </div>
    </div>

    <div id="modal_scoring" class="modal">
      <div class="modal-content">
        <iframe src="doc\Scoring.pdf"></iframe>
      </div>
    </div>

    <div id="modal_questionnaire" class="modal">
      <div class="modal-content">
        <iframe src="doc\Questionnaire.pdf"></iframe>
      </div>
    </div>

    <div id="modal_wayfinding" class="modal">
      <div class="modal-content">
        <iframe src="doc\WeyFinding.pdf"></iframe>
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