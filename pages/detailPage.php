<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/detailPage.css" />
  <link rel="stylesheet" href="../assets/css/header_footer.css" />
  <link rel="stylesheet" href="../assets/css/filter.css" />
  
  <script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script>
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


  <style>
    img{
      height: 100px;
      width: auto;
    
    }
    #big{
      height: 400px;
      width: auto;
    }
    </style>
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
      <div class="container">
        <div class="left">
          <img id="big" src="../assets/img/detailPage/Iphone16_1.png" alt="">
          <div class="thumbnails">
            <img class="thumbnail" src="../assets/img/detailPage/Iphone16_1.png" alt="">
            <img class="thumbnail" src="../assets/img/detailPage/Iphone16_2.png" alt="">
            <img class="thumbnail" src="../assets/img/detailPage/Iphone16_3.png" alt="">
            <img class="thumbnail" src="../assets/img/detailPage/Iphone16_4.png" alt="">
          </div>
          <br>
          <div>
            <model-viewer shadow-intensity="0.5" src="../assets/iphone_16_pro_max.glb" 
              alt="Een 3D model" 
              auto-rotate 
              auto-rotate-speed="2000"
              camera-controls 
              style="width: 200px; height: 200px;">
          </model-viewer>
         </div>
        </div>
        <div class="right">
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
            if (isset($_GET['id'])) {
              $product_id = $_GET['id'];
              echo '<div class="onder">
              <h1>'. $productName[$product_id]. ' </h1>
              <button class="addProduct">Add to cart</button>
              <p>'. $productPrice[$product_id]. '</p>
              </div>';
            }
            ?>
            <br>
            <p><b>6,1‑inch design van hoogwaardig aluminium voetnoot 1 met <br> robuust Ceramic Shield van de nieuwste generatie aan de voorkant, <br> actieknop en USB‑C</b></p>
            <br><hr><br>
            <p><b>Via de camera­regelaar heb je nu sneller toegang tot de camera­tools</b></p>
            <br><hr>
            <br>
            <p><b>Met de enorm energiezuinige A18-chip profiteer je van baanbrekende <br> foto- en video­features en kun je gamen als op een console</b></p>
            <br><hr><br>
            <p><b>Een grote boost in batterijduur – tot 22 uur video afspelen voetnoot 2</b></p>
            <br><hr><br>
            <p><b>Maak de mooiste ruimtelijke foto’s en video’s op iPhone 16 en beleef <br> ze opnieuw op Apple Vision Pro voetnoot 3</b></p>
            <br>
            <div class="button-group">
              <h2>storage</h2>
              <button class="toggle-button" onclick="selectButton(this)">64 GB</button>
              <button class="toggle-button active" onclick="selectButton(this)">128 GB</button>
              <button class="toggle-button" onclick="selectButton(this)">256 GB</button>
              <button class="toggle-button" onclick="selectButton(this)">512 GB</button>
            </div>
            <br>

        </div>
      </div>


      <script>
        function selectButton(button) {
            document.querySelectorAll('.toggle-button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        }
      </script>


      <script>
        let thumbnails = document.getElementsByClassName("thumbnail");
        let bigImage = document.getElementById("big"); 

        for (let i = 0; i < thumbnails.length; i++) {
          thumbnails[i].addEventListener("click", function () {
              bigImage.src = thumbnails[i].src;
          });
        }
      </script>
    </main>
    <footer>
      <?php
          include '../includes/footer.php';
      ?>
    </footer>
  </div>
</body>

</html>