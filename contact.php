<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="icon" href="img/logo-02" sizes="100x100">
    <title>Contactez-nous !</title>
</head>

<body>

<div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <header>
        <?php include("php/menu.php"); ?>
    </header>

    <main>
        <div class="container left-align">
            <div class="card">
                <div class="row">
                    <form class="col l12 s12" method="POST" onsubmit="return verif()" action="traitement_formulaire.php">
                        <div class="row">
                            <div class="input-field col l2 s4">
                                <i class="material-icons prefix">person</i>
                                <select id="selection" name="civility">
                                    <option value="" class="non hide-on-small-only" disabled selected>Civilité</option>
                                    <option value="Monsieur">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                </select>
                            </div>
                            <div class="input-field col l4 s4">
                                <input name="first_name" id="first_name" type="text" class="validate" >
                                <label for="first_name">Prénom</label>
                            </div>
                            <div class="input-field col l6 s4">
                                <input name="name" id="name" type="text" class="validate" >
                                <label for="name">Nom</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 s12">
                                <i class="material-icons prefix">business_center</i>
                                <textarea name="society" id="society" class="materialize-textarea"></textarea>
                                <label for="society">Société | Dénomination</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 s12">
                                <i class="material-icons prefix">home_work</i>
                                <input name="address" id="address" type="text" class="validate"></input>
                                <label for="address">Adresse</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l2 s4">
                                <i class="material-icons prefix">my_location</i>
                                <input name="zip_code" id="zip_code" type="text" class="validate" ></textarea>
                                <label for="zip_code">Code Postal</label>
                            </div>
                            <div class="input-field col l4 s4">
                                <textarea name="city" id="city" class="materialize-textarea"></textarea>
                                <label for="city">Ville</label>
                            </div>
                            <div class="input-field col l6 s4">
                                <textarea name="country" id="country" class="materialize-textarea"></textarea>
                                <label for="country">Pays</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 s6">
                                <i class="material-icons prefix">contacts</i>
                                <input name="mail" id="mail" type="email" class="validate" ></input>
                                <label for="mail">Email</label>
                            </div>
                            <div class="input-field col l6 s6">
                                <input type="tel" id="phone" name="phone">
                                <label for="phone">Téléphone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 s12">
                                <i class="material-icons prefix">turned_in</i>
                                <textarea name="object" id="object" class="materialize-textarea"><?php if (isset($_GET['id'])) {
                                                                                                        echo $_GET['id'];
                                                                                                    } ?></textarea>
                                <label for="object">Objet</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l12 s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea name="comment" id="comment" class="materialize-textarea"></textarea>
                                <label for="comment">Commentaire | Message</label>
                            </div>
                        </div>
                        <div class="row center-align">
                            <button class="btn waves-effect waves-light red" type="submit" name="send">Submit
                                <i class="material-icons right ">send</i>
                            </button>
                        </div>
                    </form>
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