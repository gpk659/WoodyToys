const http = require('http');
const express = require('express');
const serveStatic = require('serve-static'); // static files
const compression = require('compression'); // gzip
const mongoose = require('mongoose');
const app = express();
const prod = process.env.NODE_ENV == 'production';

mongoose.promise = global.promise;
//mongoose.createConnection('mongodb://151.80.119.134/marketplace');

const productSchema = new mongoose.Schema({
    name: String,
    category: String,
    cost: Number
});

const product = mongoose.model('product', productSchema);

app.use(compression());

// 1 year caching if prod. Otherwise must-revalidate
app.use(serveStatic('static', {
    maxAge: prod ? (365 * 24 * 60 * 60 * 1000) : 0
}));

app.get('/', (req, res) => {
    res.send('index.html');
})

app.get('/products', async (req, res) => {
    //const products = await product.findAll();
});

http.createServer(app).listen(8080, _ => {
    console.log('Listening on 8080');
})
