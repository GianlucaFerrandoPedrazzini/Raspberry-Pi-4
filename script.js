function infoKeras(){
alert("Keras es una biblioteca de Python para crear redes neuronales y desarrollar modelos de inteligencia artificial.");
}

window.onload = function(){
console.log("Página de biblioteca Keras cargada correctamente");
}

function buscarSeccion(){

let input = document.getElementById("buscador").value.toLowerCase()

let tarjetas = document.getElementsByClassName("card")

for(let i = 0; i < tarjetas.length; i++){

let titulo = tarjetas[i].innerText.toLowerCase()

if(titulo.includes(input)){
tarjetas[i].style.display = "block"
}else{
tarjetas[i].style.display = "none"
}

}

}