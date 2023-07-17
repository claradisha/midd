<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TemplateLayoutController extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('layout/v_layout_template');
    $this->load->view('template/footer');
  }

}


/* End of file TemplateLayoutController.php */
/* Location: ./application/controllers/TemplateLayoutController.php */