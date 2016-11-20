<?php
App::uses('AppController', 'Controller');
/**
 * ListPostTypes Controller
 *
 * @property ListPostType $ListPostType
 * @property PaginatorComponent $Paginator
 */
class ListPostTypesController extends AppController {

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
		$this->ListPostType->recursive = 0;
		$this->set('listPostTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ListPostType->exists($id)) {
			throw new NotFoundException(__('Invalid list post type'));
		}
		$options = array('conditions' => array('ListPostType.' . $this->ListPostType->primaryKey => $id));
		$this->set('listPostType', $this->ListPostType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ListPostType->create();
			if ($this->ListPostType->save($this->request->data)) {
				$this->Session->setFlash(__('The list post type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The list post type could not be saved. Please, try again.'));
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
		if (!$this->ListPostType->exists($id)) {
			throw new NotFoundException(__('Invalid list post type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ListPostType->save($this->request->data)) {
				$this->Session->setFlash(__('The list post type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The list post type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ListPostType.' . $this->ListPostType->primaryKey => $id));
			$this->request->data = $this->ListPostType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ListPostType->id = $id;
		if (!$this->ListPostType->exists()) {
			throw new NotFoundException(__('Invalid list post type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ListPostType->delete()) {
			$this->Session->setFlash(__('List post type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('List post type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
