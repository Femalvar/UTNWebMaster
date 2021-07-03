// Comentario linea Simple

/*
comentario
multi - linea
*/

// variable (var es solo para crear la variable)
var saludo = "Hola Mundo!";

// consola de testeo:
console.log(saludo);

// Cambio la variable 
saludo = "Chau Mundo!";
console.log(saludo);


// Tambien aparecieron las let (pueden ser modificadas) y  const (no pueden ser modificadas)
let nombre = "Fede"
console.log(nombre)
// let puede cambiar/pisar:
nombre = "Manuel"
console.log(nombre)
// Const no puede ser cambiada/pisada:
const pais = "argentina"
console.log(pais)

document.write("<hr>")

// Objeto Document (se puede modificar el documento html)
document.write("Escribo en el html:")
// Todo se contatena con +
document.write("<br>" + "mi nombre es " + "<b>" + nombre + "</b>" + " y vivo en " + "<b>" + pais + "</b>")

document.write("<hr>")

// Las variables pueden ser string, enteras, decimales y booleanas
let string = "string"
let enteras = 25
let decimales = 0.635
let booleanas = true

// El operador "typeof" devuelve el tipo de operador:
console.log("esto es: " + typeof(string))
console.log("esto es: " + typeof(enteras))
console.log("esto es: " + typeof(decimales))
console.log("esto es: " + typeof(booleanas))

document.write("<b>esto es: </b>" + typeof(string))
document.write("<br>")
document.write("<b>esto es: </b>" + typeof(enteras))
document.write("<br>")
document.write("<b>esto es: </b>" + typeof(decimales))
document.write("<br>")
document.write("<b>esto es: </b>" + typeof(booleanas))
document.write("<br>")