<?php
class MenusController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Menus';

    public function index() {
      $this -> set('title_for_layout', 'Cardápio : Virtual-Bistrô');
        $this -> layout = 'crudindex';
        $this->set('menus', $this->Menu->find('all'));
    }

    public function view($id = null) {
      $this -> set('title_for_layout', 'Item : Virtual-Bistrô');
      // $this -> layout = 'viewindex';
        $this->Menu->id = $id;
        $this->set('menu', $this->Menu->read());
    }

    public function add() {
      $this -> set('title_for_layout', 'Novo Item : Virtual-Bistrô');
      // $this -> layout = 'addindex';
      if($this->request->is('post'))
      {
         if($this->Menu->saveAll($this->request->data))
         {
           $this->Session->setFlash('O item foi adicionado.');
           $this->redirect(array('action' => 'index'));
         } 
      }
    }

    public function edit($id = null) {
      $this -> set('title_for_layout', 'Edição Item : Virtual-Bistrô');
    // $this -> layout = 'editindex';
    $this->Menu->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Menu->read();
    } else {
        if ($this->Menu->saveAll($this->request->data)) {
            $this->Session->setFlash('O item foi atualizado.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
        //throw new MethodNotAllowedException();
    }
    if ($this->Menu->delete($id)) {
        $this->Session->setFlash('O item com o id: ' . $id . ' foi removido.');
        $this->redirect(array('action' => 'index'));
    }
}
}