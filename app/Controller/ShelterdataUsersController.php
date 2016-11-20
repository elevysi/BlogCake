<?php
App::uses('AppController', 'Controller');
/**
 * ShelterdataUsers Controller
 *
 * @property ShelterdataUser $ShelterdataUser
 * @property PaginatorComponent $Paginator
 */
class ShelterdataUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ShelterdataUser->recursive = 0;
		$this->set('shelterdataUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ShelterdataUser->exists($id)) {
			throw new NotFoundException(__('Invalid shelterdata user'));
		}
		$options = array('conditions' => array('ShelterdataUser.' . $this->ShelterdataUser->primaryKey => $id));
		$this->set('shelterdataUser', $this->ShelterdataUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShelterdataUser->create();
			if ($this->ShelterdataUser->save($this->request->data)) {
				$this->Session->setFlash(__('The shelterdata user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shelterdata user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ShelterdataUser->exists($id)) {
			throw new NotFoundException(__('Invalid shelterdata user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShelterdataUser->save($this->request->data)) {
				$this->Session->setFlash(__('The shelterdata user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shelterdata user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShelterdataUser.' . $this->ShelterdataUser->primaryKey => $id));
			$this->request->data = $this->ShelterdataUser->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ShelterdataUser->id = $id;
		if (!$this->ShelterdataUser->exists()) {
			throw new NotFoundException(__('Invalid shelterdata user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShelterdataUser->delete()) {
			$this->Session->setFlash(__('The shelterdata user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shelterdata user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function login(){
		$this->layout = 'login';
	}
}
