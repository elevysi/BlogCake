<?php
App::uses('AppModel', 'Model');
/**
 * Upload Model
 *
 * @property Citation $Citation
 */
class Upload extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	public $belongsTo = array(
			'ListPostType' => array(
					'className' => 'ListPostType',
					'foreignKey' => 'list_post_type_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			)
	);
	
	

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Citation' => array(
			'className' => 'Citation',
			'foreignKey' => 'upload_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
