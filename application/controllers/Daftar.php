<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_program_studi');
        $this->load->model('Mod_user');
        $this->load->model('Mod_aktivasi_user');
        $this->load->model(array('Mod_login'));
    }

    public function index()
    {
        $data['aplikasi'] = $this->Mod_login->Aplikasi()->row();
        $data['user_level'] = $this->Mod_user->userlevelRegister();
        $data['programStudi'] = $this->Mod_program_studi->get_all();
        $this->load->view('admin/register', $data);
    }

    function simpan()
    {
        $this->_validate();
        $email = $this->input->post('email');
        $cek = $this->Mod_akun->cekEmail($email);
        if ($cek->num_rows() > 0) {
            echo json_encode(array("error" => "Email Sudah Ada!!"));
        } else {
            $save  = array(
                'nama_lengkap' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'nip' => $this->input->post('nip'),
                'password'  => get_hash($this->input->post('password')),
            );

            $this->Mod_akun->insert($save);

            echo json_encode(array("status" => TRUE));
        }
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('nama') == '') {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Nama Lengkap Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('email') == '') {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'Email Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('nip') == '') {
            $data['inputerror'][] = 'nip';
            $data['error_string'][] = 'NIP Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('password') == '') {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Password Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('verify_pass') == '') {
            $data['inputerror'][] = 'verify_pass';
            $data['error_string'][] = 'Verifikasi Password Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('password') != '' && $this->input->post('verify_pass') != '' && $this->input->post('password') != $this->input->post('verify_pass')) {
            $data['inputerror'][] = 'verify_pass';
            $data['error_string'][] = 'Verifikasi Password Tidak Cocok Dengan Password';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}

/* End of file Daftar.php */
