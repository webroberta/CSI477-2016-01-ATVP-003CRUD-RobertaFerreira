<?php
App::uses('AppController', 'Controller');
/**
 * Exames Controller
 *
 * @property Exame $Exame
 * @property PaginatorComponent $Paginator
 */
class ExamesController extends AppController {

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
		$options['order'] = array(
			'Exame.data DESC'
		);

		$exames = $this->Exame->find('all', $options);
		$this->set('exames', $exames);
	}

	public function relatorio() {
		$pacientes = $this->Exame->pacientes();
		$this->set('pacientes', $pacientes);

		$procedimentos = $this->Exame->procedimentos();
		$this->set('procedimentos', $procedimentos);
	}

	/**
 * Metodo add
 *
 * @return void
 */
	public function add($id = null) {
		if (!$this->Session->check('Paciente')) {
            $this->redirect(array('controller' => 'pacientes',
                                    'action' => 'index_login'));
            exit();
        } 

        $paciente = $this->Session->read('Paciente');
        $idPa = $paciente[0]['Paciente']['id'];

        $this->request->data['Exame']['paciente_id'] = $idPa;
        $this->request->data['Exame']['procedimento_id'] = $id;

		if ($this->request->is('post')) {
			$this->Exame->create();

			$this->request->data['Exame']['data'] = 
				$this->request->data['Exame']['data']['day'] . "/" .
				$this->request->data['Exame']['data']['month'] . "/" .
				$this->request->data['Exame']['data']['year'];
				
			if ($this->Exame->save($this->request->data)) {
				$this->Flash->success(__('O exame foi adicionado com sucesso.'));
				return $this->redirect(array('controller' => 'procedimentos', 'action' => 'index'));
			} else {
				$this->Flash->error(__('O exame nao pode ser adicionado. Por favor, tente novamente.'));
			}
		}
	}

	/**
 * Metodo add administrador
 *
 * @return void
 */
	public function add_admin() {
		if ($this->request->is('post')) {
			$this->Exame->create();

			$this->request->data['Exame']['data'] = 
				$this->request->data['Exame']['data']['day'] . "/" .
				$this->request->data['Exame']['data']['month'] . "/" .
				$this->request->data['Exame']['data']['year'];

			if ($this->Exame->save($this->request->data)) {
				$this->Flash->success(__('O exame foi adicionado com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('O exame nao pode ser adicionado. Por favor, tente novamente.'));
			}
		}

		$pacientes = $this->Exame->Paciente->find('list', array('fields' => array('Paciente.id', 'Paciente.nome')));
		$this->set(compact('pacientes'));

		$procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('Procedimento.id', 'Procedimento.nome')));
		$this->set(compact('procedimentos'));
	}

/**
 * Metodo editar 
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		if (!$this->Exame->exists($id)) {
			throw new NotFoundException(__('Invalid Exame'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Exame']['data'] = 
				$this->request->data['Exame']['data']['day'] . "/" .
				$this->request->data['Exame']['data']['month'] . "/" .
				$this->request->data['Exame']['data']['year'];

			if ($this->Exame->save($this->request->data)) {
				$this->Flash->success(__('O exame foi editado com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('O exame nao pode ser editado. Por favor, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Exame.' . $this->Exame->primaryKey => $id));
			$this->request->data = $this->Exame->find('first', $options);

			$pacientes = $this->Exame->Paciente->find('list', array('fields' => array('Paciente.id', 'Paciente.nome')));
			$this->set(compact('pacientes'));

			$procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('Procedimento.id', 'Procedimento.nome')));
			$this->set(compact('procedimentos'));

			$this->set('exame', $this->Exame->findById($id));
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
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Exame Invalido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Exame->delete()) {
			$this->Flash->success(__('O exame foi deletado com sucesso.'));
		} else {
			$this->Flash->error(__('O exame não pode ser deletado. Por favor, tente novamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
