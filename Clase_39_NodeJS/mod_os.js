const os = require('os')

console.log('Nombre PC: '+os.hostname())
console.log('Sistema Operativo: '+os.platform())

let totalMem = os.totalmem()
let freeMem = os.freemem()
console.log('Memoria Total: '+totalMem)
console.log('Memoria Libre: '+freeMem)