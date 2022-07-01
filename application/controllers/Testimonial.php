<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_testimonial');
    }

    public function index()
    {
        $data['judul'] = 'Testimonial';

        $data['modal_testimonial'] = show_my_modal('testimonial/modal_testimonial');

        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in != TRUE || empty($logged_in)) {
            redirect('login');
        } else {
            $checklevel = $this->session->userdata('hak_akses');

            if ($checklevel == 'Guest') {
                $js = $this->load->view('cluster/cluster-guest-js', null, true);
                $this->template->views('cluster/home-guest', $data, $js);
            } else {
                $js = $this->load->view('testimonial/testimonial-js', null, true);
                $this->template->views('testimonial/home', $data, $js);
            }
        }
    }

    public function ajax_list()
    {
        ini_set('memory_limit', '512M');
        set_time_limit(3600);
        $list = $this->Mod_testimonial->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $testimonial) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $testimonial->nama_pengirim;
            $row[] = $testimonial->foto_pengirim;
            $row[] = $testimonial->deskripsi;
            $row[] = $testimonial->rating;
            $row[] = $testimonial->id_testimonial;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Mod_testimonial->count_all(),
            "recordsFiltered" => $this->Mod_testimonial->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function edit($id)
    {

        $data = $this->Mod_testimonial->get_data($id);
        echo json_encode($data);
    }

    public function insert()
    {
        $this->_validate();
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

                $this->nama_pengirim = $post['nama'];
                $this->foto_pengirim = $gambar['file_name'];
                $this->deskripsi = $post['deskripsi'];
                $this->rating = $post['rating'];

                $this->Mod_testimonial->insert($this);
                echo json_encode(array("status" => TRUE));
            }
        } else {
            $this->nama_pengirim = $post['nama'];
            $this->deskripsi = $post['deskripsi'];
            $this->rating = $post['rating'];

            $this->Mod_testimonial->insert($this);
            echo json_encode(array("status" => TRUE));
        }
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

                $this->nama_pengirim = $post['nama'];
                $this->foto_pengirim = $gambar['file_name'];
                $this->deskripsi = $post['deskripsi'];
                $this->rating = $post['rating'];

                $temp = $this->Mod_testimonial->get_foto($id)->row_array();

                if ($temp != null) {
                    //hapus gambar yg ada diserver
                    unlink('./assets/images/' . $temp['foto_pengirim']);
                }

                $this->Mod_testimonial->update($id, $this);
                echo json_encode(array("status" => TRUE));
            }
        } else {
            $this->nama_pengirim = $post['nama'];
            $this->deskripsi = $post['deskripsi'];
            $this->rating = $post['rating'];

            $this->Mod_testimonial->update($id, $this);
            echo json_encode(array("status" => TRUE));
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $this->Mod_testimonial->delete($id);
        echo json_encode(array("status" => TRUE));
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('nama') == '') {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Nama Pengirim Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        // if ($this->input->post('foto') == '') {
        //     $data['inputerror'][] = 'foto';
        //     $data['error_string'][] = 'Foto Produk Tidak Boleh Kosong';
        //     $data['status'] = FALSE;
        // }

        if ($this->input->post('deskripsi') == '') {
            $data['inputerror'][] = 'deskripsi';
            $data['error_string'][] = 'Deskripsi Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('rating') == '') {
            $data['inputerror'][] = 'rating';
            $data['error_string'][] = 'Rating Tidak Boleh Kosong';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}

/* End of file Testimonial.php */