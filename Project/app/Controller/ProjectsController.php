<?php
App::uses('AppController', 'Controller');

class ProjectsController extends AppController {


	public function index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

}
