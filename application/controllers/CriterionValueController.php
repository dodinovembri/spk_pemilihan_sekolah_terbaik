<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriterionValueController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['usermodel', 'criteriamodel', 'criterionvaluemodel']);

        // check login status and role id  as administrator(0) or not
        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }else{
            if ($this->session->userdata('role_id') != 0) {
                return redirect(base_url('login'));
            }
        }
    }

	public function index($id)
	{
        $criteria = array(
            'criteria_id' => $id
        );

        $this->session->set_userdata($criteria);

        $data['criterion_value'] = $this->criterionvaluemodel->get_criterion_value()->result();

        $this->load->view('templates/backend/header');
		$this->load->view('criterion_value/index', $data);
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

        $insert = $this->criteriamodel->insert($data);
        if ($insert) {
            $this->session->set_flashdata('success', "Success create criteria!");
            return redirect(base_url('criteria'));
        }else{
            $this->session->set_flashdata('warning', "Failed to create criteria!");
            return redirect(base_url('criteria'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['criteria'] = $this->criteriamodel->get_data($id)->row();

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

        $update = $this->criteriamodel->update($data, $id);
        if ($update) {
            $this->session->set_flashdata('success', "Success update data!");
            return redirect(base_url('criteria'));
        }else{
            $this->session->set_flashdata('warning', "Update data is failed!");
            return redirect(base_url('criteria'));
        }        
    }

    public function destroy($id)
    {
        $delete = $this->criteriamodel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('criteria'));
    }
}
