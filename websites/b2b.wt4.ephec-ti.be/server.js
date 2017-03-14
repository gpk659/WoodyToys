const http = require('http');
const express = require('express');
const app = express();
const fs = require('mz/fs');
const pgp = require('pg-promise');
const hbs  = require('handlebars');

const connection = {
    host: "db",
    port: 5432,
    database: 'woodymarket',
    user: 'woodytoys',
    password: 'woodymarket'
}

const pgsql = pgp(connection);

let dbstatus = 'connection en cours...';

app.get('/', (req, res) => {
    fs.readFile('index.html')
        .then(file => file.toString('utf-8'))
        .then(file => hbs.compile(file)(dbstatus))
        .then(file => res.send(file))
        .catch(e => console.log(e));
})

http.createServer(app).listen(9000, _ => {
    console.log('b2b available on b2b.wt4.ephec-ti.be');
});
