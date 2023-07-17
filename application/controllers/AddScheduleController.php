<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller AddScheduleController
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

class AddScheduleController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/display',
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
    // print_r ($result);

    $data['display'] = $result;



    $curl2 = curl_init();

    curl_setopt_array($curl2, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/layout',
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

    $responselayout = curl_exec($curl2);

    curl_close($curl2);
    $resultlayout = json_decode($responselayout);

    $data['layout'] = $resultlayout;


    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('schedule/v_add_schedule', $data);
    $this->load->view('template/footer');
  }

  public function postSchedule()
  {

    $ds = strtotime($_POST['startTime']);
    $fromdate = date("Y-m-d h:i:s", $ds);

    $de = strtotime($_POST['endTime']);
    $enddate = date("Y-m-d h:i:s", $de);


    $input = array(
      'eventTypeId' => '1',
      'displayGroupIds[]' => $_POST['displayName'],
      'dayPartId' => '1',
      'fromDt' => $fromdate,
      'toDt' => $enddate,
      'campaignId' => $_POST['layoutName'],
      'actionType' => 'navLayout',
      'displayOrder' => '0',
      'isPriority' => '0'
    );


    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/schedule',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $input,
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token')
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);


    $result = json_decode($response);

    if ($result->error == null) {
      $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan layout!');
      redirect('schedule');
    } else {
      $this->session->set_flashdata('error', 'Gagal menambahkan layout!, ' . $result->message);
      redirect('schedule');
    }

    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('schedule/v_add_schedule');
    $this->load->view('template/footer');
  }
}


/* End of file AddScheduleController.php */
/* Location: ./application/controllers/AddScheduleController.php */