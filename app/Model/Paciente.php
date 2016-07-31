<?php
App::uses('AppModel', 'Model');
App::uses('Procedimento', 'Model');
/**
 * Paciente Model
 *
 * @property Exame $Exame
 */
class Paciente extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'paciente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function procedimentos() {
        $procedimentoModel = new Procedimento();
        $procedimentos = $procedimentoModel->find('all');
        return $procedimentos;
	}
}
