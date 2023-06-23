<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller AuthController
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

class AuthController extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(['form', 'string']);
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('Auth_model');
  }

  public function index()
  {
    $this->load->view('auth/login');
  }
  public function proses_login() {
    $clientId = 'ac9fb7f74c791b6cf120c145a1a6758bd41cc501';
		$clientSecret = '8833dc1b8055bed041f79676e6a44e7e37827a02464b1cfc3c4a7afb5b44ff63268fcf6b4a7cf7658d96c0be2221823481f814dce8f8e75aa52eaa4193ba22d2776ce62e2d025deeaf92e4b1e236ec8b864893dd041165dade1ff792c3c1e00da9f51145d09e8b9ca4624f8f0913ecd99b0a0c31f97c9dd4319d317a5ed525';

		$user = $this->input->post("username");
		$pass = $this->input->post("password");
		
		$login = $this->Auth_model->proses_login($user,$pass);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://xibo.yntkts.my.id/api/authorize/access_token',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array('client_id' => $clientId,'client_secret' => $clientSecret,'grant_type' => 'client_credentials'),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		$result = json_decode($response);

		if ($login == True) {
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://xibo.yntkts.my.id/api/user/me',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: '.$result->access_token
			),
			));

			$response_user = curl_exec($curl);

			curl_close($curl);
			$result_user = json_decode($response_user);

			$sess = array(
				'access_token' => $result->access_token,
				'id_user' => $result_user->userId,
				'name_user' => $result_user->userName,
			);

			$this->session->set_userdata($sess);
			// redirect('schedule');
			redirect('schedulecontroller');
		}else {
			$this->session->set_flashdata('error', 'Username atau password salah');
			redirect('/');
		}
  }

  public function proses_regis() {
	$this->load->view('auth/register');
  }
}


/* End of file AuthController.php */
/* Location: ./application/controllers/AuthController.php */