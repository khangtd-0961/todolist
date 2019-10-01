<?php
App::uses('AppModel', 'Model');
/**
 * Lop Model
 *
 * @property Lop $Lop
 * @property Lop $Lop
 * @property Sinhvien $Sinhvien
 */
class Lop extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
//	public $belongsTo = array(
//		'Lop' => array(
//			'className' => 'Lop',
//			'foreignKey' => 'lop_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		)
//	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Lop' => array(
			'className' => 'Lop',
			'foreignKey' => 'lop_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Sinhvien' => array(
			'className' => 'Sinhvien',
			'joinTable' => 'lops_sinhviens',
			'foreignKey' => 'lop_id',
			'associationForeignKey' => 'sinhvien_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
