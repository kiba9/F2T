$('#btnUp').click(function () {
    var btn = $('#btnUp');
    if( btn.text() != "Fermer le block") {
        $('#upl').css('display', 'block');
        btn.html('Fermer le block');
    }else {
        $('#upl').css('display', 'none');
        btn.html('Uploader le Fichier');
    }
});