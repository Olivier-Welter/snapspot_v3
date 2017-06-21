//gestion evenement du clic pour photo à envoyer et ouverture sur les mobiles d'un choix entre prise de photo ou photo enregistré
$('#upfile1').on('click',function () {
    $('#mon_fichier').trigger('click');
});

document.getElementById("mon_fichier").onchange = function() {document.getElementById("uploadform").submit();}


