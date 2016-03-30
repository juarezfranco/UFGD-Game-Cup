<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<style type="text/css">
		.a4{
			margin-left: 10%;
			margin-right: 10%;
		}
		.group{
			margin-top: 12px;
		  	font-size: 12px;
		  	line-height: 1.5;
		}
		.campo{
			border: 0.7px solid;
			border-color: #444;
			padding: 8px 12px 5px 12px;
		}
		.large{
			width: 60%;
		}
		.small{
			width: 30%;
		}
		.content{
			margin-top: 20px;
			margin-bottom: 15px;
		}
		hr{
			border:1px dashed gray;
		}
		.box{
			font-size: 12px;
			float: right;
			margin-right: 50px;
		}

		table{
		    width: 100%;
		    font-size: 14px;
		}
		td{
			width: 25%;
		    margin-right: 10px;
		}
		p{
			margin: 0px;
			padding: 0px;
		}

		.tab-equipe{
		    width: 100%;
		    font-size: 11px;
		    border-collapse: collapse;
		}
		.tab-equipe td{
			padding: 5px;
			border: 1px solid;

		}
		.tab-equipe p{
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>
<body class="a4">
	<?php for($i=0;$i<2;$i++){ ?>
		<header>
			<h2 align="center">Ficha de Inscrição UFGD Game Cup</h2>
		</header>

		<section>
			<div class="content">
				<p><strong>Inscrição Nº: </strong><?php echo ($usuario->id*707); ?> </p>
				<p>Data  <?php echo maskDate($usuario->data_cadastro);?></p>
			</div>
		<section>
			<div class="group large">
				<label>NOME</label>
				<div class="campo"><?php echo $usuario->nome; ?></div>
			</div>
			<div class="group large">
				<label>EMAIL</label>
				<div class="campo"><?php echo $usuario->email; ?></div>
			</div>
			<div class="group small">
				<label>CPF</label>
				<div class="campo"><?php echo $usuario->cpf; ?></div>
			</div>
			<div class="group small">
				<label>FONE</label>
				<div class="campo"><?php echo $usuario->fone; ?></div>
			</div>
		</section>

		<section>
			<div class="content">
				<p><strong>Participação das palestras no dia 20/04/2016</strong></p>
				<p><strong>Valor:</strong> gratuito</p>
			</div>
			<?php if($i==0) echo '<hr size="1">' ?>
		</section>
	<?php } ?>
	
	<footer>
		<table>
			<tr>
				<td>
				</td>
				<td>
				</td>
				<td>
					<p>_______/______/_________</p>
				</td>
				<td>
					<p align="center">__________________________________</p>	
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				<td>
		    		<p align="center">Profº Mestre Fabio Mascarenhas</p>		
				</td>
			</tr>
		</table>
			
	</footer>
</body>
</html>
