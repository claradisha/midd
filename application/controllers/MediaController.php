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
require 'vendor/autoload.php';


use Aws\S3\S3Client;

class MediaController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('S3Upload', NULL, 'S3');
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
        'Authorization: ' . $this->session->userdata('access_token')
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

  public function addMedia()
  {
    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('media/v_add_media');
    $this->load->view('template/footer');
  }

  public function postMedia()
  {

    // $curl = curl_init();

    // curl_setopt_array($curl, array(
    //   CURLOPT_URL => 'https://xibo.yntkts.my.id/api/library',
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_ENCODING => '',
    //   CURLOPT_MAXREDIRS => 10,
    //   CURLOPT_TIMEOUT => 0,
    //   CURLOPT_FOLLOWLOCATION => true,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => 'POST',
    //   CURLOPT_POSTFIELDS => array('files' => new CURLFILE('/C:/Users/Laquita Lalala/Downloads/08072023 snap.png'), 'name' => 'pan'),
    //   CURLOPT_HTTPHEADER => array(
    //     'Authorization: ' . $this->session->userdata('access_token'),
    //     'Cookie: PHPSESSID=5u4n7gbe6g5pfvuvhpgm5moe9i'
    //   ),
    // ));

    // $response = curl_exec($curl);
    // echo $response;
    // curl_close($curl);


    $cfile = new CURLFile($this->S3->UploadImage($_FILES['urlMedia']), 'image/jpeg', $_POST['mediaName']);
    $data = array(
      'url' =>   $this->S3->UploadImage($_FILES['urlMedia']),
      'type' => 'image',
      'optionalName' => $_POST['mediaName']
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://xibo.yntkts.my.id/api/library/uploadUrl',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $this->session->userdata('access_token'),
        'Content-Type: application/x-www-form-urlencoded',
        'Cookie: PHPSESSID=5u4n7gbe6g5pfvuvhpgm5moe9i'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    print_r($data);
  }


  public function Test()
  {
    $objAwsS3Client = new S3Client([
      'version' => 'latest',
      'region' => 'id-jkt-1-default',
      'credentials' => [
        'key'    => '8QWJP2P85ZX21Z7S3DTG',
        'secret' => 'jfISoA6pQJjoCQYUPtrKeoniDLUQDNzxEwNPPxff'
      ]
    ]);
    try {
      $objects = $objAwsS3Client->listObjects(['Bucket' => 'xibo']);
      // loop through all files 
      foreach ($objects['Contents'] as $object) {
        echo $object['Key'] . "<br>";
      }
    } catch (Aws\S3\Exception\S3Exception $e) {
      echo "There was an error fetching data from S3: " . $e->getMessage();
    }
  }
}


/* End of file MediaController.php */
/* Location: ./application/controllers/MediaController.php */