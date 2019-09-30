
<?php

App::uses('Model', 'Model');
class Lop extends AppModel
{
//	public $primaryKey = 'malop';
//	public $belongsTo = array(
//		'Sinhvien' => array(
//			'className' => 'Sinhvien',
//			'foreignKey' => 'malop',
//		)
//	);
	public $hasAndBelongsToMany = array(
		'Sinhvien' => array(
			'classname' => 'Sinhvien',
			'foreignKey' => 'sinhvien_id',
			'joinTable' => 'lops_sinhviens'

		)
	);
}
