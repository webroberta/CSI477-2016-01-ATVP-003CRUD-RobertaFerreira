<div class="procedimentos form">
<?php echo $this->Form->create('Exame'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Procedimento'); ?></legend>
	<?php
		echo $this->Form->input('data', array(
    'type' => 'date',
    'label' => 'Data prevista',
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y') + 18
		));
		echo $this->Form->hidden('paciente_id');
		echo $this->Form->hidden('procedimento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Adicionar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Escolha uma opcao:'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Voltar'), array('controller' => 'procedimentos' ,'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Sair'), array('controller' => 'pacientes' , 'action' => 'logout')); ?></li>
	</ul>
</div>
