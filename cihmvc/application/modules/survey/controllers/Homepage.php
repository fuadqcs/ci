
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Homepage extends MY_Controller {

	
	public function index()
	{
		// $this->middle = 'home';
		$data['nama'] = 'Hay Home';//array('nama'=>'codeigniter');
		$this->data = $data;
		$this->loginlayout();
	}

	public function timetable(){
		$data = array('nama'=>'hay');
		$this->data = $data;
		$this->layout();
	}

	public function report(){
		$data = array('nama'=>'hay');
		$this->data = $data;
		$this->landinglayout();
	}

	public function admin(){
		$data = array('nama'=>'hay');
		$this->data = $data;
		$this->surveylayout();
		
	}
}