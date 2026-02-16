const express = require('express');
const router = express.Router();


router.get('/config',(req,res)=>{

    res.send("test").statusCode(200);

});

export {router}

