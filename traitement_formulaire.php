<?php
if (isset($_POST['send'])) {
    if (!empty($_POST['civility']) && !empty($_POST['first_name']) and !empty($_POST['name']) and !empty($_POST['zip_code']) and !empty($_POST['mail'])) {

        $header = "MIME-Version: 1.0\r\n";
        $header .= 'From:"AffDyn.fr"<contact@affdyn.fr>' . "\n";
        $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
        $header .= 'Content-Transfer-Encoding: 8bit';

        $object = htmlspecialchars($_POST['object']);

        $civility = htmlspecialchars($_POST['civility']);
        $first_name = htmlspecialchars($_POST['first_name']);
        $name = htmlspecialchars($_POST['name']);
        $society = htmlspecialchars($_POST['society']);
        $address = htmlspecialchars($_POST['address']);
        $zip_code = htmlspecialchars($_POST['zip_code']);
        $city = htmlspecialchars($_POST['city']);
        $country = htmlspecialchars($_POST['country']);
        $mail = htmlspecialchars($_POST['mail']);
        $phone = htmlspecialchars($_POST['phone']);
        $comment = htmlspecialchars($_POST['comment']);

        $message =
            '<html>
                <head>
                    <meta charset="utf-8">
                </head>
                <body>
                    <p>Demande de contact de <strong>' . $civility . '</strong> <strong>' . $first_name . '</strong> <strong>' . $name . '</strong></p>
                    <p><strong>Nom de la société : </strong>' . $society . '</p>
                    <p>Coordonnées :</p>
                <ul>
                    <li>Adresse : <strong>' . $address . ' ' . $zip_code . ' ' . $city . ' ' . $country . '</strong></li>
                    <li>Email : <strong>' . $mail . '</strong></li>
                    <li>Téléphone : <strong>' . $phone . '</strong></li>
                </ul>
                <p>Objet de la demande de contact : <strong>' . $object . '</strong></p>
                <p><strong>Message :</strong></p>
                <p>' . $comment . '</p>
                </body>
            </html>';

        mail("patriceberry@outlook.com, patriceberry@affdyn.fr, pierreberry@hotmail.fr", "Demande de contact - AffDyn.fr", $message, $header);
    }
}
?>
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
    <link rel="stylesheet" href="css/traitement_formulaire.css" />
    <link rel="icon" href="img/logo-02" sizes="100x100">
    <title>Merci de votre confiance</title>
</head>

<body>

<div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <header>
        <?php include("php/menu.php"); ?>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col s12 m12 l12">
                    <svg width="50%" height="100%" viewBox="0 0 1145 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M158.228 44.613V81.3785H531.717V281.745H117.75V121.817H80.9525V318.51H568.511V44.613H158.228Z" fill="#303744"/>
                        <path id ="carre2" d="M117.745 81.3782H158.222V121.821H117.745V81.3782Z" fill="#303744"/>
                        <path id ="carre2" d="M171.107 134.686H211.584V175.125H171.107V134.686Z" fill="#D20041"/>
                        <path id ="carre2" d="M40.4748 81.3782H80.9525V121.821H40.4748V81.3782Z" fill="#303744"/>
                        <path id ="carre2" d="M0.00288391 121.819H40.4806V162.261H0.00288391V121.819Z" fill="#D20041"/>
                        <path id ="carre2" d="M80.9523 40.9375H117.75V81.3796H80.9523V40.9375Z" fill="#D20041"/>
                        <path id ="carre2" d="M3.68299 40.9375H40.4806V81.3796H3.68299V40.9375Z" fill="#D20041"/>
                        <path id ="carre2" d="M40.4748 0.496582H80.9525V40.9389H40.4748V0.496582Z" fill="#303744"/>
                        <path id="lettre2" d="M623.887 77.9262L616.061 101.285H631.798L623.887 77.9262ZM635.802 113.28H611.968L608.15 124.552H591.865L614.969 60.7502H632.983L656.087 124.552H639.62L635.802 113.28Z" fill="#D20041"/>
                        <path d="M663.095 60.7502H704.665V73.2027H678.653V86.6502H698.114V98.7378H678.653V124.552H663.095V60.7502Z" fill="#303744"/>
                        <path d="M712.87 60.7502H754.436V73.2027H728.424V86.6502H747.886V98.7378H728.424V124.552H712.87V60.7502Z" fill="#303744"/>
                        <path d="M778.183 60.7502H762.629V124.552H778.183V60.7502Z" fill="#303744"/>
                        <path d="M818.939 60.022C834.128 60.022 845.589 68.567 849.228 82.3794H832.13C829.494 76.9295 824.67 74.2028 818.757 74.2028C809.205 74.2028 802.655 81.2881 802.655 92.5597C802.655 103.828 809.205 110.917 818.757 110.917C824.67 110.917 829.494 108.19 832.13 102.737H849.228C845.589 116.552 834.128 125.005 818.939 125.005C800.108 125.005 786.832 111.647 786.832 92.5597C786.832 73.473 800.108 60.022 818.939 60.022Z" fill="#303744"/>
                        <path d="M898.548 98.2833H874.352V124.548H858.794V60.7502H874.352V85.7413H898.548V60.7502H914.102V124.548H898.548V98.2833Z" fill="#303744"/>
                        <path d="M953.126 77.9262L945.3 101.285H961.041L953.126 77.9262ZM965.041 113.28H941.21L937.389 124.552H921.104L944.211 60.7502H962.223L985.327 124.552H968.863L965.041 113.28Z" fill="#303744"/>
                        <path d="M1051.92 80.9222H1034.73C1032.37 76.6498 1028 74.381 1022.18 74.381C1012.17 74.381 1005.53 81.4662 1005.53 92.5554C1005.53 104.371 1012.27 111.277 1023.45 111.277C1031.18 111.277 1036.55 107.187 1038.92 100.009H1019.18V88.5583H1053.02V103.008C1049.74 114.004 1039.1 125 1022.27 125C1003.17 125 989.706 111.642 989.706 92.5554C989.706 73.4686 1003.08 60.0177 1022.18 60.0177C1037.46 60.0177 1048.56 67.8328 1051.92 80.9222Z" fill="#303744"/>
                        <path d="M1100.79 73.1984H1077.23V86.1019H1098.06V98.0966H1077.23V112.095H1100.79V124.547H1061.67V60.7458H1100.79V73.1984Z" fill="#303744"/>
                        <path  id="lettre2" d="M618.975 201.998C630.708 201.998 637.62 195.271 637.62 183.551C637.62 171.822 630.708 164.916 618.975 164.916H611.605V201.998H618.975ZM653.45 183.551C653.45 202.452 640.349 215.449 619.975 215.449H596.054V151.647H619.975C640.349 151.647 653.45 164.551 653.45 183.551Z" fill="#D20041"/>
                        <path d="M657.185 151.647H674.831L687.202 178.37L699.483 151.647H716.95L694.845 194.362V215.449H679.29V194.362L657.185 151.647Z" fill="#303744"/>
                        <path d="M780.363 151.647V215.449H764.809L738.793 176.098V215.449H723.239V151.647H738.793L764.809 191.181V151.647H780.363Z" fill="#303744"/>
                        <path d="M819.483 168.827L811.661 192.179H827.401L819.483 168.827ZM831.402 204.181H807.571L803.749 215.449H787.468L810.569 151.647H828.583L851.687 215.449H835.22L831.402 204.181Z" fill="#303744"/>
                        <path d="M858.698 151.647H877.074L894.993 195.818L912.732 151.647H931.015V215.449H915.461V177.186L901.181 215.449H888.628L874.256 177.096V215.449H858.698V151.647Z" fill="#303744"/>
                        <path d="M957.774 151.647H942.216V215.449H957.774V151.647Z" fill="#303744"/>
                        <path d="M999.258 201.899C1009.44 201.899 1016.09 194.538 1016.09 183.36C1016.09 171.999 1009.44 164.82 999.258 164.82C988.883 164.82 982.336 171.999 982.336 183.36C982.336 194.538 988.883 201.899 999.258 201.899ZM1019.36 209.539L1033.36 226.353H1014.54L1006.35 215.353C1004.08 215.808 1001.71 216.08 999.258 216.08C981.154 216.08 966.419 202.539 966.419 183.36C966.419 164.183 981.154 150.736 999.258 150.736C1017.45 150.736 1031.91 164.183 1031.91 183.36C1031.91 194.538 1027 203.72 1019.36 209.539Z" fill="#303744"/>
                        <path d="M1040.48 151.643H1056.03V189.813C1056.03 197.356 1059.76 201.722 1067.12 201.722C1074.49 201.722 1078.4 197.356 1078.4 189.813V151.643H1093.96V189.727C1093.96 207.354 1081.59 216.081 1066.85 216.081C1052.03 216.081 1040.48 207.354 1040.48 189.727V151.643Z" fill="#303744"/>
                        <path d="M1144 164.1H1120.44V177.007H1141.27V189.001H1120.44V203H1144V215.449H1104.88V151.647H1144V164.1Z" fill="#303744"/>
                        <path id="lettre2" d="M619.154 306.986C605.419 306.986 594.682 300.172 594.23 287.262H610.784C611.239 292.171 614.333 294.533 618.699 294.533C623.244 294.533 626.156 292.264 626.156 288.536C626.156 276.72 594.23 283.082 594.409 260.453C594.409 248.369 604.323 241.642 617.696 241.642C631.614 241.642 640.983 248.544 641.624 260.725H624.795C624.522 256.635 621.611 254.184 617.424 254.091C613.696 253.998 610.877 255.909 610.877 259.906C610.877 270.998 642.441 265.996 642.441 287.352C642.441 298.079 634.071 306.986 619.154 306.986Z" fill="#D20041"/>
                        <path d="M682.2 292.801C692.389 292.801 699.033 285.44 699.033 274.261C699.033 262.9 692.389 255.722 682.2 255.722C671.832 255.722 665.285 262.9 665.285 274.261C665.285 285.44 671.832 292.801 682.2 292.801ZM682.2 306.981C664.099 306.981 649.365 293.441 649.365 274.261C649.365 255.085 664.099 241.637 682.2 241.637C700.394 241.637 714.859 255.085 714.859 274.261C714.859 293.441 700.304 306.981 682.2 306.981Z" fill="#303744"/>
                        <path d="M739.067 242.549V294.349H759.442V306.347H723.509V242.549H739.067Z" fill="#303744"/>
                        <path d="M766.627 242.549H782.185V280.715C782.185 288.258 785.913 292.624 793.28 292.624C800.647 292.624 804.562 288.258 804.562 280.715V242.549H820.113V280.629C820.113 298.256 807.742 306.984 793.005 306.984C778.181 306.984 766.627 298.256 766.627 280.629V242.549Z" fill="#303744"/>
                        <path d="M827.583 242.549H876.978V254.998H860.056V306.347H844.502V254.998H827.583V242.549Z" fill="#303744"/>
                        <path d="M900.37 242.549H884.812V306.347H900.37V242.549Z" fill="#303744"/>
                        <path d="M941.845 292.801C952.031 292.801 958.674 285.44 958.674 274.261C958.674 262.9 952.031 255.722 941.845 255.722C931.47 255.722 924.923 262.9 924.923 274.261C924.923 285.44 931.47 292.801 941.845 292.801ZM941.845 306.981C923.741 306.981 909.007 293.441 909.007 274.261C909.007 255.085 923.741 241.637 941.845 241.637C960.035 241.637 974.501 255.085 974.501 274.261C974.501 293.441 959.946 306.981 941.845 306.981Z" fill="#303744"/>
                        <path d="M1040.28 242.549V306.347H1024.72L998.709 266.996V306.347H983.151V242.549H998.709L1024.72 282.079V242.549H1040.28Z" fill="#303744"/>
                        <path d="M1074.68 306.986C1060.94 306.986 1050.2 300.172 1049.75 287.262H1066.31C1066.76 292.171 1069.86 294.533 1074.22 294.533C1078.77 294.533 1081.68 292.264 1081.68 288.536C1081.68 276.72 1049.75 283.082 1049.93 260.453C1049.93 248.369 1059.85 241.642 1073.22 241.642C1087.14 241.642 1096.51 248.544 1097.15 260.725H1080.32C1080.05 256.635 1077.13 254.184 1072.95 254.091C1069.22 253.998 1066.4 255.909 1066.4 259.906C1066.4 270.998 1097.96 265.996 1097.96 287.352C1097.96 298.079 1089.6 306.986 1074.68 306.986Z" fill="#303744"/>
                        <path id="logo_validate" d="M338.496 265.638L338.487 265.648C337.19 266.95 335.408 267.689 333.543 267.689C331.678 267.689 329.896 266.95 328.599 265.648L328.59 265.639L260.81 197.916L260.81 197.916C255.728 192.839 255.733 184.617 260.807 179.557L260.81 179.554L269.297 171.075C274.38 165.997 282.609 165.997 287.692 171.075L330.009 213.349L333.543 216.879L337.077 213.349L451.423 99.1187C456.507 94.0395 464.746 94.0438 469.815 99.1156L469.818 99.1187L478.305 107.597C483.387 112.674 483.382 120.896 478.308 125.956L478.305 125.96L338.496 265.638Z" stroke="#303744" stroke-width="0"/>
                    </svg>

                </div>
                <div class="row">
                    <div class="col l4 offset-l4 m12">
                        <h4>Merci pour votre demande !</h4>
                        <p>Pour une réponse plus rapide, contactez moi directement </p>
                        <div class="card">
                            <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">mail</i>
                                <input disabled value="patriceberry@affdyn.fr" id="mail" type="text" class="validate">
                                <label class="active" for="mail">Email</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">phone</i>
                                <input disabled value="07.81.03.17.90" id="phone" type="text" class="validate">
                                <label class="active" for="phone">Téléphone</label>
                            </div>
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
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>

    <script>
        gsap.from('#carre', { opacity: 0, duration: 0.8, y: -20, stagger: 0.1, ease: Bounce.easeOut })
        gsap.from('#lettre', { opacity: 0, duration: 0.8, y: -20, stagger: 0.1, ease: Bounce.easeOut })
        gsap.from('#carre2', { opacity: 0, duration: 0.8, y: -20, stagger: 0.1, ease: Bounce.easeOut })
        gsap.from('#lettre2', { opacity: 0, duration: 0.8, y: -20, stagger: 0.1, ease: Bounce.easeOut })
        gsap.fromTo('#logo_validate', 1.5, {scale: 0, strokeWidth: 0, fill:"transparent"} , {scale: 1, strokeWidth: 5, fill:"#D20041", ease: Bounce.easeOut});
    </script>
</body>

</html>