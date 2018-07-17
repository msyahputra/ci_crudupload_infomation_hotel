<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_hotel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('detail_admin_model');
	}

        // edit
       public function detail($id)
       {
      $kondisi = array('id' => $id );

      $data['data'] = $this->detail_admin_model->get_by_id($kondisi);
      return $this->load->view('hotel/detail_hotel',$data);
  }
}
?>