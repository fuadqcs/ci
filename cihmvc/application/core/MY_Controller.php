<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    class MY_Controller extends CI_Controller { 

    //set the class variable.
    var $template  = array();
    var $data      = array();
    var $viewlayout = '';
    var $menu      = 'layout/main';
    var $main      = '';

    //Load layout    
    public function layout() {
      // $this->load->helper('file');
      // making temlate and send data to view.
        $this->load->helper('url');
        $this->template['main'] = $this->load->view('layout/main', $this->data, true);
        $this->load->view('layout/index', $this->template);
    }

    public function loginlayout(){
        $this->load->helper('url');
        $this->template['main'] = $this->load->view('layout/login', $this->data, true);
        $this->load->view('layout/layout-login', $this->template);
    }

    public function main(){
        $this->load->helper('url');
        $this->template['main'] = $this->load->view('layout/main', $this->data, true);
        $this->load->view('layout/index', $this->template);
    }

    public function landinglayout(){
        $this->load->helper('url');
        $this->template['main'] = $this->load->view('layout/landing', $this->data, true);
        $this->load->view('layout/layout-landing', $this->template);
    }

    public function surveylayout(){
        $this->load->helper('url');
        $this->template['main'] = $this->load->view('layout/survey-side', $this->data, true);
        $this->load->view('layout/layout-survey-side', $this->template);
    }

    public function surveyviewlayout(){
        $this->load->helper('url');
        $this->template['main'] = $this->load->view($this->data['viewlayout'], $this->data, true);
        $this->load->view('layout/layout-survey-side', $this->template);
    }

    public function defaultlayout(){
        if (isset($this->data['viewlayout']) && ($this->data['viewlayout'] != '') && isset($this->data['templatelayout']) && ($this->data['templatelayout'] != '') ){
            $this->load->helper('url');
            $this->template['main'] = $this->load->view($this->data['viewlayout'], $this->data, true);
            $this->load->view($this->data['templatelayout'], $this->template);
        } else {

        }
      
    }
}