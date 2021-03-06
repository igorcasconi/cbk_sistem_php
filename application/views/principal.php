<?php
	
	//include ('header.php');

?>
<div class="posicao_conteudo">
<div class="alertas">
			<div class="row">
				<div class="card col" style="width: 10rem;">
					<div class="card-body">
						<h5 class="card-title">Total de O.S. Pendentes</h5>
						<h1 id="num_os_abertas"><?php foreach ($os_aberta as $os_abertas):
								echo $os_abertas;
							endforeach;?></h1>
						<a href="<?php echo base_url();?>OrdemServico/os_abertas" class="btn btn-primary">CONSULTAR O.S. PENDENTES</a>
					</div>
				</div>

				<div class="card col" style="width: 10rem;">
					<div class="card-body">
						<h5 class="card-title">Total de O.S. Fechadas em <?php echo date('Y');?></h5>
						<h1 id="num_os_fechadas"><?php foreach ($os_fechadas_ano as $os_fechadas):
								echo $os_fechadas;
							endforeach;?></h1>
						<a href="<?php echo base_url();?>OrdemServico/os_fechadas" class="btn btn-primary">CONSULTAR O.S. FECHADAS</a>
					</div>
				</div>
			</div>
</div>

<div class="">
<h1 id="titulo_prazos">PRAZOS</h1>
<table class="table tabela_prazos">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Número da O.S.</th>
      <th scope="col">Descrição do Produto</th>
      <th scope="col">Cliente</th>
      <th scope="col">Data de abertura</th>
      <th scope="col">Data do Prazo</th>
    </tr>
  </thead>
  <tbody>
    <?php
   	foreach ($prazos as $prazos_os):
		echo '<tr><th scope="row">'.$prazos_os['numero_ordem'].'</th>';
		echo '<th scope="row">'.$prazos_os['descricao_produto'].'</th>';
		echo '<td>'.$prazos_os['nome_cliente'].'</td>';
		echo '<td>'.date("d/m/Y", strtotime($prazos_os['data_abertura'])).'</td>';
		echo '<td>'.date("d/m/Y", strtotime($prazos_os['prazo_ordem'])).'</td></tr>';
	endforeach;?>
  </tbody>
</table

</div>
	<?php if(!empty($pecasEstoqueMinima)){ ?>
	<div class="alert alert-warning" id="aviso_peca" role="alert">
		<span class="fa fa-warning"></span> ATENÇÃO: Estoque abaixo da quantidade mínima requerida. <a id="linkEstoque" href="<?php echo base_url(); ?>PedidoPeca/estoque">Clique aqui</a> para verificar!
	</div>
	<?php }	?>
</div>
