var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
  res.sendfile('index.html');
});

io.on('connection', function(socket){
  socket.on('chat message', function(msg){
io.emit('chat message', msg);
  });
});

http.listen(3000, function(){
  console.log('listening on *:3000');
});

var socket = io();
$('#chat_message').submit(function(){
    socket.emit('chat message', $('#message_field').val());
    $('#message_field').val('');
    return false;
});
socket.on('chat message', function(msg){
    $('#chat_window').append(msg);
});
