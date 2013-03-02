<?php
class MenusController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Menus';

    public function index() {
        $this->set('menus', $this->Menu->find('all'));
    }

    public function view($id = null) {
        $this->Menu->id = $id;
        $this->set('menu', $this->Menu->read());
    }

    public function add() {
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
    $this->Menu->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Menu->read();
    } else {
        if ($this->Menu->saveAll($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Menu->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}