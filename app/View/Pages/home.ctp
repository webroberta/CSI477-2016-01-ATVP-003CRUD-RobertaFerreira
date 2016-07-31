<div class="actions">
	<h3><?php echo __('Bem vindo ao Sistema Laboratorial '); ?></h3>
</br>
	<h3><?php echo __('Escolha uma opcao:'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Visualizar Procedimentos'), array('controller' => 'procedimentos', 'action' => 'index')); ?></li>
		
		<li><?php echo $this->Html->link(__('Área Admin'), array('controller' => 'admins', 'action' => 'index')); ?> </li>
		<?php if ($this->Session->check('Paciente')) { ?>
			<li><?php echo $this->Html->link(__('Sair'), array('controller' => 'pacientes', 'action' => 'logout')); ?> </li>
		<?php } else { ?>
			<li><?php echo $this->Html->link(__('Área do Paciente'), array('controller' => 'pacientes', 'action' => 'index_login')); } ?> </li>
	</ul>
</div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
_____________________________________________________________________________________________________________________________________________________

	<div >
		<p align="center"> Aluna: Roberta Ap. Ferreira </br>
		Matricula: 09.2.8148</p>
	</div>

