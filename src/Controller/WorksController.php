<?php
namespace App\Controller;

use App\Controller\AppController;

class WorksController extends AppController {

	public function initialize() {
		$this->viewBuilder()->setLayout('default');
	}
	
	public function index() {
		$this->set('title', 'portfolio | Works');
}

	public function banner() {
		$this->set('title', 'portfolio | Works_banner');
	}

	public function shinwa() {
		$this->set('title', 'portfolio | Works_shinwa');
	}

}