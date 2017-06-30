<!DOCTYPE html>
<html>
<head>
    <title>TG Manager</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
<div class="navbar">
    <div class="navbar__element">
        <img class="logo" src="images/Logo2.png">
        <span class="tg_manager">TG Manager</span>
    </div>
    <div class="navbar__element">
        <nav class="nav-main">
            <ul class="nav-main__list">
                <li class="nav-main__items">
                    <a class="nav-main__text" href="Einstellungen.php">Einstellungen</a>
                </li>
                <li class="nav-main__items">
                    <a class="nav-main__text" href="index.php">Uebersicht</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="navbar__element">
        <span class="name">Stefan Klotz</span>
    </div>
</div>

<div class="hauptseite">
    <h1>Kontostand:</h1>

    <div class="Spalten_index">
        <h2 class="Klamotten">Klamotten</h2> <h2 class="Taschengeld">Taschengeld</h2>
        <h2 class="Frisör">Frisoer</h2> <h2 class ="Spargeld">Spargeld</h2>
    </div>
    <div class="button-container">
        <a class="button" href="nachtrag_formular_php.php">Nachtrag</a>
    </div>

<?php

$mysqli = new mysqli("localhost", "root", "stefan", "tg_manager");
if ($mysqli->connect_error) {
    echo "Fehler bei Verbindung:" . mysqli_connect_error();
    exit();
}

$ergebnis = $mysqli->query("Select datum, preis, grund FROM tg_manager;");
while ($zeile = $ergebnis->fetch_array()) {
    echo "<strong>{$zeile['datum']}</strong>: {$zeile['preis']} {$zeile['grund']}
	<br>";
}
?>

    </div>

</div>


</body>
</html>