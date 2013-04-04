<?php
class EmployeesController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Employees';
    var $scaffold;

    public function index() {
      $this -> set('title_for_layout', 'Funcionários : Virtual-Bistrô');
      $this -> layout = 'crudindex';
      $this -> set('employees', $this->Employee->find('all'));
    }

    public function view($id = null) {
      $this->set('title_for_layout', 'Funcionário : Virtual-Bistrô');
      $this -> layout = 'viewindex';
      $this->Employee->id = $id;
      $this->set('employee', $this->Employee->read());
    }

    public function add() {
      $this->set('title_for_layout', 'Cadastrar Funcionário : Virtual-Bistrô');
      // $this -> layout = 'addindex';
      
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
      $this->set('title_for_layout', 'Editar Funcionário : Virtual-Bistrô');
      // $this -> layout = 'editindex';
      $this->Employee->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Employee->read();
    } else {
        if ($this->Employee->saveAll($this->request->data)) {
            $this->Session->setFlash('O funcionário foi atualizado.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
        // throw new MethodNotAllowedException();
    }
    if ($this->Employee->delete($id)) {
        $this->Session->setFlash('O funcionário com o id: ' . $id . ' foi removido.');
        $this->redirect(array('action' => 'index'));
    }
}

}