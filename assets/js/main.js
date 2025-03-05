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