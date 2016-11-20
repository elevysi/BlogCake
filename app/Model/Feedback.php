<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Feedback extends AppModel {
	
	public $useTable = FALSE;
	
	public $validate = array(
			'subject' => array(
					'rule' => 'notEmpty',
					'required' => TRUE,
					'messgae' => 'Please give the email a subject before sending'
			),
			'email' => array(
					'rule' => 'email',
					'required' => TRUE,
					'messgae' => 'Please give a valid email before sending'
			),
			'message' => array(
					'rule' => 'notEmpty',
					'required' => TRUE,
					'messgae' => 'Please give the email messsage before sending'
			)
	);
	
	public function sendfeedback($message){
		
		if(!empty($message)){
			App::uses('CakeEmail', 'Network/Email');
			$email = new CakeEmail('gmail');
			
			$email->to('elevysi@yopmail.fr')
					->subject('Testing')
					->emailFormat('both')
					->template('welcome', 'default')->viewVars($message)
			;
			return ($email->send());
		}
		
		return FALSE;
	}
	
}
