var express = require('express');
const Sequelize = require('sequelize')
var router = express.Router();

let title = "Mi huellita"
let emailRegistrado = "El email ya esta registrado!"
// let abrirModal = () => {"#RegistroModal".modal("show")}
let abrirModal = () => {
  document.getElementById('RegistroModal').modal('show.bs.modal')
}

//Conexion MYSQL
const db = require('../config/db')

// Autenticar y verificar la Conexion => Promise
db.authenticate()
.then(() => {
  console.log('Conectado a la Base de Datos!!!')
})
.catch(err => {
  console.log('No se conecto!!!' +err)
})

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index.hbs', { title: 'huellitas' });
});

//Cargar Usuario
const tablaUsuarios = require('../models/tablaUsuarios')

//Tomamos los datos (valores con name) del FORM REGIsTRO en un Objeto
router.post('/', async (req,res) => {
    const newUser = {
        id:0,
        nombre: req.body.nombre,
        apellido: req.body.apellido,
        email: req.body.email,
        password: req.body.password,
        
    }
    console.log(newUser)

    //Y los agregamos a la tabla DB
    try {
        const cargarUser = await tablaUsuarios.create({
            id: newUser.id,
            nombre: newUser.nombre,
            apellido: newUser.apellido,
            email: newUser.email,
            password: newUser.password,
            
        })    
    
        res.render("usuarios.hbs",{title,alta:true})
        
    } catch (error) {
        console.log("Error de alta "+error)
        res.render('',{emailRegistrado,abrirModal, nombre:newUser.nombre})
        // console.log(emailRegistrado)
    }
})

// Datos FORM LOGIN
router.post('/', async (req,res) => {
  const userLogin = {
    // emailUser: req.body.emailUser,
    // claveUser: req.body.claveUser,
    email: req.body.emailUser,
    password: req.body.claveUser,
      
    }
    console.log(userLogin)

  })
  //Y los consultamos a la tabla DB
  router.get('/',async (req,res) => {

    try {
      const inUser = await tablaUsuarios.findOne({
        where:{
          email: emailUser,
          password: claveUser,
        }
          
      })    
      res.render('usuarios.hbs',{title})
      
    } catch (error) {
      console.log("Error de Login "+error)
    }

  })


module.exports = router;
