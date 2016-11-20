<?php
App::uses('AppController', 'Controller');
/**
 * SiteVariables Controller
 *
 * @property SiteVariable $SiteVariable
 * @property PaginatorComponent $Paginator
 */
class SiteVariablesController extends AppController {

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
		$this->SiteVariable->recursive = 0;
		$this->set('siteVariables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SiteVariable->exists($id)) {
			throw new NotFoundException(__('Invalid site variable'));
		}
		$options = array('conditions' => array('SiteVariable.' . $this->SiteVariable->primaryKey => $id));
		$this->set('siteVariable', $this->SiteVariable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SiteVariable->create();
			if ($this->SiteVariable->save($this->request->data)) {
				$this->Session->setFlash(__('The site variable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site variable could not be saved. Please, try again.'));
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
		if (!$this->SiteVariable->exists($id)) {
			throw new NotFoundException(__('Invalid site variable'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SiteVariable->save($this->request->data)) {
				$this->Session->setFlash(__('The site variable has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site variable could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SiteVariable.' . $this->SiteVariable->primaryKey => $id));
			$this->request->data = $this->SiteVariable->find('first', $options);
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
		$this->SiteVariable->id = $id;
		if (!$this->SiteVariable->exists()) {
			throw new NotFoundException(__('Invalid site variable'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SiteVariable->delete()) {
			$this->Session->setFlash(__('Site variable deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Site variable was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
