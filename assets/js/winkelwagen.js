var winkelwagen = document.getElementById("winkelwagen");

let items = 5;
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
    </div>
</div>`;

if (items == 0){
    winkelwagen.textContent = "Er is niks in je winkelwagen"  
} else{
    console.log("Aantal producten in winkelwagen:", window.productAmount);

    for (let i = 0; i < items; i++) {   
        winkelwagen.insertAdjacentHTML("beforeend", productHTML);
    }
}
alert("test")


