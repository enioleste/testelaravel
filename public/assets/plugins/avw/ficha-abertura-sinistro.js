$(function () {

	//Select2 plugin para Seletor de Segurado e Seguradora
	$(".select2").select2();
	
	//Input Mask Ficha de abertura
	$("#cep_ocorrencia").inputmask("99999-999");
	$("#cep_vistoria").inputmask("99999-999");
	$(".placa_veiculo").inputmask("AAA-9999");
	$("#prejuizo_estimado").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});
	$(".valor-cte").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});
	$(".valor-nf").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});
	$("#contato_vistoria_telefone").inputmask("(99)99999-9999");


	//Seletores de Datas Datepicker
	//Seletores de Datas (dd/mm/yyyy) Mask
	//$("#dataEmbarque").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
	$('#dataEmbarque').datepicker({
		language: 'pt-BR',
		endDate: '+0d',
		format: 'dd/mm/yyyy',
		todayHighlight: true,
		autoclose: true
	});
	//$("#dataEmissaoCTe").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
	$('#dataEmissaoCTe').datepicker({
		language: 'pt-BR',
		endDate: '+0d',
		format: 'dd/mm/yyyy',
		todayHighlight: true,
		autoclose: true
	});
	$('#dataEmissaoNF').datepicker({
		language: 'pt-BR',
		endDate: '+0d',
		format: 'dd/mm/yyyy',
		todayHighlight: true,
		autoclose: true
	});	
	//$("#dataOcorrencia").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
	$('#dataOcorrencia').datepicker({
		language: 'pt-BR',
		endDate: '+0d',
		format: 'dd/mm/yyyy',
		todayHighlight: true,
		autoclose: true
	});
	//$("#dataAverbacao").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
	$('#dataAverbacao').datepicker({
		language: 'pt-BR',
		endDate: '+0d',
		format: 'dd/mm/yyyy',
		todayHighlight: true,
		autoclose: true
	});
	//Timepicker para Horario da Ocorrência 
	$("#horarioOcorrencia").timepicker({
		showMeridian: false,
		showInputs: false
	});

	//iCheck for checkbox and radio inputs
	$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_minimal-blue'
	});
	
	$('#list_segurado').change(function() {
		var seguradora_id = $('#list_segurado :selected').attr('label');
		$('#list_seguradora').val(seguradora_id);
		$('#list_seguradora').select2();
	});

	/*
	* Ativa os campos de checkbox para "Avarias" quando selecionado
	*/
	$('#tipo_ocorrencia_2').on('ifChecked', function (event){
	   $('#group-avarias').removeClass('hide');
	});
	$('#tipo_ocorrencia_2').on('ifUnchecked', function (event) {
	   $('#group-avarias').addClass('hide');
	});

	/*
	* Ativa o campo de texto "Outros" quando o checkbox é selecionado
	*/
	$('#tipo_avaria_ativa_outros').on('ifChecked', function (event){
	   $('#tipo_avaria_outros').removeClass('hide');
	});
	$('#tipo_avaria_ativa_outros').on('ifUnchecked', function (event) {
	   $('#tipo_avaria_outros').addClass('hide');
	});

	/*
	* Função para limitar o input de nº CTe para apenas números
	*/
    $("#num_cte").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
	/*
	* Função para limitar o input de prejuizo_estimado para apenas números
	*/
    $("#prejuizo_estimado").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    /*
	* Função para limitar o input de prejuizo_estimado para apenas números
	*/
    $("#num_nfs").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 188]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    $('#loading-box').remove();

});