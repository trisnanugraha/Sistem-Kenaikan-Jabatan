<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_artikel');
    }

    public function index()
    {
        $data['judul'] = 'Artikel';

        $data['modal_artikel'] = show_my_modal('artikel/modal_artikel');

        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in != TRUE || empty($logged_in)) {
            redirect('login');
        } else {
            $checklevel = $this->session->userdata('hak_akses');

            if ($checklevel == 'Guest') {
                $js = $this->load->view('cluster/cluster-guest-js', null, true);
                $this->template->views('cluster/home-guest', $data, $js);
            } else {
                $js = $this->load->view('artikel/artikel-js', null, true);
                $this->template->views('artikel/home', $data, $js);
            }
        }
    }

    public function ajax_list()
    {
        ini_set('memory_limit', '512M');
        set_time_limit(3600);
        $list = $this->Mod_artikel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $artikel) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $artikel->judul_artikel;
            $row[] = $artikel->thumbnail;
            $row[] = $artikel->author;
            $row[] = tgl_indonesia($artikel->tanggal_terbit);
            $row[] = $artikel->id_artikel;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Mod_artikel->count_all(),
            "recordsFiltered" => $this->Mod_artikel->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function edit($id)
    {

        $data = $this->Mod_artikel->get_data($id);
        echo json_encode($data);
    }

    public function insert()
    {
        $this->_validate();
        $post = $this->input->post();
        $this->judul_artikel = $post['judul_artikel'];
        $this->thumbnail = $post['thumbnail'];
        $this->author = $post['author'];
        $this->tanggal_terbit = $post['tanggal_terbit'];
        $this->deskripsi = $post['deskripsi'];

        $this->Mod_artikel->insert($this);
        echo json_encode(array("status" => TRUE));
    }

    public function update()
    {
        $this->_validate();
        $id = $this->input->post('id_artikel');
        $post = $this->input->post();
        if (!empty($post['thumbnail'])) {
            $this->judul_artikel = $post['judul_artikel'];
            $this->thumbnail = $post['thumbnail'];
            $this->author = $post['author'];
            $this->tanggal_terbit = $post['tanggal_terbit'];
            $this->deskripsi = $post['deskripsi'];

            $temp = $this->Mod_artikel->get_thumbnail($id)->row_array();

            if ($temp['thumbnail'] != null) {
                //hapus gambar yg ada diserver
                unlink('./assets/images/' . $temp['thumbnail']);
            }

            $this->Mod_artikel->update($id, $this);
            echo json_encode(array("status" => TRUE));
        } else {
            $this->judul_artikel = $post['judul_artikel'];
            $this->author = $post['author'];
            $this->tanggal_terbit = $post['tanggal_terbit'];
            $this->deskripsi = $post['deskripsi'];

            $this->Mod_artikel->update($id, $this);
            echo json_encode(array("status" => TRUE));
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $this->Mod_artikel->delete($id);
        echo json_encode(array("status" => TRUE));
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('judul_artikel') == '') {
            $data['inputerror'][] = 'judul';
            $data['error_string'][] = 'Judul Artikel Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('author') == '') {
            $data['inputerror'][] = 'author';
            $data['error_string'][] = 'Author Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('tanggal_terbit') == '') {
            $data['inputerror'][] = 'tanggal_terbit';
            $data['error_string'][] = 'Tanggal Terbit Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}

/* End of file Artikel.php */