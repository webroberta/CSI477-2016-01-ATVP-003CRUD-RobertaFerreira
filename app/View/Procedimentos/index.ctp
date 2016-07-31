<div class="procedimentos index">
	<h2><?php echo __('Procedimentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('preco'); ?></th>
			<th class="actions"><?php echo __('Acao'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procedimentos as $procedimento): ?>
	<tr>
		<td><?php echo h($procedimento['Procedimento']['id']); ?>&nbsp;</td>
		<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($procedimento['Procedimento']['preco']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Adicionar Procedimento'), array('controller' => 'exames', 'action' => 'add', $procedimento['Procedimento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Escolha uma opcao:'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Pagina Inicial'), array('controller' => 'pages', 'action' => 'display')); ?></li>
		<?php if ($this->Session->check('Paciente')) { ?>
			<li><?php echo $this->Html->link(__('Exames agendados'), array('controller' => 'pacientes', 'action' => 'list_exames', $idPa)); ?> </li>
			<li><?php echo $this->Html->link(__('Sair'), array('controller' => 'pacientes', 'action' => 'logout')); ?> </li>
		<?php } ?>		
	</ul>
</div>
