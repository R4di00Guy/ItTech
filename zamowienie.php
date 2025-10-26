<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['order'] = [
        'services' => $_POST['services'] ?? [],
        'location' => $_POST['location'] ?? '',
        'address'  => $_POST['address'] ?? '',
        'phone'    => $_POST['phone'] ?? '',
        'email'    => $_POST['email'] ?? ''
    ];

    http_response_code(200);
    exit;
}

$order = $_SESSION['order'] ?? null;

if (!$order) {
    echo "<h2>Nie znaleziono danych zamówienia. Proszę wrócić i wypełnić formularz ponownie.</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8">
    <link href="style1.css" rel="stylesheet">
    <title>Firma informatyczna</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- <style>
        .summary { border: 1px solid #ccc; padding: 20px; border-radius: 10px; max-width: 600px; }
    </style> -->
</head>
<body>
    <header>
        <div class="head">
        <h1 class="logo">ITTECH</h1>
        <nav>
            <a href="Firma informatyczna.html" rel="noopener noreferrer" class="nav">Home</a>
            <a href="#aboutus" rel="noopener noreferrer" class="nav">O nas</a>
            <a href="#contact" rel="noopener noreferrer" class="nav">Kontakt</a>
            <a href="#zamow" rel="noopener noreferrer" class="nav">Zamów</a>
        </nav>
    </div>
    </header>
    <div class="line"></div>
    <main>
        <!-- <div class="summary"> -->
            <h1>Dziękujemy za złożenie zamówienia!</h1>
            <h3>Podsumowanie:</h3>
            <ul>
                <li><strong>Usługi:</strong> <?= htmlspecialchars(implode(', ', $order['services'])) ?></li>
                <li><strong>Miejsce realizacji:</strong> <?= htmlspecialchars($order['location']) ?></li>
                <?php if ($order['address']): ?>
                    <li><strong>Adres:</strong> <?= htmlspecialchars($order['address']) ?></li>
                <?php endif; ?>
                <li><strong>Telefon:</strong> <?= htmlspecialchars($order['phone']) ?></li>
                <?php if ($order['email']): ?>
                    <li><strong>Email:</strong> <?= htmlspecialchars($order['email']) ?></li>
                <?php endif; ?>
            </ul>
            <p>Wkrótce skontaktujemy się z Tobą w celu potwierdzenia zamówienia.</p>
        <!-- </div> -->
                </main>
    <div class="line"></div>
    <footer>
        <div class="footcont">
            <div class="foottxt" >
                <h3>Zrobili:</h3>
                <p>Varvara Yukhnavets</p>
                <p>Pesenko Ruslan</p>
            </div>
            <div class="foottxt" id="contact">
                <h3>Kontakt: </h3>
                <p>E-mail: ittech.official@corp.com</p>
                <p>Numer telefonu: +48505362461</p>
            </div>
        
        <div id="copyrights">
            <p>ittech&copy; 2025</p>
        </div>
        </div>
    </footer>
</body>
</html>
