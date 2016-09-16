  <!-- header top  -->
    <header>
        <div class="collapsible-header">
            <div class="row blue-grey darken-3">
                <div class="col m6 s12  testcls"> </div>
                <div class="right-align connexion col  m5 s12 testcls left"><a href="#!">Me connecter</a> ou <a href="#!">créer un compte</a> </div>
                <div class="connexion col m1 testcls valign-wrapper"> <img class="logo_fb waves-effect waves-light" src="images\fb.png" alt="logo FB"></div>
            </div>
            <!-- header middle  -->
            <div class="row ">
                <div class="col m2 s1testcls2 align-right "> </div>
                <div class="col m6 s12 testcls2 valign-wrapper">
                    <div class="taille_logo "> <img src="images\logo_jardin_medium.png" alt="Logo Point Jardin"> </div>
                </div>
                <div class="col m4 s12 testcls2 valign-wrapper" id="panier_down"><a class="waves-effect waves-light btn-large "><i class="material-icons right">shopping_cart</i>Accédez à vôtre panier</a></div>
            </div>
        </div>
    </header>
    <div class="footer-herb"> </div>
    <!-- Nav Dropdown Structure -->
    <ul id="MINERAL" class="dropdown-content">
        <li><a href="#!">Graviers décoratifs</a></li>
        <li><a href="#!">Galets</a></li>
        <li><a href="#!">Ardoise</a></li>
        <li><a href="#!">Garden Stone</a></li>
        <li><a href="#!">La Brique</a></li>
        <li><a href="#!">Pouzzolane</a></li>
        <li><a href="#!">Gros volumes</a></li>
        <li><a href="#!">Le schiste</a></li>
        <li><a href="#!">Le sable</a></li>
        <li><a href="#!">Opus Incertum</a></li>
    </ul>
    <ul id="VEGETAL" class="dropdown-content">
        <li><a href="#!">Ecorce de Pin</a></li>
        <li><a href="#!">Plaquettes Peuplier</a></li>
        <li><a href="#!">Terreau</a></li>
        <li><a href="#!">Terre Végétale</a></li>
        <li><a href="#!">Terre de Bruyère</a></li>
        <li><a href="#!">Chanvre</a></li>
        <li><a href="#!">Noyaux de Fruits</a></li>
    </ul>
    <ul id="ACCESSOIRES" class="dropdown-content">
        <li><a href="#!">Bordures</a></li>
        <li><a href="#!">Engrais</a></li>
        <li><a href="#!">Gazon de placage</a></li>
        <li><a href="#!">Traverse</a></li>
        <li><a href="#!">Gazon</a></li>
        <li><a href="#!">Dalles alvéolées</a></li>
    </ul>
    <ul id="NOS_SERVICES" class="dropdown-content">
        <li><a href="#!">Libraisons et vente</a></li>
        <li><a href="#!">Recherches et précommandes</a></li>
        <li><a href="#!">Votre devis gratuit</a></li>
    </ul>
    <ul id="QUI_SOMMES_NOUS" class="dropdown-content">
        <li><a href="#!">Les créateurs</a></li>
        <li><a href="#!">Notre Philosophie</a></li>
        <li class="divider"></li>
        <li><a href="#!">Notre garantie qualité</a></li>
    </ul>
    <!-- Dropdown Trigger -->
    <nav class="white" role="navigation">
        <div class=" second_nav nav-wrapper"> <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="hide-on-med-and-down">
                <li><a href="index.php">ACCUEIL</a></li>-->
                <li><a class="dropdown-button" href="#!" data-activates="MINERAL">MINERAL<i 
            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="VEGETAL">VEGETAL<i 
            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="ACCESSOIRES">ACCESSOIRES<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="NOS_SERVICES">NOS SERVICES<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="QUI_SOMMES_NOUS">QUI SOMMES NOUS ?<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">MINERAL</a></li>
                <li><a href="badges.html">VEGETAL</a></li>
                <li><a href="collapsible.html">ACCESSOIRES</a></li>
                <li><a href="mobile.html">NOS SERVICES</a></li>
                <li><a href="mobile.html">QUIS SOMMES NOUS ?</a></li>
            </ul>
        </div>
    </nav>

 <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script>

      <!--  Dropdown nav-->
        $(document).ready(function) block
        $(".dropdown-button").dropdown();
    </script>

      <!--  Facebook-->
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1170886279645150'
                , xfbml: true
                , version: 'v2.7'
            });
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
          <!--  Slider-->
        $(document).ready(function () {
            $('.slider').slider();
        });
        $(".button-collapse").sideNav();
    </script>
