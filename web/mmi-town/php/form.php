<?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['mail'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page contact de MMI Town </h1>
        <p><b>Prénom : </b>' . $_POST['prenom'] . '<br>
        <b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['mail'] . '<br> <br>
        <b>Sujet : </b>' . $_POST['sujet'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('mmitown.contact@gmail.com', 'Envoyé depuis la page contact de MMI Town', $message, $entete);
    }

    include('secrets.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function getDatabase() {
        $pdo = new PDO('mysql:host=sqletud.u-pem.fr;dbname=yguyot01_db','yguyot01','yohGUY2000');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $pdo;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db = getDatabase();

        $sql = "INSERT INTO mmi_town_contacts (prenom, nom, email, sujet, message, date_envoi) VALUES (:prenom, :nom, :email, :sujet, :message, NOW())";

        $attributes = array(
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],
            'email' => $_POST['mail'],
            'sujet' => $_POST['sujet'],
            'message' => $_POST['message']
        );

        $stmt = $db->prepare($sql);

        $stmt->execute($attributes);

        $db = null;

        header('Location: ../success.php');
    } 
    else {
        http_response_code(500);
    }

?>