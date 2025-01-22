<?php
include 'config.php';

$query = "SELECT f.titel, f.release_datum, f.regisseur, f.genre, f.duur, f.beschrijving 
          FROM films f WHERE f.id = 1";
$stmt = $conn->prepare($query);
$stmt->execute();
$film = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $film['titel']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo png">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="info.php">Informatie</a></li>
                <li><a href="gallery.php">Galerij</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="login.html">login</a></li>
                <li><a href="register.html">registratie</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="content">
            <h1><?php echo $film['titel']; ?></h1>
            <p><strong>Regisseur:</strong> <?php echo $film['regisseur']; ?></p>
            <p><strong>Genre:</strong> <?php echo $film['genre']; ?></p>
            <p><strong>Duur:</strong> <?php echo $film['duur']; ?> minuten</p>
            <p><?php echo $film['beschrijving']; ?></p>
            <a href="https://www.youtube.com/watch?v=6ZfuNTqbHE8" target="_blank">
                <button>Bekijk de trailer</button>
            </a>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Avengers: Infinity War</p>
    </footer>
</body>
</html>
