<?php
App::uses('AppModel', 'Model');
App::uses('Paciente', 'Model');
/**
 * Exame Model
 *
 * @property Paciente $Paciente
 * @property Procedimento $Procedimento
 */
class Exame extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Procedimento' => array(
			'className' => 'Procedimento',
			'foreignKey' => 'procedimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function pacientes() {
        $pacienteModel = new Paciente();
        $pacientes = $pacienteModel->find('all');
        return $pacientes;
	}

	public function procedimentos() {
        $procedimentoModel = new Procedimento();
        $procedimentos = $procedimentoModel->find('all');
        return $procedimentos;
	}
}
