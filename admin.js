
var modal1 = document.getElementById('myModal1');

console.log("modal1");
console.log(modal1);

// Get the button that opens the modal
var log = document.getElementById("myBtn");

var span = document.getElementById("close2");

log.onclick = function() {
    modal1.style.display = "block";
}

span.onclick = function() {
    modal1.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}