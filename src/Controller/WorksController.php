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
	public function shinwaShinjuku() {
		$this->set('title', 'portfolio | Works_shinwa-shinjuku');
	}
	public function shinwaDoctor() {
		$this->set('title', 'portfolio | Works_shinwa-doctor');
	}
	public function shinwaLp() {
		$this->set('title', 'portfolio | Works_shinwa-lp');
	}
	public function sunao() {
		$this->set('title', 'portfolio | Works_sunao');
	}
	public function rosemary() {
		$this->set('title', 'portfolio | Works_rosemary');
	}
	public function femmyShibuya() {
		$this->set('title', 'portfolio | Works_femmy-shibuya');
	}
	public function femmyGinza() {
		$this->set('title', 'portfolio | Works_femmy-ginza');
	}
	public function femmyIkebukuro() {
		$this->set('title', 'portfolio | Works_femmy-ikebukuro');
	}
	public function femmyUmeda() {
		$this->set('title', 'portfolio | Works_femmy-umeda');
	}
	public function femmyAgora() {
		$this->set('title', 'portfolio | Works_femmy-agora');
	}


	public function harg() {
		$this->set('title', 'portfolio | Works_harg');
	}
	public function ukedental() {
		$this->set('title', 'portfolio | Works_ukedental');
	}
	public function whitedentalyono() {
		$this->set('title', 'portfolio | Works_whitedentalyono');
	}
	public function kabedent() {
		$this->set('title', 'portfolio | Works_kabedent');
	}
	public function mariaMachida() {
		$this->set('title', 'portfolio | Works_maria-machida');
	}
	public function mariaOmiya() {
		$this->set('title', 'portfolio | Works_maria-omiya');
	}
	public function mariaNaha() {
		$this->set('title', 'portfolio | Works_maria-naha');
	}
	public function mariaShinjuku() {
		$this->set('title', 'portfolio | Works_maria-shinjuku');
	}
	public function mariaYokohama() {
		$this->set('title', 'portfolio | Works_maria-yokohama');
	}
	public function aichimaria() {
		$this->set('title', 'portfolio | Works_aichimaria');
	}
	public function mary() {
		$this->set('title', 'portfolio | Works_mary');
	}
	public function ginzahada() {
		$this->set('title', 'portfolio | Works_ginzahada');
	}
	public function ginzahadaDastumo() {
		$this->set('title', 'portfolio | Works_ginzahada-dastumo');
	}
	public function heartlife() {
		$this->set('title', 'portfolio | Works_heartlife');
	}
	public function yagoishi() {
		$this->set('title', 'portfolio | Works_yagoishi');
	}
	public function miyamasu() {
		$this->set('title', 'portfolio | Works_miyamasu');
	}
	public function laketown() {
		$this->set('title', 'portfolio | Works_laketown');
	}
	public function ayabe() {
		$this->set('title', 'portfolio | Works_ayabe');
	}
	public function jdac() {
		$this->set('title', 'portfolio | Works_jdac');
	}
}