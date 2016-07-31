<div class="actions">
	<h3><?php echo __('Escolha uma opcao:'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Pagina Inicial'), array('controller' => 'pages', 'action' => 'display')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Exames'), array('action' => 'list_exames')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Visualizar Procedimentos'), array('controller' => 'procedimentos', 'action' => 'index_admin')); ?></li>
		<li><?php echo $this->Html->link(__('Total de Exames'), array('controller' => 'exames', 'action' => 'relatorio')); ?></li>
	</ul>
</div>