<?php
App::uses('AppController', 'Controller');


class ProjectsController extends AppController{
	
	public $helpers = array ('html','form');
   	public $uses = 'Project';
   	public $name = 'Projects';
    var $scaffold;
    
	
    
	public function index(){


		$this -> layout = 'IndexProject';
		$this->set('projects', $this->Project->find('all', array('conditions'=> array('Project.inactive !=' => 1))));		
		$this-> set ('companies',$this->Project->Company->find('all', array('conditions'=> array('Company.id =' => 'Project.company_id'))));		

	}
	
	public function add(){
		
		$this -> layout = 'AddProject';

		if($this->request->is('post')){
			#$this->Project->set($this->request->data);
			#echo $this->existe($this->request->data['Project']['name'],$this->request->data['Project']['company_id']);
			if ($this->existe($this->request->data['Project']['name'],$this->request->data['Project']['company_id']) == 0){
							
				if($this->Project->saveAll($this->request->data)){
					$this->Session->setFlash('Projeto cadastrado com sucesso!');
					$this->redirect(array('action' => 'index'));
				}
				else{			
					$this->Session->setFlash('O projeto nao foi cadastrado! Tente novamente');			
				}
			}
			else{
				$this->Session->setFlash('Projeto ja existe no banco de dados. Favor tentar novamente.');
				$this->redirect(array('action'=>'index'));
			}
				}
				 
		else{
                 $this-> set ('projects',$this->Project->find('all', array('conditions'=> array('Project.inactive !=' => 1))));
                        
               	 $this-> set ('companies',$this->Project->Company->find('all', array('conditions'=> array('Company.removed !=' => 1))));			
		}

			
	}
	
	private function existe($nome, $idEmpresa){
		$foundProject = $this->Project->find('first',array('conditions'=> array('Project.name =' => $nome,'Project.company_id =' => $idEmpresa)));
		#echo count($foundProject);
		if (count($foundProject) == 0){
			return 0;
		}
		
		else{
			return 1;
		}
	}

	public function edit($id = NULL){
	
		$this->layout = 'EditProject';
		$this->Project->id = $id;
		
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		$proj = $this->Project->findById($id);	
		
		if (!$proj) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		if ($this->request->is('get')) {
			$this->request->data = $this->Project->read();
			$this-> set ('projects',$this->Project->find('all', array('conditions'=> array('Project.inactive !=' => 1, 'Project.id !=' => $id))));
            $this-> set ('companies',$this->Project->Company->find('all', array('conditions'=> array('Company.removed !=' => 1))));
		}
		else {
			$this->Project->id = $id;
			
			if ($this->Project->saveAll($this->request->data)) {	
				$this->Session->setFlash('Projeto atualizado!');
				$this->redirect(array('action' => 'index'));
		}
		}
	}
	
	
	public function delete($id = NULL){
		
		$this->Project->id = $id;		
		$this->Project->saveField('inactive',1);
		$this->Session->setFlash('Projeto removido com sucesso!');
		$this->redirect('/Projects');
		
	}

	

	public function view($id){

		$this->Project->id = $id;
		$this->layout = 'ViewProject';
		
	    if ($this->request->is('get')) {
	        $this->set('project', $this->Project->read());
	    }
	}
}
?>
