<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_hotel extends CI_Controller {
    var $session_user;

	public function __construct()
	{
		parent::__construct();
        Utils::no_cache();
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth/login'));
            exit;
        }
    $this->session_user = $this->session->userdata('logged_in');
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
      $data['session_user'] = $this->session_user;


      $this->load->view('templates/header',$data);
      $this->load->view('admin_hotel/admin_hotel',$data);
      $this->load->view('templates/footer');
  }
  // untuk menampilkan halaman tambah data
  public function tambah()
  {
  	$this->load->view('admin_hotel/temp_form/header');
  	$this->load->view('admin_hotel/formtambahnew');
  	$this->load->view('admin_hotel/temp_form/footer');
  }

 // untuk memasukan data ke database
  public function insertdata()
  {
  	$this->form_validation->set_message('is_unique', '{field} sudah terpakai');

  	$this->form_validation->set_rules('title', 'title', ['required', 'is_unique[hotel.title]']);

  	$this->validasi();

  	if($this->form_validation->run() === FALSE)
  	{
  		$this->tambah();
  	}
  	$title   = $this->input->post('title');
    $title2   = $this->input->post('title2');
    $description   = $this->input->post('description');
  	$alamat = $this->input->post('alamat');
    $rincian1   = $this->input->post('rincian1');
    $rincian2   = $this->input->post('rincian2');
    $rincian3   = $this->input->post('rincian3');
    $rincian4   = $this->input->post('rincian4');
    $rincian5   = $this->input->post('rincian5');
    $rincian6   = $this->input->post('rincian6');
    $rincian7   = $this->input->post('rincian7');
    $rincian8   = $this->input->post('rincian8');
    $harga = $this->input->post('harga');
    $nomor   = $this->input->post('nomor');
    $email   = $this->input->post('email');

      // get foto
  	$config['upload_path'] = './assets/picture';
  	$config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
          if ( $this->upload->do_upload('fotopost') ) {
              $foto = $this->upload->data();
      		$data = array(
      			'title'       => $title,
            'title2'       => $title2,
            'description'       => $description,
            'alamat'       => $alamat,
            'rincian1'       => $rincian1,
            'rincian2'       => $rincian2,
            'rincian3'       => $rincian3,
            'rincian4'       => $rincian4,
            'rincian5'       => $rincian5,
            'rincian6'       => $rincian6,
            'rincian7'       => $rincian7,
            'rincian8'       => $rincian8,
            'harga'       => $harga,
            'nomor'       => $nomor,
            'email'       => $email,
      			'foto'       => $foto['file_name'],
      		);
      		$this->admin_hotel_model->insert($data);
      		$this->session->set_flashdata('input_sukses','Data mobil berhasil di input');
      		redirect('admin_hotel/');
      	}else {
      		die("gagal upload");
      	}
      }
  }

      /*
     * 
     */
    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        Utils::no_cache();
        redirect(base_url('hotel'));
    }

  // // delete
  // public function deletedata($id,$foto)
  // {
  // 	$path = './assets/picture/';
  // 	@unlink($path.$foto);

  // 	$where = array('id' => $id );
  // 	$this->admin_hotel_model->delete($where);
  // 	$this->session->set_flashdata('hapus_sukses','Data mobil berhasil di hapus');
  // 	return redirect('');
  // }

  // public function formedit($id)
  // {
  // 	$data['title'] = 'Edit Data | Test tampil Database';

  // 	$data['db'] = $this->mobil_model->edit_mobil($id);


  // }

  //  // edit
  // public function edit($id)
  // {
  // 	$kondisi = array('id' => $id );

  // 	$data['data'] = $this->admin_hotel_model->get_by_id($kondisi);
  // 	$this->load->view('templates/header');
  // 	return $this->load->view('formedit', $data);
  // 	$this->load->view('templates/footer');
  // }

  // public function updatedata()
  // {
  // 	$this->validasi();

  // 	if($this->form_validation->run() === FALSE)
  // 	{
  // 		$this->edit($id);
  // 	}
  // 	$id   = $this->input->post('id');
  // 	$name = $this->input->post('name');
  // 	$alamat = $this->input->post('alamat');

  // 	$path = './assets/picture/';

  // 	$kondisi = array('id' => $id );

  //     // get foto
  // 	  $config['upload_path'] = './assets/picture';
  // 	  $config['allowed_types'] = 'jpg|png|jpeg|gif';
  //     $config['max_size'] = '2048';  //2MB max
  //     $config['max_width'] = '4480'; // pixel
  //     $config['max_height'] = '4480'; // pixel
  //     $config['file_name'] = $_FILES['fotopost']['name'];

  //     $this->upload->initialize($config);

  //     if (!empty($_FILES['fotopost']['name'])) {
  //     	if ( $this->upload->do_upload('fotopost') ) {
  //     		$foto = $this->upload->data();
  //     		$data = array(
  //     			'name'       => $name,
  //     			'foto'       => $foto['file_name'],
  //     			'alamat'     => $alamat,
  //     		);
  //             // hapus foto pada direktori
  //     		@unlink($path.$this->input->post('filelama'));

  //     		$this->admin_hotel_model->update($data,$kondisi);
  //     		$this->session->set_flashdata('update_sukses', 'Data mobil berhasil diperbaharui');
  //     		redirect('');
  //     	}else {
  //     		die("gagal update");
  //     	}
  //     }else {
  //     	echo "tidak masuk";
  //     }
  // }

  public function validasi()
  {
  	$this->form_validation->set_message('required', '{field} tidak boleh kosong');

  	$config = [[
  		'field' => 'title',
  		'label' => 'Title',
  		'rules' => 'required'
  	],
    [
      'field' => 'title2',
      'label' => 'Title2',
      'rules' => 'required'
    ],
    [
      'field' => 'description',
      'label' => 'description',
      'rules' => 'required'
    ],
    [
      'field' => 'alamat',
      'label' => 'alamat',
      'rules' => 'required'
    ],
    [
      'field' => 'harga',
      'label' => 'harga',
      'rules' => 'required'
    ],
  	[
  		'field' => 'number',
  		'label' => 'number',
  		'rules' => 'required'
  	],
  	[
  		'field' => 'email',
  		'label' => 'email',
  		'rules' => 'required'
  	],
  	[
  		'field' => 'foto',
  		'label' => 'fotopost',
  		'rules' => 'required'
  	]];

  	$this->form_validation->set_rules($config);
  }
}
?>