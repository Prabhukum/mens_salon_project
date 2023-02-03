const express = require('express');
const mysql = require('mysql');

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
});

db.connect(err => {
    if(err) {
        throw err;
    }
    console.log("Server Connected");
});

const app = express();

// create Database
app.get('/createDb', (req, res) => {
    let sql = 'CREATE DATABASE saloon';
    db.query(sql, err => {
        if(err) {
        throw err;
        }
    res.send("Database Created");
    });
});

app.get('/createCustTable', (req, res) => {
    let sql = 'USE saloon';
    db.query(sql, err => {
        if(err) {
        throw err;
        }
    });
    sql = 'CREATE TABLE cust(id int AUTO_INCREMENT, username VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, phone VARCHAR(15) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id), UNIQUE(email), UNIQUE(phone))';
    db.query(sql, err => {
        if(err) {
        throw err;
        }
    res.send("Table Created");
    });
})


app.listen('3000', () => {
    console.log("Server Started on port 3000");
});

