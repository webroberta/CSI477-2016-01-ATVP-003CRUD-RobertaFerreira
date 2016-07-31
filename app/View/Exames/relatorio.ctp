<div class="exames index">
	<h2><?php echo __('Relatorio por Paciente'); $total = 0; $valorTotal = 0; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('exames'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
		<td><?php echo h(count($paciente['Exame'])); ?>&nbsp;</td>
		<?php 
			$valor = 0.0;
				for ($i=0; $i < count($paciente['Exame']); $i++) { 
					$id = $paciente['Exame'][$i]['procedimento_id'];
					$valor += $procedimentos[$id-1]['Procedimento']['preco'];
				}

				$total += count($paciente['Exame']);
				$valorTotal += $valor;
		?>
		<td><?php echo 'R$' . $valor; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<strong>
	<?php
	echo "<br>Total de exames: " . $total . "<br>";
	echo "Valor total dos exames: R$" . $valorTotal . "<br><br><hr><br>";
	?>	
	</strong>



	<h2><?php echo __('Relatorio por Procedimento'); $total = 0; $valorTotal = 0; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('exames'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procedimentos as $procedimento): ?>
	<tr>
		<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h('R$' . $procedimento['Procedimento']['preco']); ?>&nbsp;</td>
		<td><?php echo h(count($procedimento['Exame'])); ?>&nbsp;</td>
		<?php 
			$valor = 0.0;
				for ($i=0; $i < count($procedimento['Exame']); $i++) { 
					$valor += $procedimento['Procedimento']['preco'];
				}

				$total += count($procedimento['Exame']);
				$valorTotal += $valor;
		?>
		<td><?php echo 'R$' . $valor; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<strong>
	<?php
	echo "<br>Total de exames: " . $total . "<br>";
	echo "Valor total dos exames: R$" . $valorTotal;
	?>	
	</strong>
</div>
<div class="actions">
	<h3><?php echo __('Escolha uma opcao:'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Pagina Inicial'), array('controller' => 'pages', 'action' => 'display')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Exames'), array('controller' => 'admins', 'action' => 'list_exames')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Procedimentos'), array('controller' => 'procedimentos', 'action' => 'index_admin')); ?></li>
		<li><?php echo $this->Html->link(__('Total de Exames'), array('controller' => 'exames', 'action' => 'relatorio')); ?></li>
	</ul>
</div>
