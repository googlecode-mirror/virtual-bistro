<?php
class ClientsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Clients';

    public function index() {
        $this -> set('title_for_layout', 'Clientes : Virtual-Bistrô');
        $this -> layout = 'crudindex';
        $this->set('clients', $this->Client->find('all'));
    }

    public function view($id = null) {
        $this->Client->id = $id;
        $this->set('client', $this->Client->read());
    }

    public function add() {
      if($this->request->is('post'))
      {
         if($this->Client->saveAll($this->request->data))
         {
           $this->Session->setFlash('O cliente foi adicionado.');
           $this->redirect(array('action' => 'index'));
         } 
      }
    }

    public function edit($id = null) {
    $this->Client->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Client->read();
    } else {
        if ($this->Client->saveAll($this->request->data)) {
            $this->Session->setFlash('O cliente foi editado.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Client->delete($id)) {
        $this->Session->setFlash('O cliente com o id: ' . $id . ' foi removido.');
        $this->redirect(array('action' => 'index'));
    }
}
}