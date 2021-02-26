<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriteriaController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['CriteriaModel']);

        // check login status and role id  as administrator(0) or not
        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
        // else{
        //     if ($this->session->userdata('role_id') != 0) {
        //         return redirect(base_url('login'));
        //     }
        // }
    }

	public function index()
	{
        $data['criteria'] = $this->CriteriaModel->get_criteria()->result();

        $this->load->view('templates/backend/header');
		$this->load->view('criteria/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('criteria/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $criteria_code = $this->input->post('criteria_code');
        $criteria_description = $this->input->post('criteria_description');
        $criteria_type = $this->input->post('criteria_type');
        $status = $this->input->post('status');

        $data = array(
            'criteria_code' => $criteria_code,
            'criteria_description' => $criteria_description,
            'criteria_type' => $criteria_type,
            'status' => $status
        );

        $insert = $this->CriteriaModel->insert($data);
        $this->session->set_flashdata('success', "Success create criteria!");
        return redirect(base_url('criteria'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['criteria'] = $this->CriteriaModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('criteria/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $criteria_code = $this->input->post('criteria_code');
        $criteria_description = $this->input->post('criteria_description');
        $criteria_type = $this->input->post('criteria_type');
        $status = $this->input->post('status');

        $data = array(
            'criteria_code' => $criteria_code,
            'criteria_description' => $criteria_description,
            'criteria_type' => $criteria_type,
            'status' => $status
        );

        $update = $this->CriteriaModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('criteria'));
    }

    public function destroy($id)
    {
        $delete = $this->CriteriaModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('criteria'));
    }
}
