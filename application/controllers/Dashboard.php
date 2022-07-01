<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('fungsi');
        $this->load->library('user_agent');
        $this->load->helper('myfunction_helper');
        $this->load->model('Mod_user');
        $this->load->model('Mod_userlevel');
        $this->load->model('Mod_aktivasi_user');
        $this->load->model('Mod_userlevel');
        $this->load->model('Mod_kegiatan');
        $this->load->model('Mod_arsip');
        $this->load->model('Mod_isr');
        $this->load->model('Mod_cluster');
        $this->load->model('Mod_dashboard');
        $this->load->model('Mod_bulan');
        $this->load->model('Mod_produk');
        $this->load->model('Mod_pesan');
        // backButtonHandle();
    }

    function index()
    {
        $data['judul'] = 'Dashboard';
        $data['produk'] = $this->Mod_produk->total_rows();
        $data['pesan'] = $this->Mod_produk->total_rows();
       
        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in != TRUE || empty($logged_in)) {
            redirect('login');
        } else {
            // $this->template->load('layoutbackend', 'dashboard/view_dashboard', $data);
            $checklevel = $this->_cek_status($this->session->userdata['id_level']);

            if ($checklevel == 'Guest') {
                $js = $this->load->view('dashboard/dashboard-js', null, true);
            } else {
                $js = $this->load->view('dashboard/dashboard-js', null, true);
            }
            $this->template->views('dashboard/home', $data, $js);
        }

        // echo json_encode($data['dataPenelitian']);
        // echo json_encode($data['dataPKM']);
    }

    function getdata()
    {
        $post = $this->input->post();
        $this->id_priode = $post['priode'];
        echo json_encode($this->id_priode = $post['priode']);
    }

    function fetch_data()
    {
        $tahun = $_POST['tahun'];
        // echo json_encode($id);
        if ($tahun != null) {
            $data['bulan'] = $this->Mod_bulan->get_data();
            $data['tahun'] = $tahun;
            $data['grafik'] = $this->Mod_dashboard->get_grafik($tahun);

            echo json_encode($data);
 

        }
        // echo json_encode($output);
    }

    private function _cek_status($id_level)
    {
        $nama_level = $this->Mod_userlevel->getUserlevel($id_level);
        return $nama_level->nama_level;
    }
}
/* End of file Dashboard.php */
