var  categorie1 = document.getElementById('#categorie1');
var  categorie2 = document.getElementById('#categorie2');
var  categorie3 = document.getElementById('#categorie3');
var  categorie4 = document.getElementById('#categorie4');


$(function(){

	$('#simples').on('click',function(e){
		categorie1.style.visibility = "visible";
		$('#categorie2,#categorie3,#categorie4').style.visibility = "hidden";
		e.stopPropagation();
	});