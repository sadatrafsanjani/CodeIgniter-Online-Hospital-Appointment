<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Super extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');

        if ($admin_id == NULL) {

            redirect('administrator', 'refresh');
        }
    }

    public function index() {

        $data = array();
        $data['title'] = 'Admin Panel';
        $data['content'] = $this->load->view('admin/dashboard', '', true);
        $this->load->view('admin/default', $data);
    }

    public function logout() {

        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $data['message'] = 'You are successfully Logged Out';
        $this->session->unset_userdata($data);
        redirect('administrator', 'refresh');
    }

    public function add_doctor() {

        $data = array();
        $data['title'] = 'Add Doctor';
        $data['facility'] = $this->ward_model->facility();
        $data['content'] = $this->load->view('admin/add_doctor', $data, true);
        $this->load->view('admin/default', $data);
    }

    public function doctor_save() {

        $data = array();
        $data['ward_id'] = $this->input->post('ward_id', true);
        $data['doctor_name'] = $this->input->post('doctor_name', true);
        $data['doctor_email'] = $this->input->post('doctor_email', true);
        $data['doctor_password'] = md5($this->input->post('doctor_password', true));
        $data['speciality'] = $this->input->post('speciality', true);
        $data['shift'] = $this->input->post('shift', true);
        $this->super_model->save_doctor_info($data);
        $sdata = array();
        $sdata['message'] = 'Doctor Added Successfully!';
        $this->session->set_userdata($sdata);
        redirect('super/add_doctor');
    }

    public function manage_doctor() {

        $data = array();
        $data['title'] = 'Manage Doctor';
        $data['facility'] = $this->ward_model->facility();
        $data['physician'] = $this->doctor_model->physician();
        $data['content'] = $this->load->view('admin/manage_doctor', $data, true);
        $this->load->view('admin/default', $data);
    }

    public function doctor_delete($doctor_id) {

        $this->super_model->doctor_delete_info($doctor_id);
        redirect('super/manage_doctor', 'refresh');
    }

    public function add_ward() {

        $data = array();
        $data['title'] = 'Add Ward';
        $data['content'] = $this->load->view('admin/add_ward', $data, true);
        $this->load->view('admin/default', $data);
    }

    public function ward_save() {

        $data = array();
        $data['ward_name'] = $this->input->post('ward_name', true);
        $data['accommodation'] = $this->input->post('accommodation', true);
        $data['status'] = $this->input->post('status', true);
        $this->super_model->save_ward_info($data);
        $sdata = array();
        $sdata['message'] = 'Ward Added Successfully!';
        $this->session->set_userdata($sdata);
        redirect('super/add_ward');
    }

    public function manage_ward() {

        $data = array();
        $data['title'] = 'Manage Ward';
        $data['facility'] = $this->ward_model->facility();
        $data['content'] = $this->load->view('admin/manage_ward', $data, true);
        $this->load->view('admin/default', $data);
    }

    public function ward_delete($ward_id) {

        $this->super_model->ward_delete_info($ward_id);
        redirect('super/manage_ward', 'refresh');
    }

    public function patient() {

        $data = array();
        $data['title'] = 'Patient';
        $data['patient_info'] = $this->super_model->patient_info();
        $data['content'] = $this->load->view('admin/patient', $data, true);
        $this->load->view('admin/default', $data);
    }

    public function patient_delete($patient_id) {

        $this->super_model->patient_delete_info($patient_id);
        redirect('super/patient', 'refresh');
    }

}
