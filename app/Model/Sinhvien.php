<?php
    App::uses('AppModel', 'Model');
    class Sinhvien extends AppModel{



//		public  $hasOne= array(
//			'Lop' => array(
//				'className' => 'Lop',
//				'foreignKey' => 'malop',
//			)
//		);
//		public $belongsTo  = array(
//			'Diem' => array(
//				'className' => 'Diem',
//				'foreignKey' => 'masinhvien',
//			),
//			'Lop' => array(
//				'className' => 'Lop',
//				'foreignKey' => 'malop',
//			),
//		);

		public $hasAndBelongsToMany = array(
			'Lop' => array(
				'classname' => 'Lop',
				'foreignKey' => 'lop_id',
			)
		);
    public $validate = array(
        'masinhvien' => array(
            'rule' => 'notBlank'
        ),
        'malop' => array(
            'rule' => 'notBlank'
        ),
        'ten' => array(
            'rule' => 'notBlank'
        ),
        'ngaysinh' => array(
            'rule' => 'notBlank'
        ),
        'gioitinh' => array(
            'rule' => 'notBlank'
        )
    );
}
