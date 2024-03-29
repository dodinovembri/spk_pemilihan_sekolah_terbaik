<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeFacilityModel', 'AlternativeExtracurricularModel', 'AlternativeLocationModel', 'AlternativeAccessibilityModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['alternative'] = $this->AlternativeModel->get_alternative()->result();

        $this->load->view('templates/backend/header');
		$this->load->view('alternative/index', $data);
        $this->load->view('templates/backend/footer');
	}

	public function school_alternative()
	{
        $email = $this->session->userdata('email');
        $data['alternative'] = $this->AlternativeModel->get_data_by_email($email)->result();

        $this->load->view('templates/backend/header');
		$this->load->view('alternative/school_alternative', $data);
        $this->load->view('templates/backend/footer');
	}
    
    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('alternative/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $alternative_code = $this->input->post('alternative_code');
        $alternative_name = $this->input->post('alternative_name');
        $address = $this->input->post('address');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $email = $this->input->post('email');
        $voice_number = $this->input->post('voice_number');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/alternative/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'alternative_code' => $alternative_code,
                'alternative_name' => $alternative_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'image' => $this->upload->data('file_name'),
                'status' => $status
            );

            $insert = $this->AlternativeModel->insert($data);
            $this->session->set_flashdata('success', "Alternatif berhasil di buat!");
            return redirect(base_url('alternative'));
        }
        else
        {                          
            $data = array(
                'alternative_code' => $alternative_code,
                'alternative_name' => $alternative_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'status' => $status
            );

            $insert = $this->AlternativeModel->insert($data);
            $this->session->set_flashdata('success', "Alternatif berhasil di buat!");
            return redirect(base_url('alternative'));
        }
    }

    public function show($id)
    {
        $this->output->delete_cache();
        
        $data['alternative'] = $this->AlternativeModel->get_data($id)->row();
        $data['alternative_facility'] = $this->AlternativeFacilityModel->get_alternative_facility($id)->result();
        $data['alternative_extracurricular'] = $this->AlternativeExtracurricularModel->get_data_by_alt($id)->result();
        $data['alternative_location'] = $this->AlternativeLocationModel->get_data_by_alt($id)->result();
        $data['alternative_accessibility'] = $this->AlternativeAccessibilityModel->get_data_by_alt($id)->result();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative/show', $data);
        $this->load->view('templates/backend/footer');
    }

    public function edit($id)
    {
        $data['alternative'] = $this->AlternativeModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $alternative_code = $this->input->post('alternative_code');
        $alternative_name = $this->input->post('alternative_name');
        $address = $this->input->post('address');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $email = $this->input->post('email');
        $voice_number = $this->input->post('voice_number');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/alternative/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'alternative_code' => $alternative_code,
                'alternative_name' => $alternative_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'image' => $this->upload->data('file_name'),
                'status' => $status
            );

            $update = $this->AlternativeModel->update($data, $id);
            $this->session->set_flashdata('success', "Alternatif berhasil di ubah!");
            return redirect(base_url('alternative'));
        }
        else
        {                          
            $data = array(
                'alternative_code' => $alternative_code,
                'alternative_name' => $alternative_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'voice_number' => $voice_number,
                'description' => $description,
                'status' => $status
            );

            $update = $this->AlternativeModel->update($data, $id);
            $this->session->set_flashdata('success', "Alternatif berhasil di ubah!");
            return redirect(base_url('alternative'));
        }
    }

    public function destroy($id)
    {
        $delete = $this->AlternativeModel->destroy($id);        
        $this->session->set_flashdata('success', "Data berhasil di hapus!");
        return redirect(base_url('alternative'));
    }

    public function alternative_document()
    {
        # code...
    }
}
