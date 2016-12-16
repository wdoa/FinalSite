
var items=$('.c-slider div');
var circles=$('.rad');

var currentindex=0;
var itemAmt=items.length;
function cycleItems(){
	var item=$('.c-slider div').eq(currentindex);
	items.hide();
	item.css("display","inline-block");
	$(circles[currentindex]).prop("checked", true)
}

var autoslide=setInterval(function(){

	currentindex++;
	console.log(currentindex);
	if(currentindex>itemAmt-1){
		currentindex=0;
	}
	cycleItems();
},30000);

$('.rad').click(function(){
	currentindex=circles.index($(":radio[name='p']:checked"));
	cycleItems();
})

$('.next').click(function(){
	currentindex++;
	if(currentindex>itemAmt-1){
		currentindex=0;
	}
	cycleItems();
})

$('.prev').click(function(){
	currentindex--;
	if(currentindex<0){
		currentindex=itemAmt-1;
	}
	cycleItems();
})


/*
var cat = document.getElementsByClassName("category");


for (var i=0; i < cat.length; i++) {
	  cat[i].onclick = function(){
		  document.getElementById("idcat").value=indexOf(cat.this)+1;
		  document.getElementById("myForm").submit();
	}
}
*/

$(".category").bind("click", function(){
    var divs = $(".category");
    var curIdx = divs.index($(this));

    document.getElementById("idcat").value=curIdx+1;
		  document.getElementById("myForm").submit();
});

$(".category1").bind("click", function(){
    var divs = $(".category1");
    var curIdx = divs.index($(this));

    document.getElementById("idcat").value=curIdx+1;
		  document.getElementById("myForm").submit();
});

$(".category2").bind("click", function(){
    var divs = $(".category2");
    var curIdx = divs.index($(this));

    document.getElementById("idn").value=curIdx+1;
		  document.getElementById("myForm2").submit();
});

