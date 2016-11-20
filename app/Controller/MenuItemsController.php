<?php
App::uses('AppController', 'Controller');
/**
 * MenuItems Controller
 *
 * @property MenuItem $MenuItem
 * @property PaginatorComponent $Paginator
 */
class MenuItemsController extends AppController {

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
		$this->MenuItem->recursive = 0;
		$this->set('menuItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MenuItem->exists($id)) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
		$this->set('menuItem', $this->MenuItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MenuItem->create();
			if ($this->MenuItem->save($this->request->data)) {
				$this->Session->setFlash(__('The menu item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu item could not be saved. Please, try again.'));
			}
		}
		$sections = $this->MenuItem->Section->find('list');
		$this->set(compact('sections'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MenuItem->exists($id)) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MenuItem->save($this->request->data)) {
				$this->Session->setFlash(__('The menu item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
			$this->request->data = $this->MenuItem->find('first', $options);
		}
		$sections = $this->MenuItem->Section->find('list');
		$this->set(compact('sections'));
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
		$this->MenuItem->id = $id;
		if (!$this->MenuItem->exists()) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MenuItem->delete()) {
			$this->Session->setFlash(__('Menu item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Menu item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
