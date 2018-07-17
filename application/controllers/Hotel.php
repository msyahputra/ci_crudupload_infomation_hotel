<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_hotel_model');
		$this->load->library('upload');
		$this->load->library('pagination');
	}

	public function index()
	{

		$cari = $this->input->get('cari');
		$page = $this->input->get('per_page');

		$search = array('title' => $cari );

      $batas =  9; // 9 data per page
      if(!$page):
      	$offset = 0;
      else:
      	$offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
      $config['base_url'] 				 = base_url().'admin_hotel/?cari='.$cari;
      $config['total_rows'] 			 = $this->admin_hotel_model->jumlah_row($search);

      $config['per_page'] 				 = $batas;
      $config['uri_segment'] 			 = $page;

      $config['full_tag_open'] 		= '<ul class="pagination">';
      $config['full_tag_close'] 	= '<ul>';

      $config['first_link'] 			= 'first';
      $config['first_tag_open'] 	= '<li><a>';
      $config['first_tag_close'] 	= '</a></li>';

      $config['last_link'] 				= 'last';
      $config['last_tag_open']	 	= '<li><a>';
      $config['last_tag_close'] 	= '</a></li>';

      $config['next_link'] 				= '&raquo;';
      $config['next_tag_open'] 		= '<li><a>';
      $config['next_tag_close'] 	= '</a></li>';

      $config['prev_link'] 				= '&laquo;';
      $config['prev_tag_open'] 		= '<li><a>';
      $config['prev_tag_close'] 	= '</a></li>';

      $config['cur_tag_open'] 		= '<li class="active"><a>';
      $config['cur_tag_close'] 		= '</a></li>';

      $config['num_tag_open'] 		= '<li><a>';
      $config['num_tag_close'] 		= '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']	 = $this->pagination->create_links();
      $data['jumlah_page'] = $page;


      $data['data'] = $this->admin_hotel_model->get($batas,$offset,$search);


      $this->load->view('templates/header_hotel');
      $this->load->view('hotel/hotel_view',$data);
      $this->load->view('templates/footer');
  }
}
?>