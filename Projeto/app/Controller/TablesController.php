<?php
class TablesController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Tables';

    public function index() {
        $this->set('tables', $this->Table->find('all'));
    }

    public function view($id = null) {
        $this->Table->id = $id;
        $this->set('table', $this->Table->read());
    }

    public function add() {
      if($this->request->is('post'))
      {
         if($this->Table->saveAll($this->request->data))
         {
           $this->Session->setFlash('A mesa foi adicionada.');
           $this->redirect(array('action' => 'index'));
         } 
      }
    }

    public function edit($id = null) {
    $this->Table->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Table->read();
    } else {
        if ($this->Table->saveAll($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Table->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}