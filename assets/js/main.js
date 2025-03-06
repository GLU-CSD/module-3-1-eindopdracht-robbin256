var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
    if (this.value < 10){
        output.innerHTML = this.value + "(Broke)";
    } else{
        output.innerHTML = this.value;
    }
}


var productAmount = document.getElementById("productAmount")

var buttons = document.querySelectorAll(".addProduct"),
  count = 0;

buttons.forEach(function (button) {
  button.addEventListener("click", function () {
    count += 1;
    productAmount.innerHTML = count;
  });
});
