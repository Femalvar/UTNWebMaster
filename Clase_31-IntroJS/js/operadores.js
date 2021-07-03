// + * - / -> operadores aritmeticos
// = > < => =< == === != -> operadores de comparacion

// OPERADORES ARITMETICOS
document.write("<hr>"+"<h4>Operadores Aritmeticos:</h4>")

let num1 = 35
let num2 = 55

const suma = num1 + num2

console.log(suma)
document.write(num1+"+"+num2+"="+suma)


// OPERADORES DE COMPARACION + Condicional
document.write("<hr>"+"<h4>Operadores de Comparación:</h4>")

const mayoriaEdad = 18
let edadUser = 22

console.log("El usuario tiene "+ edadUser + " años:")

document.write("El usuario tiene " + edadUser + " años...")

if (edadUser >= mayoriaEdad){
    console.log("Puede ingresar")
    document.write("<b> puede ingresar </b>")
}else{
    console.log("No puede ingresar")
}

// BOOLEAN condicional
document.write("<hr>")
let login = true
login = false

if (!login) {
    console.log("El usuario esta logueado.")
}else{
    console.log("El usuario no esta logueado.")
}