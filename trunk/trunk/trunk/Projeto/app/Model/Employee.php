<?php 
class Employee extends AppModel {
    public $name = 'Employee';
	var $hasOne = array('Address', 'User');
    
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'cpf' => array(
            'rule' => 'notEmpty'
        )
    );
}

