var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
if (output) { 
  output.textContent = slider.value; 

  slider.oninput = function() {
      output.textContent = this.value < 10 ? this.value + " (Broke)" : this.value;
  };
}


// HTML-elementen ophalen
var productAmount = document.getElementById("productAmount");
var winkelwagen = document.getElementById("winkelwagen");
var buttons = document.querySelectorAll(".addProduct");

// Ophalen van opgeslagen productCount uit localStorage (of 0 als er niets is)
let productCount = localStorage.getItem("productCount") ? parseInt(localStorage.getItem("productCount")) : 0;
productAmount.textContent = productCount; // Updaten van de HTML bij paginalaad

// HTML-template voor een product
let productHTML = `
<div class="product">
    <div class="boven">
        <img src="assets/img/phone.png" alt="Phone">
    </div>
    <div class="onder">
        <div>
            <p>Iphone 11 Pro</p><br>
            <p class="description">Iphone 11 but only for professionals</p>
        </div>
        <div>
            <p>510,-</p>
        </div>
        <div>
            <button class="removeProduct">Remove</button>
        </div>
    </div>
</div>`;

document.addEventListener("DOMContentLoaded", function() {
  // Controleer of het winkelwagen-element bestaat op de huidige pagina
  if (winkelwagen) {
    // Controleer of er producten in de winkelwagen zitten
    if (productCount == 0) {
      winkelwagen.textContent = "Er is niks in je winkelwagen";  
    } else {
      for (let i = 0; i < productCount; i++) {
        winkelwagen.insertAdjacentHTML("beforeend", productHTML); // Voeg de producten toe aan de winkelwagen
      }
    }


    removeButtons.forEach(function (removeButton) {
      removeButton.addEventListener("click", function () {
        productCount -= 1; // Verminder het aantal producten
        localStorage.setItem("productCount", productCount); // Sla het nieuwe aantal op in localStorage
        console.log("remove prodcu")
        if (productCount === 0) {
          winkelwagen.textContent = "Er is niks in je winkelwagen";  // Laat een bericht zien als de winkelwagen leeg is
        }
      });
    });


    // Functie voor het verwijderen van producten
    function updateRemoveButtons() {
      console.log("remove product")
      let removeButtons = document.querySelectorAll(".removeProduct");


    }

    updateRemoveButtons(); // Zet de verwijderfunctionaliteit aan
  }
});

// Eventlistener toevoegen aan alle "Add to cart"-knoppen
buttons.forEach(function (button) {
  button.addEventListener("click", function () {
    productCount += 1; // Totaal aantal producten verhogen
    productAmount.textContent = productCount; // Updaten in de HTML
    localStorage.setItem("productCount", productCount); // Opslaan in localStorage
    winkelwagen.insertAdjacentHTML("beforeend", productHTML); // Voeg het product toe aan de winkelwagen
    updateRemoveButtons(); // Verwijderknoppen opnieuw instellen
  });
});









