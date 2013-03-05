<?php 
class Client extends AppModel {
    public $name = 'Client';
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

