<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'uid' => array(
			'rule' => 'isUnique',
			'allowEmpty' => false,
			'required' => TRUE,
		),
		'password' => array(
				'rule' => 'notEmpty',
				'required' => false,
		)
// 		'uid' => array(
// 				'notEmpty' => array(
// 						'rule' => 'isUnique',
// 						//'message' => 'Your custom message here',
// 						'allowEmpty' => false,
// 						'required' => true,
// 						//'last' => false, // Stop validation after this rule
// 						//'on' => 'create', // Limit validation to 'create' or 'update' operations
// 				),
// 		),
// 		'username' => array(
// 			'notEmpty' => array(
// 				'rule' => array('notEmpty'),
// 				//'message' => 'Your custom message here',
// 				//'allowEmpty' => false,
// 				//'required' => false,
// 				//'last' => false, // Stop validation after this rule
// 				//'on' => 'create', // Limit validation to 'create' or 'update' operations
// 			),
// 		),
// 		'password' => array(
// 			'notEmpty' => array(
// 				'rule' => array('notEmpty'),
// 				'required' => false,
// 				//'message' => 'Your custom message here',
// 				//'allowEmpty' => false,
// 				//'required' => false,
// 				//'last' => false, // Stop validation after this rule
// 				//'on' => 'create', // Limit validation to 'create' or 'update' operations
// 			),
// 		),
// 		'first_name' => array(
// 			'notEmpty' => array(
// 				'rule' => array('notEmpty'),
// 				//'message' => 'Your custom message here',
// 				//'allowEmpty' => false,
// 				//'required' => false,
// 				//'last' => false, // Stop validation after this rule
// 				//'on' => 'create', // Limit validation to 'create' or 'update' operations
// 			),
// 		),
// 		'last_name' => array(
// 			'notEmpty' => array(
// 				'rule' => array('notEmpty'),
// 				//'message' => 'Your custom message here',
// 				//'allowEmpty' => false,
// 				//'required' => false,
// 				//'last' => false, // Stop validation after this rule
// 				//'on' => 'create', // Limit validation to 'create' or 'update' operations
// 			),
// 		),
// 		'security_descriptor' => array(
// 			'uuid' => array(
// 				'rule' => array('uuid'),
// 				//'message' => 'Your custom message here',
// 				//'allowEmpty' => false,
// 				//'required' => false,
// 				//'last' => false, // Stop validation after this rule
// 				//'on' => 'create', // Limit validation to 'create' or 'update' operations
// 			),
// 		),
	);
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->virtualFields['full_name'] = sprintf(
				'CONCAT(%s.first_name, " ", %s.last_name)', $this->alias, $this->alias
		);
		$this->virtualFields['full_name_reverse'] = sprintf(
				'CONCAT(%s.last_name, " ", %s.first_name)', $this->alias, $this->alias
		);
		
	}
	
	public $displayField = 'username';
	
	public $virtualFields = array(
			'full_name' => 'CONCAT(first_name, " ", last_name)',
			'full_name_reverse' => 'CONCAT(last_name, " ", first_name)'
	);
	
	public $hasOne = array(
			'Avatar' => array(
					'className' => 'Upload',
					'foreignKey' => 'link_id',
					'dependent' => TRUE,
					'conditions' => array('Avatar.link_table' => 'users', 'Avatar.principal' => 1, 'Avatar.list_post_type_id' => 2),
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			)
	);
	
	public $hasMany = array(
			'RelatedUpload' => array(
					'className' => 'Upload',
					'foreignKey' => 'link_id',
					'dependent' => TRUE,
					'conditions' => array('RelatedUpload.link_table' => 'usersss'),
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			),
			'Tag' => array(
					'className' => 'Tag',
					'foreignKey' => 'link_id',
					'dependent' => TRUE,
					'conditions' => array('Tag.link_table' => 'users'),
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			),
			'Post'=> array(
					'className' => 'Post',
					'foreignKey' => 'record_owner',
					'dependent' => TRUE,
					'conditions' => array(),
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			)
	);
	
	
	/**
	 * Before isUniqueUsername
	 * @param array $options
	 * @return boolean
	 */
	function isUniqueUsername($check) {
	
		$username = $this->find(
				'first',
				array(
						'fields' => array(
								'User.id',
								'User.username'
						),
						'conditions' => array(
								'User.username' => $check['username']
						)
				)
		);
	
		if(!empty($username)){
			if($this->data[$this->alias]['id'] == $username['User']['id']){
				return true;
			}else{
				return false;
			}
		}else{
			return true;
		}
	}
	
	/**
	 * Before isUniqueEmail
	 * @param array $options
	 * @return boolean
	 */
	function isUniqueEmail($check) {
	
		$username = $this->find(
				'first',
				array(
						'fields' => array(
								'User.id'
						),
						'conditions' => array(
								'User.username' => $check['username']
						)
				)
		);
	
		if(!empty($username)){
			if($this->data[$this->alias]['id'] == $username['User']['id']){
				return true;
			}else{
				return false;
			}
		}else{
			return true;
		}
	}
	 
	public function alphaNumericDashUnderscore($check) {
		// $data array is passed using the form field name as the key
		// have to extract the value to make the function generic
		$value = array_values($check);
		$value = $value[0];
	
		return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
	}
	 
	public function equaltofield($check,$otherfield)
	{
		//get name of field
		$fname = '';
		foreach ($check as $key => $value){
			$fname = $key;
			break;
		}
		return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname];
	}
	
	/**
	 * Before Save
	 * @param array $options
	 * @return boolean
	 */
	public function beforeSave($options = array()) {
		// hash our password
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		 
		// if we get a new password, hash it
		if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
		}
		 
		// fallback to our parent
		return parent::beforeSave($options);
	}
	
}
