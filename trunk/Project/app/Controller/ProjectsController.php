<?php
App::uses('AppController', 'Controller');

class ProjectsController extends AppController {
        public $helpers = array ('html','form');
        public $name = 'Projects';
        var $scaffold;


	public function index() {
		$this -> layout = 'IndexProject';

		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

	public function add(){

		$this -> layout = 'AddProject';

		if($this->request->is('post')){
			if($this->Project->saveAll($this->request->data)){
				$this->Session->setFlash('Projeto cadastrado com sucesso!');
				$this->redirect(array('action' => 'index'));
				 
			}
		}
		else{
                        $this-> set ('projects',$this->Project->find('all'));
                        $this-> set ('companies',$this->Project->Company->find('all'));
		
			$this->Session->setFlash('O projeto não foi cadastrado. Tente novamente!');			
		}
		
	}

	public function edit($id = NULL){

		$this->layout = 'EditProject';

		$this->Project->id = $id;

		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$proj = $this->Project->findById($id);
		$this-> set ('projects',$this->Project->find('all'));
        $this-> set ('companies',$this->Project->Company->find('all'));

		if (!$proj) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is('get')) {
			$this->request->data = $this->Project->read();
			}
			else {
				$this->Project->id = $id;

		if ($this->Project->saveAll($this->request->data)) {

			$this->Session->setFlash('Projeto atualizado!');
			$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function view($id){

		$this->Project->id = $id;
		$this->layout = 'ViewProject';
		
	    if ($this->request->is('get')) {
	        $this->set('project', $this->Project->read());
	    }
	}
}