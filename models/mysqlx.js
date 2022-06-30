let mysqlx = require('@mysql/xdevapi');
let debug = require('debug')('app:mysqlx');
let dataFunction = require('../functions/dataFunction');

let config = {
    host: process.env.MYSQL_HOST || 'localhost',
    port: dataFunction.normalizePort(process.env.MYSQLX_PORT || 33060),
    user: process.env.MYSQL_USER,
    password: process.env.MYSQL_PASS,
    schema: process.env.MYSQL_SCHEMA
};

let client = mysqlx.getClient(config, { pooling: { enabled: true, maxSize: 5 } });

// Connection test
client.getSession()
.then((session) => {
    debug('Connected');
    session.close();
})

module.exports = client;