
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Layout_model_model
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

class Layout_model extends CI_Model {
  public function add_layout($layout,$descrioption)
    {
        $this->db->where('layout', $layout);
        $this->db->where('description', $descrioption);
        $query= $this->db->get('layout');
        
        if($query->num_rows() > 0)  {  
            return true;  
        } else {  
            return false;
        }
    }
  // ------------------------------------------------------------------------

}

/* End of file Layout_model_model.php */
/* Location: ./application/models/Layout_model_model.php */