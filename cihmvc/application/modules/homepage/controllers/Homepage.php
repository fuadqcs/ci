
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Homepage extends CI_Controller {
 
    public function index()
    {
        $this->load->view('homepage/view_homepage');
    }
}