<?php


class CompaniesController extends AppController {
	
	public $uses = 'Company';
	public $name = 'Companies';
	
	public function index(){
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
			$this->Session->setFlash('A empresa não foi cadastrada. Tente novamente!');			
		}
		
	}
	public function edit($id){
		
		$this->layout = 'EditCompany';
		
	    if ($this->request->is('post')) {
	        
	        if ($this->Company->save($this->request->data)) {
	            
	            $this->Session->setFlash('Empresa Atualizada!');
	            $this->redirect('/Companies');
	        }
	    }
	    
	    $this->set('company', $this->Company->findById($id));
	
			
	}
	
	public function delete($id){
		
		$this->layout = 'DeleteCompany';
		
		this->set(array('removed' => 1));
		
	}
	
}


?>
