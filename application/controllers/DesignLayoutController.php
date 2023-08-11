
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
    $data["layout"] = $result[0]->layout;
    $data["layoutId"] = $result[0]->layoutId;



    $curl2 = curl_init();

    curl_setopt_array($curl2, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/library',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token'),
        'Cookie: PHPSESSID=ibp6taldktpe2e22gd9mn6sgqu'
      ),
    ));

    $response = curl_exec($curl2);

    curl_close($curl2);
    $result2 = json_decode($response);
    $data['name'] = $result2;


    $this->load->view('template/navbar');
    $this->load->view('design/v_design', $data);
    $this->load->view('template/footer');
  }

  public function postClock($id_playlist, $id_layout)
  {
    $idplaylist = $id_playlist;
    $idlayout = $id_layout;

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
    print_r($response);
    // redirect("layout/designLayout/" . $idlayout);
  }

  public function postMedia($id_playlist, $id_layout)
  {

    $input = array(
      'media[]' => $_POST['Media'],
    );
    $curl = curl_init();


    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/playlist/library/assign/' . $id_playlist,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>  $input,
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token'),
        'Cookie: PHPSESSID=vgtfpd6lbu5i6h4s00277ivdn3'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $result = json_decode($response);

    if ($result->error == null) {
      $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan Media!');
      redirect('layout');
    } else {
      $this->session->set_flashdata('error', 'Gagal menambahkan gambar!, ' . $result->message);
      redirect('layout');
    }
    // redirect("layout/designLayout/" . $layoutid);
  }
}
