let express = require('express');
const Sequelize = require('sequelize')
let router = express.Router();

//Conexion MYSQL
const db = require('../config/db')

// Data a pasar
let title = "datos de tu mascota"
// let placeholderNac = "Nacimiento"


/* GET usuarios to render. */
router.get('/', function(req, res, next) {

  res.render('usuarios.hbs',{title})

});


module.exports = router;
