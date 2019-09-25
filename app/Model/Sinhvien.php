<?php
    App::uses('AppModel', 'Model');
    class Sinhvien extends AppModel{
        public $sinhvien = 'Sinhvien';

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