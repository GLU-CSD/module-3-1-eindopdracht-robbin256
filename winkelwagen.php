<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" href="../assets/css/winkelwagen.css" />
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
                hallo
            </div>
            <script>
                        // Selecteer alle details-elementen
                        const detailsElements = document.querySelectorAll('details');
                    
                        // Voeg een event listener toe voor elk details-element
                        detailsElements.forEach((details) => {
                            details.addEventListener('toggle', () => {
                                // Als het huidige details-element geopend is
                                if (details.open) {
                                    // Sluit alle andere details-elementen
                                    detailsElements.forEach((otherDetails) => {
                                        if (otherDetails !== details) {
                                            otherDetails.removeAttribute('open');
                                        }
                                    });
                                }
                            });
                        });
                    </script>
            </div>
            <div class="container" id="winkelwagen">
                
            </div>
        </main>
        <footer>
            <?php
                include '../includes/footer.php';
            ?>
        </footer>
    </div>
</body>
</html>
