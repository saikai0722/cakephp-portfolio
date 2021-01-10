<?php
namespace App\Controller;

use App\Controller\AppController;

class BlogController extends AppController {

	public function initialize() {
		$this->viewBuilder()->setLayout('default');
	}
	
	public function index() {
		$this->set('title', 'portfolio | Blog');
	}

	public function a01() {
		$this->set('title', 'portfolio | article01');
	}
	public function a02() {
		$this->set('title', 'portfolio | article02');
	}

}