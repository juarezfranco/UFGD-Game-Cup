/*
* executar formulário por ajax.
* By Juarez :)
*/


$(document).ready(function() {

	$('#form-opcao1').submit(function(event){
		//abre tela de carregamento
		$('#modalloading').modal({backdrop: 'static', keyboard: false});

		//casting formulario
		var formData= {
			'nome'	:$('input[name=nome]').val(),
			'email'	:$('input[name=email]').val(),
			'cpf'	:$('input[name=cpf]').val(),
			'fone'	:$('input[name=fone]').val()
		}

		//executa cadastro via ajax
		$.ajax({
			type	: 'POST',
			url		: 'cadastrar1.php',
			data 	: formData,
			dataType: 'json',
			encode	: true
		}).done(function(data){
			//trata resposta

			//fecha tela de carregamento
			$('#modalloading').modal('hide');

			if(data['success']){
				//fecha modal de cadastro
				$('#modal_cadopcao1').modal('hide');

				//limpa campos
				$('input[name=nome]').val('');
				$('input[name=email]').val('');
				$('input[name=cpf]').val('');
				$('input[name=fone]').val('');

				//exibe mensagem de sucesso
				$('#alertsuccess').modal('show');

			}else{
				//prepara mensagem de erro
				var msgerro = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				//imprime mensagens de erro				
				for (var key in data['erros']) {
					msgerro+= ' - '+data['erros'][key]+'<br>';
				}

				//exibe mensagem de erro
				$('#alertfail1').addClass('in');
				$('#alertfail1').html(msgerro);				
				
			}
			//erro na requisição
		}).fail( function( jqXHR, textStatus, errorThrown ){
			//fecha tela de carregamento
			$('#modalloading').modal('hide');

			//prepara mensagem a ser exibida na tela
			var msgerro = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
			msgerro+= 'Ocorreu um erro na conexão, tente novamente!';
			msgerro+= '<br>'+jqXHR.responseText;

			//exibe mensagem de erro
			$('#alertfail1').html(msgerro);				
			$('#alertfail1').addClass('in');
		});

		//previne de dar um refresh na pagina
		event.preventDefault();
	});
});
