<?php

	include ('header.php');
	include ('scripts.php');
?>

<script src="<?php echo base_url(); ?>public/js/addClienteOrdemServico.js"></script>
<script src="<?php echo base_url(); ?>public/js/util.js"></script>

<div class="posicao_conteudo">

	<h4 class="titulo_opcoes"><span class="fa fa-plus-square"></span> Nova OS</h4>

	<form id="form_nova_ordem" method="post">
		<h5>Informações sobre a O.S.</h5>
		<div class="row">
			<div class="col">
				<label>Data de Abertura</label>
				<div class="input-group input-group-sm mb-3 campo_data">
					<input type="date" class="form-control" aria-label="Data de Abertura" aria-describedby="inputGroup-sizing-sm">
				</div>
			</div>
		</div>
		<hr class="linha_nova_ordem">
		<h5>Informações sobre o Produto</h5>
    		<div class="row">
				<div class="col-sm-4">
					<label>Nota Fiscal</label>
					<div class="input-group input-group-sm mb-3 campo_tamanho1">
						<input type="text" class="form-control" aria-label="Nota Fiscal" aria-describedby="inputGroup-sizing-sm">
					</div>
				</div>

				<div class="col-sm-4">
					<label>Código do Produto</label>
					<div class="input-group input-group-sm mb-3 campo_tamanho1">
						<input type="text" class="form-control" aria-label="Código do Produto" aria-describedby="inputGroup-sizing-sm">
					</div>
				</div>

				<div class="col-sm-4">
					<label>Data de Compra</label>
					<div class="input-group input-group-sm mb-3 campo_data2">
						<input type="date" class="form-control" aria-label="Data de Compra do Produto" aria-describedby="inputGroup-sizing-sm">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-5">
					<label>Descrição do Produto</label>
					<div class="input-group input-group-sm mb-3 campo_tamanho2">
						<input type="text" class="form-control" aria-label="Descrição do Produto" aria-describedby="inputGroup-sizing-sm">
					</div>
				</div>

				<div class="col-4">
					<label>Número de Série</label>
					<div class="input-group input-group-sm mb-3 campo_tamanho1">
						<input type="text" class="form-control" aria-label="Número de Série" aria-describedby="inputGroup-sizing-sm">
					</div>
				</div>

				<div class="col-3">
					<label>Voltagem</label>
					<div class="input-group input-group-sm mb-3 campo_tamanho3">
						<input type="number" class="form-control" aria-label="Voltagem" aria-describedby="inputGroup-sizing-sm">
					</div>
				</div>
			</div>
				<label>Defeito Reclamado</label>
				<div class="input-group input-group-sm mb-3 campo_tamanho4">
					<input type="text" class="form-control" aria-label="Defeito Apresentado" aria-describedby="inputGroup-sizing-sm">
				</div>
			<hr class="linha_nova_ordem">

			<h5>Informações do Cliente</h5>
			<div class="row">
				<input type="hidden" id="id_cliente_os" name="id_cliente_os">
				<div class="input-group-sm mb-3 campo_tamanho3 cliente_selecao">
					<input type="text" readonly=“true” name="nome_cliente_os" id="nome_cliente_os" class="form-control"
						   aria-label="Nome do Cliente" aria-describedby="inputGroup-sizing-sm">
				</div>
				<a id="InfoCliente" class="btn btn-primary">Informações do Cliente</a>
				<a id="SelecionarCliente" class="btn btn-primary botao_cliente">Selecionar Cliente
					<a id="AddCliente" class="btn btn-primary botao_cliente">Adicionar Novo Cliente</a>
			</div>

			<div class="row">
				<button type="submit" class="btn btn-primary botao_acao">GRAVAR</button>
				<a href="<?php echo base_url();?>OrdemServico/index" class="btn btn-danger botao_acao" >CANCELAR</a>
			</div>

		</form>




		<!-- MODAL PARA ADICIONAR O CLIENTE -->
		<div class="modal fade" id="AdicionarCliente"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Novo Cliente</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<form id="formulario_cliente_os" method="post" action="">
							<label for="nome_cliente" class="col-form-label">Nome do Cliente</label>
							<input type="text" class="form-control input-group-sm" id="nome_cliente" name="nome_cliente" required>

							<label for="cpf" class="col-form-label">CPF:</label>
							<input type="text" class="form-control input-group-sm" id="cpf_cliente" name="cpf_cliente" required>

							<label for="celular" class="col-form-label">Celular:</label>
							<input type="text" class="form-control input-group-sm" id="celular_cliente" name="celular_cliente">

							<hr>
							<button type="button" class="btn btn-secondary" data-dismiss="modal" id="botaoCancelar">Cancelar</button>
							<button type="submit" class="btn btn-success" id="botaoCadastrar">Cadastrar</button>
						</form>
					</div>
					<div class="modal-footer">
						<p class="help-block"></p>

					</div>

				</div>
			</div>
		</div>

		<!-- MENSAGEM DE CLIENTE CADASTRADO -->
		<div class="modal" tabindex="-1" role="dialog" id="msgClienteCadastro">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Novo Cliente</h5>
						<!--<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
						</button>-->
					</div>
					<div class="modal-body">
						<p id="msgCliente"></p>
					</div>
					<div class="modal-footer">
						<button type="button" id="msgOK" class="btn btn-primary" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
		</div>

		<script type="javascript">

		</script>


		<?php include('modal_info_cliente.php');
		include('modal_selecionar_cliente.php');
		?>


</div>