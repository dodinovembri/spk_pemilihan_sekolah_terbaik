<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeFacilityController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeFacilityModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();
        $data['alternative_facility'] = $this->AlternativeFacilityModel->get_alternative_facility($alternative->id)->result();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_facility/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('alternative_facility/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $email = $this->session->userdata('email');
        $alternative = $this->AlternativeModel->get_data_by_email($email)->row();

        $alternative_facility = $this->input->post('alternative_facility');
        $status = $this->input->post('status');

        $data = array(
            'alternative_id' => $alternative->id,
            'facility' => $alternative_facility,            
            'status' => $status
        );

        $insert = $this->AlternativeFacilityModel->insert($data);
        $this->session->set_flashdata('success', "Fasilitas berhasil di tambahkan!");
        return redirect(base_url('alternative_facility'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['alternative_facility'] = $this->AlternativeFacilityModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_facility/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $alternative_facility = $this->input->post('alternative_facility');
        $status = $this->input->post('status');

        $data = array(
            'facility' => $alternative_facility,            
            'status' => $status
        );

        $update = $this->AlternativeFacilityModel->update($data, $id);
        $this->session->set_flashdata('success', "Fasilitas berhasil di ubah!");
        return redirect(base_url('alternative_facility'));
    }

    public function destroy($id)
    {
        $delete = $this->AlternativeFacilityModel->destroy($id);        
        $this->session->set_flashdata('success', "Fasilitas berhasil di hapus!");
        return redirect(base_url('alternative_facility'));
    }   
}
