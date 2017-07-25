$(document).ready(function(){
  
    var counter = 1;

  $("#add_placa").click(function () {

	if(counter>10){
            alert("Máximo 10 novos campos");
            return false;
	}

	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<div class="row"><div class="col-lg-9"><input type="text" name="placa_veiculo[' + counter + ']" id="placa_veiculo' + counter + '" value="" class="form-control placa_veiculo" placeholder="AAA-9999" ></div></div>');
  

  newTextBoxDiv.appendTo("#placa_veiculo_group");

  $(".placa_veiculo").inputmask("AAA-9999");

	counter++;
     });

    $("#remove_placa").click(function () {
  	if(counter==1){
            alert("Nenhuma linha adicional para remover");
            return false;
         }

  	counter--;

    $("#TextBoxDiv" + counter).remove();

     });
  });

function mascaraValor(valor) {
    valor = valor.toString().replace(/\D/g,"");
    valor = valor.toString().replace(/(\d)(\d{8})$/,"$1.$2");
    valor = valor.toString().replace(/(\d)(\d{5})$/,"$1.$2");
    valor = valor.toString().replace(/(\d)(\d{2})$/,"$1,$2");
    return valor                    
}

function somaNFs() {
  var valor_nf = 0; 
  var res = ''; 

  $('.valor-nf').each(function(i){ 
    var str = $(this).val();
    res = str.replace("R$", "");
    res2 = res.replace(/\,/g, "");
    res3 = res2.replace(/\./g, "");
  
       valor_nf = parseInt(res3) + valor_nf ;

  }); 

  $('span#soma-nfs').html(mascaraValor(valor_nf));
  $('#prejuizo_estimado').val(mascaraValor(valor_nf));
}

function somaCTes() {

  var valor_cte = 0; 
  var res = ''; 

  $('.valor-cte').each(function(i){ 
    var str = $(this).val();
    res = str.replace("R$", "");
    res2 = res.replace(/\,/g, "");
    res3 = res2.replace(/\./g, "");
  
       valor_cte = parseInt(res3) + valor_cte ;

  }); 

  $('span#soma-ctes').html(mascaraValor(valor_cte));
}  

$(document).ready(function(){

  var counter = 1;

  $("#add_nf").click(function () {


  if(counter>200){
            alert("Máximo 200 novos campos");
            return false;
  }

  var newTextBoxDiv = $(document.createElement('div'))
       .attr("id", 'TextBoxDiv' + counter);

  newTextBoxDiv.after().html('<div class="col-lg-4"><div class="form-group"><label>Número:</label><input type="text" id="num_nf" name="num_nf[' + counter + ']" class="form-control" placeholder="Nº da NF..."></div></div><div class="col-lg-4"><div class="form-group"><label>Data emissão:</label><div class="input-group date"><div class="input-group-addon"><i class="fa fa-calendar"></i></div><input type="text" name="data_emissao_nf[' + counter + ']" class="dataEmissaoNF form-control pull-right" id="dataEmissaoNF[' + counter + ']" placeholder="dd/mm/aaaa"></div></div></div><div class="col-lg-4"><div class="form-group"><label>Valor:</label><input type="text" id="valor_nf[' + counter + ']" name="valor_nf[' + counter + ']" class="form-control valor-nf" onBlur="somaNFs();" placeholder="R$ 0,00"></div></div>');

  newTextBoxDiv.appendTo("#nf_group");
  
  
  $(".valor-nf").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});
  $('.dataEmissaoNF').datepicker({
    language: 'pt-BR',
    endDate: '+0d',
    format: 'dd/mm/yyyy',
    todayHighlight: true,
    autoclose: true
  });
 
  counter++;
     });

     $("#remove_nf").click(function () {
  if(counter==1){
          alert("Nenhuma linha adicional para remover");
          return false;
       }

  counter--;

        $("#TextBoxDiv" + counter).remove();

     });

  });



$(document).ready(function(){



    var counter = 1;

  $("#add_cte").click(function () {

  if(counter>200){
            alert("Máximo 200 novos campos");
            return false;
  }

  var newTextBoxDiv = $(document.createElement('div'))
       .attr("id", 'TextBoxDiv' + counter);

  newTextBoxDiv.after().html('<div class="col-lg-4"><div class="form-group"> <label>Número:</label><input type="text" id="num_cte" name="num_cte[' + counter + ']" class="form-control" placeholder="Nº do CTe..."></div></div><div class="col-lg-4"><div class="form-group"><label>Data emissão:</label><div class="input-group date"><div class="input-group-addon"><i class="fa fa-calendar"></i></div><input type="text" name="data_emissao_cte[' + counter + ']" class="form-control pull-right dataEmissaoCTe" id="dataEmissaoCTe[' + counter + ']" placeholder="dd/mm/aaaa"></div></div></div><div class="col-lg-4"><div class="form-group"><label>Valor:</label><input type="text" id="num_cte" name="valor_cte[' + counter + ']" class="form-control valor-cte" placeholder="R$ 0,00" onBlur="somaCTes();"></div></div>');

  newTextBoxDiv.appendTo("#cte_group");
  $(".valor-cte").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});
  $('.dataEmissaoCTe').datepicker({
    language: 'pt-BR',
    endDate: '+0d',
    format: 'dd/mm/yyyy',
    todayHighlight: true,
    autoclose: true
  });

  counter++;
     });

     $("#remove_cte").click(function () {
  if(counter==1){
          alert("Nenhuma linha adicional para remover");
          return false;
       }

  counter--;

        $("#TextBoxDiv" + counter).remove();

     });

});