<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeLocationController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeLocationModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();        
        $data['alternative_location'] = $this->AlternativeLocationModel->get_alternative_location($alternative->id)->result();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_location/index', $data);
        $this->load->view('templates/backend/footer');
    }

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('alternative_location/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();
                
        $alternative_location = $this->input->post('alternative_location');
        $status = $this->input->post('status');

        $data = array(
            'alternative_id' => $alternative->id,
            'location' => $alternative_location,            
            'status' => $status
        );

        $insert = $this->AlternativeLocationModel->insert($data);
        $this->session->set_flashdata('success', "Lokasi berhasil di tambahkan!");
        return redirect(base_url('alternative_location'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['alternative_location'] = $this->AlternativeLocationModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_location/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $alternative_location = $this->input->post('alternative_location');
        $status = $this->input->post('status');

        $data = array(
            'location' => $alternative_location,            
            'status' => $status
        );

        $update = $this->AlternativeLocationModel->update($data, $id);
        $this->session->set_flashdata('success', "Lokasi berhasil di ubah!");
        return redirect(base_url('alternative_location'));
    }

    public function destroy($id)
    {
        $delete = $this->AlternativeLocationModel->destroy($id);        
        $this->session->set_flashdata('success', "Lokasi berhasil di hapus!");
        return redirect(base_url('alternative_location'));
    }   
}
