const Sequelize = require('sequelize')
const db = require('../config/db')

//Definimos estrucutura en Objeto para la tabla (usuarios)
const tablaUsuarios = db.define('usuarios',{
    id:{
      type: Sequelize.INTEGER,
      primaryKey:true,
      autoIncrement:true,
      allowNull: false
    },
    nombre:{type:Sequelize.STRING,
    allowNull: false
    },
    apellido:{type:Sequelize.STRING},
    email:{
        type:Sequelize.STRING,
        allowNull: false,
        unique: true
    },
    password:{type:Sequelize.STRING,
    allowNull: false
    },

  });

module.exports = tablaUsuarios