require('./bootstrap');
//import j-query
var $ = require('jquery');
//import bootstrap
import 'bootstrap';

$(document).ready(function() {
    //intercetto il click sulla domanda
    $(".domanda").click(function() {
        //salvo in variabile la domanda corrente
        var domanda_corrente = $(this);
        //salvo in vatiabile la risposta corrente
        var risposta_corrente = $(this).next();
        //chiudo le eventuali risposte aperte
        $(".risposta").slideUp();
        //aggiungo l'icona di domanda non estesa
        $(".domanda").find("i").removeClass("fa-minus").addClass("fa-plus");
        //se la risposta corrente non é visibile
        if (!risposta_corrente.is(":visible")) {
            //mostro la risposta legata alla domanda corrente
            risposta_corrente.slideDown();
            //modifico l'icona che indica se la risposta è visibile o meno
            domanda_corrente.find("i").toggleClass(" fa-plus fa-minus");
        }
    })
})
