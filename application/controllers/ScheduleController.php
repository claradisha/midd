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
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/schedule/data/events?from=2022-09-01%2000%3A00%3A00&to=2023-10-01%2000%3A00%3A00&displayGroupIds[]=-1',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token')
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $result = json_decode($response);
    $events = "";
    foreach ($result->result as $item) {
      $events .= "
      {
        title: '" . $item->title . "',
        start: '" . date('Y-m-d', strtotime($item->scheduleEvent->fromDt))  . "',
        end: '" . date('Y-m-d', strtotime($item->scheduleEvent->toDt)) . "'
      },
      ";
    }
    $data['Events'] = $events;

    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('schedule/v_schedule', $data);
    $this->load->view('template/footer');
  }

  public function addevent()
  {
    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('schedule/v_add_schedule');
    $this->load->view('template/footer');
  }


  public function test_calendar()
  {
    $this->load->view('schedule/testcalender');
  }
}




/* End of file ScheduleController.php */
/* Location: ./application/controllers/ScheduleController.php */