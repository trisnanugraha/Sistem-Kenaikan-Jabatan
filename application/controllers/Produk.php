<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_produk');
    }

    public function index()
    {
        $data['judul'] = 'Produk Kopi';

        $data['modal_edit'] = show_my_modal('produk/modal_edit_produk', $data);

        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in != TRUE || empty($logged_in)) {
            redirect('login');
        } else {
            $checklevel = $this->session->userdata('hak_akses');

            if ($checklevel == 'Guest') {
                $js = $this->load->view('cluster/cluster-guest-js', null, true);
                $this->template->views('cluster/home-guest', $data, $js);
            } else {
                $js = $this->load->view('produk/produk-js', null, true);
                $this->template->views('produk/home', $data, $js);
            }
        }
    }

    public function ajax_list()
    {
        ini_set('memory_limit', '512M');
        set_time_limit(3600);
        $list = $this->Mod_produk->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $produk->nama_produk;
            $row[] = $produk->foto_produk;
            $row[] = $produk->rating_produk;
            $row[] = $produk->harga_produk;
            $row[] = $produk->diskon;
            $row[] = $produk->id_produk;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Mod_produk->count_all(),
            "recordsFiltered" => $this->Mod_produk->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function edit($id)
    {

        $data = $this->Mod_bijiarabika->get_data($id);
        echo json_encode($data);
    }

    public function insert()
    {
        $this->_validate();

        $post = $this->input->post();

        $this->nama_cluster = $post['nama_cluster'];

        $this->Mod_cluster->insert($this);
        echo json_encode(array("status" => TRUE));
    }

    public function update()
    {
        $this->_validate();
        $id = $this->input->post('id');
        $post = $this->input->post();
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']   = './assets/images/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; //mencegah upload backdor
            $config['max_size']      = '10240';
            $config['max_width']     = '10240';
            $config['max_height']    = '10240';
            $config['file_name']     = $_FILES['foto']['name'];

            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto')) {

                $gambar = $this->upload->data();

                $this->judul = $post['judul'];
                $this->deskripsi = $post['deskripsi'];
                $this->judul_tombol = $post['tombol'];
                $this->link = $post['link'];
                $this->foto = $gambar['file_name'];

                $temp = $this->Mod_bijiarabika->get_foto($id)->row_array();

                if ($temp != null) {
                    //hapus gambar yg ada diserver
                    unlink('./assets/images/' . $temp['foto']);
                }

                $this->Mod_bijiarabika->update($id, $this);
                echo json_encode(array("status" => TRUE));
            }
        } else {
            $this->judul = $post['judul'];
            $this->deskripsi = $post['deskripsi'];
            $this->judul_tombol = $post['tombol'];
            $this->link = $post['link'];

            $this->Mod_bijiarabika->update($id, $this);
            echo json_encode(array("status" => TRUE));
        }
    }

    public function delete()
    {
        $id = $this->input->post('id_cluster');

        $this->Mod_cluster->delete($id);
        echo json_encode(array("status" => TRUE));
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('judul') == '') {
            $data['inputerror'][] = 'judul';
            $data['error_string'][] = 'Judul Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('deskripsi') == '') {
            $data['inputerror'][] = 'deskripsi';
            $data['error_string'][] = 'Deskripsi Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('tombol') == '') {
            $data['inputerror'][] = 'tombol';
            $data['error_string'][] = 'Judul Tombol Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('link') == '') {
            $data['inputerror'][] = 'link';
            $data['error_string'][] = 'Link Tombol Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}

/* End of file Cluster.php */