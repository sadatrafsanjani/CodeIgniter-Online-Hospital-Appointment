<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Superdoctor extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $doctor_id = $this->session->userdata('doctor_id');

        if ($doctor_id == NULL) {

            redirect('doctor', 'refresh');
        }
    }

    public function index() {

        $data = array();
        $data['title'] = 'Doctor Panel';
        $data['content'] = $this->load->view('medical/dashboard', '', true);
        $this->load->view('medical/default', $data);
    }

    public function logout() {

        $this->session->unset_userdata('doctor_id');
        $this->session->unset_userdata('doctor_name');
        $data['message'] = 'You are successfully Logged Out';
        $this->session->unset_userdata($data);
        redirect('doctor', 'refresh');
    }

    public function patient_info() {

        $data = array();
        $data['title'] = 'Patient Info';
        $data['patient_info'] = $this->superdoctor_model->patient_info();
        $data['content'] = $this->load->view('medical/patient_info', $data, true);
        $this->load->view('medical/default', $data);
    }

    public function prescription($treatment_id) {

        $data = array();
        $data['title'] = 'Treatment Info';
        $data['treatment_id'] = $treatment_id;
        $data['doctor_id'] = $this->session->userdata('doctor_id');
        $data['content'] = $this->load->view('medical/prescription', $data, true);
        $this->load->view('medical/default', $data);
    }

    public function prescribed() {

        $data = array();
        $data['treatment_id'] = $this->input->post('treatment_id', true);
        $data['doctor_id'] = $this->input->post('doctor_id', true);
        $data['detail'] = $this->input->post('detail', true);
        $this->superdoctor_model->save_prescription_info($data);
        $this->superdoctor_model->update_patient_progress_info($data['treatment_id']);
        $sdata = array();
        $sdata['message'] = 'Prescribed Successfully!';
        $this->session->set_userdata($sdata);
        redirect('superdoctor/confirm');
    }

    public function confirm() {

        $data = array();
        $data['title'] = 'Confirmation';
        $data['content'] = $this->load->view('medical/confirm', '', true);
        $this->load->view('medical/default', $data);
    }

}
