<?php session_start() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Briollay Pop Festival</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/hover-min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    </head>
    <body>
    <a class="cd-nav-trigger cd-img-replace">Open navigation</a>
    <nav id="cd-vertical-nav">
        <ul>
            <li>
                <a href="#section1" data-number="1">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Item 1</span>
                </a>
            </li>
            <li>
                <a href="#section2" data-number="2">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Item 2</span>
                </a>
            </li>
            <li>
                <a href="#section3" data-number="3">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Item 3</span>
                </a>
            </li>
        </ul>
    </nav>
    <section id="section1" class="cd-section">
        <a href="#section2" class="cd-scroll-down cd-img-replace"></a>
        <div class="col-md-12">
            <div class="triangledown">
                <div class="section1logocentre" align="center">
                    <img src="img/lesfreaks.png" alt="logo" id="logo">
                </div>
            </div>
            <div class="triangledownbordure"></div>
            <div class="section1divgauche">
                <p class="section1textegauche" id="museo">22 & 23 Juillet
                </p>
            </div>
            <div class="section1logocentre" align="center">
                <img src="img/lesfreaks.png" alt="logo">
            </div>
            <div class="section1divdroite">
                <p class="section1textedroite" id="museo">Angers FR</p>
            </div>
            <h1 class="animated fadeInDown" id="museo">BRIOLLAY POP FESTIVAL</h1>

            <div id="carousel-example" class="carousel slide slider" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="row">
                    <div class="col-xs-offset-3 col-xs-6">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="carousel-content">
                                    <div>
                                        <h3>Os Noctambulos / The Blind Suns
                                            <br> Botine / Graal
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-content">
                                    <div>
                                        <h3>Terreur Passion : Fleur d'Occident
                                            <br> Libido Fuzz / Humbros
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-content">
                                    <div>
                                        <h3>Os Noctambulos / The Blind Suns
                                            <br> Botine / Graal
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Controls --> <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!-- <h2 class="animated fadeInUp">MACHIN / BIDULE / TRUC / TRUCMUHE /  MACHIN / MACHIN / MACHIN</h2>-->
        </div>
    </section>
    <section id="section2">
        <div id="div2"></div>
        <h3 id="museo" class="animated bounceInLeft">LE FESTIVAL</h3>
        <div id="totalsection2">
            <div class="blocsection2 animated fadeInDown">
                <p>
                    "Dieu acheva au septième jour son œuvre: et il se reposa au septième jour de toute son œuvre.

                    Dieu chilla pépère le septième jour, et il le sanctifia, parce qu'en ce jour il créa la musique Pop.

                    Ainsi les Freaks créèrent le BPF ."
                </p>
            </div>
            <div class="carresection2 hvr-grow-shadow">
            </div>
        </div>
    </section>
    <section id="section3">
        <div id="div3"></div>
        <div id="divideo"></div>
    </section>

    <section id="section4">
        <div id="div4"></div>
        <h3 id="museo">LE PROGRAMME</h3>
        <div class="bloc1section4 progra">
            <p>19h00 : Os Noctambulos</p>
            <p>20h00 : The Bind Suns</p>
            <p>21h00 : Terreur Passion </p>
            <p>22h00 : Botine</p>
            <p>23h00 : Graal</p>
            <p>00h00 : Florian Tostini</p>
        </div>
        <div class="bloc2section4 progra">
            <p>19h00 : Humbros</p>
            <p>20h00 : Groupe </p>
            <p>21h00 : Groupe </p>
            <p>22h00 : Groupe </p>
            <p>23h00 : Groupe </p>
            <p>00h00 : Groupe </p>
        </div>
    </section>

    <section id="section5">
        <h3 id="museo" class="animated bounceInLeft">LES ARTISTES</h3>
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-4">
                <button data-toggle="modal" data-target="#artiste1">
                    <div class="imageartiste"></div>
                </button>
            </div>
            <div class="col-md-4">
                <button data-toggle="modal" data-target="#artiste2">
                    <div class="imageartiste"></div>
                </button>
            </div>
            <div class="col-md-4">
                <button data-toggle="modal" data-target="#artiste3">
                    <div class="imageartiste"></div>
                </button>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-4">
                <button data-toggle="modal" data-target="#artiste4">
                    <div class="imageartiste"></div>
                </button>
            </div>
            <div class="col-md-4">
                <button data-toggle="modal" data-target="#artiste5">
                    <div class="imageartiste"></div>
                </button>
            </div>
            <div class="col-md-4">
                <button data-toggle="modal" data-target="#artiste6">
                    <div class="imageartiste"></div>
                </button>
            </div>
        </div>
    </section>

    <section id="section6">
        <h3 id="museo" class="animated bounceInLeft">TIQUETS</h3>
        <p class="textup">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
            fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
            fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
            fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
        </p>
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-4">
                <div class="imagetiquet"></div>
            </div>
            <div class="col-md-4">
                <div class="imagetiquet"></div>
            </div>
            <div class="col-md-4">
                <div class="imagetiquet"></div>
            </div>
        </div>
        <p class="textdown">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
            fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
            fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
            fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
        </p>
        <div id="div6"></div>
    </section>

    <section id="section7">
    </section>

    <section id="section8">
        <div class="col-md-12">
            <div class="col-md-6 contact">
                <h3>Nous somme ici :</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
                    fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
                    fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
                </p>
                <h3>Contact</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
                    fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi consequatur cupiditate dolores, dolorum ducimus esse excepturi,
                    fugiat fugit in iste itaque libero quis rerum tenetur vitae voluptas voluptate. Animi, magni.
                </p>
            </div>
            <div class="col-md-6">
                <div class="contact">
                    <?php if (array_key_exists('errors', $_SESSION)): ?>
                        <div class="alert-danger alert">
                            <?= implode('<br>', $_SESSION['errors']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (array_key_exists('success', $_SESSION)): ?>
                        <div class="alert-danger success">
                            Votre message à bien été envoyé
                        </div>
                    <?php endif; ?>
                    <form action="post_contact.php" method="POST">
                        <div class="col-md-12">
                            <div class="form-group animated bounceInRight">
                                <input type="text" placeholder="Nom" class="form-control" name="name" id="inputname"
                                       value="<?= isset($_SESSION['input']['name']) ? $_SESSION['input']['name'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group animated bounceInRight">
                                <label for="inputemail"></label>
                                <input type="text" placeholder="Email" class="form-control" name="email" id="inputemail"
                                       value="<?= isset($_SESSION['input']['email']) ? $_SESSION['input']['email'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group animated bounceInRight">
                                <label for="inputmessage" class="labela"></label>
                                <textarea placeholder="Votre message" name="message" id="inputmessage" class="textare"
                                          cols="30"
                                          rows="10" <?= isset($_SESSION['input']['message']) ? $_SESSION['input']['message'] : ''; ?>></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btnsub animated bounceInUp">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="div8"></div>
    </section>
    <!--modal-->
    <div class="modal fade" id="artiste1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-md-12 popup">
                    <div class="col-md-6 imagepopup imagepopup1"></div>
                    <div class="col-md-6 textpopup">
                        <h1 id="titlepopup">Os Noctambulos</h1>
                        <p id="txtart">Enfant surdoué de la scène garage parisienne, les Os Noctambulos sortent de leur
                            nébuleuse afin de se mêler à des sonorités psychédéliques et à une pop surf énergique et savante.
                            <br>
                            Véritable machine à remonter le temps avec des morceaux très marqués par le rock garage des
                            années 60’s, il n’en demeure qu’ils ont su affirmer dès leur premier album Corsica Garden
                            (2014) une véritable créativité et un nouveau souffle dans un genre où il est difficile de
                            se démarquer.
                            <br>
                            Plébiscité par la critique, ils ont su marquer durablement le paysage musical
                            national et outre-manche en cumulant les tournées (s’affichant comme figure de poupe du
                            Bristol Psych Fest) et en se faisant remarquer par leur présence scénique.
                            <br>Tout laisse à penser que leur prochain opus sera aussi sauvage que leur prestation live
                            ainsi qu’à l’image
                            de leur dernier EP (sorti en 2015 chez Requiem Pour Un Twister).
                            <br>
                            Influences : The Byrds, Human Expression, The Night Beats, Movie Star Junkies, Love, Sly &
                            The Family Stone.


                        </p>
                        <a href="#"><i class="rs fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                        <a href="#"><i class=" rs fa fa-soundcloud fa-2x" aria-hidden="true"></i></a>
                        <a href="#"><i class="rs fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                        <a href="#"><i class="rs fa fa-youtube fa-2x" aria-hidden="true"></i></a>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/jquery.tubular.1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/tub.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>