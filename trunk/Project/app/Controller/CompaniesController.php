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
			$this->Session->setFlash('Empresa não cadastrada. Tente novamente!');			
		}
		
	}
	
}


?>
