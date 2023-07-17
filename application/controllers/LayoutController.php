<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller LayoutController
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

class LayoutController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(['form', 'string']);
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('Layout_model');
  }

  public function index()
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
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

    $response = curl_exec($curl);

    curl_close($curl);
    $result = json_decode($response);

    $data['layout'] = $result;

    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('layout/v_layout', $data);
    $this->load->view('template/footer');
  }

  public function addLayout()
  {

    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('layout/v_add_layout');
    $this->load->view('template/footer');
  }



  public function postLayout()
  {
    $data = array(
      'resolutionId' => '1',
      'layoutId' => $_POST['templateLayout'],
      'name' => $_POST['layoutname'],
      'description' => $_POST['layoutdescription']
    );



    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/layout',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token')
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $result = json_decode($response);

    if ($result->error == null) {
      $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan layout!');
      redirect('layout');
    } else {
      $this->session->set_flashdata('error', 'Gagal menambahkan layout!, ' . $result->message);
      redirect('layout');
    }

    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('layout/v_add_layout');
    $this->load->view('template/footer');
  }
  // public function designLayout () 
  // {

  // }

}


/* End of file LayoutController.php */
/* Location: ./application/controllers/LayoutController.php */