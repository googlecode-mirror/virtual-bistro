<?php
 
class UsersController extends AppController {
 
   public $uses = 'User';
   public $name = 'Users';
 
   public $scaffold;

   public function beforeFilter() {
        parent::beforeFilter();
        
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não salvo, tente novamente'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
 	
 	// public function login()
  //   {
  //       $this->set('title_for_layout', __('Log in'));
  //       if ($this->request->is('post')) {
  //           if ($this->Auth->login()) {
  //               return $this->redirect($this->Auth->redirect());
  //           } else {
  //               $this->Session->setFlash($this->Auth->authError, 'default', array(), 'auth');
  //               $this->redirect($this->Auth->loginAction);
  //           }
  //       }
  //   }

	public function login() {
	 $this -> layout = 'login';
		if ($this->Auth->login()) {
			$this->redirect($this->Auth->redirect());
		} else {
			$this->Session->setFlash(__(''));
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}	

 
}
 
?>
