<div class="procedimentos index">
	<h2><?php echo __('Procedimentos'); $total = 0; $valorTotal = 0; ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('nome'); ?></th>
		<th><?php echo $this->Paginator->sort('preco'); ?></th>
		<th class="actions"><?php echo __('Acoes'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procedimentos as $procedimento): ?>
	<tr>
		<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h('R$' . $procedimento['Procedimento']['preco']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $procedimento['Procedimento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $procedimento['Procedimento']['id']), array('confirm' => __('Tem certeza que deseja deletar o procedimento: %s?', $procedimento['Procedimento']['nome']))); ?>
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
		<li><?php echo $this->Html->link(__('Visualizar Procedimentos'), array('action' => '')); ?></li>
		<li><?php echo $this->Html->link(__('Total de Exames'), array('controller' => 'exames', 'action' => 'relatorio')); ?></li>
	</ul>
</div>

