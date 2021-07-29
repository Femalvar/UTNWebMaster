// Comentario linea Simple

/*
comentario
multi - linea
*/

// variable (var es solo para crear la variable)
var saludo = "Hola Mundo!";

// consola de testeo:
console.log(saludo);

// var no solo puede cambiarse el valor, sino que puede reescribirse
var saludo = "Chau Mundo!";
console.log(saludo);


// Tambien aparecieron las let (SI pueden cambiar su valor, pero NO reescribirse) y const (no pueden ser modificadas (ni rescritas ni su valor))
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

// Tambien se puede concatenar con el strigns literal. comillas invertidas(``)
// Y poder dar ENTERs para visualizar mejor:
document.write(`
<br><br>Esto es una cadena <strong>"string literal"</strong>: <br>
Me llamo ${nombre}, y vivo en ${pais}.
<br><br>
`)



document.write("<hr>")

// Las variables pueden ser string, enteras, decimales y booleanas
let string = "string"
let enteras = 25
let decimales = 0.635
let booleanas = true

// El operador "typeof" devuelve el tipo de operador:
console.log(`esto es: ${typeof(string)}`) // Esto esta escrito string literal
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