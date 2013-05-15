//Active ou désactive la modification des champs
var check = document.getElementById('updateActivate');

check.addEventListener('click',function(){
	if(check.checked){
		document.getElementById('updateLoyer').readOnly=false;
		document.getElementById('updateSuperficie').readOnly=false;
		document.getElementById('updateNbPiece').readOnly=false;
		document.getElementById('validUpdate').disabled=false;
		document.getElementById('validUpdate').style.visibility="visible";
	}else{
		document.getElementById('updateLoyer').readOnly=true;
		document.getElementById('updateSuperficie').readOnly=true;
		document.getElementById('updateNbPiece').readOnly=true;
		document.getElementById('validUpdate').disabled=true;
		document.getElementById('validUpdate').style.visibility="hidden";
	}
},false);
//Vérifie que les nouvelle valeurs soient juste
document.getElementById('updateLoyer').addEventListener('blur',function(){
	var loyerSplit = document.getElementById('updateLoyer').value.split("");

	for(var i=0;i<loyerSplit.length;i++){
		if(isNaN(loyerSplit[i]) || loyerSplit[i]==" "){
			loyerSplit[i]=null;
		}
	}
	document.getElementById('updateLoyer').value = loyerSplit.join("");
	if(document.getElementById('updateLoyer').value!=0){
		document.getElementById('updateLoyer').style.borderColor = 'green';
	}else{
		document.getElementById('updateLoyer').style.borderColor = 'red';
	}
},false);
//Vérifie que la superficie soit supèrieure ou égale à la norme
document.getElementById('updateSuperficie').addEventListener('keyup',function(){
	if(document.getElementById('updateSuperficie').value>=9){
		document.getElementById('updateSuperficie').style.borderColor = "green";
	}else{
		document.getElementById('updateSuperficie').style.borderColor = "red";
	}
},false);
//Vérification de la superficie lorsqu'on la choisi avec les flèches
document.getElementById('updateSuperficie').addEventListener('change',function(){
	if(document.getElementById('updateSuperficie').value>=9){
		document.getElementById('updateSuperficie').style.borderColor = "green";
	}else{
		document.getElementById('updateSuperficie').style.borderColor = "red";
	}
},false);

//Vérification du nombre de pièces
document.getElementById('updateNbPiece').addEventListener('keyup',function(){
	if(document.getElementById('updateNbPiece').value>=1){
		document.getElementById('updateNbPiece').style.borderColor = "green";
	}else{
		document.getElementById('updateNbPiece').style.borderColor = "red";
	}
},false);
//Vérification du nombre de pièces lorsqu'on le choisi avec les flèches
document.getElementById('updateNbPiece').addEventListener('change',function(){
	if(document.getElementById('updateNbPiece').value>=1){
		document.getElementById('updateNbPiece').style.borderColor = "green";
	}else{
		document.getElementById('updateNbPiece').style.borderColor = "red";
	}
},false);
