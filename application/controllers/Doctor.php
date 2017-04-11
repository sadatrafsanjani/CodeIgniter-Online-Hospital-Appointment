<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Doctor extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $doctor_id = $this->session->userdata('doctor_id');

        if ($doctor_id != NULL) {

            redirect('superdoctor', 'refresh');
        }
    }

    public function index() {

        $this->load->view('medical/doctor_login');
    }

    public function doctor_login() {

        $doctor_email = $this->input->post('doctor_email', true);
        $doctor_password = $this->input->post('doctor_password', true);
        $result = $this->doctor_model->doctor_signin($doctor_email, $doctor_password);

        if ($result) {

            $sdata = array();
            $sdata['doctor_id'] = $result->doctor_id;
            $sdata['doctor_name'] = $result->doctor_name;
            $this->session->set_userdata($sdata);
            redirect('superdoctor');
        } else {

            $sdata = array();
            $sdata['exception'] = 'Invalid User id / Password  !';
            $this->session->set_userdata($sdata);
            redirect('doctor');
        }
    }

}


