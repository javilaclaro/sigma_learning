<h1> JS OBJECTS </h1>
<p>Creating an object</p>
<code>
  var miObjeto = {
    color: "Negro",
    altura: 25,
  };
</code>

<p> Another object example with a function inside </p>
<pre>
var miAuto = {
  marca: "Toyota",
  modelo: "Corolla",
  año: 2020,
  detallesDelAuto: function () {
	   console.log(`Auto ${this.modelo} ${this.año}`);
}
</pre>
<p>Calling and object property</p>
<code>
  miObjeto.color;
  miObjeto.altura;
  miAuto.detallesDelAuto();
</code>

<h2> Función constructora </h2>
<pre>
  function auto (MARCA, MODELO, ANNIO){
  this.marca = MARCA;
  this.modelo = MODELO;
  this.annio = ANNIO;
}
var autos = [];
for(let i = 0 ; i < 30 ; i++){
  var marca = prompt("Ingresa la marca del auto");
  var modelo = prompt("Ingresa el modelo del auto");
  var annio = prompt("Ingresa el año del auto");
  autos.push(new auto (marca, modelo, annio));
}

for(let i = 0 ; i < autos.length ; i++){
  console.log(autos[i]);
}
</pre>

<?php include "footer.php"; ?>
