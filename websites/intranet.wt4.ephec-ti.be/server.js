const http = require('http');
const express = require('express');
const serveStatic = require('serve-static'); // static files
const compression = require('compression'); // gzip

const app = express();
const prod = process.env.NODE_ENV == 'production';

app.use(compression());

// 1 year caching if prod. Otherwise must-revalidate
app.use(serveStatic('static', {
    maxAge: prod ? (365 * 24 * 60 * 60 * 1000) : 0
}));

app.get('/', (req, res) => {
    res.render('index.html');
})

http.createServer(app).listen(8082, _ => {
    console.log('Listening on 8082');
})
