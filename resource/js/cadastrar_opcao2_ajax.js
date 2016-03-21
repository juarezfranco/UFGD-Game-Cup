/*
* executar formulário por ajax.
* By Juarez :)
*/


$(document).ready(function() {

	//trata submit do form 
	$('#form-opcao2').submit(function(event){
		//$("#modal_cadopcao2").modal("hide");
		//abre tela de carregamento
		$('#modalloading').modal({backdrop: 'static', keyboard: false});

		//casting formulario
		var formData={};
		formData['nomeequipe'] = $('input[name=nomeequipe]').val();
		for(var i=0; i<5 ; i++){
			formData['nome'+i] = $('input[name=nome'+i+']').val();
			formData['email'+i] = $('input[name=email'+i+']').val();
			formData['cpf'+i] = $('input[name=cpf'+i+']').val();
			formData['fone'+i] = $('input[name=fone'+i+']').val();
		}

		//executa cadastro via ajax
		$.ajax({
			type	: 'POST',
			url		: 'cadastrar2.php',
			data 	: formData,
			dataType: 'json',
			encode	: true

		//TRATA RESPOSTA DO AJAX EM CASO DE SUCESSO			
		}).done(function(data){
			//trata resposta

			//fecha tela de carregamento
			$('#modalloading').modal('hide');
			//fecha modal de cadastro
			$('#modal_cadopcao2').modal('hide');

			if(data['success']){
				
				//esconde mensagem de falha caso ela esteja aberta
				$('#alertfail2').addClass('fade');
				$('#alertfail2').hide();

				//limpa campos
				$('input[name=nomeequipe]').val('');
				for(var i=0;i<5;i++){
					$('input[name=nome'+i+']').val('');
					$('input[name=email'+i+']').val('');
					$('input[name=cpf'+i+']').val('');
					$('input[name=fone'+i+']').val('');	
				}
				

				
				//prepara link para baixar pdf
				var pdf_link = window.location.protocol + "//" + window.location.host + "/";
				pdf_link+= 'genpdf.php?pdf='+data['idpdf'];
				var btnclose='<a href="#" class="close" data-dismiss="modal">&times;</a>';
				var message ='<strong>Tudo certo!</strong> O cadastro foi efetuado com sucesso.';
                var btnpdf  ='<a href="'+pdf_link+'" class="btn btn-success">Baixar Formulário</a>';
				//prepara conteudo que será exibido no modal
				$('#alertsuccess-content').html(btnclose+message+btnpdf);
				//abre modal de mensagem de sucesso
				$('#alertsuccess').modal({backdrop: 'static', keyboard: false});
			}else{
				//prepara mensagem de erro
				var btnclosealert = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				var btnclosemodal ='<a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>';
				var msgerro='';		
				for (var key in data['erros']) {
					msgerro+= ' - '+data['erros'][key]+'<br>';
				}
				var btntrygain  ='<a href="#" class="btn btn-primary"  data-dismiss="modal" data-target="#modal_cadopcao2">Tentar denovo!</a>';
				
				//exibe mensagem de erro
				$('#alertfail2').addClass('in');
				$('#alertfail2').show();
				$('#alertfail2').html(btnclosealert+msgerro);	
				$('#alertfail-content').html(btnclosemodal+msgerro+btntrygain);
				//abre modal de mensagem de sucesso
				$('#alertfail').modal('show');

			}



		//TRATA ERRO DE CONEXÃO DURANTE A TENTATIVA DE CADASTRO
		}).fail( function( jqXHR, textStatus, errorThrown ){
			//fecha tela de carregamento
			$('#modalloading').modal('hide');
			//fecha modal de cadastro
			$('#modal_cadopcao2').modal('hide');
			//prepara mensagem a ser exibida na tela

			var btnclosealert = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
			var btnclosemodal ='<a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>';
			var msgerro='Ocorreu um erro na conexão, tente novamente!';
			msgerro+= '<br>'+jqXHR.responseText;
			var btntrygain  ='<a href="#" class="btn btn-primary"  data-dismiss="modal" data-target="#modal_cadopcao2">Tentar denovo!</a>';
			//exibe mensagem de erro
			$('#alertfail2').html(btnclosealert+msgerro);				
			$('#alertfail2').addClass('in');
			$('#alertfail2').show();
			$('#alertfail-content').html(btnclosemodal+msgerro+btntrygain);
			//abre modal de mensagem de sucesso
			$('#alertfail').modal('show');

		});

		//previne de dar um refresh na pagina
		event.preventDefault();
	});
});
