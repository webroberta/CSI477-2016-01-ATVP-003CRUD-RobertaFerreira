<div class="exames index">
	<h2><?php echo __('Exames'); ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Novo'), array('action' => 'add_admin')); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('paciente'); ?></th>
		<th><?php echo $this->Paginator->sort('procedimento'); ?></th>
		<th><?php echo $this->Paginator->sort('data'); ?></th>
		<th class="actions"><?php echo __('Acao'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($exames as $exame): ?>
	<tr>
		<td><?php echo h($exame['Paciente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($exame['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($exame['Exame']['data']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $exame['Exame']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $exame['Exame']['id']), array('confirm' => __('Tem certeza que deseja deletar o exame: %s?', $exame['Procedimento']['nome']))); ?>
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
		<li><?php echo $this->Html->link(__('Visualizar Exames'), array('controller' => 'admins', 'action' => 'list_exames')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Procedimentos'), array('controller' => 'procedimentos', 'action' => 'index_admin')); ?></li>
		<li><?php echo $this->Html->link(__('Total de Exames'), array('controller' => 'exames', 'action' => 'relatorio')); ?></li>
	</ul>
</div>
