<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property Section $Section
 */
class Post extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ListPostType' => array(
				'className' => 'ListPostType',
				'foreignKey' => 'list_post_type_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
		),
		'Author' => array(
				'className' => 'User',
				'foreignKey' => 'record_owner',
				'conditions' => '',
				'fields' => '',
				'order' => ''
		)
	);
	public $hasOne = array(
		'PostImage' => array(
				'className' => 'Upload',
				'foreignKey' => 'link_id',
				'dependent' => TRUE,
				'conditions' => array('PostImage.link_table' => 'posts', 'PostImage.principal' => 1, 'PostImage.list_post_type_id' => 2),
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'exclusive' => '',
				'finderQuery' => '',
				'counterQuery' => ''
		),
		'PostVideo' => array(
				'className' => 'Upload',
				'foreignKey' => 'link_id',
				'dependent' => TRUE,
				'conditions' => array('PostVideo.link_table' => 'posts', 'PostVideo.principal' => 1, 'PostVideo.list_post_type_id' => 3),
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'exclusive' => '',
				'finderQuery' => '',
				'counterQuery' => ''
		),
		'PostAudio' => array(
				'className' => 'Upload',
				'foreignKey' => 'link_id',
				'dependent' => TRUE,
				'conditions' => array('PostAudio.link_table' => 'posts', 'PostAudio.principal' => 1, 'PostAudio.list_post_type_id' => 4),
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
					'conditions' => array('RelatedUpload.link_table' => 'posts'),
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
					'conditions' => array('Tag.link_table' => 'posts'),
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
