<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController {

	public function initialize() {
		$this->viewBuilder()->setLayout('default');
	}
	
	public function index() {
		$this->set('title', 'portfolio');
	}

}