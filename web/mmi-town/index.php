<!DOCTYPE html>
<html lang="fr" dir="ltr" id="accueil">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMI Town</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.css"
        integrity="sha256-+dIh4jG2jQTHZwW81yUo8h6tzXWcNumyNL5XPZbwp1E=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logo-blanc.png">
    <script type="text/javascript" src="js/parallax.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="fullPage">
        <div class="section">
            <header>
                <div class="parallax">
                
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                    <span class="four"></span>
                    <span class="five"></span>
                    <span class="six"></span>
                    <span class="seven"></span>
                </div>

                <nav class="fixed">
                    <a href="#accueil" class="nav-link">
                        <img src="img/logo-blanc.png" alt="ACCUEIL">
                    </a>
                    <div>
                        <ul>
                            <li>
                                <a href="#filiere" class="nav-link">LA FILIÈRE</a>
                            </li>
                            <li>
                                <a href="#metiers" class="nav-link">LES MÉTIERS</a>
                            </li>
                            <li>
                                <a href="#equipe" class="nav-link">L'ÉQUIPE</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <section class="def-mmi" id="filiere">
                <div class="container">
                    <div class="definition">
                        <h1>MMI, QU'EST CE QUE C'EST ?</h1>
                        <p>
                            Le DUT MMI (Diplôme Universitaire et Technologique Métier du Multimédia et de l’Internet)
                            est une
                            formation publique postbac de niveau bac+2. Elle forme les étudiants dans le domaine de la
                            communication
                            digitale et de l’internet.
                            <br>
                            C’est une formation pluridisciplinaire répartie sur 2 ans (4 semestres), les étudiants
                            acquièrent un
                            ensemble de compétences et de savoir-faire qui leur permettront d’exercer dans le secteur de
                            la
                            communication, du design, du développement web, de l’audiovisuel et de la gestion de projet
                            digital.
                            <br>
                            Ce DUT représente une expérience très enrichissante, pour tous les étudiants.
                        </p>
                    </div>
                    <div class="icones">
                        <img alt="" src="img/icones/info.png" class="noSelect">
                        <img alt="" src="img/icones/com.png" class="noSelect">
                        <img alt="" src="img/icones/sciences.png" class="noSelect">
                        <img alt="" src="img/icones/art.png" class="noSelect">
                    </div>
                    <div class="button">
                        <a href="filiere.php">VIENS EN APPRENDRE PLUS !</a>
                    </div>
                </div>
            </section>
        </div>

        <div class="section" id="metiers">
            <div class="slide">
                <div class="commencer"></div>
                <div class="bat"></div>
                <div class="cover-top"></div>
                <div class="cover-bottom"></div>

                <div class="container-commencer">
                    <h1>DÉCOUVRE LES MÉTIERS</h1>
                    <p>Pars à la découverte des métiers disponibles après avoir fait un DUT MMI en te baladant dans l'immeuble MMI et ses univers dédiés à l'audiovisuel, au design, à l'informatique et à la communication. Bonne visite !</p>
                    <div class="button noSelect" id="commencer">
                        <p>COMMENCER</p>
                    </div>
                </div>
            </div>

            <div class="slide" id="audiovisuel">
                <div class="audiovisuel"></div>
                <div class="cover-top2"></div>
                <div class="persos">
                    <div class="perso real">
                        <a href="metier.php?id=2" target="_blank">
                            <img src="img/persos/soussi.png" alt="Réalisateur multimédia" class="noSelect">
                        </a>
                    </div>
                    <div class="perso videaste">
                        <a href="metier.php?id=1" target="_blank">
                            <img src="img/persos/tasso.png" alt="Vidéaste" class="noSelect">
                        </a>
                    </div>
                </div>
            </div>

            <div class="slide" id="design">
                <div class="design"></div>
                <div class="cover-top3"></div>
                <div class="persos">
                    <div class="perso ui">
                        <a href="metier.php?id=3" target="_blank">
                            <img src="img/persos/llopis.png" alt="UI designer" class="noSelect">
                        </a>
                    </div>
                    <div class="perso ux">
                        <a href="metier.php?id=4" target="_blank">
                            <img src="img/persos/llopis2.png" alt="UX designer" class="noSelect">
                        </a>
                    </div>
                    <div class="perso graphiste">
                        <a href="metier.php?id=6" target="_blank">
                            <img src="img/persos/poisson.png" alt="Graphiste web" class="noSelect">
                        </a>
                    </div>
                    <div class="perso webdesigner">
                        <a href="metier.php?id=5" target="_blank">
                            <img src="img/persos/designerweb.png" alt="Web designer" class="noSelect">
                        </a>
                    </div>
                </div>
            </div>

            <div class="slide" id="developpement">
                <div class="dev"></div>
                <div class="cover-top4"></div>
                <div class="persos">
                    <div class="perso reseaux">
                        <a href="metier.php?id=10" target="_blank">
                            <img src="img/persos/berthet.png" alt="Gestionnaire de réseaux" class="noSelect">
                        </a>
                    </div>
                    <div class="perso back-end">
                        <a href="metier.php?id=9" target="_blank">
                            <img src="img/persos/gambette.png" alt="Développeur back-end" class="noSelect">
                        </a>
                    </div>
                    <div class="perso devweb">
                        <a href="metier.php?id=7" target="_blank">
                            <img src="img/persos/ferraille.png" alt="Développeur web" class="noSelect">
                        </a>
                    </div>
                    <div class="perso front-end">
                        <a href="metier.php?id=8" target="_blank">
                            <img src="img/persos/charp.png" alt="Développeur front-end" class="noSelect">
                        </a>
                    </div>
                </div>
            </div>

            <div class="slide" id="communication">
                <div class="com"></div>
                <div class="cover-top5"></div>
                <div class="persos">
                    <div class="perso charge-com">
                        <a href="metier.php?id=12" target="_blank">
                            <img src="img/persos/bister.png" alt="Chargé de communication" class="noSelect">
                        </a>
                    </div>
                    <div class="perso webmarketer">
                        <a href="metier.php?id=14" target="_blank">
                            <img src="img/persos/leyla.png" alt="Webmarketer" class="noSelect">
                        </a>
                    </div>
                    <div class="perso chef">
                        <a href="metier.php?id=11" target="_blank">
                            <img src="img/persos/tasso-com.png" alt="Chef de projet multimédia" class="noSelect">
                        </a>
                    </div>
                    <div class="perso manager">
                        <a href="metier.php?id=13" target="_blank">
                            <img src="img/persos/charp-com.png" alt="Community manager" class="noSelect">
                        </a>
                    </div>
                    <div class="perso webmaster">
                        <a href="metier.php?id=15" target="_blank">
                            <img src="img/persos/dallet.png" alt="Webmaster" class="noSelect">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="equipe">
            <section class="equipe">
                <div class="container">
                    <div class="texte">
                        <h1>L'ÉQUIPE</h1>
                        <p>
                            Nous sommes 4 étudiants en DUT MMI à l'IUT de Champs-sur-Marne.
                            Ce site web est le résultat de notre projet tutoré que nous avons réalisé lors de notre première année d'étude. Voici les membres de l'équipe çi-dessous.
                        </p>
                    </div>
                    <div class="card minal">
                        <img src="img/equipe/minal.png" alt="" class="profil noSelect">
                        <h2>MINAL</h2>
                        <h3>Cheffe de projet</h3>
                        <p>
                            Cheffe de projet, Minal a organisé et animé ce projet de groupe, pour qu’il reste une
                            expérience positive et enrichissante
                            pour l’équipe. Elle a également endossé le rôle de communicante, en réalisant les textes
                            et les postes sur les réseaux
                            sociaux.
                        </p>
                        <div class="icons">
                            <a href="cv/cv_minal_lad.pdf" target="_blank">
                                <img src="img/equipe/doc.png" alt="" title="CV PDF">
                            </a>
                            <a href="https://etudiant.u-pem.fr/~mlad1/cv-interactif/" target="_blank">
                                <img src="img/equipe/ordi.png" alt="" title="CV NUMÉRIQUE">
                            </a>
                        </div>
                    </div>
                    <div class="card jules">
                        <img src="img/equipe/jules.png" alt="" class="profil noSelect">
                        <h2>JULES</h2>
                        <h3>Graphiste</h3>
                        <p>
                            Graphiste de l’équipe, Jules a conçu les wireframes, les illustrations ainsi que tous
                            les petits éléments graphiques du
                            site Internet. Polyvalent, il a prêté main forte sur le développement de MMI Town.
                        </p>
                        <div class="icons">
                            <a href="cv/cv_jules_cointrel.pdf" target="_blank">
                                <img src="img/equipe/doc.png" alt="" title="CV PDF">
                            </a>
                            <a href="https://etudiant.u-pem.fr/~jcointre/cv/" target="_blank">
                                <img src="img/equipe/ordi.png" alt="" title="CV NUMÉRIQUE">
                            </a>
                        </div>
                    </div>
                    <div class="card rachel">
                        <img src="img/equipe/rachel.png" alt="" class="profil noSelect">
                        <h2>RACHEL</h2>
                        <h3>Développeuse full-stack</h3>
                        <p>
                            Développeuse full-stack de l'équipe, Rachel a avec Yohan codé le site web et ses fonctionnalités à partir des wireframes de Jules. Elle s'est également occupée de la création et de la gestion de la base de données.
                        </p>
                        <div class="icons">
                            <a href="cv/cv_rachel_albersario.pdf" target="_blank">
                                <img src="img/equipe/doc.png" alt="" title="CV PDF">
                            </a>
                            <a href="https://etudiant.u-pem.fr/~ralbersa/cv-numerique/" target="_blank">
                                <img src="img/equipe/ordi.png" alt="" title="CV NUMÉRIQUE">
                            </a>
                        </div>
                    </div>
                    <div class="card yohan">
                        <img src="img/equipe/yohan.png" alt="" class="profil noSelect">
                        <h2>YOHAN</h2>
                        <h3>Développeur full-stack</h3>
                        <p>
                            Développeur full-stack de l'équipe, Yohan a avec Rachel codé le site web et ses fonctionnalités à partir des wireframes de Jules. Il s'est également occupé de la création et de la gestion de la base de données.
                        </p>
                        <div class="icons">
                            <a href="cv/cv_yohan_guyot.pdf" target="_blank">
                                <img src="img/equipe/doc.png" alt="CV PDF" title="CV PDF">
                            </a>
                            <a href="../cv-numerique/index.php" target="_blank">
                                <img src="img/equipe/ordi.png" alt="CV NUMÉRIQUE" title="CV NUMÉRIQUE">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact">
                <div class="title">
                    <h1>NOUS CONTACTER</h1>
                </div>
                <div class="container">
                    <form class="contact-form" action="php/form.php" method="post">
                        <div class="name">
                            <input type="text" name="prenom" placeholder="Prénom*" required>
                            <input type="text" name="nom" placeholder="Nom*" required>
                        </div>
                        <div class="form-wrapper">
                            <div class="mail">
                                <input type="text" name="mail" placeholder="Email*" required>
                            </div>
                            <div class="sujet">
                                <input type="text" name="sujet" placeholder="Sujet">
                            </div>
                            <div class="message">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="button noSelect">
                                <button type="submit">ENVOYER</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.js"
        integrity="sha256-caNcSA0LvOCX90PTuEbwl+V09xPMca13CJUasl+VCtk=" crossorigin="anonymous"></script>

    <script>
        new fullpage('#fullPage', {
            autoScrolling: false,
            fixedElements: '.fixed',
            afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
                var loadedSlide = $(this);
                
                if (index == 0){
                    $('div.fp-controlArrow.fp-next').fadeOut();
                    $('div.fp-controlArrow.fp-prev').fadeOut();
                } else {
                    $('div.fp-controlArrow.fp-next').fadeIn();
                    $('div.fp-controlArrow.fp-prev').fadeIn();
                }
            }
        })

        $('#commencer').click(function () {
            fullpage_api.moveSlideRight();
        });

        $(".nav-link").on("click", function (event) {
            event.preventDefault();

            var target = $(this).attr("href");

            var scrollValue = $(target).offset().top;

            $("html, body").animate({ scrollTop: scrollValue }, 700);

            html.style.overflow = "auto";
        });
    </script>
</body>

</html>