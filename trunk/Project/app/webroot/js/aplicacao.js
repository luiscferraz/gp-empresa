//Quando o documento (pagina) estiver Ready(carregado) ele chama as fun��es
$('document').ready(function(){

	//Buscar Endereço ao digitar o dep
	$('#zip_code').keypress(function(){
		var cep = $(this).val();
		cep = cep.replace('-','');
		cep = cep.replace('.','');	
		cep = cep.replace('_','');
		var tamanho = cep.length;
		if(tamanho == 8){
			//Função de buscar endereço pelo cep
			getEndereco();
		}
	});

});