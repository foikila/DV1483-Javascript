$(document).ready(function() {

    var socket      = io(),
        messageBox  = $('#m'),
        chat        = $('#chat');

    $('#connect').click(function(event) {
        var inbox = $('#box'),
            name  = $('#username').val();

        if (name !== '') {
            inbox.hide();
            console.log("connection with name: " + name);
            // Send name to server
            socket.emit('user-join', name);

            chat.show();
        }
        inbox.val('');
    });

    $('form').submit(function() {
        socket.emit('chat-message', messageBox.val());
        $('#m').val('');
        return false;
    });
    socket.on('chat-message', function(msg) {
        $('#messages').append($('<li>').text(msg));
    });
});
