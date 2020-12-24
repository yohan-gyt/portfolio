<?php
        $pdo = new PDO('mysql:host=localhost;dbname=u502169322_mmi_town;charset=utf8','u502169322_yohanguyot','yohGUY2000:)');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
        $stmt = $pdo->prepare(
        'SELECT *
        FROM mmi_town_metiers
        INNER JOIN mmi_town_univers
        ON mmi_town_metiers.id_univers = mmi_town_univers.id
        WHERE mmi_town_metiers.id = :id
        ');

        $stmt->execute(array(':id'=>$_GET['id']));
        $result = $stmt->fetchAll();

        $pdo = null;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr" id="metier">

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
    <?php foreach ($result as $result): ?>
    <div class="section">
        <nav class="fixed">
            <a href="index.php" class="nav-link">
                <img src="img/logo-blanc.png" alt="ACCUEIL">
            </a>
        </nav>
    </div>
    <section class="metier">
        <div class="texte_metier">
            <h3><?php echo $result['nomUnivers'];?></h3>
            <h1><?php echo $result['nomMetier'];?></h1>
            <p>
                <?php echo $result['descMetier'];?>
            </p>
        </div>

        <div class="metierContent">
            <div class="perso">
                <div class="content_perso">
                    <img src=" <?php echo $result['image'];?>" alt="" class="noSelect">
                </div>
            </div>

            <div class="slider">
                <button class="previous noSelect" onclick="plusDivs(-1)">&#10094;</button>

                <div class="slides">
                    <div class="taches">
                        <h2>TÂCHES</h2>
                        <p>
                            <?php echo $result['tachesMetier'];?>
                        </p>
                    </div>
                </div>
        
                <div class="slides">
                    <div class="comp">
                        <h2>COMPÉTENCES</h2>
                        <p>
                            <?php echo $result['compMetier'];?>
                        </p>
                    </div>
                </div>

                <div class="slides">
                    <div class="qualites">
                        <h2>QUALITÉS</h2>
                        <p><?php echo $result['qualiMetier'];?></p>
                    </div>
                </div>

                <div class="slides">
                    <div class="etudes">
                        <h2>POURSUITE D'ÉTUDES</h2>
                        <p>
                            <?php echo $result['etudes'];?>
                        </p>
                    </div>
                </div>

                <div class="slides">
                    <div class="niveau">
                        <h2>NIVEAU DE FORMATION</h2>
                        <p>
                            <?php
                            echo $result['formation'];?>
                        </p>
                    </div>
                </div>

                <div class="slides">
                    <div class="salaire">
                        <h2>SALAIRE</h2>
                        <p>
                            Salaire débutant : <?php echo $result['salaireMin'];?>€
                            <br>
                            Salaire expérimenté : <?php echo $result['salaireMax'];?>€
                        </p>
                    </div>
                </div>
                <button class="next noSelect" onclick="plusDivs(+1)">&#10095;</button>
            </div>
        </div>
    </section>
    <?php endforeach; ?>
</body>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("slides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
    }
</script>

</html>