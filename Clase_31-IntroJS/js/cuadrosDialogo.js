//Cuadro de Dialogo -> funciones para interacturar con el usuario -> modo Testeo
// devuelven false al navegador, cuando estan en ejecucion. Despues, devuelven true

// >>>>>>>>>>> FUNCIONES ALERT: alert()
alert("esto es un cuadro de alerta")



// >>>>>>>>>>> FUNCIONES PROMPT: prompt()
// si aceptamos, devuelve string, sino null

let preguntaNombre = prompt("Como te llamas?")

console.log("Mi nombre es "+preguntaNombre)

// Get Element by Class:
// document.getElementsByClassName(".classNombre").innerHTML = "Mi nombre es "+preguntaNombre

// Query Selector:
// document.querySelector(".classNombre").innerHTML = "Hola "+preguntaNombre

// Get Element by ID:
document.getElementById("idNombre").innerHTML = "Mi nombre es "+preguntaNombre


// >>>>>>>>>>> FUNCIONES CONFIRM: confirm()
//si aceptamos, devuelve true, sino false

let salir = confirm ("Estas seguro que vas a salir?")

if (salir) {
    console.log("Saliste al site de Fede")  
    window.location = "http://www.alvarez-federico.com.ar"  
}else{
    console.log("te quedas aqui")
}