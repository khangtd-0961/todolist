<?php
App::uses('AppModel', 'Model');
/**
 * Monhoc Model
 *
 * @property Diem $Diem
 */
class Monhoc extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Diem' => array(
			'className' => 'Diem',
			'foreignKey' => 'monhoc_id',
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
