<?php
App::uses('AppController', 'Controller');

class ProjectsController extends AppController {


	public function index() {
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
			$this->Session->setFlash('O projeto não foi cadastrado. Tente novamente!');			
		}
		
	}
}