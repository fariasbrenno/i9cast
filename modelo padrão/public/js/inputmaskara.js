
$(document).ready(function() {

    $('.telefone').inputmask('(99) 99999-9999');
    $('.whatsapp').inputmask('(99) 99999-9999');


});

function formatarCEP(cep) {
  cep = cep.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
  cep = cep.replace(/^(\d{5})(\d)/, '$1-$2'); // Insere o hífen no quinto dígito
  return cep;
}
