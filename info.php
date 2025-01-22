<?php
include 'config.php';

$query = "SELECT p.naam, p.rol FROM personages p WHERE p.film_id = 1";
$stmt = $conn->prepare($query);
$stmt->execute();
$personages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personages</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="info.php">Informatie</a></li>
                <li><a href="gallery.php">Galerij</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Personages</h1>
        <ul>
            <?php foreach ($personages as $personage): ?>
                <li><strong><?php echo $personage['naam']; ?></strong>: <?php echo $personage['rol']; ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
