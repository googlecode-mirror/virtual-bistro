<?php

class User extends AppModel {

   public $useTable = 'users';

   
	public function beforeSave($options = array()) {
	if (isset($this->data[$this->alias]['password'])) {
		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	}
	return true;
}

}

?>
