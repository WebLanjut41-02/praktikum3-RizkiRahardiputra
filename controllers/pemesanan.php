<?php
class pemesanan extends CI_Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('pemesanan_model');
        // $this->load->library('form_validation');
        $this->load->helper('url');
 
    }

    public function user()
        {  
        $data['judul'] = 'Add Nama';
        $this->load->view('templates/header', $data);
		$this->load->view('pemesanan/user');
		$this->load->view('templates/footer'); 
		// $this->pemesanan_model->adduser();

 }

 	 public function adduser()
    {
        $data = array(
            "namauser" => $this->input->post('namauser')
        );


        $this->pemesanan_model->adduserUser($data);
        redirect('pemesanan/daftarmenu');
    }

    public function daftarmenu()
    {
    	$data = $this->pemesanan_model->getAllmenu();
    	$this->load->view('templates/header', $data);
    	$this->session->set_userdata('all_menu', $data);
    	$this->load->view('pemesanan/daftarmenu');
    	$this->load->view('templates/footer');
    }

    public function beli()
    {
    	$query['data'] = $this->pemesanan_model->getkodemenu($_GET['kodemenu']);
    	$this->load->view('pemesanan', $query); 
    }
 
}

?>