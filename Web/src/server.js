const http = require('http');
const express = require('express');
const app = express();


http.listen(app).listen(8080, _ => {
    console.log('Listening on 8080');
})
