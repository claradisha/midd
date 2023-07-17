
<?php

// use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');


class DesignLayoutController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index($id_layout)
  {
    $id = $id_layout + 1;
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/layout?layoutId=' . $id . '&embed=regions%2Cplaylists%2Cwidgets%2Cwidget_validity%2Ctags%2Cpermissions%2Cactions',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token'),
        'Cookie: PHPSESSID=5u4n7gbe6g5pfvuvhpgm5moe9i'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $result = json_decode($response);
    $data["playlistId"] = $result[0]->regions[0]->regionPlaylist->playlistId;

    $this->load->view('design/nav');
    $this->load->view('design/v_design_layout', $data);
    $this->load->view('design/drop');
  }

  public function postWidget($id_playlist)
  {
    $idplaylist = $id_playlist;

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/playlist/widget/clock/' . $idplaylist,
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
