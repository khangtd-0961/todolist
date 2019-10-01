<?php
App::uses('AppModel', 'Model');
/**
 * Sinhvien Model
 *
	 * @property Sinhvien $Sinhvien
 * @property Diem $Diem
 * @property Sinhvien $Sinhvien
 * @property Lop $Lop
 */
class Sinhvien extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
//	public $belongsTo = array(
//		'Sinhvien' => array(
//			'className' => 'Sinhvien',
//			'foreignKey' => 'sinhvien_id',
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
		'Diem' => array(
			'className' => 'Diem',
			'foreignKey' => 'sinhvien_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Sinhvien' => array(
			'className' => 'Sinhvien',
			'foreignKey' => 'sinhvien_id',
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
		'Lop' => array(
			'className' => 'Lop',
			'joinTable' => 'lops_sinhviens',
			'foreignKey' => 'sinhvien_id',
			'associationForeignKey' => 'lop_id',
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
