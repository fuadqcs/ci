
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends MY_Controller {

	
	public function index()
	{
		// $this->middle = 'home';
		$data['nama'] = 'Hay Home';//array('nama'=>'codeigniter');
		$data['view-layout'] = 'admin/view_index.php';
		$this->data = $data;
		$this->surveyviewlayout();
	}

	public function report()
	{
		// $this->middle = 'home';
		$data['nama'] = 'Hay Home';//array('nama'=>'codeigniter');
		$data['view-layout'] = 'admin/view_report.php';
		$this->data = $data;
		$this->surveyviewlayout();
	}

	public function set()
	{
		// $this->middle = 'home';
		$data['nama'] = 'Hay Home';//array('nama'=>'codeigniter');
		$data['viewlayout'] = 'admin/view_report.php';
		$data['templatelayout'] = 'layout/layout-survey-side';
		$this->data = $data;
		$this->defaultlayout();
	}

	
}