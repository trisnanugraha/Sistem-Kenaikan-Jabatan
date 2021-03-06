<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_login extends CI_Model
{
    function Aplikasi()
    {
        return $this->db->get('aplikasi');
    }

    function Auth($username, $password)
    {

        //menggunakan active record . untuk menghindari sql injection
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $this->db->where("is_active", 'Y');
        return $this->db->get("tbl_user");
    }

    

    function get_prodi($username)
    {
        $this->db->select('b.nama_prodi');
        $this->db->join('tbl_program_studi b', 'b.id_prodi = a.id_prodi');
        $this->db->where('username', $username);
        return $this->db->get('tbl_user a');
    }

    function check_status($username)
    {
        $this->db->select('is_active');
        $this->db->where('username', $username);
        return $this->db->get('tbl_user')->row();
    }
}

/* End of file Mod_login.php */
