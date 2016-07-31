<?php
App::uses('AppController', 'Controller');
/**
 * Procedimentos Controller
 *
 * @property Procedimento $Procedimento
 * @property PaginatorComponent $Paginator
 */
class ProcedimentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$options['order'] = array(
            'Procedimento.nome ASC'
        );

		$procedimentos = $this->Procedimento->find('all', $options);
		$this->set('procedimentos', $procedimentos);

		$paciente = $this->Session->read('Paciente');
        $this->set('idPa', $paciente[0]['Paciente']['id']);
	}

	public function index_admin() {
		$this->set('procedimentos', $this->Procedimento->find('all'));
	}


 /**
 * Metodo add 
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Procedimento->create();
			if ($this->Procedimento->save($this->request->data)) {
				$this->Flash->success(__(' O procedimento foi adicionado com sucesso.'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Flash->error(__('O procedimento nao pode ser salvo. Por favor, tente novamente.'));
			}
		}
	}

/**
 * Metodo editar
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		if (!$this->Procedimento->exists($id)) {
			throw new NotFoundException(__('Invalid Procedimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Procedimento->save($this->request->data)) {
				$this->Flash->success(__('O procedimento foi editado com sucesso.'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Flash->error(__('O procedimento nao pode ser editado. Por favor, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Procedimento.' . $this->Procedimento->primaryKey => $id));
			$this->request->data = $this->Procedimento->find('first', $options);
		}
	}

/**
 * Metodo deletar
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Procedimento->id = $id;
		if (!$this->Procedimento->exists()) {
			throw new NotFoundException(__('Procedimento invalido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Procedimento->delete()) {
			$this->Flash->success(__(' O procedimento foi deletado com sucesso.'));
		} else {
			$this->Flash->error(__('O procedimento nao pode ser deletado. Por favor, tente novamente.'));
		}
		return $this->redirect(array('action' => 'index_admin'));
	}
}
