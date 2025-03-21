<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" href="assets/css/result.css" />
    <meta name="description" content="" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:alt" content="" />

    <link rel="icon" href="/favicon.ico" sizes="any" />
    <link rel="icon" href="/icon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="icon.png" />

    <meta name="theme-color" content="#fafafa" />
    <script src="assets/js/main.js" defer></script>
</head>

<body>
    <div id="content">
        <header>
            <?php
              include 'includes/header.php';
            ?>
        </header>
        <main>
            <div id="sidebar">
                <?php
                    include 'includes/faq.php'
                ?>
            </div>
            <div class="container">
                <h2>Jouw Gegevens</h2>
                <div class="resultaat">
                    <p><strong>Type bestelling:</strong> <span id="bestelling"></span></p>
                    <p><strong>Aanhef:</strong> <span id="aanhef"></span></p>
                    <p><strong>Naam:</strong> <span id="naam"></span></p>
                    <p><strong>Postcode:</strong> <span id="postcode"></span></p>
                    <p><strong>Adres:</strong> <span id="adres"></span></p>
                    <p><strong>E-mailadres:</strong> <span id="email"></span></p>
                    <p><strong>Telefoonnummer:</strong> <span id="telefoon"></span></p>
                    <p><strong>Geboortedatum:</strong> <span id="geboortedatum"></span></p>
                    <p><strong>Verzendwijze factuur:</strong> <span id="factuur"></span></p>
                </div>
            
                <script>
                    function getQueryParam(param) {
                        const urlParams = new URLSearchParams(window.location.search);
                        return urlParams.get(param) || "Niet ingevuld";
                    }
            
                    document.getElementById("bestelling").textContent = getQueryParam("bestelling");
                    document.getElementById("aanhef").textContent = getQueryParam("aanhef");
                    document.getElementById("naam").textContent = `${getQueryParam("vnaam")} ${getQueryParam("tussenv")} ${getQueryParam("anaam")}`;
                    document.getElementById("postcode").textContent = getQueryParam("postcode");
                    document.getElementById("adres").textContent = `${getQueryParam("adres")} ${getQueryParam("huisnummer")} ${getQueryParam("toev")}`;
                    document.getElementById("email").textContent = getQueryParam("email");
                    document.getElementById("telefoon").textContent = getQueryParam("telefoon");
                    document.getElementById("geboortedatum").textContent = getQueryParam("geboortedatum");
                    document.getElementById("factuur").textContent = getQueryParam("factuur");
                </script>
            </div>
        </main>
        <footer>
            <?php
                include 'includes/footer.php';
            ?>
        </footer>
    </div>
    <!-- Add your site or application content here -->
    <script src="assets/js/app.js"></script>

</body>

</html>