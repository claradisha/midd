<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller ScheduleController
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class ScheduleController extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('schedule/v_schedule');
    $this->load->view('template/footer');
  }

  public function addevent() {
    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('schedule/v_add_schedule');
    $this->load->view('template/footer');
  }
}




/* End of file ScheduleController.php */
/* Location: ./application/controllers/ScheduleController.php */