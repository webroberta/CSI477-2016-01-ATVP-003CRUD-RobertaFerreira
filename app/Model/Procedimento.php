<?php
App::uses('AppModel', 'Model');
/**
 * Procedimento Model
 *
 * @property Exame $Exame
 */
class Procedimento extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'procedimento_id',
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

}
