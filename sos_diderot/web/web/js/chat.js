let dataElem = null;
let bodySelector = null;

$(function() {

    $('.body-selector').click(function(e) {
        dataElem = $(this).find('.data');
        bodySelector = this;
        prepareChatBox();

        let data = {
            userId: dataElem.data('id')
        };
        fetchMessages(data);
    });

    $('#msg-sender').click(function(e) {
        let msg = $('#msg').val();
        $('#msg').val('');

        let message = {
            senderId: socket.clientId,
            destId: dataElem.data('id'),
            msg: msg
        }
        socket.emit('chat', message);

        addSentMessage(msg);
    });
});

function prepareChatBox() {
    clearChatBox();

    $('#chat-box').prev().addClass('d-none');
    $('#chat-box').removeClass('d-none');

    $('#body-img').prop('src', dataElem.data('profile_pic'));
    $('#first_name').html(dataElem.data('first_name'));
    $('#last_name').html(dataElem.data('last_name'));
}

socket.on('chat', function(message) {
    let senderId = message.senderId;
    let msg = message.msg;

    if(dataElem && dataElem.data('id') === senderId) {
        addReceivedMessage(msg);
        markAsSeen(senderId);
    }
    else {
        let bodies = $('.body-selector');
        let index;
        for(index in bodies.toArray()) {
            let elem = bodies[index];
            if($(elem).find('.data').data('id') === senderId) {
                let span = $(elem).children().last();
                if(span.html() === '') {
                    span.html(1);
                }
                else {
                    span.html(parseInt(span.html()) + 1);
                }
            }
        }
    }
})

function addSentMessage(msg) {
    let html = $('#chat-msgs').data('sent_msg_prototype');
    let msgElem = $(html);
    msgElem.children().first().html(msg);
    $('#chat-msgs').append(msgElem);
}

function addReceivedMessage(msg) {
    let html = $('#chat-msgs').data('received_msg_prototype');
    let msgElem = $(html);
    msgElem.children().first().html(msg);
    $('#chat-msgs').append(msgElem);
}

function clearChatBox() {
    $('#chat-msgs').children().remove();
}

function fetchMessages(data) {
    fetch('/messages', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json',
        }
    }).then(function(response) {
        return response.json();
    }).then(function(data) {
        addMessages(data);
    });
}

function addMessages(data) {
    for(let index in data['messages']) {
        let id = data['messages'][index]['sender_id'];
        if(id === dataElem.data('id')) {
            addReceivedMessage(data['messages'][index]['content']);
        }
        else {
            addSentMessage(data['messages'][index]['content']);
        }
    }
    markAsSeen(dataElem.data('id'));
}

function markAsSeen(senderId) {
    let data = {
        senderId: senderId,
    };

    fetch('/seen-messages', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json',
        },
    }).then(function(response) {
        if(response.ok) {
            $(bodySelector).children().last().html('');
        }
    });
}