<div class="exames index">
	<h2><?php echo __('Exames'); $totalValor = 0.00; $totalExames = 0; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo 'Nome'; ?></th>
		<th><?php echo 'Data'; ?></th>
		<th><?php echo 'Valor'; ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($exames as $exame): 
		$totalValor += $exame['Procedimento']['preco']; 
		$totalExames++;
	?>
	<tr>
		<td><?php echo h($exame['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($exame['Exame']['data']); ?>&nbsp;</td>
		<td><?php echo h($exame['Procedimento']['preco']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo " Total de exames: " . $totalExames . ". Valor total: R$" . $totalValor;
	?>	
	</p>
</div>
<div class="actions">
	<h3><?php echo __('Escolha uma opcao'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Pagina Inicial'), array('controller' => 'pages', 'action' => 'display')); ?></li>
		<li><?php echo $this->Html->link(__('Procedimentos'), array('controller' => 'procedimentos', 'action' => 'index')); ?></li>
		<?php if ($this->Session->check('Paciente')) { ?>
			<li><?php echo $this->Html->link(__('Sair'), array('controller' => 'pacientes', 'action' => 'logout')); ?> </li>
		<?php } ?>	
	</ul>
</div>
