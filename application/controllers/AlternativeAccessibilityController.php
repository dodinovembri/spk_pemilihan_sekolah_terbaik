<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeAccessibilityController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeAccessibilityModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();
        $data['alternative_accessibility'] = $this->AlternativeAccessibilityModel->get_alternative_accessibility($alternative->id)->result();
        
        $this->load->view('templates/backend/header');
        $this->load->view('alternative_accessibility/index', $data);
        $this->load->view('templates/backend/footer');
    }

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('alternative_accessibility/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();

        $alternative_accessibility = $this->input->post('alternative_accessibility');
        $status = $this->input->post('status');

        $data = array(
            'alternative_id' => $alternative->id,
            'accessibility' => $alternative_accessibility,            
            'status' => $status
        );

        $insert = $this->AlternativeAccessibilityModel->insert($data);
        $this->session->set_flashdata('success', "Aksesibilitas berhasil di tambahkan!");
        return redirect(base_url('alternative_accessibility'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['alternative_accessibility'] = $this->AlternativeAccessibilityModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_accessibility/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $alternative_accessibility = $this->input->post('alternative_accessibility');
        $status = $this->input->post('status');

        $data = array(
            'accessibility' => $alternative_accessibility,            
            'status' => $status
        );

        $update = $this->AlternativeAccessibilityModel->update($data, $id);
        $this->session->set_flashdata('success', "Aksesibilitas berhasil di ubah!");
        return redirect(base_url('alternative_accessibility'));
    }

    public function destroy($id)
    {
        $delete = $this->AlternativeAccessibilityModel->destroy($id);        
        $this->session->set_flashdata('success', "Aksesibilitas berhasil di hapus!");
        return redirect(base_url('alternative_accessibility'));
    }   
}
