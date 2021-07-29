
// GetByID boton + add event listener CLICK -> y la funcion
document.getElementById("boton").addEventListener("click", function(){
    // seleccionar Objetos
    let num1 = parseFloat(document.querySelector("#num1").value)
    let signo = document.querySelector("#signo").value
    let num2 = parseFloat(document.querySelector("#num2").value)
    let resultado = document.querySelector("#resultado")
    resultado.style.backgroundColor = 'green';
    resultado.style.color = 'white'
    let operacion

    
    // comparar signos y realizar operacion
    if (signo === "+") {
        operacion = num1 + num2
        resultado.innerHTML = `${num1} ${signo} ${num2} = ${operacion}`
    }
    else if (signo === "-") {
        operacion = num1 - num2
        resultado.innerHTML = `${num1} ${signo} ${num2} = ${operacion}`
        
    }
    else if (signo === "/") {
        operacion = num1 / num2
        resultado.innerHTML = `${num1} ${signo} ${num2} = ${operacion}`
    }
    else if (signo === "*") {
        operacion = num1 * num2
        resultado.innerHTML = `${num1} ${signo} ${num2} = ${operacion}`
    }
    else{
        resultado.innerHTML = `Selecciona una operación`
    }

})

let botonborrar = document.getElementById("borrar")

botonborrar.addEventListener("click", function(){
    resultado.innerHTML = " "
})



