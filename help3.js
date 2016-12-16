$(".category").bind("click", function(){
    var divs = $(".category");
    var curIdx = divs.index($(this));

    document.getElementById("num").value=curIdx+1;
});


var modal2 = document.getElementById('myModal2');
var log1 = document.getElementsByClassName("correct");
var span1 = document.getElementById("close3");

span1.onclick = function() {
    modal2.style.display = "none";
}

var edListener = function(event){
	tr=$(event.target).closest("tr").children();
	console.log($(tr[0]).html());
	console.log($(tr[1]).html());
	$(num).val($(tr[0]).html());
    $(title1).val($(tr[1]).html());
    $(id_category1).val($(tr[2]).html());
    $(url_image1).val($(tr[4]).html());
}

$(".correct").bind("click", function(event){
    modal2.style.display = "block";
    $(eddel).val(("ed"));
    edListener(event);

});

$(".sub").bind("click", function(event){
    document.getElementById("fr12").submit();

});

$(".del").bind("click", function(event){
    edListener(event);
     $(eddel).val(("del"));
    document.getElementById("fr12").submit();

});


window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
