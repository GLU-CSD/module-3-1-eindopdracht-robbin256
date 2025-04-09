<?php
// Start the session
session_start();
?>

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
            </div>
            <div class="container" id="winkelwagen">

                <?php


                $productId = [
                    "0",
                    "1",
                    "2",
                    "3",
                    "4",
                    "5",
                    "6",
                    "7",
                    "8",
                    "9",
                    "10",
                    "11",
                    "12",
                    "13",
                    "14",
                    "15",
                    "16",
                    "17",
                    "18",
                    "19"
                ];

                $productName = [
                    "Iphone 11",
                    "Iphone 11 Pro",
                    "Iphone 11 Pro Max",
                    "Iphone 12",
                    "Iphone 12 mini",
                    "Iphone 12 Pro",
                    "Iphone 12 Pro Max",
                    "Iphone 13",
                    "Iphone 13 Pro",
                    "Iphone 13 Pro Max",
                    "Iphone 14",
                    "Iphone 14 Pro",
                    "Iphone 14 Pro Max",
                    "Iphone 15",
                    "Iphone 15 Pro",
                    "Iphone 15 Pro Max",
                    "Iphone 16",
                    "Iphone 16 Pro",
                    "Iphone 16 Pro Max",
                    "Iphone 30 (From 2030)"
                ];

                $productPrice = [
                    "499,-",
                    "510,-",
                    "549,-",
                    "530,-",
                    "430,-",
                    "549,-",
                    "570,-",
                    "650,-",
                    "649,-",
                    "660,-",
                    "690,-",
                    "710,-",
                    "749,-",
                    "950,-",
                    "975,-",
                    "999,-",
                    "1075,-",
                    "1130,-",
                    "1200,-",
                    "1.000.000,-"
                ];

                $productDescription = [
                    "This phone is great",
                    "Iphone 11 but only for professionals",
                    "Even better than Iphone 11 Pro",
                    "Camera is better",
                    "Still a great camera but smaller",
                    "Just more expensive",
                    "Even more expensive",
                    "We changed the look of the camera",
                    "Iphone 13 but more color options",
                    "This Iphone has the word max so we can charge more money",
                    "Iphone 13 but with a different name",
                    "Name sounds cooler",
                    "Name sounds even cooler",
                    "We once again improved the camera",
                    "Cooler camera",
                    "Iphone 15 Pro but larger",
                    "Iphone but we run out of things to improve",
                    "AI stands for Apple intelligence",
                    "Iphone 16 Pro but cooler name",
                    "This phone will teach you how to earn 1.000.000,- selling phones"
                ];

                $productImg = [
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/phone.png",
                    "../assets/img/oldPhone.png"
                ];

    
                if (isset($_SESSION["producten_ids"])) {
                    foreach ($_SESSION["producten_ids"] as $index => $id) {
                        echo "Product ID: " . $id . "<br>";
                        echo '
                        <div class="product">
                            <div class="boven">

                                <img src="' . $productImg[$id] . '" alt="Phone">
                            </div>
                            <div class="onder">
                                <div>
                                    <p>' . $productName[$id] . ' </p><br>
                                    <p class="description">' . $productDescription[$id] . '</p>
                                </div>
                                <div>
                                    <p>' . $productPrice[$id] . '</p>
                                </div>
                                <div>
                                    <a href="removeFromCart.php?id=' . $index . '"> 
                                        <button class="removeProduct1">remove</button>
                                    </a>
                                    <button class="removeProduct">Verwijder uit winkelmand</button>                               
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo "Geen producten in winkelwagen.";
                }
                ?>


            </div>
        </main>

        <script>
        let removeButtons = document.getElementsByClassName("removeProduct");
        console.log(removeButtons)
        for (let i = 0; i < removeButtons.length; i ++)
            removeButtons[i].addEventListener("click", function() {
            // console.log(i);
            // window.location.href = "removeFromCart.php?index=" + i;
        })
            

        </script>
        <footer>
            <?php
            include '../includes/footer.php';
            ?>
        </footer>
    </div>
</body>

</html>