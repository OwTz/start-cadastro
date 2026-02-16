
/* TODO:Criação do back-end para comunicação do banco de dados e aplicação front-end */
const { configDotenv } = require('dotenv');
require('dotenv').config();
var express = require('express');


configDotenv()
var app = express()

// TODO: carregando variáveis de ambiente

var port = process.env.bport || 8085 /* Porta default 8084 */

/* TODO: routes da aplicação */

app.get('/configs',(req,res)=>{
    res.json(
        ["menu","itens","status"]
    ).statusCode(200);
})


app.listen(port,()=>{
    console.log(`back end com conexão ao banco de dados: http://localhost:${port}`)
});







