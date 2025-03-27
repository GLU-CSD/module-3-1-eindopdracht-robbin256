<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../assets/css/header_footer.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../assets/css/filter.css?v=<?php echo time(); ?>">
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
          include '../includes/filter.php'
        ?>
      </div>
      <div class="container" >
      <?php
$productName = [
  "Iphone 11","Iphone 11 Pro", "Iphone 11 Pro Max", "Iphone 12", "Iphone 12 mini", "Iphone 12 Pro",
  "Iphone 12 Pro Max", "Iphone 13", "Iphone 13 Pro", "Iphone 13 Pro Max", "Iphone 14",
  "Iphone 14 Pro", "Iphone 14 Pro Max", "Iphone 15", "Iphone 15 Pro", "Iphone 15 Pro Max",
  "Iphone 16", "Iphone 16 Pro", "Iphone 16 Pro Max", "Iphone 30 (From 2030)"
];

$productPrice = [
  "499,-", "510,-", "549,-", "530,-", "430,-", "549,-", "570,-", "650,-", "649,-", "660,-",
  "690,-", "710,-", "749,-", "950,-", "975,-", "999,-", "1075,-", "1130,-", "1200,-", "1.000.000,-"
];

$productDescription = [
  "This phone is great", "Iphone 11 but only for professionals", "Even better than Iphone 11 Pro", "Camera is better",
  "Still a great camera but smaller", "Just more expensive", "Even more expensive",
  "We changed the look of the camera", "Iphone 13 but more color options",
  "This Iphone has the word max so we can charge more money", "Iphone 13 but with a different name",
  "Name sounds cooler", "Name sounds even cooler", "We once again improved the camera",
  "Cooler camera", "Iphone 15 Pro but larger", "Iphone but we run out of things to improve",
  "AI stands for Apple intelligence", "Iphone 16 Pro but cooler name",
  "This phone will teach you how to earn 1.000.000,- selling phones" 
];

$productImg = [
  "../assets/img/phone.png", "../assets/img/phone.png", "../assets/img/phone.png", "../assets/img/phone.png",
  "../assets/img/phone.png", "../assets/img/phone.png", "../assets/img/phone.png",
  "../assets/img/phone.png", "../assets/img/phone.png", "../assets/img/phone.png",
  "../assets/img/phone.png", "../assets/img/phone.png", "../assets/img/phone.png",
  "../assets/img/phone.png", "../assets/img/phone.png", "../assets/img/phone.png",
  "../assets/img/phone.png", "../assets/img/phone.png", "../assets/img/phone.png",
  "../assets/img/oldPhone.png"
];





  for ($i = 0; $i < count($productName); $i++){
    echo '<div class="product">
            <div class="boven">
              <img src="'. $productImg[$i]. '" alt="Phone">
            </div>
            <div class="onder">
              <div>
                <p>'. $productName[$i]. ' </p><br>
                <p class="description">'. $productDescription[$i]. '</p>
              </div>
              <div>
                <p>'. $productPrice[$i]. '</p>
              </div>
              <div>
                <button class="addProduct">Add to cart</button>
              </div>
            </div>
          </div>';
  }
?>


      </div>
      <script>

        let products = document.getElementsByClassName("product");  
          for (let i = 0; i < products.length; i++) {
            products[i].addEventListener("click", function () {
                console.log([i], 'clicked');
                window.location.href = "detailPage.php?id=" + i;
              });
    }



        // Variabele om het winkelwagentje op te slaan
        let cart = [];

        // Functie om een product toe te voegen aan het winkelwagentje
        function addToCart(productName, price) {
            // Voeg het product toe aan de cart array
            cart.push({ name: productName, price: price });

            // Update de winkelwagentje op de pagina
            updateCart();
        }

        // Functie om de winkelwagentje weer te geven
        function updateCart() {
            // Haal het winkelwagentje element en de totalPrice span op
            const cartItems = document.getElementById('cartItems');
            const totalPriceElement = document.getElementById('totalPrice');

            // Maak de lijst van producten leeg voordat we deze bijwerken
            cartItems.innerHTML = '';

            // Variabele om de totaalprijs bij te houden
            let totalPrice = 0;

            // Loop door de producten in het winkelwagentje en voeg ze toe aan de lijst
            cart.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.name} - €${item.price}`;
                cartItems.appendChild(listItem);

                // Tel de prijs bij de totaalprijs op
                totalPrice += item.price;
            });

            // Update de totaalprijs op de pagina
            totalPriceElement.textContent = totalPrice;
        }
    </script>
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