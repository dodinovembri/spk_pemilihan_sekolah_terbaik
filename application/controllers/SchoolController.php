<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SchoolController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $email = $this->session->userdata('email');
        $data['school'] = $this->AlternativeModel->get_data_by_email($email)->row();

        $this->load->view('templates/backend/header');
		$this->load->view('school/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        // 
    }

    public function store()
    {
        // 
    }

    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        // 
    }

    public function update($id)
    {
        $alternative_code = $this->input->post('school_code');
        $alternative_name = $this->input->post('school_name');
        $address = $this->input->post('address');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $email = $this->input->post('email');
        $voice_number = $this->input->post('voice_number');
        $description = $this->input->post('description');
        $accreditation = $this->input->post('accreditation');
        $age = $this->input->post('age');
        $spp_cost = $this->input->post('spp_cost');
        $entry_fee = $this->input->post('entry_fee');
        $distance = $this->input->post('distance');
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
                'voice_number' => $voice_number,
                'description' => $description,
                'image' => $this->upload->data('file_name'),
                'accreditation' => $accreditation,
                'age' => $age,
                'spp_cost' => $spp_cost,
                'entry_fee' => $entry_fee,
                'distance' => $distance,
                'status' => $status
            );

            $update = $this->AlternativeModel->update($data, $id);
            $this->session->set_flashdata('success', "Data berhasil di ubah!");
            return redirect(base_url('school'));
        }
        else
        {                          
            $data = array(
                'alternative_code' => $alternative_code,
                'alternative_name' => $alternative_name,
                'address' => $address,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'voice_number' => $voice_number,
                'description' => $description,
                'accreditation' => $accreditation,
                'age' => $age,
                'spp_cost' => $spp_cost,
                'entry_fee' => $entry_fee,
                'distance' => $distance,                
                'status' => $status
            );

            $update = $this->AlternativeModel->update($data, $id);
            $this->session->set_flashdata('success', "Data berhasil di ubah!");
            return redirect(base_url('school'));
        }
    }

    public function destroy($id)
    {
        $delete = $this->AlternativeModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('alternative'));
    }
}
