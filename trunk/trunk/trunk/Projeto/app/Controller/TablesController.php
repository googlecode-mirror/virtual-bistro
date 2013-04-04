<?php
class TablesController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Tables';

    public function index() {
      $this -> set('title_for_layout', 'Mesas : Virtual-Bistrô');
        $this -> layout = 'crudindex';
        $this->set('tables', $this->Table->find('all'));
    }

    public function view($id = null) {
      $this -> set('title_for_layout', 'Mesa : Virtual-Bistrô');
      // $this -> layout = 'viewindex';
        $this->Table->id = $id;
        $this->set('table', $this->Table->read());
    }

    public function add() {
      $this -> set('title_for_layout', 'Nova Mesa : Virtual-Bistrô');
      // $this -> layout = 'addindex';
      $this-> set ('clients',$this->Table->Client->find('all');
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
    $this -> set('title_for_layout', 'Edição de Mesa : Virtual-Bistrô');
    // $this -> layout = 'editindex';
    $this-> set ('clients',$this->Table->Client->find('all');
    $this->Table->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Table->read();
    } else {
        if ($this->Table->saveAll($this->request->data)) {
            $this->Session->setFlash('A mesa foi alterada.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
        //throw new MethodNotAllowedException();
    }
    if ($this->Table->delete($id)) {
        $this->Session->setFlash('A mesa com o id: ' . $id . ' foi removida.');
        $this->redirect(array('action' => 'index'));
    }
}
}