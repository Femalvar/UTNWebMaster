// Importa el modulo de Express:
const express = require('express')

// Define una constante y le asigna una funcion express:
const app = express()
// Define una constante y le asigna un puerto local:
const port = 3000

// Middelware: Hace una llamada GET al servidor
// esta funcion genera una ruta con 2 datos, req(request) y res(response)
// y cuando recibe la respuesta, con send le enviamos el ok (funciona el local Host)
app.get('/', (req, res) => {
  res.send('funciona el local Host!')
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})