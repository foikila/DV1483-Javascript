var express = require('express');
var app     = express();
var http    = require('http').Server(app);
var io      = require('socket.io')(http);
var port    = 8020;

http.listen(port, function() {
    console.log('listening on *: ' + port);
});

app.use(express.static(__dirname + '/'));

app.get('/', function(req, res) {
    res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket) {
    var username;
    socket.on('user-join', function(name) {
        username = name;
        io.emit('chat-message', username + ' connected!');
    });

    socket.on('chat-message', function(message) {
        if (message.length > 0) {
            var time = new Date()
                    .toISOString()
                    .replace(/T/, ' ')
                    .replace(/\..+/, ''),
                msg = "[" + time + "] " +
                       username + ' |  ' +
                       message;
            io.emit('chat-message', msg);
            console.log(msg);
        }
    });

    socket.on('disconnect', function() {
        var time = new Date()
                    .toISOString()
                    .replace(/T/, ' ')
                    .replace(/\..+/, ''),
            msg = "[" + time + "] " +
                   username + ' |  ' +
                   'disconnected!';
        io.emit('chat-message', msg);
        console.log(msg);
    });
});

