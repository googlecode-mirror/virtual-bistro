<?php
class EmployeesController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Employees';

    public function index() {
        $this->set('employees', $this->Employee->find('all'));
    }

    public function view($id = null) {
        $this->Employee->id = $id;
        $this->set('employee', $this->Employee->read());
    }

    public function add() {
      if($this->request->is('post'))
      {
         if($this->Employee->saveAll($this->request->data))
         {
           $this->Session->setFlash('O funcionário foi adicionado.');
           $this->redirect(array('action' => 'index'));
         } 
      }
    }

    public function edit($id = null) {
    $this->Employee->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Employee->read();
    } else {
        if ($this->Employee->saveAll($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Employee->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}