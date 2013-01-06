<?php


class CompaniesController extends AppController {
	
	public $uses = 'Company';
	public $name = 'Companies';
	
	public function index(){
		$this -> layout = 'Index';
		$this->set('companies', $this->Company->find('all'));		
	}
	
	public function add(){
		
		$this -> layout = 'AddCompany';

		if($this->request->is('post')){
			if($this->Company->saveAll($this->request->data)){
				$this->Session->setFlash('Empresa cadastrada com sucesso!');
				$this->redirect(array('action' => 'index'));
				 
			}
		}
		else{			
			$this->Session->setFlash('A empresa n�o foi cadastrada. Tente novamente!');			
		}
		
	}
	public function edit($id = NULL){
		
		$this->Company->id = $id;

		$this->layout = 'EditCompany';
		
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Company->read();
	    } else {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash('Empresa Atualizada!');
				$this->redirect('/Companies');
			} 
	    }

	    $this->set('company', $this->Company->findById($id));	
	}

	
	
	public function delete($id){

		$this->set(array('removed' => 1));
		
	}
	

	public function view($id){

		$this->Company->id = $id;
		$this->layout = 'ViewCompany';
		
	    if ($this->request->is('get')) {
	        $this->set('company', $this->Company->read());
	    }
	}

}


?>