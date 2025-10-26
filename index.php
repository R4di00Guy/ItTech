<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style1.css" rel="stylesheet">
    <title>Firma informatyczna</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head">
        <h1 class="logo">ITTECH</h1>
        <nav>
            <a href="Firma informatyczna.html" target="_blank" rel="noopener noreferrer" class="nav">Home</a>
            <a href="Firma informatyczna.html" rel="noopener noreferrer" class="nav">O nas</a>
            <a href="Firma informatyczna.html" rel="noopener noreferrer" class="nav">Kontakt</a>
            <a href="Firma informatyczna.html" rel="noopener noreferrer" class="nav">Zamów</a>
        </nav>
    </div>
    </header>
    <div class="line"></div>

    <main>
        <h1>Powodzenie</h1>
        <h3>Dzienkujemy za zamówenie</h3>
        <?php 
        $serv=$_POST["services"];
        $loc=$_POST["location"];
        $adr=$_POST["address"];
        $tel=$_POST["phone"];
        $eml=$_POST["email"];

        echo "<h2>Wybrana usługa: "+$serv+"</h2>"
        if($loc.value=="home"){
            echo "<h2>Przyjedźmy na adres: "+$adr+"</h2>"
        }
        else{
            echo "<h2>Państwo przyjedżie do naszego oddziału</h2>"
        }
        echo "<h2>Numer telefonu klienta: "+$tel+"</h2>"
        if($eml!=""){
            echo "<h2>E-mail: "+$eml+"</h2>"
        }

        ?>
    </main>

    <div class="line"></div>
    <footer>
        <div class="footcont">
            <div class="foottxt">
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

