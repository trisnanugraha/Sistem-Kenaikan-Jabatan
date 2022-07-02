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
        // backButtonHandle();
    }

    function index()
    {
        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in != TRUE || empty($logged_in)) {
            redirect('home');
        } else {
            $this->load->view('v_dashboard');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->driver('cache');
        $this->cache->clean();
        ob_clean();
        redirect('home');
    }
}
/* End of file Dashboard.php */
