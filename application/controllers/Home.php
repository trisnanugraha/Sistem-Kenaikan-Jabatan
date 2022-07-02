<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_akun');
    }

    public function index()
    {
        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in == TRUE) {
            redirect('dashboard');
        } else {
            $data['modal_daftar'] = show_my_modal('modal_daftar');
            $data['modal_login'] = show_my_modal('modal_login');
            $this->load->view('v_home', $data);
        }
    } //end function index

    function kirim()
    {
        $post = $this->input->post();
        $this->nama_pengirim = $post['nama'];
        $this->email = $post['email'];
        $this->no_hp = $post['no_hp'];
        $this->pesan = $post['pesan'];

        $this->Mod_pesan->insert($this);
        echo json_encode(array("status" => TRUE));
    }



    function simpan()
    {
        $this->_validate_register();
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

    function login()
    {
        $this->_validate();
        //cek username database
        $email = anti_injection($this->input->post('email'));

        if ($this->Mod_akun->checkUser($email)->num_rows() == 1) {
            $db = $this->Mod_akun->checkUser($email)->row();

            if (hash_verified(anti_injection($this->input->post('password')), $db->password)) {
                //cek username dan password yg ada di database
                $userdata = array(
                    'id_akun'  => $db->id_akun,
                    'nama'    => $db->nama_lengkap,
                    'email'    => $db->email,
                    'nip'    => $db->nip,
                    'password'    => $db->password,
                    'logged_in'    => TRUE
                );
                $data['url'] = 'dashboard';
                $this->session->set_userdata($userdata);
                $data['status'] = TRUE;
                echo json_encode($data);
            } else {
                $data['pesan'] = "Email atau Password Salah!";
                $data['error'] = TRUE;
                echo json_encode($data);
            }
        } else {
            $data['pesan'] = "Email Anda Belum Terdaftar!";
            $data['error'] = TRUE;
            echo json_encode($data);
        }
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('email') == '') {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'Email Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('password') == '') {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Password Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    private function _validate_register()
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

    private function _cek_status($id_level)
    {
        $nama_level = $this->Mod_userlevel->getUserlevel($id_level);
        return $nama_level->nama_level;
    }
}

/* End of file Home.php */
