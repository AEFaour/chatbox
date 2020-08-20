$(function () {

    let lastID = null;
    getLastId();

    $('#btnEnvoyer').on('click', function (e) {
        e.preventDefault(); // neutralise le comportement naturel du bouton

        clearInterval(timer); // on stoppe le timer
        let pseudo = $('#pseudo').val();
        let message = $('#message').val();

        params = {
            action: "insert",
            pseudo: pseudo,
            message: message
        };

        $.post('assets/ajax_queries.php', params, function (reponse) {

            getMessages();

            $('#message').val('');
            $('#message').focus();
            timer = setInterval(getMessages,2000);


        }, 'json');
    });

    function getLastId() {

        params = {
            action: 'getLastId'
        };
        $.post('assets/ajax_queries.php', params, function (reponse) {
            lastID = reponse.lastID;
        }, 'json')

    }

    function getMessages() {
        params = {
            action: 'getMessages',
            lastID: lastID
        };

        $.post('assets/ajax_queries.php', params, function (reponse) {
            for (let i = 0; i < reponse.listeMessages.length; i++) {
                $('#messages').append(reponse.listeMessages[i].pseudo + ' > ' +
                    reponse.listeMessages[i].message + '<br>')
            }
            getLastId();
            $('#messages').scrollTop($('#messages')[0].scrollHeight);

        }, 'json');
    }

    let timer = setInterval(getMessages, 2000);

}); // Fin du DOM chargé