<?php
App::uses('AppModel', 'Model');
/**
 * LopsSinhvien Model
 *
 * @property Lop $Lop
 * @property Sinhvien $Sinhvien
 */
class LopsSinhvien extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Lop' => array(
			'className' => 'Lop',
			'foreignKey' => 'lop_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sinhvien' => array(
			'className' => 'Sinhvien',
			'foreignKey' => 'sinhvien_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
