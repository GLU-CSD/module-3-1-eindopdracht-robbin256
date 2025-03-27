<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" href="../assets/css/form.css" />
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
    <script src="../assets/js/main.js" defer></script>
</head>

<body>
    <div id="content">
        <header>
            <?php
                include '../includes/header.php';
            ?>
        </header>
        <main>
            <div id="sidebar">
                <?php
                    include '../includes/faq.php'
                ?>
            </div>
            <div class="container">
                <form action="result.php" method="get">
                    <h2>JE GEGEVENS.</h2>
                    <p>Wat moet er op de factuur staan?</p>
                    <div class="form-group">
                        <label class="bold">Type bestelling:</label>
                        <div class="radio-group">
                            <label for="particulier">
                                <input type="radio" id="particulier" name="bestelling" value="Particulier">
                                Particulier
                            </label>
                            <label for="zakelijk">
                                <input type="radio" id="zakelijk" name="bestelling" value="Zakelijk">
                                Zakelijk
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="bold">Aanhef:</label>
                        <div class="radio-group">
                            <label for="dhr">
                                <input type="radio" id="dhr" name="aanhef" value="Dhr.">
                                Dhr.
                            </label>
                            <label for="mevr">
                                <input type="radio" id="mevr" name="aanhef" value="Mevr.">
                                Mevr.
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="bold">Naam:</label>
                        <input type="text" name="vnaam" placeholder="Voornaam" required>
                        <input type="text" name="tussenv" placeholder="Tussenvoegsel">
                        <input type="text" name="anaam" placeholder="Achternaam" required>
                    </div>

                    <div class="form-group">
                        <label class="bold">Postcode:</label>
                        <input type="text" name="postcode" placeholder="1234 AB" required>
                    </div>

                    <div class="form-group">
                        <label class="bold">Adres:</label>
                        <input type="text" name="adres" placeholder="Straatnaam" required>
                        <input type="number" name="huisnummer" placeholder="Huisnummer">
                        <input type="text" name="toev" placeholder="Toev.">
                    </div>

                    <div class="form-group">
                        <label class="bold">E-mailadres:</label>
                        <input type="email" name="email" placeholder="email@example.com" required>
                    </div>

                    <div class="form-group">
                        <label class="bold">Telefoonnummer:</label>
                        <input type="tel" name="telefoon" placeholder="06-12345678">
                    </div>

                    <div class="form-group">
                        <label class="bold">Geboortedatum:</label>
                        <input type="date" name="geboortedatum">
                    </div>

                    <div class="form-group">
                        <label class="bold">Verzendwijze factuur:</label>
                        <div class="radio-group">
                            <label for="email">
                                <input type="radio" id="email" name="factuur" value="email">
                                Factuur per e-mail
                            </label>
                            <label for="geprint">
                                <input type="radio" id="geprint" name="factuur" value="geprint">
                                Factuur geprint bij bestelling
                            </label>
                        </div>
                    </div>
                    <a href="result.html">
                        <button type="submit">Verder</button>
                    </a>
                </form>
            </div>
        </main>
        <footer>
      <?php
          include '../includes/footer.php';
      ?>
    </footer>
    </div>
 
    <!-- Add your site or application content here -->
    <script src="../assets/js/app.js"></script>

</body>

</html>