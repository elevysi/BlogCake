<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $layout = 'editor';
	
	public function beforeFilter(){
		$this->Auth->allowedActions = array('viewpost', 'timeline');
		return parent::beforeFilter();
	}
	
	public function beforeRender(){
		
		parent::beforeRender();
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'blogitem';
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}
	
	public function viewpost($id = null) {
		$this->layout = 'blogitem';
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'blogeditor';
		if ($this->request->is('post')) {
			$this->request->data['Post']['record_owner'] = $this->Auth->user('id');
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				
				$last_id = $this->Post->getLastInsertID();
				
				$errors = array(); $k = 0;
					
				if( !empty($this->request->data['Post']['uploadfile']['tmp_name'])){
				$create_year = date('Y');
				$today = date('Y-m-d');
				$extension = strtolower(pathinfo($this->request->data['Post']['uploadfile']['name'], PATHINFO_EXTENSION));
							
					
				if($this->request->data['Post']['uploadfile']['size'] > 20000000){
					$errors[++$k] = 'The delegation letter exceeds the limit of 200 KB.';
				
				}else{
					$good_to_pursue = TRUE;
					$filelocation = WWW_ROOT . 'Files'. DS. 'Uploads '. $create_year. DS;
					$filename = $this->request->data['Post']['filetitle'].'.'.$extension;
					$old_file = $filelocation.$filename;
						
					if(!file_exists($filelocation))
					{
						try{
							mkdir($filelocation, 0777, true);
								
						}catch (Exception $e){
							$errors[++$k] = 'Unable to upload the the file.';
							$good_to_pursue = FALSE;
						}
					}else{
						/**
						 * Delete old file if it exists
						 */
						if(file_exists($old_file)){
							try{
								unlink($old_file);
							}catch(Exception $e){
									
							}
						}
					}
						
					if($good_to_pursue){
							
						$file = $filelocation.$filename;
						//chmod($file, 0777);
						if(move_uploaded_file($this->request->data['Post']['uploadfile']['tmp_name'], $file)){
								
							try{
								chmod($file, 0777);
							}catch(Exception $e){
									
							}
								
								
								
							$new_uploadfile = new $this->Post->PostImage ();
							$new_uploadfile->create();
							$new_uploadfile->title = $filename;
							$new_uploadfile->link_id = $last_id;
							$new_uploadfile->link_table = 'posts';
							$new_uploadfile->principal = 1;
							$new_uploadfile->description = $this->request->data['Post']['filedescription'];
							$new_uploadfile->filename = $this->request->data['Post']['uploadfile']['name'];
							$new_uploadfile->filesize = $this->request->data['Post']['uploadfile']['size'];
							$new_uploadfile->filemine = $extension;
							$new_uploadfile->path = $filelocation;
							// 							$new_uploadfile->file_identificator = $this->guid($this->request->data['Post']['uploadfile']['name']);
				
							if( ! $this->Post->PostImage->save($new_uploadfile)) $errors[++$k] = 'There was a problem creating the upload record.';
								
							$this->Session->setFlash('Succesfully saved');
								
						}
					}
				
				}
			}
				
				if (isset ( $this->request->data['Post']['posttags'] )) {
					$tags = $this->request->data['Post']['posttags'];
					$split_tags = explode ( ';', $tags );
					foreach ( $split_tags as $tag_description ) {
						$concerned_tag = new $this->Post->Tag ();
						$concerned_tag->name = trim ( $tag_description );
						$concerned_tag->link_id = $last_id;
						$concerned_tag->link_table = 'posts';
						$this->Post->Tag->save ( $concerned_tag );
					}
				}
					
				if(count($errors) > 0){
					$message = '';
					$j = 0;
					foreach ($errors as $error){
						if($j > 0) $message.='<br>';
						$message.=$error;
						$j++;
					}
					$this->Session->setFlash($message);
				}
				
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Post->Section->find('list');
		$this->set(compact('sections'));
	}
	
	public function addvideo(){
		
	}
	
	public function viewvideo(){
	
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$sections = $this->Post->Section->find('list');
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('Post deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function timeline(){
// 		debug($this->Session->read());
// 		debug($this->Auth->loggedIn());
// 		$this->User = ClassRegistry::init('User');
// 		$user = $this->User->find('first', array('conditions' => array('User.thrird_party_platform_id' => '10152584169498263', 'User.third_party_type' => 'Facebook')));
		// 		debug($this->Auth->login($user['User']));
// 		if($this->Auth->login($user['User'])){
// 			debug($this->Auth->user());
// 		}
		
		
		$this->layout = 'blogtimeline';
		$posts = $this->Post->find('all', array('order' => array('Post.created' => 'desc')));
		$this->set('posts', $posts);
	}
	
	public function choosetype(){
		$this->set('types', $this->Post->ListPostTypes->find('list'));
		
		if($this->request->is('post') || $this->request->is('put')){
			
		}
	}
	
	
}
