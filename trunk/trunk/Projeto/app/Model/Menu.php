<?php 
class Menu extends AppModel {
    public $name = 'Menu';
	
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'price' => array(
            'rule' => 'notEmpty'
        )
    );
}

