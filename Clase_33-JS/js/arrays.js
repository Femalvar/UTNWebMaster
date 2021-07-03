// ARRAYS

console.log(">>>>> SELECCIONAMOS UN ELEMENTO DEL ARRAY (Manu) <<<<<<")
// FORMA LARGA DE ARMAR UN ARRAY:
let user1 = "Fede"
let user2 = "Sabri"
let user3 = "Manu"
let user4 = "Nacho"

let usuarios = ["Fede",user3,"Manu","Nacho"]
console.log(usuarios[1])

// FORMA Corta DE ARMAR UN ARRAY:
let persona = ["Fede", "Alvarez", 45, true, "mail@mail.com"]

console.log(">>>>> CONCATENAMOS Elementos del array con string (forma larga) <<<<<<")
// FORMA de CONCATENAR Datos de un ARRAY
console.log("Hola, soy "+persona[0]+" "+persona[1]+". Mi mail es "+persona[4])

console.log(">>>>> CONCATENAMOS Elementos del array con string (forma corta) <<<<<<")
// FORMA CORTA (string) de concatenar Datos de un ARRAY
console.log(`Hola, soy ${persona[0]} ${persona[1]} y tengo ${persona[2]} años`)


// Estructura
// Objeto.metodo(parametros)

// Recorrer el ARRAY con for
console.log(">>>>> RECORREMOS UN ARRAY persona CON for: <<<<<<")

for (let i = 0; i < persona.length; i++) {
    console.log(persona[i])
}


// Agregar un elemento al final del ARRAY
console.log(">>>>> AGREGAMOS al ARRAY un elemento (dni) CON push = al final <<<<<<")
let dni = 25224133
persona.push(dni)

// Recorrer el ARRAY con for of
for (let datos of persona) {
    console.log(datos)
}
