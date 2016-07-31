<div class="pacientes index">
	<h2><?php echo __('Pacientes'); $total = 0; $valorTotal = 0; ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('nome'); ?></th>
		<th><?php echo $this->Paginator->sort('login'); ?></th>
		<th><?php echo $this->Paginator->sort('senha'); ?></th>
		<th class="actions"><?php echo __('Acoes'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['login']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['senha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $paciente['Paciente']['id']), array('confirm' => __('Tem certeza que deseja deletar o(a) paciente: %s?', $paciente['Paciente']['nome']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Acoes'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Pagina Inicial'), array('controller' => 'pages', 'action' => 'display')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Exames'), array('controller' => 'admins', 'action' => 'list_exames')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Pacientes'), array('action' => '')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Procedimentos'), array('controller' => 'procedimentos', 'action' => 'index_admin')); ?></li>
		<li><?php echo $this->Html->link(__('Total de Exames'), array('controller' => 'exames', 'action' => 'relatorio')); ?></li>
	</ul>
</div>
