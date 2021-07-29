//importamos express
const express = require('express')
//ejecutar el sistema de routing de express
const router = express.Router()

let data = {
    titulo:"Contacto",
    p:"hola mundo! Chau Munndo!"
}

router.get('/',function(request,response){
    // response.send("Esto es el contacto")
    //render('vista a renderizar',{data a enviar a la vista})
    response.render('contacto.hbs',{data})
})

module.exports = router;