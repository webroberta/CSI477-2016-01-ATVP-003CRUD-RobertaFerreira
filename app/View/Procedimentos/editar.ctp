<div class="procedimentos form">
<?php echo $this->Form->create('Procedimento'); ?>
	<fieldset>
		<legend><?php echo __('Editar Procedimento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('preco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Escolha uma opcao:'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Voltar'), array('action' => 'index_admin')); ?></li>
	</ul>
</div>
