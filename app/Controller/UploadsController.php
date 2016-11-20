<?php
App::uses('AppController', 'Controller');
/**
 * Uploads Controller
 *
 * @property Upload $Upload
 * @property PaginatorComponent $Paginator
 */
class UploadsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $layout = 'editor';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Upload->recursive = 0;
		$this->set('uploads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Upload->exists($id)) {
			throw new NotFoundException(__('Invalid upload'));
		}
		$options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
		$this->set('upload', $this->Upload->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Upload->create();
			if ($this->Upload->save($this->request->data)) {
				$this->Session->setFlash(__('The upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
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
		if (!$this->Upload->exists($id)) {
			throw new NotFoundException(__('Invalid upload'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Upload->save($this->request->data)) {
				$this->Session->setFlash(__('The upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
			$this->request->data = $this->Upload->find('first', $options);
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
		$this->Upload->id = $id;
		if (!$this->Upload->exists()) {
			throw new NotFoundException(__('Invalid upload'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Upload->delete()) {
			$this->Session->setFlash(__('The upload has been deleted.'));
		} else {
			$this->Session->setFlash(__('The upload could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function uploadfile(){
		
		if ($this->request->is ( 'post' ) || $this->request->is ( 'put' )) {
			
			$errors = array(); $k = 0;
			
			$this->request->data['Upload']['record_owner'] = '';
			
			$create_year = date('Y');
			$today = date('Y-m-d');
			$extension = strtolower(pathinfo($this->request->data['Upload']['uploadfile']['name'], PATHINFO_EXTENSION));
// 			if( !empty($this->request->data['Upload']['uploadfile']['tmp_name']) && in_array($extension, array('pdf', 'doc', 'docx'))){
			
				if($this->request->data['Upload']['uploadfile']['size'] > 20000000){
					$errors[++$k] = 'The delegation letter exceeds the limit of 200 KB.';
						
				}else{
					$good_to_pursue = TRUE;
					$filelocation = APP . 'Files'. DS. 'Uploads '. $create_year. DS;
					$filename = $this->request->data['Upload']['title'].'.'.$extension;
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
						if(move_uploaded_file($this->request->data['Upload']['uploadfile']['tmp_name'], $file)){
			
							try{
								chmod($file, 0777);
							}catch(Exception $e){
									
							}
			
							
							
							$new_uploadfile = new $this->Upload ();
							$new_uploadfile->create();
							$new_uploadfile->title = $filename;
							$new_uploadfile->description = $this->request->data['Upload']['description'];
							$new_uploadfile->filename = $this->request->data['Upload']['uploadfile']['name'];
							$new_uploadfile->filesize = $this->request->data['Upload']['uploadfile']['size'];
							$new_uploadfile->filemine = $extension;
							$new_uploadfile->path = $filelocation;
// 							$new_uploadfile->file_identificator = $this->guid($this->request->data['Upload']['uploadfile']['name']);
		
		
							if( ! $this->Upload->save($new_uploadfile)) $errors[++$k] = 'There was a problem creating the upload record.';
							
							$this->Session->setFlash('Succesfully saved');
							
						}
					}
						
						
				}
// 			}elseif(!empty($this->request->data['Upload']['uploadfile']['tmp_name'])){
// 				$errors[++$k] = 'The uploaded file extension is not accepted.';
// 			}
			
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
			
		}
		
	}
	
	
}
