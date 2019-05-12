let socket = io();

socket.on('connect', function() {
    let data = {
        socketId: socket.id
    };

    fetch('/identify-socket', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
        }
    }).then(function (response) {
        return response.json();
    }).then(function(data) {
        socket.identified = true;
        socket.clientId = data.clientId;
    });
});

socket.on('chat', function(message) {
    if(window.location.pathname !== '/chat') {
        let span = $('#messages-icon').next();
        if(span.html() === '') {
            span.html(1);
        }
        else {
            span.html(parseInt(span.html()) + 1);
        }
    }
});

socket.on('notif', function(message) {
    let span = $('#notification-icon').next();
    if(span.html() === '') {
        span.html(1);
    }
    else {
        span.html(parseInt(span.html()) + 1);
    }
});