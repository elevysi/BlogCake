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
class FeedbacksController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	
	
// 	public $components = array('Session', 'Security');
	
	
	public function beforeFilter(){
		$this->Auth->allow();
		parent::beforeFilter();
	}
	
	
	public function contact(){
		$this->layout = 'static';
		if($this->request->is('post')){
			debug($this->Feedback->sendfeedback($this->request->data['Feedback'])); die;
			if(!empty($this->request->data['Feedback']['website'])){
				/**
				 * It is a robot trying to spam
				 */
				$this->Session->setFlash('Email successfully sent.');
				return FALSE;
			}else{
				/**
				 * Send Email
				 */
				
				if($this->Feeback->sendfeedback($this->request->data['Feedback'])){
					debug(); die;
// 					$this->Session->setFlash('Email successfully sent.');
				}
			}
		}
	}
	
	public function test(){
		$this->layout = NULL;
	}
	
	public function sendme(){
		
		$concern = 'PROJECT ANNOUNCEMENT';
		$greeting = 'Dear Madam, Sir';
		
		$message = "\nYou received this email as a result of tests that are being run on the https://research.uni.lux platform. This email is a result of a situation made up for testing purposes.";
		$message.= "\r\n A created Project Announcement requires your approval; please log into the https://research.uni.lux webtool to view the Announcement and approve / reject it.";
		$message.="\r\n \r\nThank you for your cooperation and understanding,";
		
		$endformula.="The Research Support Service and SIU.";
		
		$full_message = '';
		$full_message.=$greeting;
		$full_message.="\n".$message;
		$full_message.="\n".$endformula;
		
		$email_package = array('concern' => $concern, 'greeting' => $greeting, 'message' => $message, 'endformula' => $endformula, 'full_message' => $full_message);
		
		App::uses('CakeEmail', 'Network/Email');
		$email = new CakeEmail('gmail');
			
		$email->to('elevysi@yopmail.fr')
		->subject('Testing')
		->emailFormat('both')
		->template('welcome', 'default')->viewVars($email_package)
		->attachments(array(
				'upper.jpg' => array(
						'contentId' => 'abc123',
						'file' => 'img/upper.jpg',
						'mimetype' => 'image/jpg'
				), 
				'down.jpg' => array(
						'contentId' => 'def456',
						'file' => 'img/down.jpg',
						'mimetype' => 'image/jpg'
				)));
		;
		debug ($email->send());
	}
	
	


}
