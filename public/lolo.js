
    var mysql = require('mysql');

    var con = mysql.createConnection({
        host: "172.17.0.1:9906",
        user: "ceitdb",
        password: "12345678",
        database: "ceitdb"
    });

    con.connect(function(err) {
        document.getElementById('code').value = (code);
        if (err) throw err;
        //Select all customers and return the result object:
        var sql = 'SELECT detail FROM itemdata where itemCode = ? ';
        con.query(sql, [code], function(err, code, fields) {
            if (err) throw err;
            console.log(code);
        });
    });