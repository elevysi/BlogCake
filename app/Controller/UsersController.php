<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	
	public function beforeFilter(){
		$this->Auth->allowedActions = array('login', 'register', 'thirdpartylogin', 'opauth_complete');
		return parent::beforeFilter();
	}
	
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function login(){
		$this->layout = 'login';
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->Session->setFlash('Logged');
				$this->redirect(array('controller' => 'posts', 'action' => 'timeline'));
			}else{
				$this->Session->setFlash('You are not registered as such.');
			}
		}else {
			if ($this->Auth->loggedIn()) {
				$this->redirect(array('controller' => 'posts', 'action' => 'timeline'));
			} 				
		}
	}
	
	public function logout() {
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}
	
	public function register(){
		$this->layout = 'login';
		if($this->request->is('post') || $this->request->is('put')){
// 			$this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
			$this->request->data['User']['password'] = $this->request->data['User']['password'];
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('The user has been successfully created.');
				$this->redirect(array('action' => 'login'));
			}
		}
	}
	
	public function editprofile(){
		
		if($user_id = $this->Auth->user('id')){
			
			
			if($this->request->is('post') || $this->request->is('put')){
				$errors = array(); $k = 0;
				if($this->validateProfileInfo($user_id)){
					$this->User->id = $user_id;
					if($this->User->save($this->request->data)){
						if( !empty($this->request->data['User']['uploadfile']['tmp_name'])){
							$create_year = date('Y');
							$today = date('Y-m-d');
							$extension = strtolower(pathinfo($this->request->data['User']['uploadfile']['name'], PATHINFO_EXTENSION));
						
						
							if($this->request->data['User']['uploadfile']['size'] > 90000000){
								$errors[++$k] = 'The delegation letter exceeds the limit of 90 MB.';
						
							}else{
								$good_to_pursue = TRUE;
								$filelocation = APP . 'Files'. DS. 'Users'. DS. $user_id. DS. 'Avatar' .DS;
								$filename = 'avatar.'.$extension;
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
									if(move_uploaded_file($this->request->data['User']['uploadfile']['tmp_name'], $file)){
						
										try{
											chmod($file, 0777);
										}catch(Exception $e){
						
										}
						
						
						
										$new_uploadfile = new $this->Post->PostImage ();
										$new_uploadfile->create();
										$new_uploadfile->title = $filename;
										$new_uploadfile->link_id = $user_id;
										$new_uploadfile->link_table = 'users';
										$new_uploadfile->principal = 1;
										$new_uploadfile->description = 'Avatar';
										$new_uploadfile->filename = $this->request->data['User']['uploadfile']['name'];
										$new_uploadfile->filesize = $this->request->data['User']['uploadfile']['size'];
										$new_uploadfile->filemine = $extension;
										$new_uploadfile->path = $filelocation;
										// 							$new_uploadfile->file_identificator = $this->guid($this->request->data['User']['uploadfile']['name']);
						
										if( ! $this->Post->PostImage->save($new_uploadfile)) $errors[++$k] = 'There was a problem creating the upload record.';
						
										$this->Session->setFlash('Succesfully saved');
						
									}
								}
						
							}
						}
						
						if (isset ( $this->request->data['User']['posttags'] )) {
							$tags = $this->request->data['User']['posttags'];
							$split_tags = explode ( ';', $tags );
							foreach ( $split_tags as $tag_description ) {
								$concerned_tag = new $this->User->Tag ();
								$concerned_tag->name = trim ( $tag_description );
								$concerned_tag->link_id = $user_id;
								$concerned_tag->link_table = 'users';
								$this->User->Tag->save ( $concerned_tag );
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
						
						$this->Session->setFlash(__('You have successfully edited the profile.'));
						$this->redirect(array('action' => 'profile'));
					}
				}
				
				
			}else{
				$user = $this->User->find('first', array('conditions' => array('User.id' => $user_id)));
				$this->request->data = $user;
				$this->set('user', $user);
			}
 		}
	}
	
	public function validateProfileInfo($id = NULL){
		$this->autoRender = FALSE;
		return TRUE;
	}
	
	public function profile(){
		if($user_id = $this->Auth->user('id')){
			$this->set('user', $this->User->find('first', array('conditions' => array('User.id' => $user_id))));
			$avatar_path = APP. DS. 'Files' . DS. 'Users'. $user_id. 'avatar.jpg';
		}else{
			$this->Session('The corresponding User was not found');
			$this->redirect($this->referer());
		}
	}
	
	public function renderavatar($user_id){
// 		$avatar_path = APP. DS. 'Files' . DS. 'Users'. $user_id. 'avatar.jpg';
		$avatar_path = '/Applications/MAMP/htdocs/ElvisUnify/app/Files/Users/4/Avatar/avatar.jpg';
		$this->response->file($avatar_path);
		$this->response->header('Content-Disposition', 'inline');
		return $this->response;
	}
	
	public function opauth_complete() {
		$opauth_data = $this->data;
		
		$this->set('opauth_data', $this->data);
// 		return;
		if(! isset($opauth_data['auth'])){
			$this->Session->setFlash('Failed to retreive connection information');
			$this->redirect($this->referer());
		}
		$facebookData = $opauth_data['auth'];
		
		if($user = $this->User->find('first', array('conditions' => array('User.thrird_party_platform_id' => $facebookData['uid'], 'User.third_party_type' => $facebookData['provider'])))){
			
			$config_session = $this->Session->read('Config');
			
			if($this->Auth->login($user['User'])){
				$this->Session->write('Config', $config_session);
				// 				debug($this->Session->read());
				// 				debug($this->Auth->loggedIn());
				// 				debug($this->Auth->user()); die;
				$this->Session->setFlash('Welcome');
				$this->redirect(array('action' => 'profile'));
			}else{
				$this->Session->setFlash('Failed to log you in');
			}
			
			
		}else{
			/**
			 * Create User
			 */
			$new_user = new $this->User();
			$new_user->first_name = $facebookData['info']['first_name'];
			$new_user->last_name = $facebookData['info']['last_name'];
// 			$new_user->uid = $this->getToken(); //Open SSL is not always enabled
			$new_user->uid = $this->generateUniqueID();
			
			$new_user->thrird_party_platform_id = $facebookData['uid'];
			$new_user->third_party_type = 'Facebook';
			$new_user->third_party_avatar_url = $facebookData['info']['image'];
// 			$new_user->third_party_url = $facebookData['info']['urls'][0];
			
			$this->User->create();
			if($this->User->save($new_user)){
				
				$user = $this->User->read();
				$this->installuser($user);
				if($this->Auth->login($user['User'])){
					$this->Session->setFlash('Welcome');
					$this->redirect(array('controller' => 'posts', 'action' => 'timeline'));
				}else{
					$this->Session->setFlash('Failed to log you in');
				}
			}
		}
	}
	
	
	
	public function thirdpartylogin($platform = NULL){
		
		$user = $this->User->find('first', array('conditions' => array('User.thrird_party_platform_id' => '10152584169498263', 'User.third_party_type' => 'Facebook')));
// 		debug($this->Auth->login($user['User']));
		if($this->Auth->login($user['User'])){
			debug($this->Auth->user());
		}
		die;
		
		$this->autoRender = FALSE;
		$this->redirect(array('controller' => 'auth', 'action' => $platform));
		
	}
	
	public function installuser($user = NULL){
		$this->autoRender = FALSE;
		if($this->Auth->login($user['User'])){
			// 				debug($this->Session->read());
			// 				debug($this->Auth->loggedIn());
			// 				debug($this->Auth->user()); die;
			$this->Session->setFlash('Welcome');
			$this->redirect(array('action' => 'profile'));
		}else{
			$this->Session->setFlash('Failed to log you in');
		}
	}
}