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
    res.send('index.html');
})

http.listen(app).listen(8080, _ => {
    console.log('Listening on 8080');
})