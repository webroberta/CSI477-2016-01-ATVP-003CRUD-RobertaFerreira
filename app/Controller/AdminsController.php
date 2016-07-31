<?php
App::uses('AppController', 'Controller');
/**
 * Exames Controller
 *
 * @property Exame $Exame
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * Metodo index
 *
 * @return void
 */
	public function index() {
	}

	public function list_pacientes() {
	}	

	public function list_exames() {
		$this->redirect(array('controller' => 'exames',
                                    'action' => 'index'));
	}	

	public function list_exames_paciente($id = null) {
	}

	public function list_exames_procedimento($id = null) {
	}

}

