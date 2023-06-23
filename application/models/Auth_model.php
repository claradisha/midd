<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Auth_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function proses_login($user,$pass)
  {
    $this->db->where('username', $user);  
    $this->db->where('password', $pass);  
    $query = $this->db->get('user');

    if($query->num_rows() > 0)  {  
        return true;  
    } else {  
        return false;
    }
  }

  // ------------------------------------------------------------------------

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */