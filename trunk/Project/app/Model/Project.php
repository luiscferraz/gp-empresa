<?php
App::uses('AppModel', 'Model');

class Project extends AppModel {
        public $name = 'Project';
        public $belongsTo = array(
                'Company'=> array(
                        'className' => 'Company',
                 'fields' => array('id', 'name'),
                 'conditions' => array(),        
                 'dependent' => true
                ));
       
 }
?>
