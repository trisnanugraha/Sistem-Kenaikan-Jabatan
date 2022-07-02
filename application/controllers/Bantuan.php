<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{
    function index()
    {
        $data['cara_daftar'] = show_my_modal('modal_cara_mendaftar');
        $data['tahap_pengurusan'] = show_my_modal('modal_tahap_pengurusan');
        $data['berkas_batal'] = show_my_modal('modal_berkas_batal');
        $data['berkas_selesai'] = show_my_modal('modal_berkas_selesai');

        $this->load->view('v_bantuan', $data);
    }
}
/* End of file Dashboard.php */
