<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeExtracurricularController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeExtracurricularModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();        
        $data['alternative_extracurricular'] = $this->AlternativeExtracurricularModel->get_extracurricular($alternative->id)->result();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_extracurricular/index', $data);
        $this->load->view('templates/backend/footer');
    }

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('alternative_extracurricular/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();
                
        $alternative_extracurricular = $this->input->post('alternative_extracurricular');
        $status = $this->input->post('status');

        $data = array(
            'alternative_id' => $alternative->id,
            'extracurricular' => $alternative_extracurricular,            
            'status' => $status
        );

        $insert = $this->AlternativeExtracurricularModel->insert($data);
        $this->session->set_flashdata('success', "Ekstrakurikuler berhasil di tambahkan!");
        return redirect(base_url('alternative_extracurricular'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['alternative_extracurricular'] = $this->AlternativeExtracurricularModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_extracurricular/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $alternative_extracurricular = $this->input->post('alternative_extracurricular');
        $status = $this->input->post('status');

        $data = array(
            'extracurricular' => $alternative_extracurricular,            
            'status' => $status
        );

        $update = $this->AlternativeExtracurricularModel->update($data, $id);
        $this->session->set_flashdata('success', "Ekstrakurikuler berhasil di ubah!");
        return redirect(base_url('alternative_extracurricular'));
    }

    public function destroy($id)
    {
        $delete = $this->AlternativeExtracurricularModel->destroy($id);        
        $this->session->set_flashdata('success', "Ekstrakurikuler berhasil di hapus!");
        return redirect(base_url('alternative_extracurricular'));
    }   
}
