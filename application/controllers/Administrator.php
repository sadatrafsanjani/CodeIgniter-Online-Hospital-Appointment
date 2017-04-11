<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Administrator extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');

        if ($admin_id != NULL) {

            redirect('super', 'refresh');
        }
    }

    public function index() {

        $this->load->view('admin/admin_login');
    }

    public function admin_login() {

        $admin_email = $this->input->post('admin_email', true);
        $admin_password = $this->input->post('admin_password', true);
        $result = $this->administrator_model->admin_signin($admin_email, $admin_password);
        
        if ($result) {

            $sdata = array();
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_name'] = $result->admin_name;
            $this->session->set_userdata($sdata);
            redirect('super');
        } else {

            $sdata = array();
            $sdata['exception'] = 'Invalid User id / Password  !';
            $this->session->set_userdata($sdata);
            redirect('administrator');
        }
    }

}
