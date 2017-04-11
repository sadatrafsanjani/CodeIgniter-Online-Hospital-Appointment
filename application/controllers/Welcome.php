<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function index() {

        $data = array();
        $data['title'] = 'Home';
        $data['facility'] = $this->ward_model->facility();
        $data['main'] = $this->load->view('home', $data, true);
        $this->load->view('master', $data);
    }

    function virtual() {

        $data = array();
        $data['title'] = 'Virtual';
        $data['facility'] = $this->ward_model->facility();
        $data['main'] = $this->load->view('virtual', $data, true);
        $this->load->view('master', $data);
    }

    function token() {

        $data = array();
        $data['title'] = 'Token';
        $data['facility'] = $this->ward_model->facility();
        $data['main'] = $this->load->view('token', $data, true);
        $this->load->view('master', $data);
    }

    function medicare() {

        $data = array();
        $data['title'] = 'Medicare';
        $data['facility'] = $this->ward_model->facility();
        $data['physician'] = $this->doctor_model->physician();
        $data['main'] = $this->load->view('medicare', $data, true);
        $this->load->view('master', $data);
    }

    function contact() {

        $data = array();
        $data['title'] = 'Contact';
        $data['facility'] = $this->ward_model->facility();
        $data['main'] = $this->load->view('contact', $data, true);
        $this->load->view('master', $data);
    }

    function feedback() {

        $data = array();
        $data['contact_name'] = $this->input->post('contact_name', true);
        $data['contact_email'] = $this->input->post('contact_email', true);
        $data['message'] = $this->input->post('message', true);
        $this->contact_model->feedback_save($data);
        $sdata = array();
        $sdata['message'] = 'Message Sent!';
        $this->session->set_userdata($sdata);
        redirect('welcome/contact');
    }

    function detail($ward_id) {

        $data = array();
        $data['title'] = "Detail";
        $data['facility'] = $this->ward_model->facility();
        $data['ward_info'] = $this->super_model->ward_info($ward_id);
        $data['doctor_info'] = $this->doctor_model->doctor_info($ward_id);
        $data['main'] = $this->load->view('detail', $data, true);
        $this->load->view('master', $data);
    }

    function entry() {

        $data = array();
        $data['ward_id'] = $this->input->post('ward_id', true);
        $data['treatment_id'] = $this->input->post('treatment_id', true);
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['age'] = $this->input->post('age', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['patient_email'] = $this->input->post('patient_email', true);
        $this->patient_model->entry_save($data);
        $sdata = array();
        $sdata['message'] = 'Patient Details Added Successfully!';
        $sdata['token'] = $data['treatment_id'];
        $this->notification($data['patient_email'], $sdata['message'], $sdata['token']);
        $this->session->set_userdata($sdata);
        redirect('welcome/virtual');
    }

    private function notification($to, $message, $token) {

        $this->load->library('email');

        $this->email->from("Server Email", 'Virtual Doctor');
        $this->email->to($to);

        $this->email->subject($message);
        $this->email->message("Your token number is: " + $token);

        $this->email->send();
    }

    function answer() {

        $data = array();
        $data['title'] = 'Prescription';
        $data['facility'] = $this->ward_model->facility();
        $data['token'] = $this->input->post('token', true);
        $data['progress'] = $this->patient_model->patient_progress_info($data['token']);
        if ($data['progress']->progress == 1) {

            $data['progress_info'] = $this->patient_model->patient_total_info($data['token']);
        } else {

            $sdata = array();
            $sdata['message'] = 'Not Prescribed Yet!';
            $this->session->set_userdata($sdata);
            redirect('welcome/token');
        }

        $data['main'] = $this->load->view('answer', $data, true);
        $this->load->view('master', $data);
    }

}
