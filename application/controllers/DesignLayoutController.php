
<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');


class DesignLayoutController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

    // $curl = curl_init();

    // curl_setopt_array($curl, array(
    //   CURLOPT_URL => 'https://xibo.yntkts.my.id/api/layout?layoutId=94&embed=regions%2Cplaylists%2Cwidgets%2Cwidget_validity%2Ctags%2Cpermissions%2Cactions',
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_ENCODING => '',
    //   CURLOPT_MAXREDIRS => 10,
    //   CURLOPT_TIMEOUT => 0,
    //   CURLOPT_FOLLOWLOCATION => true,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => 'GET',
    //   CURLOPT_HTTPHEADER => array(
    //     'Authorization: ' . $this->session->userdata('access_token')
    //   ),
    // ));

    // $response = curl_exec($curl);

    // curl_close($curl);
    // $result = json_decode($response);

    // if ($result->error == null) {
    //   $this->session->set_flashdata('succ_msg', 'Berhasil menampilkan layout!');
    //   redirect('layout/designLayout');
    // } else {
    //   $this->session->set_flashdata('error', 'Gagal menampilkan layout!, ' . $result->message);
    //   redirect('layout/designLayout');
    // }


    $this->load->view('design/nav');
    $this->load->view('design/v_design_layout');
    $this->load->view('design/drop');
  }

  public function postWidget()
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/playlist/widget/clock/231',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token')
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

    print_r($response);
  }
}
