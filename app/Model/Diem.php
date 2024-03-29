<?php
App::uses('AppModel', 'Model');
/**
 * Diem Model
 *
 * @property Sinhvien $Sinhvien
 * @property Monhoc $Monhoc
 */
class Diem extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sinhvien' => array(
			'className' => 'Sinhvien',
			'foreignKey' => 'sinhvien_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Monhoc' => array(
			'className' => 'Monhoc',
			'foreignKey' => 'monhoc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
