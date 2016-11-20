<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	public $layout = 'page';
	
	public function beforeFilter(){
		$this->Auth->allow();
		parent::beforeFilter();
	}

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		
		$this->Post = ClassRegistry::init('Post');
		$find_posts = $this->Post->find('all', array('conditions' => array('Post.show' => 1))); 
		$posts = array();
		foreach($find_posts as $post){
			$posts[$post['Post']['id']] = $post;
		}
		$this->set(compact('posts'));
		
		$this->Responsible = ClassRegistry::init('Responsible');
		$findResponsibles = $this->Responsible->find('all', array('conditions' => array('Responsible.show' => 1)));
		$responsibles = array();
		
		foreach($findResponsibles as $responsible){
			$responsibles[$responsible['Responsible']['id']] = $responsible;
		}
		$this->set(compact('responsibles'));
		
		$this->Citation = ClassRegistry::init('Citation');
		$findCitations = $this->Citation->find('all', array('conditions' => array('Citation.show' => 1)));
		$citations = array();
		
		foreach($findCitations as $citation){
			$citations[$citation['Citation']['id']] = $citation;
		}
		$this->set(compact('citations'));
		
		
		/**
			Sections
		 */
		$this->Section = ClassRegistry::init('Section');
		$sections = $this->Section->find('all', array('conditions' => array('Section.show' => 1)));
		$this->set(compact('sections'));		
		
		

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
		
	}
	
	
	
}
