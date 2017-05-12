$(document).ready(function () {
   function buscaCep(cep) {
    window.location = 'http://localhost/enderecos/index.php?cep='+cep;
  }
  $('#cep').keyup(function(){
     var teste = $('#cep').val();
     if(teste.length == 8) {
        buscaCep(teste);
     }
  });
});