<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller MediaController
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

class MediaController extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
  }

  public function index()
  {


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://xibo.yntkts.my.id/api/library',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: '.$this->session->userdata('access_token')
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$result = json_decode($response);
    // print_r ($result);

    $data['media'] = $result;


    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('media/v_media', $data);
    $this->load->view('template/footer');
  }

  public function addMedia () 
  {
    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('media/v_add_media');
    $this->load->view('template/footer');

  }

  public function postMedia () 
  {


        // Baca file gambar
        $gambarPath = array(
          'files'=> $_FILES['fileMedia']['tmp_name']
        );
        $gambarData = file_get_contents($gambarPath);

        // Konversi ke Base64
        $base64Image = base64_encode($gambarData);

        // URL endpoint tujuan
        $endpoint = 'https://xibo.yntkts.my.id/api/library';

        // Data payload
        $data = array(
            'image' => $base64Image,
            'keterangan' => 'Ini adalah gambar'
        );

        // Konversi data ke JSON
        $jsonData = json_encode($data);

        // Set header dan payload
        $headers = array( 
            'Authorization: '.$this->session->userdata('access_token')
        );

        // Inisialisasi cURL
        $ch = curl_init();

        // Set konfigurasi cURL
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Eksekusi permintaan cURL
        $response = curl_exec($ch);

        // Periksa respon dan tangani hasilnya
        if ($response === false) {
            echo 'Error: ' . curl_error($ch);
        } else {
            // Tangani respon sesuai kebutuhan
            echo 'Response: ' . $response;
        }

        // Tutup koneksi cURL
        curl_close($ch);
        


    

    // try {
    //   $curl = curl_init();

    //   curl_setopt_array($curl, array(
    //     CURLOPT_URL => 'https://xibo.yntkts.my.id/api/library',
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'POST',
    //     CURLOPT_POSTFIELDS => array('files'=> $_FILES['fileMedia']['tmp_name']),
    //     CURLOPT_HTTPHEADER => array(
    //       'Authorization: '.$this->session->userdata('access_token')
    //     ),
    //   ));

    //   $response = curl_exec($curl);

    //   curl_close($curl);
    //   echo $response;
    // } catch (\Throwable $th) {
    //   echo $th;
    // }
    


    // try {
    //   $this->load->library('guzzle');
    //   $client     = new GuzzleHttp\Client();
    //   $url        = 'http://www.google.com';
    //   $response = $client->request( 'POST', 
    //                                 $url, 
    //                                 [ 'form_params' 
    //                                       => [ 'processId' => '2' ] 
    //                                 ]
    //                               );
    //   $headers = [
    //     'Authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJpbmZvQHhpYm9zaWduYWdlLmNvbSIsImF1ZCI6ImFjOWZiN2Y3NGM3OTFiNmNmMTIwYzE0NWExYTY3NThiZDQxY2M1MDEiLCJqdGkiOiI5NzBhZjJiMDBkNTg4NmVjMTg2ZjY2OTQ3YjllZDUyOWYwNTNiODQ2Y2FjNDlkOGE1NDBiY2M5NjExZmE4ZmZhNzk0OTI4YTQxMDliYWY2NiIsImlhdCI6MTY4NzMzNzE0MiwibmJmIjoxNjg3MzM3MTQyLCJleHAiOjE2ODczNDA3NDIsInN1YiI6IjEiLCJzY29wZXMiOlsiYWxsIl19.FNgWTpfA0HqnA3HuiPzQaF68HJJ7uLSCYfdha03xECAHQ3NmoOkcbO9JeCfPpeZeRcg7SQyzv6NwvRjm0RkJH7TixV7BX3hGksqaMKRneR5qMzQ_CTL8ZseEkR4G4p6c2oA_x-uBm6xYYI7Sa5_u85iNxln9UlsATMSEPVeiKk4pcWJB9InizT90Tyl6F_wecugCSkAUyALf_fqBCnTEiX6NlDVaLU71lVQCjEeQXJLi-_Q3KbuKH0a9kuKsuzyY-IfngMiVyhikRf0iHFfC6KZHVnOJIOOF27Ya-3_evKT8UqbjRjmnhwUu1JbdmhZUKbncyUVfpeKUG72JXcyGHw',
    //     'Cookie' => 'PHPSESSID=1tvp1nmh26tpc0397q4gs25tjc'
    //   ];
    //   $options = [
    //     'multipart' => [
    //       [
    //         'name' => 'files',
    //         'contents' => Utils::tryFopen('/C:/Users/Laquita Lalala/Downloads/classy_ ig_ theanastasiah.jpg', 'r'),
    //         'filename' => '/C:/Users/Laquita Lalala/Downloads/classy_ ig_ theanastasiah.jpg',
    //         'headers'  => [
    //           'Content-Type' => '<Content-type header>'
    //         ]
    //       ]
    //   ]];
    //   $request = new Request('POST', 'https://xibo.yntkts.my.id/api/library', $headers);
    //   $res = $client->sendAsync($request, $options)->wait();
    //   echo $res->getBody();
    // } catch (GuzzleHttp\Exception\BadResponseException $e) {
    //   //throw $th;
    // }
    

    


    // $result = json_decode($response);
    
    // echo $result;
    // if($result->error == null) {
    //   $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan layout!');
    //   redirect('media');
    // }else {
    //   $this->session->set_flashdata('error', 'Gagal menambahkan layout!, '. $result->message);
    //   redirect('media');
    // }
  }

}


/* End of file MediaController.php */
/* Location: ./application/controllers/MediaController.php */