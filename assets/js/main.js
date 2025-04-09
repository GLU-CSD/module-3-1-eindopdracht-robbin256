var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
if (output) {
  output.textContent = slider.value;

  slider.oninput = function () {
    output.textContent = this.value < 10 ? this.value + " (Broke)" : this.value;
  };
}

// HTML-elementen ophalen
var productAmount = document.getElementById("productAmount");
var winkelwagen = document.getElementById("winkelwagen");
// var removeButtons = document.querySelectorAll(".removeProduct");

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

// document.addEventListener("DOMContentLoaded", function () {
//   if (winkelwagen) {
//     function UpdateCard() {
//       if (productCount == 0) {
//         winkelwagen.textContent = "Er is niks in je winkelwagen";
//       } else {
//         for (let i = 0; i < productCount; i++) {
//           winkelwagen.insertAdjacentHTML("beforeend", productHTML);
//         }
//       }
//     }
//     // UpdateCard()

//     document.addEventListener("click", function (event) {
//       if (event.target.classList.contains("removeProduct")) { 
//         productCount -= 1;
//         winkelwagen.innerHTML = ""
//         productAmount.textContent = productCount;
//         localStorage.setItem("productCount", productCount);
//         UpdateCard()
//       }
//     });
//   }
// });








